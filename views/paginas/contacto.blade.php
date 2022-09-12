<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
#inicio {
	position: absolute;
	left: 10px;
	top: 541px;
	width: 60px;
	height: 35px;
	z-index: 1;
	font-size: 18px;
  background-image: transparent;
}
</style>
<title>Contacto</title>
</head>

<body>

<div class="nav" id="inicio"><a href="index">Inicio</a></div>

<h1>Contacto
</h1>
<form id="form1" name="form1" method="get" action="#">
  <p>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" />
  </p>
  <p>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" />
  </p>

  </p>
  
  <p>Contraseña: </p>
  <p>
    <label for="pwd">Password:</label>
    <input type="password" id="pwd" name="pwd" minlength="8">
    
  </p>
  <p>Comentario: 
    <input name="comentario" type="text" id="comentario" value="" size="45" />
  </p>
  <p>
    <label for="ciudad">Ciudad</label>
    <select name="ciudad" id="ciudad">
      <option value="Guadalajara">Guadalajara</option>
      <option value="Zapopan">Zapopan</option>
      <option value="Tonalá">Tonalá</option>
      <option value="Otra">Otra</option>
    </select>
  </p>
  <p>
    <input type="checkbox" name="check" id="check" />
    <label for="check">Me interesa contactarte</label>
  </p>
  <p>
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
