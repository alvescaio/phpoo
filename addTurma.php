<?php

include './Aluno.php';
include './Turma.php';
include './TurmaDB.php';

if (isset($_POST['sigla'])) {
    
    $t = new Turma();
    $t->setSigla($_POST['sigla']);
    $t->setPeriodo($_POST['periodo']);
   
    $tDB = new TurmaDB();
    $tDB->cadastraTurma($t);
    header('Location: index.php');
}
