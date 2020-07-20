<!DOCTYPE html>

<html>
<head>
    <meta charset= "UTF-8">
    <title> TABELAS </title>
    <link rel="stylesheet" href="">
</head>

<body>

<?php
 

    
$link = mysqli_connect("localhost", "root", "","mydb");

//CHECK A CONEXÃO

if($link == false){
    die("ERROR: Could not connect ");
}

echo "Conexão realizada com sucesso!";
/*
// CRIADO O DB
$sql = "CREATE DATABASE MyDB";
if(mysqli_query($link,$sql)){
    echo "Database created SUCCESSFULLY!";
} else{
    echo "FAILED";
}
*/
$sql = "SELECT * FROM cadastro";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
               echo "<th>idCliente</th>";
                echo "<th>Nome</th>";
                echo "<th>Endereco</th>";
                echo "<th>email</th>";
                echo "<th>Telefone</th>";
                echo "<th>Senha</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['idCliente'] . "</td>";
                echo "<td>" . $row['Nome'] . "</td>";
                echo "<td>" . $row['Endereco'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['Telefone'] . "</td>";
                echo "<td>" . $row['Senha'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " ;
};
    

?>
</body>
</html>
