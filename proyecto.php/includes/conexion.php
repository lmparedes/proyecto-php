<?php
            /*$server = 'localhost';
            $database = 'blog';
            $password = '';
            $username = 'root';*/
            $db = mysqli_connect("localhost","root","",'blog');

            mysqli_query($db, "SET NAME 'UTF-8'");
?>