
    <?php
    foreach ($controller->getProjects() as $project) {
        ?>

        <div class="card mt-4" >
            <!--<img class="card-img-top" src="#" alt="foto do projeto">-->
            <div class="card-body">
                <h5 class="card-title"><?= $project['nome'] ?></h5>
                <p class="card-text"><?= $project['resumo'] ?></p>
                <a href="../view/detalhes-projeto.php?id=<?= $project['id'] ?>" class="btn btn-primary">Visualizar projeto</a>
            </div>
        </div>

        <?php
    }
    ?>
