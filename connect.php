
<?php 
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    //DB Connection
    $conn = new mysqli('localhost','root','','contact_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact_form(name,email,number,message)
        values(?, ?, ?, ?)");
        $stmt->bind_param("ssis",$name, $email, $number, $message);
        $stmt->execute();
        echo  '';
        $stmt->close();
        $conn->close();
        header("Location: index.html");
    }
?>

/**
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $server = "localhost";
    $username = "root";
    $password = "";
    $nameing = "contact_db";

    //DB Connection
    $conn = new mysqli('sql203.epizy.com','epiz_32212311','F5EgTonawtrobcl','epiz_32212311_contact_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact_form(name,email,number,message)
        values(?, ?, ?, ?)");
        $stmt->bind_param("ssis",$name, $email, $number, $message);
        $stmt->execute();
        echo  '';
        $stmt->close();
        $conn->close();
        header("Location: index.html");
    }
*/
