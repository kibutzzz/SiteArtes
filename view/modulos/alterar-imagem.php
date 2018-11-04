<h3 class="mb-3">Alterar imagem</h3>
<form action="../controllers/form-handlers/alterar-imagem.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_image" value="<?=$project["images"][0]["id"]?>">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Imagem atual</strong></label>
        <div class="col-sm-8">
        <img src="data:image/jpg;base64,<?= base64_encode($project['images'][0]['imagem']) ?>" 
            class='img-fluid' alt="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" ><strong>Imagem</strong></label>
        
        <div class="col-sm-8 ">
            <input type="file"  class="form-control " name="imagem" required>
        </div>
        
    
        <div class="col-sm-2">
            <button type="submit" class="btn btn-danger btn-block">Alterar</button>
        </div> 
    </div>
</form>
<hr>