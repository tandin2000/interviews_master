<?php
    //get valuse passes from the form in login.php get_included_files

    $username = $_POST["user"];
    $password = $_POST["pass"];

    //connection to the server and select Database
    mysql_connect("localhost","root","");
    mysql_select_db("login");

    //query the Database fro the username
    $result = mysql_query("select * from User where username = '$username' and password = '$password'")
      or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array(result);
    if($row['password'] == $password){
        if($row['username'] == $username && $row['password'] == $password){

        header("Location: secondpage.php");
          die();
      } else{
        echo "Failed to login!"
      }
   }esle{
     echo "invalid password"
   }

?>
