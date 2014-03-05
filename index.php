<!DOCTYPE html>

<html>
    <head>
        <title>Sistema de Alunos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link   href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid col-md-1">
                <p>
                    <a href="addAluno.html" class="btn btn-large">Cadastrar Novo Aluno</a>
                    <a href="addTurma.html" class="btn btn-large">Cadastrar Nova Turma</a>
                    <a href="addAlunoTurma.html" class="btn btn-large">Vincular alunos e turmas</a>
                </p>
            </div>

            <div class="row-fluid">
                <h3>Lista de Turmas</h3>
                <hr />
                <?php
                include './EscolaDB.php';

                EscolaDB::printTurmasTable();
                ?>

            </div>
        </div>


    </body>
</html>
