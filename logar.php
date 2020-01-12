<?php
if(isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'bd/conexao.php';
    require 'class/Usuario.php';

    $u = new Usuario();

    $email = addslashes($_POST ['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
        if(isset($_SESSION['iduser'])){
            header("Location: home.php");
        }else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
?>