<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

if( $dbconnexion = new PDO('mysql:host=localhost;dbname='.'bac_blanc', 'root', 'asqefxc&é', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'))
){

       }


        else{
                    echo'erreur';
        }
?>
