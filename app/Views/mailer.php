<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veirficaion</title>
</head>
<body>
    <form action="<?=site_url('mailer/index')?>" method="POST">
        <label for="name">Nombre</label>
        <input type="text" name="name" placeholder="nombre">
        <label for="mail">Correo:</label>
        <input type="mail" name="mail" placeholder="correo">
        <input type="submit" value="Enviar">
    </form>    
</body>
</html>