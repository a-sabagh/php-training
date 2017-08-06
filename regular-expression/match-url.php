<?php
echo preg_match('/^(https?:\/\/)?[a-z.-_]+\.[a-z]{2,6}\/?$/' , 'www.demo.com') . '<br>';
echo preg_match('/^(https?:\/\/)?[a-z.-_]+\.[a-z]{2,6}\/?$/' , 'http://foo.co.uk/') . '<br>';
echo preg_match('/^(https?:\/\/)?[a-z.-_]+\.[a-z]{2,6}\/?$/' , 'https://mediatemple.net') . '<br>';
echo preg_match('/^(https?:\/\/)?[a-z.-_]+\.[a-z]{2,6}\/?$/' , 'http://regexr.com/foo.html?q=bar') . '<br>';
echo preg_match('/^(https?:\/\/)?[a-z.-_]+\.[a-z]{2,6}\/?$/' , 'https://foo.co.uk/') . '<br>';
echo preg_match('/^(https?:\/\/)?[a-z.-_]+\.[a-z]{2,6}\/?$/' , 'http://imamreza.ac.iiiiiir/') . '<br>';
echo preg_match('/^(https?:\/\/)?[a-z.-_]+\.[a-z]{2,6}\/?$/' , 'https://ariazdevs.com/') . '<br>';
//Answeres: 1110101