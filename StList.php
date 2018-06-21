<?php
include_once ('db.php');

$inb = $db->exec("INSERT INTO Stud_list (Name, Surname, Birth, Gruppa, Mail, Aipi) VALUES ('$_POST[name]', '$_POST[surname]', '$_POST[birth]', '$_POST[gruppa]', '$_POST[mail]', '$_POST[aipi]')");

if($inb == true)
         echo " Добавление удалось";
        else
        echo " Error it means";
?>