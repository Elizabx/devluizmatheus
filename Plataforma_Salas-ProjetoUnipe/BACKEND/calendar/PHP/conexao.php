<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "database_plataforma_salas";

    try {
        // Correct order: DSN, username, password
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        
    } catch (PDOException $err) {
        die("Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado: " . $err->getMessage());
    }
?>
