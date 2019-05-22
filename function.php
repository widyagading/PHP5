<?php
    function do_login($username, $password){
      //cek kondisi jika US dan PW salah
      if ($username != "admin" || $password != "admin") {
        // code...
        header("location:index.php?error=wrong");
      }

      //cek kondisi jika US dan PW benar
      if ($username == "admin" && $_POST["password"] == "admin") {
        // code...
        $_SESSION["user"] = $username;
        $_SESSION["pass"] = $password;

        header("location:beranda.php");
      }
    }

    function check_login(){
      if (!isset($_SESSION["user"])) {
        // code...
        header("location:index.php")
      }
    }
 ?>
