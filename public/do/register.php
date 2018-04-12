<?php

require_once '../../app/config.php';

$_SESSION['form'] = $_POST;

$min_age = 21;

if (
    empty($_POST['lastName']) ||
    empty($_POST['firstName']) ||
    empty($_POST['birthdate']) ||
    empty($_POST['email']) ||
    empty($_POST['sexe']) ||
    empty($_POST['phone'])
){
    setAdvert('error', 'Veuillez remplir tous les champs');
    redirect('/../register.php');
}

$stmt = $bdd->prepare('SELECT email,phone FROM as_register WHERE email = :email OR phone = :phone');
$stmt->bindValue('email', $_POST['email']);
$stmt->bindValue('phone', $_POST['phone']);
$stmt->execute();
$register = $stmt->fetch();

if ($register) {
    setAdvert('error', 'Une personne s\'est déjà inscrite avec cette adresse email ou ce numéro');
    redirect('/../register.php');
}

if (date_diff(date_create(htmlentities($_POST['birthdate'])), date_create('today'))->y < $min_age) {
    setAdvert('error', 'Vous devez avoir '.$min_age.' ans ou plus pour participer à l\'expérience d\'Escape Game d\'Aperture Science');
    redirect('/../register.php');
}

$stmt = $bdd->prepare('INSERT INTO as_register (firstName, lastName, birthdate, email, sexe, phone, emergency, submitDate)
VALUES (
  :firstName,
  :lastName,
  :birthdate,
  :email,
  :sexe,
  :phone,
  :emergency,
  NOW()
)');

$stmt->bindParam(':firstName', $_POST['firstName'], PDO::PARAM_STR);
$stmt->bindParam(':lastName', $_POST['lastName'], PDO::PARAM_STR);
$stmt->bindParam(':birthdate', $_POST['birthdate'], PDO::PARAM_STR);
$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindParam(':sexe', $_POST['sexe'], PDO::PARAM_STR);
$stmt->bindParam(':phone', $_POST['phone'], PDO::PARAM_STR);
$stmt->bindParam(':emergency', $_POST['emergency'], PDO::PARAM_STR);

$stmt->execute();

$_SESSION['form'] = [];
setAdvert('success', 'Inscription validée !');
redirect('/../register.php');