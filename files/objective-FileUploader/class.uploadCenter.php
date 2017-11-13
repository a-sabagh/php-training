<?php

/**
 * 
 */
class uploadCenter {

    protected $destination;
    protected $messages;
    protected $uploadOk = TRUE;
    protected $fileName = NULL;
    protected $fileSize = 1024 * 1024;
    protected $fileType = array("image/jpeg", "image/png", "image/webp", "image/x-icon", "application/zip", "application/pdf", "application/x-rar-compressed");

    function __construct($destination) {
        if (is_dir($destination) and is_writable($destination)) {
            $perma_path = "";
            $year = date("Y");
            $month = date("m");
            if ($destination[strlen($destination) - 1] !== "/") {
                $perma_path = "{$destination}/{$year}/{$month}/";
            } else {
                $perma_path = "{$destination}{$year}/{$month}/";
            }
            if (!is_dir($destination)) {
                mkdir($destination, 0755, TRUE);
            }
            $this->destination = $perma_path;
        } else {
            throw new Exception("{$destination} must be real directory and be writable");
        }
    }

    public function upload($file) {
        if (is_array($file)) {
            $current_file = array();
            $count = count(current($file));
            for ($i = 0; $i < $count; $i++) {
                $current['name'] = $file['name'][$i];
                $current['type'] = $file['type'][$i];
                $current['tmp_name'] = $file['tmp_name'][$i];
                $current['error'] = $file['error'][$i];
                $current['size'] = $file['size'][$i];
                $this->checkName($current['name']);
                $this->uploadOk = TRUE;
                $this->checkFile($current);
                if ($this->uploadOk) {
                    $this->moveFileUpload($current);
                }
            }
        } else {
            $this->checkName($file['name']);
            $this->checkFile($file);
            if ($this->uploadOk) {
                $this->moveFileUpload($file);
            }
        }
    }

    protected function checkFile($file) {
        if (!$this->checkSize($file['size'])) {
            $this->uploadOk = FALSE;
        }
        if (!$this->checkType($file['type'])) {
            $this->uploadOk = FALSE;
        }
        if (!$this->checkError($file['error'])) {
            $this->uploadOk = FALSE;
        }
    }

    protected static function convertToByte($string) {
        $output = (int) $string;
        $unit = strtolower($string[strlen($string) - 1]);
        $computer_units = array("k", "m", "g");
        if (in_array($unit, $computer_units)) {
            switch ($unit) {
                case "g":
                    $output *= 1024;
                case "m":
                    $output *= 1024;
                case "k":
                    $output *= 1024;
            }
            return $output;
        } else {
            return FALSE;
        }
    }

    public function setMaxSize($size) {
        $serverMaxSize = self::convertToByte(ini_get("upload_max_filesize"));
        $size = (int) $size;
        $serverMaxSize = (int) $serverMaxSize;
        if ($size > $serverMaxSize) {
            throw new Exception("{$size} is greater than server maximum file size");
        }
        if (is_numeric($size) and ! empty($size) and $size !== 0) {
            $this->fileSize = $size;
        }
    }

    protected function checkSize($size) {
        if ($size > $this->fileSize) {
            $this->messages[] = $this->fileName . " is to big";
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function setType($array_type) {
        if (is_array($array_type)) {
            $this->fileType = $array_type;
        } else {
            throw new Exception("uploadCenter::setType parameter must be array");
        }
    }

    protected function checkType($type) {
        if (in_array($type, $this->fileType)) {
            return TRUE;
        } else {
            $this->messages[] = "format of " . $this->fileName . " file is illegal";
            return FALSE;
        }
    }

    protected function checkError($error) {
        switch ($error) {
            case 0:
                return TRUE;
                break;
            case 1;
                $this->messages[] = 'UPLOAD_ERR_INI_SIZE';
                return FALSE;
                break;
            case 2;
                $this->messages[] = 'UPLOAD_ERR_FORM_SIZE';
                return FALSE;
                break;
            case 3;
                $this->messages[] = 'UPLOAD_ERR_PARTIAL';
                return FALSE;
                break;
            case 4;
                $this->messages[] = 'UPLOAD_ERR_NO_FILE';
                return FALSE;
                break;
            case 6;
                $this->messages[] = 'UPLOAD_ERR_NO_TMP_DIR';
                return FALSE;
                break;
            case 7;
                $this->messages[] = 'UPLOAD_ERR_CANT_WRITE';
                return FALSE;
                break;
            case 8;
                $this->messages[] = 'UPLOAD_ERR_EXTENSION';
                return FALSE;
                break;
        }
    }

    protected function checkName($name) {
        if (strpos($name, " ")) {
            $this->fileName = str_replace(" ", "_", $name);
            $this->messages[] = "{$name} is rename to " . $this->fileName;
        } else {
            $this->fileName = $name;
        }
        $existing_files = scandir($this->destination);
        $pathinfo = pathinfo($this->fileName);
        $extension = $pathinfo['extension'];
        $filename = $pathinfo['filename'];
        $i = 1;
        while (in_array($this->fileName, $existing_files)) {
            $this->fileName = $filename . "_{$i}." . $extension;
            $i++;
        }
        return TRUE;
    }

    protected function moveFileUpload($file) {

        $temp_path = $file['tmp_name'];
        $destination = $this->destination;
        $destination = $destination . $this->fileName;
        $result = move_uploaded_file($temp_path, $destination);
        if ($result) {
            $this->messages[] = $this->fileName . " was uploaded successfully";
        } else {
            $this->messages[] = "uploading " . $this->fileName . " fail";
        }
    }

    public function getMessage() {
        return $this->messages;
    }

}
