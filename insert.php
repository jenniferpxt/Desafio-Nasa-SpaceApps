<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agricultor_db";

// Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Dados do formulário JSON
$data = json_decode(file_get_contents('php://input'), true);

$nome = $data['informacoes_pessoais']['nome'];
$idade = $data['informacoes_pessoais']['idade'];
$cpf = $data['informacoes_pessoais']['cpf'];
$rua = $data['informacoes_pessoais']['endereco']['rua'];
$numero = $data['informacoes_pessoais']['endereco']['numero'];
$cidade = $data['informacoes_pessoais']['endereco']['cidade'];
$estado = $data['informacoes_pessoais']['endereco']['estado'];
$cep = $data['informacoes_pessoais']['endereco']['cep'];
$telefone = $data['informacoes_pessoais']['telefone'];
$email = $data['informacoes_pessoais']['email'];
$tamanho_hectares = $data['informacoes_area']['tamanho_hectares'];
$tipo_solo = $data['informacoes_area']['tipo_solo'];
$irrigacao = $data['informacoes_area']['irrigacao'];
$cultura_principal = $data['informacoes_area']['cultura_principal'];
$cultura_secundaria = $data['informacoes_area']['cultura_secundaria'];
$latitude = $data['informacoes_geograficas']['latitude'];
$longitude = $data['informacoes_geograficas']['longitude'];
$altitude = $data['informacoes_geograficas']['altitude'];

// Inserir dados
$sql