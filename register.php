<?php
mysql_connect('localhost','root','');
mysql_select_db('bdfsm');
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
   

   
    $req =("INSERT INTO users VALUES ('$name','$email','$password')");
    $sql=mysql_query($req);
    echo"done";
    header("Location: login.html");
        exit();

    

 

?>
