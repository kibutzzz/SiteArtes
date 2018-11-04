
    <?php
    if($controller->hasProjects()){
        foreach ($controller->getProjects() as $project) {
            ?>

            <div class="card mt-4" >
                <!--<img class="card-img-top" src="#" alt="foto do projeto">-->
                <div class="card-body">
                    <h5 class="card-title"><?= $project['nome'] ?></h5>
                    <p class="card-text limited-lines text-justify"><?= $project['resumo'] ?></p>
                    <a href="../view/detalhes-projeto.php?id=<?= $project['id'] ?>" class="btn btn-primary">Visualizar projeto</a>
                </div>
            </div>

            <?php
        }
    } else {
        ?>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Nenhum projeto Aprovado</h5>
                <p class="card-text text-justify">Oops, Parece que nenhum projeto foi aprovado ainda</p>
                <a href="../view/cadastro-de-projetos.php" class="btn btn-primary">Cadastre um projeto</a>
            </div>
        </div> 

        <?php
    }
    ?>
