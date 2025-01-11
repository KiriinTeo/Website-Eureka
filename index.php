<!doctype html>
<?php
    //include_once("navegacao.html")
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog Eureka</title>

    <!--Bootstrap CSS--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!--Custom CSS--> 
    <style> 
    
        .imagem_fundo {
            background-image: url('imagens/bg_final.png');
            background-size: 1920px 870px; /*cover*/
            background-position: center; 
            height: 100vh; 
        }
        
        .text-box {
            border: 2px solid rgb(255, 223, 41); 
            border-radius: 8px; 
            padding: 10px; 
            background-color: rgba(66, 6, 78, 0.73); 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6); 
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            word-wrap: break-word;
            max-width: 100%;
        }
        
        .text-box:hover {
            transform: translateY(-3px); 
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2); 
        }

        .anima {
            border: 2px solid rgba(0, 0, 0, 0.38);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(94, 47, 116, 0.54);
            transition: transform 0.6s ease, box-shadow 0.6s ease;
            background-color: white; 
        }

        .anima:hover {
            transform: scale(1.05); 
            box-shadow: 0 8px 12px rgba(84, 0, 122, 0.84); 
        }

        .txt-letra{
            font-family: "Roboto", "Georgia", "Serif";
            font-size: 2.0rem;
            font-weight: bold;
            font-style: italic;
            color: #ffffff;
        }

        .txt_eureka {
            font-family: "yellowtail", cursive; 
            font-size: 63px;
            margin-top: 15px;
        }

        .txt_navbar {
            font-family: "Roboto", "georgia", "serif";
            font-size: 23px;
            font-style: thin;
        }

        .txt_color-lead {
            text-shadow: 2px 1px 0px rgba(187, 187, 187, 0.88);
            color:rgba(91, 4, 131, 0.7);
        }

        .brand_place {
            margin-left: 5.5rem;
            margin-right: 1.5rem;
            margin-top: 0,5rem;
            width: 143px;
            height: 120px;
        }

        .custom_place {
            margin-left:0.5rem;
            margin-right: 2.0rem;
            margin-top: 0,5rem;
        }

        .btn_bg {
            background-color:rgb(255, 255, 255);
        }

        .placeholder_style {
            font-style: italic;
        }

        .cor_faixa-principal {
            /*background-color: rgba(0, 0, 0, 0);*/
            background: linear-gradient(180deg,rgb(29, 29, 29) 0%,rgba(51, 51, 51, 0) 100%);
        }

        .cor_eureka {
            color: #ffffff;
        }

        .nav-link.active {
            color:rgb(248, 249, 250) !important; 
        }

        .nav-link {
            color:rgb(167, 167, 167); 
        }

        .nav-link:hover {
            color:rgb(55, 0, 255); 
        }
        
        .btn-outline-success {
            color:rgb(255, 255, 255);
            border-color:rgb(252, 255, 62);
            border-radius: 15px;
        }

        .form-control::placeholder {
            color: rgba(167, 167, 167, 0.68);
            font-style: italic;
        }

        .form-control {
            width: 250px; 
            border-radius: 20px; 
        }

        .form-control:focus {
            border-color:rgb(255, 255, 255);
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5); 
        }

        .espaco {
            margin-right: 10px;
        }

        .btn-outline-enviar {
            font-family: "Roboto", "georgia", "serif";
            font-weight: medium;
            background-color: rgba(56, 0, 78, 0);
            color:rgba(139, 12, 170, 0.69);
            border: 2px solid rgba(155, 34, 255, 0.5);
            box-shadow: 0 0 3px rgba(155, 34, 255, 0.5);
        }

        .btn-outline-enviar:hover {
            color:rgba(139, 12, 170, 0.69);
            transform: scale(1.00); 
            box-shadow: 0 2px 4px rgba(155, 34, 255, 0.5); 
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 3px; 
        }

        .form-range {
            margin-bottom: 0; 
        }

        .span-style {
            background-color: rgba(255, 235, 50, 0.9);
            border: 2px linear-gradient(180deg,rgb(159, 0, 199) 0%,rgba(156, 156, 156, 0.49) 100%);
            border-radius: 7px 0px 0px 7px;
        }

        .input-style {
            border: 2px solid rgba(53, 53, 53, 0.3);
            border-radius: 15px;
            /*box-shadow: 0 2px 3px rgba(76, 2, 136, 0.65);*/
        }

    </style>
  </head>
  
