<?php
    function generatePassword($length){
        if (isset($_GET["password_length"])) {
            $length = $_GET["password_length"];
            $keyboard_characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{};:,.<>/?";
            $password = "";
            for ($i=0; $i < $length; $i++) { 
                $random_character = $keyboard_characters[rand(0, strlen($keyboard_characters) - 1)];
                $password .= $random_character;
            }
            return $password;
        }
    }
?>