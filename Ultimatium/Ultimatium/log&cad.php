<?php
  if(isset($_POST['submit_cd']))
  {
    /*
    header('Location: index.php');
    print_r($_POST['nome']);
    print_r($_POST['email']);
    print_r($_POST['senha']);
    print_r($_POST['confi_senha']); 
    */
    
    include_once('config.php');
    $nome = $_POST['nome_cd'];
    $email = $_POST['email_cd'];
    $senha = $_POST['senha_cd'];
    $confi_senha = $_POST['confi_senha_cd'];

    $result = mysqli_query($conn, "INSERT INTO usuarios(nome, email, senha, confi_senha) VALUES ('$nome', '$email', '$senha', '$confi_senha')");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log&cad.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login&Cadastro</title>
</head>
<body>
      <div class="cont">
        <form class="form_lg" action="testeLogin.php" method="POST">
        <div class="form sign-in">
          <h2>Login</h2>
          <label>
            <span>Endereço de Email</span>
            <input type="email" name="email_lg" id="email_lg">
          </label>
          <label>
            <span>Senha</span>
            <input type="password" name="senha_lg" id="senha_lg">
          </label>
          <button name="submit_lg" type="submit" class="submit" id="submit_lg">Login</button>
          <p class="forgot-pass">Esqueceu sua senha?</p>
    
          <div class="social-media">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
          </div>
        </div>
        </form>

    <form action="log&cad.php" method="POST">
        <div class="sub-cont">
          <div class="img">
            <div class="img-text m-up">
              <h2>Novo por aqui?</h2>
              <p>Cadastre-se e descubra um mundo completamente novo!</p>
            </div>
            <div class="img-text m-in">
              <h2>Já é um membro?</h2>
              <p>Dê um login!</p>
            </div>
            <div class="img-btn">
              <span class="m-up">cadastrar</span>
              <span class="m-in">Login</span>
            </div>
          </div>
          <div class="form sign-up">
            <h2>Cadastrar</h2>
            <label>
              <span>Nome</span>
              <input name="nome_cd" type="text" id="nome_cd" required>
            </label>
            <label>
              <span>Email</span>
              <input name="email_cd" type="email" id="email_cd" required>
            </label>
            <label>
              <span>Senha</span>
              <input name="senha_cd" type="password" id="senha_cd" required>
            </label>
            <label>
              <span>Confirmar Senha</span>
              <input name="confi_senha_cd" type="password" id="confi_senha_cd" required>
            </label>
            <button name= "submit_cd" type="submit" class="submit">Cadastrar-se</button>
          </div>
        </div>
      </div>
    </form>
  <script type="text/javascript" src="script.js"></script>
  </body>
</html>