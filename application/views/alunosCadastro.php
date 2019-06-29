<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">

        <a href="http://localhost/LucasBD - Copia/home.php" style="color: #588c7e;">Voltar</a><br><br>
        <h1>Tabela de Alunos</h1>
        <a href="http://localhost/LucasBD - Copia/professor.php">Professores</a><br><br>

        <form method="post" class="form-inline" style= "text-align:center">

            <div class="form-group">

                <input name="todos" type="submit" value="Mostrar todos"
                       class="btn btn-primary"> <p>

                    <br></br>

                    <input name = "emp_id" class="form-control" type = "text" id = "emp_id" placeholder="Digite o ID">
                    <input name = "delete" class="btn btn-danger" type = "submit" id = "delete" value = "Deletar Aluno">


            </div>

            <div class="form-group">

                <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
                <input name="pesquisar" type="submit" value="Pesquisar por nome" class="btn btn-success">


            </div>

            <br></br>

            <input name = "add" type = "submit" id = "add" value = "Cadastrar alunos" class="btn btn-warning"> <p>
        </form>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>