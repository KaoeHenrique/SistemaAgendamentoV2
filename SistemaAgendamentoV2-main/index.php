<?php
session_start();
require_once "conexao2.php";
$pdo = conectar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SistemaAgendamento</title>
    <!--IMPORTANDO ICONS-->
    <script src="https://kit.fontawesome.com/52e3096c6b.js" crossorigin="anonymous"></script>
    <!--IMPORTANDO FONTS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Gantari:wght@100;300;500&family=Lobster&family=Passion+One:wght@400;700;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--IMPORTANDO CSS-->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!--HEADER-->
    <div id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
                <a class="navbar-brand" href="#">
                    LOGO
                </a>
                <div class="justify-content-end nav-buttons">
                    <button class="btn_ btn-1 button-mobile" data-toggle="modal" data-target="#loginModal">entrar</button>
                    <button 
                        class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarNavAlt" 
                        aria-controls="navbarNavAlt" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon"></span>
                </div>
                </button>
                <div class="collapse navbar-collapse flex-column" id="navbarNavAlt">
                    <ul class="navbar nav flex-none">
                        <li class="nav-item"><a href="#" class="nav-link active">Contato</a></li>
                        <li class="nav-item"><a href="#" class="nav-link active">Servi??os</a></li>
                        <li class="nav-item"><a href="#" class="nav-link active">Nossa Equipe</a></li>
                        <li class="nav-item"><a href="#" class="nav-link active">Localiza????o</a></li>
                    </ul>
                </div>
                <button class="btn_ button-desktop" data-toggle="modal" data-target="#loginModal">entrar</button>
            </nav>
        </div>
    </div>
    <!--//HEADER-->
    <!--LANDING-->
    <div id="content-1">
        <img src="assets/girlpose2.png" id="girl">
        <div id="description">
            <img src="assets/clock.png" id="clock">
            <img src="assets/day.png" id="day">
            <h2>Agendamento</h2>
            <h1>Espa??o Kelly Silvestre</h1>
            <p>Para economizar o seu tempo e descomplicar o agendamento utilize nosso sistema, em <span class="underline">menos de 5 minutos</span> o agendamento ?? finalizado.</p>
            <div class="go-to">
                <a href="#">Agendar</a> <i class="fa-solid fa-arrow-right fa-lg"></i>
            </div>
        </div>
    </div>
    <!--//LANDING-->
    <div id="content-2">
        <h1 class="title">Servi??os dispon??veis no espa??o</h1>
        <div class="service-list">
            <div class="service-item">
                <h2>ALONGAMENTOS DE UNHA</h2>
                <p>Tradicional</p>
                <p>Baby boomer</p>
                <p>encapsulada</p>
                <p>Francesa reversa</p>
                <p>Blindagem</p>
                <p>Banho de Cristal</p>
                <p>Manuten????o</p>
                <a href="#" data-toggle="modal" data-target="loginModal">Modal</a>
            </div>
            <div class="service-item">
                <h2>ESMALTA????O</h2>
                <p>Em gel</p>
                <p>Tradicional</p>
            </div>
            <div class="service-item">
                <h2>UNHAS</h2>
                <p>Manicure</p>
                <p>Pedicure</p>
                <p>P?? e m??o</p>
                <h3>Adicionais</h3>
                <p>Decora????o com joias</p>
                <p>Decora????o com adesivos</p>
            </div>
            <div class="service-item">
                <h2>SPA DOS P??S</h2>
                <p>Spa Simples</p>
                <p>Spa com pedicure</p>
            </div>
            <div class="service-item">
                <h2>ESMALTA????O EM GEL</h2>
                <p>Manicure</p>
                <p>Pedicure</p>
                <p>P?? e m??o</p>
            </div>
            <div class="service-item">
                <h2>CABELO</h2>
                <p>Escova</p>
                <p>Corte</p>
                <p>Tintura</p>
                <p>Progressiva</p>
                <p>Luzes</p>
                <p>Penteado</p>
            </div>
            <div class="service-item">
                <h2>OUTROS</h2>
                <p>Exten????o de c??lios</p>
                <p>Design de sobrancelhas</p>
                <p>Bu??o</p>
            </div>
        </div>
    </div>
    <!--MODAL LOGIN-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="loginContent">
                <div class="modal-body">
                    <h2 class="modal-title">Login</h2>
                    <form method="POST">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="usuario"placeholder="Insira seu Email">
                        </div>
                        <div class="form-group">
                          <label for="pass">Senha</label>
                          <input type="password" class="form-control" id="pass" name="senhaa" placeholder="Senha">
                          <a href="#" id="passHelp" class="form-text text-muted">Esqueceu sua senha?</a>
                        </div>
                        <button type="submit" class="btn__" name="BtnEntrar">Confirmar</button>
                        <small  class="form-text text-muted text-center">N??o possui uma conta? <a href="#createAccountModal" data-toggle="modal">Crie uma</a></small>
                        
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!--//MODAL LOGIN-->
    <!--MODAL CADASTRO-->
    <div class="modal fade" id="createAccountModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" id="createAccountContent">
                <div class="modal-body">
                        <h2 class="modal-title">Cadastrar</h2>
                        <button class="close" data-dismiss="modal" aria-label="Close"><i class=" fa-solid fa-x"></i></button>
                    <form method="POST">
                        <div class="form-group">
                          <label for="name">Nome</label>
                          <input type="text" class="form-control" id="name" name="nome" placeholder="Insira seu Nome">
                        </div>
                        <div class="form-group">
                          <label for="contact">Telefone</label>
                          <input type="text" class="form-control" id="contact" name="telefone" placeholder="Telefone para contato">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"placeholder="Insira seu Email">
                          </div>
                          <div class="form-group">
                            <label for="contact">Data Nascimento</label>
                            <input type="date" class="form-control" id="date" name="datanasc"placeholder="Insira Sua data de nascimento">
                          </div>
                          <div class="form-group">
                            <label for="contact">Endere??o</label>
                            <input type="text" class="form-control" id="endere??o" name="endereco"placeholder="Insira seu endere??o">
                          </div>
                          <div class="form-group">
                            <label for="pass">Senha</label>
                            <input type="password" class="form-control" id="pass" name="senha"placeholder="Crie uma senha">
                            <small class="text-form text-muted">Voc?? dever?? se lembrar depois</small>
                          </div>
                        <button type="submit" class="btn__" name="btnSalvar">Criar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!--//MODAL CADASTRO-->
    <!--IMPORTANDO JS-->
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/poopper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php

