<?php 
   require_once "conect.php";

// INSERT

//$idCliente = mysqli_real_escape_string($link, $_REQUEST['idCliente']);
$Nome = mysqli_real_escape_string($link, $_REQUEST['Nome']);
$Endereco = mysqli_real_escape_string($link, $_REQUEST['Endereco']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$Telefone = mysqli_real_escape_string($link, $_REQUEST['Telefone']);
$Senha = mysqli_real_escape_string($link, $_REQUEST['Senha']);

$sql = "INSERT INTO cadastro(idCliente,Nome,Endereco,Email,Telefone, Senha) VALUES 
('','$Nome','$Endereco','$email','$Telefone','$Senha')";
if(mysqli_query($link,$sql)){
    echo "Dados inseridos com SUCESSO!";
}else{
    echo "Processo falhou" . mysqli_error($link);
  }


   

    //ATUALIZAÇÃO DE DADOS
   /* $sql = "UPDATE cadastro SET email ='Emanuelsoares@gmail.com' WHERE idCliente = 13";
    if(mysqli_query($link, $sql)){
     echo "Dados alterados com sucesso.";
    } else {
    echo "ERROR: não foi possivel atualizar os dados, tente novamente.. $sql. " . mysqli_error($link);
}
   */
// Encerrar conexão
    mysqli_close($link);






?>