<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (isset($_POST['envoyer le message'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $message = $_POST['message'];

    $sql = ("INSERT INTO client(nom, email, numero, message) VALUES (:nom, :email, :numero, :message)");
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':message', $message);
    $stmt->execute();
}
?>