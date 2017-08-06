<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign in</title>
    <style>
    lable{display:block;}
    input{height: 30px;border-radius:8px;margin:8px  0;border:1px solid gray;}
    input[type="submit"]{cursor:pointer;}
    </style>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
    $(document).ready(function(){
        /*
        * validate username
        */
        $("#username").blur(function(){
            var username = $(this).val();
            var jqxhr = $.ajax({
                url: "validate-username.php",
                type: "POST",
                data: {
                    username: username
                },
                success: function(response){
                    $("#validate-username").html(response);
                }
            });
        });
        /*
        * validate password
        */
        $("#password").blur(function(){
            var password = $("#password").val();
            var jqxhr = $.ajax({
                url: "validate-password.php",
                type: "POST",
                data: {
                    password: password
                },
                success: function(response){
                    $("#validate-password").html(response);
                }
            });
        });
        /*
        * validate-email
        */
        $("#email").blur(function(){
            var email = $(this).val();
            var jqxhr = $.ajax({
                url: "validate-email.php",
                type: "POST",
                data: {
                    email: email
                },
                success: function(response){
                    $("#validate-email").html(response);
                }
            });
        });
    });
    </script>
</head>
<body>
    <form action="" method="post">
        <lable>Username:</lable>
        <input type="text" name="username" id="username"><span id="validate-username"></span>
        <lable>Password:</lable>
        <input type="password" name="password" id="password"><span id="validate-password"></span>
        <lable>Email:</lable>
        <input type="text" name="email" id="email"><span id="validate-email"></span>
        <br>
        <input type="submit" name="submit" >
    </form>
</body>
</html>