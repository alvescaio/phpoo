<?php
require_once './Aluno.php';
require_once './TurmaDB.php';
require_once './Aluno.php';
require_once './Turma.php';

if (isset($_POST['sigla']) && isset($_POST['ra'])) {
    
    $a = new Aluno();
    $a->setRa($_POST['ra']);
    
    $t = new Turma();
    $t->setSigla($_POST['sigla']);
        
    $tDB = new TurmaDB();
    $tDB->cadastraAluno($t, $a);
    header('Location: index.php');
  
}
