<?php

class Aluno{
    private $ra;
    private $nome;
    private $sexo;
    
    public function getRa() {
        return $this->ra;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setRa($ra) {
        $this->ra = $ra;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }



}