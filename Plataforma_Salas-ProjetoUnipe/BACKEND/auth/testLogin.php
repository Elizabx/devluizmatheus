<?php

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    include_once('config.php');


    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    
    
    if ($stmt) {
        
        $stmt->bind_param("ss", $email, $senha);
        

        $stmt->execute();
        

        $result = $stmt->get_result();


        if ($result->num_rows < 1) {
            header('Location: login.php');
            exit();
        } else {
            header('Location: sistema.php');
            exit();
        }
        
        $stmt->close();
    } else {
        die("Erro na preparação da consulta: " . $conexao->error);
    }
} else {
    header('Location: login.php');
    exit();
}

?>
