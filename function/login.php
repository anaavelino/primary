
   <!DOCTYPE html>

   <html>
   <head>
       <meta charset= "UTF-8">
       <title> LOGIN </title>
       <link rel="stylesheet" href="style\log.css">
   </head>
   
   <body>
   
   <div id = "area">
   <form id = "form1" action = "validar.php" method = "post">
   
   <fieldset>
   <div class = "box">
       <legend> LOGIN </legend> 
           <div class = "log">
           <label>Usuario:</label>
           <input class = "i1" type = "text" name = "Usuario" id = "Usuario"><br>
           
           <label>Senha:</label>
           <input class = "i2" type = "password" name = "Senha" id = "Senha" ><br>
           
           </div>
           <input class = "bnt" type="submit" value="Entrar" id="entrar" name="entrar"><br>
            <div class = "p1">
           <p>Ainda não tem conta? <a href="cadastro.php">Clique aqui Cadastrar</a>.
           </div>
           </fieldset>
          
       </div>
       </div>
       </form>
       
      
           
    </body>
    
   </html>
