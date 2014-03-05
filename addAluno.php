<?php
include './Aluno.php';
include './AlunoDB.php';

if (isset($_POST['ra'])) {
    
    $a = new Aluno();
    $a->setRa($_POST['ra']);
    $a->setNome($_POST['nome']);
    $a->setSexo($_POST['sexo']);
   
    $aDB = new AlunoDB();
    $aDB->cadastraAluno($a);
    header('Location: index.php');
}

