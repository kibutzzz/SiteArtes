<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
    <a class="navbar-brand" href="./pagina-inicial.php"A> Parede</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="feed-projetos.php">Feed de Projetos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./cadastro-de-projetos.php">Cadastro</a>
            </li>    
            <li class="nav-item">
                <a class="nav-link" href="./flyer.php">Flyer</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="./jingle.php">Jingle</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="https://docs.google.com/document/d/1tUc9BypTQmDSbhB7aUbSrPbkGrOSJ6GI3bosB_QF_Nc/edit?usp=sharing">Regras</a>
            </li>   
            
        </ul>
        <ul class="navbar-nav ">
            <?php
            if ($controller->session_handler->getValue('logado')) {
                ?> 
                <li class="nav-item">
                    <a class="nav-link" href="./administracao.php">Área administrativa</a>
                </li>
                <?php
            }
            ?>
            <li class="nav-item">
                <?php
                if ($controller->session_handler->getValue('logado')) {
                    ?>
                    <a class="nav-link" href="./logout.php">sair</a>
                    <?php
                } else {
                    ?>
                    <a class="nav-link" href="./login.php">Login</a>
                    <?php
                }
                ?>
            </li>
        </ul>
    </div>
</nav>