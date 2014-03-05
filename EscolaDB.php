<?php

include './conexao.php';
include './Aluno.php';
include './Turma.php';
include './Escola.php';
include './TurmaDB.php';
include './AlunoDB.php';

class EscolaDB {

    public static function loadTurmas() {
        $turmas = new TurmaDB();
        $escola = new Escola();
        $turmas->loadTurmas($escola);
        return $escola;
    }

    public static function printTurmasTable() {
        $escola = EscolaDB::loadTurmas();

        foreach ($escola->getTurmas() as $turma) {
            echo '<h2>' . $turma->getSigla() . '</h2>';

            echo '<table class="table table-striped table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>RA</th>';
            echo '<th>Nome</th>';
            echo '<th>Sexo</th>';
            echo '</tr>';
            echo ' </thead>';
            echo '<tbody> ';

            foreach ($turma->getAlunos() as $aluno) {
                echo '<tr>';
                echo '<td>' . $aluno->getRa() . '</td>';
                echo '<td>' . $aluno->getNome() . '</td>';
                echo '<td>' . $aluno->getSexo() . '</td>';
                echo '</tr>';
            }


            echo '</tbody>';
            echo '</table>';
        }
    }

}
