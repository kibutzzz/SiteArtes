<div class="card mt-4" >
            <!--<img class="card-img-top" src="#" alt="foto do projeto">-->
    <div class="card-body">
        <h5 class="card-title"><?= $project['project_details']['nome'] ?></h5>
        <img src="data:image/jpg;base64,<?= base64_encode($project['image']['imagem']) ?>" 
            class='img-fluid' alt="">
        <p class="card-text text-justify"><?= $project['project_details']['resumo'] ?></p>
        <p class="card-text"><?= $project['project_details']['data_cadastro'] ?></p>
        
        
    </div>
</div>
