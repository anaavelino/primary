<!DOCTYPE html>

<html>
<head>
    <meta charset= "UTF-8">
    <title> FORMULARIO DE CADASTRO.COM </title>
    <link rel="stylesheet" href="desing.css">
</head>

<body>

<div id = "area">
<form id = "form1" action = "registro.php" method = "post">

<fieldset>
    <div class = "box">
    <legend> CADASTRO </legend> 
    
        <label for = "Nome">Nome:</label>
        <input class = "i1 " type = "text" name = "Nome" id = "Nome"><br>
    
        <label for = "Endereco">Endereço:</label>
        <input class = "i5 "type = "text" style="text-align:left" name = "Endereco" id = "Endereco" ><br>

        <label for = "email">Email:</label>
        <input class = "i2 " type = "text" style="text-align:left"  name = "email" id = "email"><br>

        <label for = "Telefone">Telefone:</label>
        <input class = "i4 " type = "text" style="text-align:left" name = "Telefone" id = "Telefone"><br>

        <label for = "Senha">Senha:</label>
        <input class = "i3 " type = "text" style="text-align:left" name = "Senha" id = "Senha"><br><br>
       
      
   
        <input class = "bnt"  type="submit" value="Salvar">

       
        </div>

        
        </fieldset>

    </form>
    </div>

 </body>
</html>

<?php 



?>