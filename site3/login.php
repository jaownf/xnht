<?php
session_start();

if (empty($_POST) || empty($_POST["usuario"]) || empty($_POST["senha"])) {
    echo "<script>location.href='log.php';</script>";
    exit();
}

include('config.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
if (!$stmt) {
    die("Erro na preparação da consulta: " . $conn->error);
}

$stmt->bind_param("s", $usuario);
$stmt->execute();
$res = $stmt->get_result();

if (!$res) {
    die("Erro na execução da consulta: " . $stmt->error);
}

$qtd = $res->num_rows;

if ($qtd > 0) {
    $row = $res->fetch_object();
    
    if ($senha === $row->senha) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION['tipo'] = $row->tipo;
        echo "<script>location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Usuário ou senha incorreto(s)');</script>";
        echo "<script>location.href='log.php';</script>";
    }
} else {
    echo "<script>alert('Usuário ou senha incorreto(s)');</script>";
    echo "<script>location.href='log.php';</script>";
}

$stmt->close();
$conn->close();
?>


