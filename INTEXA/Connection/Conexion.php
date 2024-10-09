<?php
$user = "root";
$password = "123456";
$nombreBD = "intexa";
try {
    $cn = new PDO(
        "mysql:host=localhost; dbname=" .
            $nombreBD,
        $user,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND =>
        "Set names utf8")
    );
} catch (Exception $ex) {
    echo "Error: " . $ex->getMessage();
}
?>
