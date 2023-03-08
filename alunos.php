<?php
include 'conn.php';
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome']; 
$cpf = $_POST['cpf']; 
$email = $_POST['email'];
$genero = $_POST['genero'];
$estado = $_POST['estado']; 
$tecnologia= $_POST['tecnologia'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO alunos(nome,sobrenome,cpf,email,genero,estado,tecnologia,feedback) 
        VALUES ('$nome','$sobrenome','$cpf','$email','$genero','$estado','$tecnologia','$feedback')";

try{
    if(mysqli_query($conn,$sql)){
        echo "CADASTRADO COM SUCESSO";
    }
}catch(Exception $e){
    echo "ERRO AO CADASTRAR: $e";
}
?>