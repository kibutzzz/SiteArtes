<form action="cadastro-de-projetos.php?step=1" method="POST">
    <h2 class="mb-3">Cadastro do projeto</h2>
    <div class="form-group row">
        <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="Nome do projeto" name="nome_do_projeto" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="selectTurma">Turma</label>
        <div class="col-sm-10">
            <select class="form-control" name="turma_do_projeto">
                <option>Informática 1° ano</option>
                <option>Informática 2° ano</option>
                <option>Informática 3° ano</option>
                <option>Informática 4° ano</option>
                <option>Eletromecânica 1° ano</option>
                <option>Eletromecânica 2° ano</option>
                <option>Eletromecânica 3° ano</option>
                <option>Eletromecânica 4° ano</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="resumo">Resumo:</label>
        <textarea class="form-control" rows="10" name="resumo_do_projeto" required></textarea>
    </div>
    
    <div class="form-group row">
        <label for="inputNumeroParticipantes" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="number" min="1" max="4" class="form-control"  placeholder="numero de participantes" name="numero_de_participantes" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Proximo passo</button>
        </div>
    </div>
    
</form>  
