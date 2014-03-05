<?php

class Escola{
    private $alunos = array();
    private $turmas = array();
    
    public  function addAluno(Aluno $a) {
        $this->$alunos = $a;
    }

    public  function removeAlunos($ra) {
        //self::$alunos = $alunos;
    }
    
    public  function addTurma(Turma $t){
        $this->turmas[] = $t;
    }

    public  function removeTurma($sigla) {
        //self::$alunos = $alunos;
    }
    
    

    public function setTurmas($turmas) {
        $this->turmas = $turmas;
    }

    public function getTurmas() {
        return $this->turmas;
    }


    
}
