<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=Rinis", "root", "");

        // $username = "Rinis";
        // $password = password_hash("mypassword", PASSWORD_DEFAULT);

        // $sql = "INSERT INTO user(username,password) VALUES ('$username', '$password')";

        // $sql = "ALTER table user ADD email VARCHAR(255)";

        $sql = "DROP TABLE PRODUCT";

        $pdo->exec($sql);

        echo "New record created succsesfully";
    }catch(DOExecption $e){
        echo $e->getMessage();
    }

?>