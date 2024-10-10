<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Generador de codigo QR</h1>
  <form action="generate.php" method="post">
    <p>
      <input type="text" name="data" placeholder="Contenido del codigo QR...">
    </p>
    <p>
      <input type="text" name="label" placeholder="Etiqueta del codigo QR...">
    </p>
    <p>
      <input type="text" name="imgname" placeholder="Nombre de la imagen codigo QR...">
    </p>
    <p>
      <input type="submit" value="Generar QR">
    </p>
  </form>
</body>
</html>