<?php
include '../src/function.php';

$name = $email = $tel = $message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = cleanInput($_POST);
    $errors = [];

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = ['* Please enter your email is not valid.'];
    }

    if ($data['name'] === ''){
        $errors['name'] = ["* Please enter your name"];
    }

    if ($data['tel'] === ''){
        $errors['tel'] = ["* Please enter a phone number"];
    }

    if (($data['selection'] != 'feedback') && ($data['selection'] != 'problem')){
        $errors['selection'] = ["* Please select a subject."];
    }

    if ($data['message'] === ''){
        $errors['message'] = ['* Please enter a message.'];
    }


    if (empty($errors)) {
        header('Location: validate.php');
    }
}