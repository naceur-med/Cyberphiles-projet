<?php 

$user = 'root';
$pass = '';

try
{
    $db = new PDO('mysql:host=vhost;dbname=Cyberphiles', $user, $pass);
    foreach ($db->query('SELECT * FROM articles') as $row)
    {
        print ($row);
    }
}
catch (PDOException $e)
{
    print "Erreur :" .$e->getMessage() . "<br/>";
    die;
}