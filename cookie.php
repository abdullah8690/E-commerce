<?php
$cookie_name = "user";
$cookie_value = "my page";
// Set cookie function parameter time set by seconds / for all pages
setcookie($cookie_name,$cookie_value,time()+ (86400 * 30), "/");

// if we want to access cookie in any page we use this syntax
// echo "cookies value" . $_COOKIE ["user"];
// for delete cookies
setcookie("user","",time()- (86400 * 30), "/");
?>

<html>
    <body>
        <?php
            // if there is any protector anti-cookie i have to set condition.
        if (!isset($_COOKIE[$cookie_name])){
            echo "cookie is not set";
        } else{
            // cookies set by default if there is not anti-protector.
            echo $_COOKIE[$cookie_name];
        }

        ?>
    </body>
</html>
