<?php



echo $Nome;


$link = mysqli_connect("localhost", "root", "","mydb");

$user = $_POST['Usuario'];
$pass = $_POST['Senha'];
  
$sql = "SELECT * FROM cadastro";
$sql = "SELECT * FROM cadastro WHERE Nome = '$user' && Senha = '$pass'";
$sql = mysqli_query($link, $sql);
$sqlR = mysqli_fetch_assoc($sql);

//echo $sqlR;
echo $user;
if($sqlR > 0 ){
    
    header("location:conect.php");
   
}else{
  echo "invalido"; 

}


?>