//CADASTRO DO FORMULARIO

     if(isset($_POST['btnSalvar'])) {
    $nome = isset($_POST['nome'])? $_POST['nome'] : null;
    $telefone = isset($_POST['telefone'])? $_POST['telefone'] : null;
    $email = isset($_POST['email'])? $_POST['email'] : null;
    $senha = isset($_POST['senha'])? $_POST['senha'] : null;
    $datanasc = isset($_POST['datanasc'])? $_POST['datanasc'] : null;
    $endereco = isset($_POST['endereco'])? $_POST['endereco'] : null;

   $sql = "INSERT INTO cliente (nome_cliente, telefone_cliente, email_cliente, senha_cliente, data_nasc, endereco_cliente) VALUES (:n, :t, :e, :s, :d, :en);";
     //preparando o sql para receber os dados
    $stmt = $pdo->prepare($sql);
     //troca dos dados pelo que esta vindo no formul??rio
    $stmt->bindParam(':n', $nome);
    $stmt->bindParam(':t', $telefone);
    $stmt->bindParam(':e', $email);
    $stmt->bindParam(':s', $senha);
    $stmt->bindParam(':d', $datanasc);
    $stmt->bindParam(':en', $endereco);
    if ($stmt->execute()) {
        echo "Registro inserido com sucesso";
    }
     }
//LOGIN FUNCIONAL 
     if (isset($_POST['BtnEntrar'])) {
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
        $senhaa = isset($_POST['senhaa']) ? ($_POST['senhaa']) : null;
    
        if(empty($usuario) && empty($senhaa)){
           echo "Necess??rio informar usuario e senha";
         exit();
        }
        
       $sql2 = "SELECT email_cliente, senha_cliente, nome_cliente FROM cliente WHERE email_cliente = :u AND senha_cliente = :ss";
    
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->bindParam(':u', $usuario);
        $stmt2->bindParam(':ss', $senhaa);
      $stmt2->execute();
       $user = $stmt2->fetch();
        if($stmt2->rowCount()> 0){
           echo "Seja bem vindo"." ". $usuario;
        }else{
            echo "Usu??rio ou senha invalidos";
            exit();
       }
}
?> 