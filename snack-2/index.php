<?php 
    if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        
        if(strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
            echo 'Accesso Riuscito';
        } else {
            echo 'Accesso Negato';
        }
    }
