<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o email já está cadastrado
    $verifica_sql = "SELECT * FROM usuario WHERE email = '$email'";
    $verifica_resultado = mysqli_query($conn, $verifica_sql);

    if (mysqli_num_rows($verifica_resultado) > 0) {
        echo "<script>
                alert('⚠️ Este email já está cadastrado. Tente outro!');
                window.history.back();
              </script>";
    } else {
        // Faz o cadastro se não existir
        $sql = "INSERT INTO usuario 
                (nome, telefone, endereco, cidade, estado, cep, data_nascimento, email, senha)
                VALUES ('$nome', '$telefone', '$endereco', '$cidade', '$estado', '$cep', '$data_nascimento', '$email', '$senha')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('🎉 Usuário cadastrado com sucesso!');
                    window.location.href = 'Login.php';
                  </script>";
        } else {
            echo "<script>
                    alert('❌ Erro ao cadastrar usuário: " . mysqli_error($conn) . "');
                    window.history.back();
                  </script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Borcelle - Pet Shop</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <ul> <!-- li * 5 > a-->
                <li><a class="nav-item" href="#">Home</a></li>
                <li><a class="nav-item" href="#AboutUs">Sobre nós</a></li>
                <li><a class="nav-item" href="#Costumers">Clientes</a></li>
                <li><a class="nav-item" href="#Services">Serviços</a></li>
                <li><a class="nav-item" href="#Blog">Blog</a></li>
            </ul>
            <a class="navbar-brand" href="#">
                <img src="img/BorcelleLogo.png" alt="Logotipo" style="height: 120px; width: 120px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="Contact">
                <img src="img/contatoTel.png" alt="Telefone">
                <span>
                    <a href="">(63) 99874-1943</a>
                </span>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="image-container"> <!-- div criada para armazenar o botão dentro da imagem -->
                    <img class="d-block w-100" src="img/Borcelle.png" alt="Primeiro slide">
                    <button class="btnBannerWelcome"><span class="buttonSpan">Deixe seu pet nas mãos de quem entende
                            de amor e
                            cuidado.</span><br>
                        <h1 style="font-size: 16px; color: #f8f0e5; font-weight: bold; padding-top: 5px; margin: 0;">
                            Seja bem-vindo!</h1>
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="line">
        </div>

        <div class="StayTouch">
            <h1>Nossos serviços<img src="img/patinhas.png" alt="Patas"></h1>
        </div>
        <div class="ourServices" id="Services">
            <div class="containerServices">
                <div class="card">
                    <img class="card-img-top" src="img/Tosa.png" alt="Imagem de Banho e Tosa">
                    <div class="card-body">
                        <button class="btn-knowMore" href="Tosa.html">Saiba mais</button>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="img/ração.png" alt="Imagem Produtos">
                    <div class="card-body">
                        <button class="btn-knowMore">Saiba mais</button>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="img/habilidades.png" alt="Imagem Habilidades">
                    <div class="card-body">
                        <button class="btn-knowMore">Saiba mais</button>
                    </div>
                </div>

            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="StayTouch">
                <h1>Nossos mascotes<img src="img/patinhas.png" alt="Patas"></h1>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="image-container"> <!-- div criada para armazenar o botão dentro da imagem -->
                        <img class="d-block w-100" src="img/Imgcachorro1.png" alt="Second slide">
                        <button class="btn-overlay"><a class="AboutMe" href="#">Saiba mais sobre mim!!</a></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-container"> <!-- div criada para armazenar o botão dentro da imagem -->
                        <img class="d-block w-100" src="img/Imgcachorro2.png" alt="Second slide">
                        <button class="btn-overlay"><a class="AboutMe" href="#">Saiba mais sobre mim!!</a></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-container"> <!-- div criada para armazenar o botão dentro da imagem -->
                        <img class="d-block w-100" src="img/Imgcachorro3.png" alt="Third slide">
                        <button class="btn-overlay"><a class="AboutMe" href="#">Saiba mais sobre mim!!</a></button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>

        <div class="StayTouch">
            <h1>Fique por dentro! <img src="img/gato.png" alt="" style="width: 42px; padding: 5px;"></h1>
        </div>

        <section class="containerForm">
            <form class="formIndex" id="Cadastro"  method="POST">
                <div class="headerForm">
                    <span class="Register">Cadastro</span>
                    <p>Já tem uma conta? <a class="facaLogin" href="Login.php">Faça login</a></p>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput" style="margin-right: 8px;">
                        <img src="img/pessoa.png" alt="Pessoa" style="width: 24px;"></label>
                    <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Ex: Maria Da Silva">
                </div>
                <div class="form-group">
                    <label for="inputAddress" style="margin-right: 8px;">
                        <img src="img/localização.png" alt="Endereço" style="width: 24px;"></label>
                    <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Ex: Rua Americanas">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity" style="margin-right: 8px;">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="inputCity"  placeholder="Ex: São Paulo">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState" style="margin-right: 8px;">Estado</label>
                        <select id="inputState" name="estado" class="form-control">
                    <option selected></option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip" style="margin-right: 8px;">CEP</label>
                        <input type="text" class="form-control" id="inputZip" name="cep">
                    </div>
                </div>
                <div class="form-group form-row col-md-12">
                    <label for="inputDate" style="margin-right: 8px;">
                        <img src="img/calendario.png" alt="Data" style="width: 24px;"></label>
                    <input class="form-control" id="date" type="date" name="data_nascimento" />

                    <div class="form-group col-md-6">
                        <label for="inputTel" style="margin-right: 8px;">
                            <img src="img/telefone.png" alt="Celular" style="width: 24px;" placeholder="(XX)XXXX-XXXX">
                        </label>
                        <input type="number" class="form-control" id="inputTel" name="telefone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput" style="margin-right: 8px;">
                        <img src="img/email.png" alt="Email" style="width: 24px;"></label>
                    <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="teste@teste.com.br">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2" style="margin-right: 8px;">
                        <img src="img/trancar (1).png" alt="Senha" style="width: 24px;"></label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1"
                        placeholder="Digite sua senha">
                </div>

                <div class="col-auto my-1 buttonSubmit">
                    <button type="submit" class="btnCadastro ">Cadastrar-se</button>
                </div>
            </form>
        </section>

        <footer class="bg-body-tertiary text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #22625f; color: white;">
                © 2024 Copyright:
                <a class="text-body" style="color: white !important;"
                    href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

</html>