<body>
    <header class="imagem_fundo">
        <!--Menu Superior-->
        <nav class="navbar navbar-expand-md cor_faixa-principal" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand ms-5" href="#">
                    <img src="imagens/bg_eureka.png" alt="Eureka Logo" class="brand_place">
                </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarDropdown">
                <ul class="navbar-nav justify-content-center w-100">
                    <li class="nav-item dropdown">
                        <button type="button" class="nav-link dropdown-toggle active txt_navbar" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Cursos
                        </button>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header"> Disponiveis <h6></li>
                            <li><a class="dropdown-item" href="#">Geometria: Conceitos á Aplicação</a></li>
                            <li><a class="dropdown-item" href="#">Redação: Construção Elaborativa</a></li>
                            <li><a class="dropdown-item" href="#">Ciências da Natureza: Fisica, Química e Biologia</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">+ Sobre nossos cursos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="nav-link dropdown-toggle active txt_navbar " href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Materias
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Matematica</a></li>
                            <li><a class="dropdown-item" href="#">Linguagens</a></li>
                            <li><a class="dropdown-item" href="#">Física</a></li>
                            <li><a class="dropdown-item" href="#">Química</a></li>
                            <li><a class="dropdown-item" href="#">Biologia</a></li>
                            <li><a class="dropdown-item" href="#">Redação</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="nav-link dropdown-toggle active txt_navbar" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Planos
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Visualizar Planos</a></li>
                            <li><hr class="drpdown-divider"><li>
                            <li><a class="dropdown-item" href="#">Cadastrar Método de Pagamento</a></li>
                        </ul>
                    </li>
                </ul>

                    <form class="d-flex col-sm-3" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control btn-outline-success" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="button-addon2">
                            <button class="btn btn-outline-success btn_bg custom_place" type="button" id="button-addon2"> 
                                <img src="imagens/lupa.png" alt="lupa" width="25px"> 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container d-flex justify-content-center align-items-center">
            <img src="imagens/bg_eureka.png" alt="bgEureka" class="img-fluid mx-auto" style="max-width: 25%; height: auto;">
        </div>
            <div class="container text-center txt_color-lead">
                <p class="fw-medium txt_eureka mb-0">Eureka!</p>
                <p class="lead fw-medium txt_navbar mb-5">Aqui, sua mente floresce de verdade</p>
        </div>

        <div class="container sm overflow-hidden text-center outline-secondary">
            <div class="row gx-3">
                <div class="col">
                    <div class="p-3 text-box txt-letra mt-3 mb-3">Prepare-se</div>
                </div>
                <div class="col">
                    <div class="p-3 text-box txt-letra mt-3 mb-3">Estude</div>
                </div>
                <div class="col">
                    <div class="p-3 text-box txt-letra mt-3 mb-3">Suceda!</div>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </header>

<div class="container-md">
    <div class="row gx-2 align-items-center">
        <!-- Coluna da imagem -->
        <div class="col-md-6">
            <div class="container mt-3 px-2">
                <img src="imagens/exemplo_descricao.png" alt="fundo_descricao" class="img-fluid d-block">
            </div>
        </div>

        <!-- Coluna do texto -->
        <div class="col-md-6">
            <div class="p-3 anima">
                <p class="h1 fw-bold">Quem Somos?</p>
                <p class="mt-3">A Eureka é uma empresa criada em NNNN com o objetivo de auxiliar estudantes em preparação para vestibulares, concursos, entre outros.</p>
                <p class="mt-3">Tendo em mente a possível dificuldade que alguns estudantes podem encontrar para se preparar ao longo do caminho, nós oferecemos um contato mais direto entre quem quer ensinar e quem deseja aprender, permitindo que professores personalizem cursos próprios e ofereçam aos alunos dispostos a completá-los.</p>
                <p class="mt-3">Procuramos viabilizar conteúdo rápido para um "intensivão" antes do momento-chave tão aguardado. A conexão e comunicação direta entre alunos e professores é algo que falta no estudo individual, e como nem todos podem pagar ou ir em um cursinho presencial, nossa plataforma se torna uma opção viável para todos os lados.</p>
            </div>
        </div>
    </div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>

