<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="Estilos/login.css">
    <link rel="stylesheet" href="Estilos/Principal.css">
</head>

<body>
<header>
<header>
        <!--Cabeçalho-->
        <div class="cabecalho">
            <img href="index.html" src="Imagens/fatec_ra_campinas_itapira_br.png" alt="fateclogo" class="fateclogo">
            <a href="login.php" class="botaologin"><button type="submit" class="botaologin" >Login</button></a>
        </div>

        <!--Barra NAV-->
        <nav class="navegacao">
                <a href="index.php" class="letrasnav">Portal FAQ</a>
                <a href="https://siga.cps.sp.gov.br/aluno/login.aspx?"  class="letrasnav" target="_blank">SIGA</a> 
                <a href="https://fatecitapira.edu.br/#dsm" class="letrasnav" target="_blank">Cursos</a>
                <a href="https://fatecitapira.edu.br/docentes.html" class="letrasnav" target="_blank">Docentes</a>
                <a href="https://www.vestibularfatec.com.br/home/" class="letrasnav"  target="_blank">Vestibular</a>
                <a href="sobreoportal.php" class="letrasnav">Sobre o portal</a>
        </nav>
    </header>

    <!--Conteúdo-->
    <div class="main-login">

        <div class="left-login">
            <h1>Recupere a sua senha</h1>
            <img src="Imagens/thesis-animate.svg" alt="svg" class="left-login-image">
        </div>

        <form action="recuperarsenha-enviaremail.php" method="POST">

        <div class="right-login">
            <div class="card-login">

                <h1>Recuperar senha</h1>

                <div class="textfield">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="aluno@outlook.com">
                </div>

                <button type="button" onclick="validarLogin()" class="btn-login">Enviar</button>
        <form>
                
            </div>
        </div>
    </div>


    <footer>
            
            <img href="index.html" src="Imagens/fatec_ra_campinas_itapira_br.png" alt="fateclogo" class="fateclogofooter"> 
            
            <div class="fieldsetfooter">

                <div class="textofooter">
                    <p class="itensfooter">Este portal FAQ foi criado para fornecer aos alunos da Fatec de Itapira-SP, uma fonte</br>
                    centralizada e de fácil acesso de informações que respondem às dúvidas mais comuns sobre a escola no geral.
                    Ao compilar as perguntas mais frequentes e suas respostas correspondentes em um só lugar,
                    o portal ajuda a economizar tempo e melhorar a experiência dos alunos, reduzindo a necessidade dos mesmos procurarem as informações diretamente com a cordenação.</p>
                </div>

                <div class="linkcontato"> 
                        
                    <div class="linksrapidos"><p>
                        <ul><h4 id=linksrapidostitulo>Links rápidos</h4></ul>
                        <br>
                        <a href="index.php"><li>Portal FAQ</li></a>
                        <a href="sobreoportal.php"><li>Sobre o Portal</li></a>
                        <a href="https://fatecitapira.edu.br/#dsm"><li>Cursos</li></a>
                        <a href="https://fatecitapira.edu.br/docentes.html"><li>Docentes</li></a>
                        <a href="https://www.vestibularfatec.com.br/home/"><li>Vestibular</li></a></p>
                        <br>
                    </div>
                        
                    <div class="contatos">
                        <ul><h4>Contatos</h4></ul> 
                        <br>
                        <li>Telefones: (19) 3843-1996</li>
                        <li>Whatsapp: (19) 98933-6291 | (19) 3863-5210</li>
                        <li>E-mail: contato@fatecitapira.edu.br</li>
                     </div> 
                </div>
            </div>
                      
           
        <div class="endereco"><p><h4>Endereço</h4>Rua Tereza Lera Paoletti, 570/590, Jardim Bela Vista, 13974-080.</p>
            <iframe class="mapafooter" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.945465556066!2d-46.83702928784068!3d-22.43107832096058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8fe07cf78fddb%3A0x5e16e6e02b37ddc2!2sFatec%20Itapira%20-%20%22Dr.%20Ogari%20de%20Castro%20Pacheco%22!5e0!3m2!1spt-BR!2sbr!4v1687643789776!5m2!1spt-BR!2sbr" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
 
        </footer>

        <div class="copyrightbar">
            <p class="textcopy">Copyright © 2023 Fatec Itapira - Todos os Direitos Reservados</p>
        </div> 

    </body>
</html>