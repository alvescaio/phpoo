<?php

class Turma{
    private $sigla;
    private $periodo;
    
    private $alunos = array();
    
    public function getSigla() {
        return $this->sigla;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function addAluno(Aluno $a){
        $this->alunos[] = $a;
    }
    
    public function removeAluno($ra){
        
    }

    public function getAlunos() {
        return $this->alunos;
    }

    public function setAlunos($alunos) {
        $this->alunos = $alunos;
    }



    
}