<?php
session_start();
// Usuário e senha fixos para teste
$emailCorreto = "usuario@teste.com";
$senhaCorreta = "123456";

// Captura os dados do formulário
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Verifica se o email e senha batem com os valores fixos
if ($email === $emailCorreto && $senha === $senhaCorreta) {
    // Login OK - cria sessão
    $_SESSION['usuario'] = $email;
    // Redireciona para página protegida (pode ser sua página inicial)
    header("Location: index.php");
    exit();
} else {
    // Login falhou
    $erro = "Email ou senha incorretos!";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Borcelle - Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="background">

<div class="container-petshop">

  <!-- Elementos decorativos -->
  <div class="decor">
    <div class="icon paw" style="top: 80px; left: 40px;">🐾</div>
    <div class="icon heart" style="top: 160px; right: 80px;">❤️</div>
    <div class="icon paw" style="bottom: 128px; left: 80px;">🐾</div>
    <div class="icon heart" style="bottom: 80px; right: 40px;">❤️</div>
  </div>

  <!-- Logo -->
  <div class="brand">
    <div class="logo">🐾</div>
    <h1>Borcelle</h1>
    <p>Sua loja confiável para seus pets</p>
  </div>

  <!-- Card de Login -->
  <div class="card-petshop">
    <h2>Bem-vindo de volta!</h2>
    <p>Entre na sua conta para continuar comprando para seus amigos peludos.</p>

    <form class="form-petshop" action="Login.php" method="POST">
      <label class="label-petshop" for="email">Endereço de Email</label>
      <input class="input-petshop" type="email" name="email" id="email" placeholder="seu@email.com" required>

      <label class="label-petshop" for="password">Senha</label>
      <input class="input-petshop" type="password" name="senha" id="password" placeholder="Digite sua senha" required>

      <div class="options">
        <label> 
          <input type="checkbox" id="remember">
          Lembre-se de mim
        </label>
        <a href="#">Esqueceu a senha?</a>
      </div>

      <button class="button-petshop" type="submit">Entrar</button>
    </form>

    <p class="signup">
      Não tem uma conta?<a href="index.html#Cadastro">Crie uma aqui</a>
    </p>
  </div>

  <footer class="footer"
    © 2024 Borcelle. Feito com ❤️ para os amantes de pets.
  </footer>

</div>

</body>
</html>
