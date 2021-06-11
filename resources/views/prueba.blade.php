<!DOCTYPE html>

<html lang="en">
<head>

     <meta charset="UTF-8">
     <title>Document</title>
     <style>
     label{
     width: 50px;
     display: inline-block;}
</style>
</head>
<body>

    <form method="post" action="pagina2.php">
    <label for="name">Name:</label>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="email">Email</label>
    <input type="text" name="asunto" id="asunto"><br>
    <label for="mensaje">Mensaje: </label>
    <textarea name="mensaje" id="mensaje" cols="25" rows="5"></textarea><br>
    <input type="submit"><br>
</form>
</body>
</html>