<form action="#" method="POST">
    <div class="container-lg mt-5 mb px-3">
        <div class="row gx-4">
            <div class="col col-lg-8">
                <label for="dados-cadastro" class="form-label"> Usuário e Email: </label>
                <div class="input-group mb-3">
                    <span class="input-group-text span-style" id="campo-email"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg> 
                    </span>
                    <input type="text" class="form-control input-style" placeholder="Email" aria-label="email" aria-describedby="campo-email" id="campo-email">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text span-style" id="campo_usuario"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control input-style" placeholder="Nome de Usuário" aria-label="nome de usuario" aria-describedby="campo-usuario" id="campo-usuario" style="border-radius: 0px 15px 15px 0px;">
                    <p class="gx-2 px-2"></p>
                    <span class="input-group-text span-style" id="campo_apelido" style="border-radius: 7px 0px 0px 7px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control input-style" placeholder="Apelido (Nickname)" aria-label="Apelido usuário" aria-describedby="campo-apelido" id="campo-apelido"> 
                </div>
                
                <div class="mb-3">
                    <label for="dados-sociais" class="form-label">Redes Sociais:</label>
                    <div class="input-group">
                        <span class="input-group-text span-style" id="campo-insta">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="margin-right: 5px;">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg>
                            instagram.com/(usuario)/ 
                        </span>
                        <input type="text" class="form-control input-style" id="campo-insta" aria-describedby="campo-insta">
                    </div>
                    <p class="mb-3 mt-3"></p>
                    <div class="input-group">
                        <span class="input-group-text span-style" id="campo-zap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" style="margin-right: 4px;">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg> 
                        </span>
                        <input type="tel" class="form-control input-style" id="campo-zap" placeholder="(XX) XXXXX-XXXX" pattern="\(\d{2}\) \d{5}-\d{4}" aria-describedby="campo-zap" style="border-radius: 0px 15px 15px 0px;" required> <!---->
                        <div class="invalid-feedback">
                            Por favor, insira um telefone válido no formato (XX) XXXXX-XXXX.
                        </div>
                    </div>
                    <div class="form-text" style="font-style: italic;" id="sub-Opcional">(opcional)</div>
                </div>
                
                <label for="status-plataforma" class="form-label">Você deseja:</label>
                <div class="form-check">
                    <input class="form-check-input input-style" type="radio" name="status" id="check_estudante" value="estudante" required>
                    <label class="form-check-label" for="check_estudante">Ser Estudante</label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input input-style" type="radio" name="status" id="check_professor" value="professor" required>
                    <label class="form-check-label" for="check_professor">Ser Professor</label>
                </div>

                <div class="form-group">
                    <label for="usuario-idade" class="form-label d-inline"> Sua Idade: <span id="valor_faixa"><thin>50</thin></span> </label>
                    <input type="range" class="form-range " min="0" max="100" step="1" id="valor_Idade" value="50">
                </div>
                <div class="form-text mb-4" style="font-style: italic;" id="auxilo-1"> (mova a barra para alterar) </div>

                <div class="input-group mb-3">
                    <span class="input-group-text fw-medium span-style">Senha:</span>
                    <input type="password" class="form-control input-style" aria-label="senha" id="senha" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text fw-medium span-style">Confirmar Senha:</span>
                    <input type="password" class="form-control input-style" aria-label="confirma-senha" id="confirma-senha" required>
                </div>

                <button type="submit" class="btn btn-outline-enviar text-center h2 d-block mx-auto" id="submit"> Enviar Cadastro
                </button>
            </div>
            <div class="col col-sm-4 border anima position-sticky " style="top: 20px;">
                <p class="display 1 txt_eureka text-center " style="font-size: 30px;">Cadastre-se Conosco!!</p>
                <hr style="color: rgba(134, 111, 8, 0.76); height: 5px;">
                <p class="p-3 text-center"> Com seu cadastro em nossa plataforma podemos realizar a busca otimzada de como estudar e por onde começar</p>
                <p class="p-3 text-center"> Além disto, suas informações nos permitem implementar ainda mais nosso escopo de ensino, caso pretenda se cadastrar como professor e montar um curso em nossa plataforma é obrigatório preencher todos os campos.</p>
            </div>
        </div>
    </div>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>

