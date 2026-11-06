<?php
session_start(); $msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = trim($_POST['usuario']);
    $p = $_POST['password'];
    if (isset($_SESSION['usuarios'][$u])) {
        $hash = $_SESSION['usuarios'][$u]['password_hash'];
        if (password_verify($p, $hash)) {
            $msg = "welcome al system profe ";} else {
            $msg = "contraseña incorrecta";}
    } else {
        $msg = "El usuario no esta";}}  



$imagen = "horadecagar.png";
echo '<img src="' . $imagen . '" alt="Meme hora de cagar" width="400">';


?>




?> <form method="POST">
    Usuario: <input type="text" name="usuario"><br>
    Contraseña: <input type="password" name="password"><br>
    <input type="submit" value="Entrar">
</form>
<p><?php echo $msg; ?></p>
<a href="registro.php">Ir a Registro</a>

<link rel="stylesheet" href="estilos.css">


