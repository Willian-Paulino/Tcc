<?php
    require_once "./config/conn.php";

    extract($_POST);
    $sqlVerifica = "SELECT * FROM cliente WHERE email = :email AND password = :password";
    $verificarUsuario = $conn->prepare($sqlVerifica);
    $verificarUsuario->bindValue(":email",$email);
    $verificarUsuario->bindValue(":password",sha1($password));
    $verificarUsuario->execute();

    if($verificarUsuario->rowCount() === 1){
        $usuario = $verificarUsuario->fetch(PDO::FETCH_OBJ);
        session_start();
        $_SESSION['id_user'] = $usuario->id_user;
        $_SESSION['name'] = $usuario->name;
        $_SESSION['loggedIn'] = true;

        header('Location:');
    } else{
        ?>
        <div class="alert alert-danger">
            <i class="fas fa-times"></i>
            E-mail e/ou senha incorretos!
        </div>
        <?php
    }
?>