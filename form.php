<?php
 
$do = 'janojp@gmail.com'; //tutaj wpisujesz swój adres e-mail
$name = ($_POST['name']);
$surname = ($_POST['surname']);	
$email = ($_POST['email']); //pobieranie danych o e-mailu nadawcy
$message = ($_POST['message']); //pobieranie wiadomości

//w $header tworzymy nagłówek e-mail (dane o kodowaniu, gdzie ma być e-mail wysłany itp.
$header = "From: $email \nContent-Type:".
            ' text/plain;charset="UTF-8"'.
            "\nContent-Transfer-Encoding: 8bit";
    if (mail($do, $message))
        {
        echo ('E-mail został wyslany!'); //jeżeli e-mail się wyśle, pokazywanie tego komunikatu
        }
    else
    {
        echo ('Blad podczas wysylania e-maila!');
        }
 

?>
