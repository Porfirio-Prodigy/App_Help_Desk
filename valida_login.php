<?php 

session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != "SIM"){
    header('Location: index.php?login=erro2');
}

$email = $_POST['email'];
$senha = $_POST['password'];

if ($email == "joaoporfirio00@gmail.com" && $senha == "12345") {
    //echo "deu certo, usuário autenticado com sucesso";
    $_SESSION['autenticado'] = "SIM";
    header('Location: home.php');
} else {
    foreach ($_POST as $i){
        $_SESSION['autenticado'] = "NÃO";
        header('Location: index.php?login=erro');
    }
}


?>