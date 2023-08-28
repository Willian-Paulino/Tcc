<?php
    require_once "./config/conn.php";

    $sqlVerifica = "SELECT * FROM cliente WHERE email = :email";
    $verificarUsuario = $conn->prepare($sqlVerifica);
    $verificarUsuario->bindValue(":email",$_POST['email']);
    $verificarUsuario->execute();

    if($verificarUsuario->rowCount() === 0){
        extract($_POST);
        $sqlInsert = "INSERT INTO cliente (idCliente,email,senha,nome_Cliente) VALUES(0,:email,:password,:name)";
        $inserirUsuario = $conn->prepare($sqlInsert);
        $inserirUsuario->bindValue(":email",$email); 
        $inserirUsuario->bindValue(":password",sha1($password));
        $inserirUsuario->bindValue(":name",$name);
        $inserirUsuario->execute();
        ?>
        <div class="alert alert-success">
            <i class="fas fa-check"></i>
            Usuário cadastrado com sucesso!
        </div>
        <?php
    } else{
        ?>
        <div class="alert alert-danger">
            <i class="fas fa-times"></i>
            Usuário com e-mail já existente!
        </div>
        <?php
    }
?>