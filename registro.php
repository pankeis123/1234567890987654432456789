<?php
session_start(); // Se supone que esto almacena los usuarios para poder mostrar la demostrasion
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cplusultra = trim($_POST['nombre']);
    $perro = trim($_POST['usuario']);
    $papa = $_POST['password'];
    $contraseña = $_POST['confirm_password'];
    if (empty($cplusultra) || empty($perro) || empty($papa) || empty($contraseña)) {
        $msg = "todostodos llenalos";
    } elseif (strlen($papa) < 6) {
        $msg = "almenos 6 characters.";
} elseif ($papa !== $contraseña) {
        $msg = "That no coinciden.";} else {
        $_SESSION['usuarios'][$u] = [
            'nombre' => $n,
            'password_hash' => password_hash($papa, PASSWORD_DEFAULT)  ];
        $msg = "registro already guardado apenas.";}}
?>

    Contraseña: <input type="password" name="password"><br>
    Confirmar: <input type="password" name="confirm_password"><br>
    <input type="submit" value="Registrar">
</form>
<p><?php echo $msg; ?></p>
<a href="login.php">Ir a Login</a>