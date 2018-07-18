<?php
// //App root
// echo __FILE__;//Indique le chemin ou se trouve le fichier actuel
// echo "<br>";
// echo dirname(__FILE__);//Nous renvoit le dossier parent du fichier actuelle
// echo "<br>";
// //Vu que l'on veut juste se positionner dans app
// echo dirname(dirname(__FILE__));
define('APPROOT',dirname(dirname(__FILE__)));

//URL Root
define('URLROOT','http://localhost:8080/monframworkmvc');

//Site name
define('SITENAME','monframworkmvc');

//DB Params
define("DB_HOST" ,'localhost');
define("DB_USER",'root');
define("DB_PASS",'123456');
define("DB_NAME",'mp3.0');