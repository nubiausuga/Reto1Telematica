<script>
var error = "<?php echo $_GET["login_error"]; ?>" ;
if(error==1) alert("Error en el login o password ingresado");
</script>
    

<form name="form1" method="post" action="verificarUsuario.php">
 <link rel="stylesheet" href="stylo.css" />
  <p>
  <div align="center"> Para cargar imagenes es necesario loguearse: </div>
     <label for="login"><br><br>
     <div align="center">Login:</div>
  </label>
  <div align="center">
    <input name="login" type="text" required id="login">
  </div>
  
  <label for="password">
      <div align="center">Password: </div>
  </label>
    <div align="center">
      <input name="password" type="password" required id="password">
    </div>
  </p>
  <p align="center">
  <input type="submit" name="ingresar" id="ingresar" value="Enviar">  
  <p align="center">  
  <p align="center"><br>
  <h1 align="center"><a href="index.html"><strong> <img src="atras.png" alt="Volver" width="101" height="61" style="background-color: #6699FF; display:block;" title="Volver" /></strong></a></strong> </h1>
  </p>
    
</form>

