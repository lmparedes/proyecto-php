<?php
    class Conexion{
        public static function conectar(){
            $server = "localhost";
            $port = "5432";
            $database = "blog";
            $username = "postgres";
            $password = "utic2017";
            $db = pg_connect("server='$server' port='$port' database='$database' username='$username' password='$password'");
            return $cn;
        }
        function get_client_ip() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
            else if(getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if(getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
            else if(getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if(getenv('HTTP_FORWARDED'))
               $ipaddress = getenv('HTTP_FORWARDED');
            else if(getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }
    }

session_start();
//	$dir_root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>