<?php
require_once 'model/CommentRepository.php';
if (isset($_POST['username'], $_POST['message'])) 
{
    $message = new Message($_POST['username'], $_POST['message']);
    if ($message->isValid()) {
    
    } else {
        $errors = 'Formulaire invalide';
    }
}