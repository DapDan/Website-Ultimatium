<?php
    session_start();
    //print_r($_REQUEST);
    
    if(isset($_POST['submit_lg']) && !empty($_POST['email_lg']) && !empty($_POST['senha_lg'])){
        include_once('config.php');
        $email_lg = $_POST['email_lg'];
        $senha_lg = $_POST['senha_lg'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email_lg' and senha = '$senha_lg'";
        $res = $conn->query($sql);
        //print_r($res);

        if(mysqli_num_rows($res) < 1){
            //print_r('Nao existe');
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: log&cad.php');
        }else{
            //print_r('Existe');
            $_SESSION['email'] = $email_lg;
            $_SESSION['senha'] = $senha_lg;
            header('Location: sistema.php');
        }

    }
    else{
        header('Location: log&cad.php');
    }
    
?>