<footer style="background-color:rgb(84, 1, 95); padding: 20px; text-align: center; border-top: 1px solid #e0e0e0;">
    <div class="container">
        <!-- Links de Navegação -->
        <nav>
            <ul style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 15px;">
                <li><a href="#sobre" style="text-decoration: none; color:rgb(255, 252, 61);">Sobre</a></li>
                <li><a href="#servicos" style="text-decoration: none; color:rgb(255, 252, 61);">Serviços</a></li>
                <li><a href="#contato" style="text-decoration: none; color:rgb(255, 252, 61);">Contato</a></li>
                <li><a href="#politica" style="text-decoration: none; color:rgb(255, 252, 61);">Política de Privacidade</a></li>
            </ul>
        </nav>

        <!-- Informações de Contato -->
        <p style="margin-top: 15px; font-size: 14px; color:rgb(255, 255, 255);">
            Entre em contato: <a href="mailto:eduardospteodoro@gmail.com" style="color:rgb(255, 252, 61);">eduardospteodoro@gmail.com</a> | Telefone: (00) 00000-0000
        </p>

        <!-- Redes Sociais -->
        <div style="margin-top: 15px; color: #fffc3d">
            <a href="https://facebook.com" target="_blank" style="margin-right: 10px;">
                <img src="https://img.icons8.com/ios-filled/24/000000/facebook-new.png" alt="Facebook">
            </a>
            <a href="https://twitter.com" target="_blank" style="margin-right: 10px;">
                <img src="https://img.icons8.com/ios-filled/24/000000/twitter.png" alt="Twitter">
            </a>
            <a href="https://instagram.com" target="_blank" style="margin-right: 10px;">
                <img src="https://img.icons8.com/ios-filled/24/000000/instagram-new.png" alt="Instagram">
            </a>
            <a href="https://linkedin.com" target="_blank">
                <img src="https://img.icons8.com/ios-filled/24/000000/linkedin.png" alt="LinkedIn">
            </a>
        </div>

        <!-- Nota de Copyright -->
        <p style="margin-top: 20px; font-size: 12px; color:rgb(255, 255, 255); margin-bottom: 10px"> 
            &copy; 2025. Desenvolvido por Eduardo Silva Pinheiro Teodoro
        </p>
    </div>
</footer>

<script>

    // Validação de senha
    document.addEventListener('DOMContentLoaded', () => {
    function confirmaSenha() {
        const senha = document.querySelector('#senha');
        const confirmaSenha = document.querySelector('#confirma-senha');

        if (senha.value !== confirmaSenha.value) {
            confirmaSenha.setCustomValidity('As senhas não coincidem.');
        } else {
            confirmaSenha.setCustomValidity('');
        }
    }

    const confirmaSenha_campo = document.querySelector('#confirma-senha');
    confirmaSenha_campo.addEventListener('input', confirmaSenha);

});
    
    // Atualização dinâmica da idade
    (function idadeDinamica() {
        const valor_faixa = document.getElementById('valor_faixa');
        const valor_Idade = document.getElementById('valor_Idade');

        if (valor_faixa && valor_Idade) {
            valor_Idade.addEventListener('input', () => {
                valor_faixa.innerHTML = `<thin>${valor_Idade.value}</thin>`;
            });
        }
    })();

</script>

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"  
      crossorigin="anonymous">
    </script>
  </body>  
</html>


