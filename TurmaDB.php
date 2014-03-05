<?php

require_once './conexao.php';
require_once './Aluno.php';
require_once './Turma.php';

class TurmaDB {

    private $conexao;

    public function cadastraTurma(Turma $t) {

        $this->conexao = new Conexao();


        //$sql = "INSERT INTO `unia2`.`aluno` (`ra`, `nome`, `sexo`) VALUES ({$t->getRa()}, '{$t->}', 'masculino');"
        $sql = "INSERT INTO `unia2`.`turma` (`sigla`, `periodo`) VALUES ('{$t->getSigla()}', '{$t->getPeriodo()}')";

        $this->conexao->query($sql);
    }
    
    public function cadastraAluno(Turma $t, Aluno $a){
         $this->conexao = new Conexao();
         $sql = "INSERT INTO pertence VALUES ({$a->getRa()},  '{$t->getSigla()}')";
         $this->conexao->query($sql);
    }

    public function loadTurmas(Escola $e) {
        $this->conexao = new Conexao();

        $sql = "SELECT * FROM turma";
        $r = $this->conexao->query($sql);
        
        while ($row = mysqli_fetch_array($r)) {
            $t = new Turma();
            $t->setSigla($row['sigla']);
            $t->setPeriodo($row['periodo']);
            
            $a = new AlunoDB();
            $a->loadAlunos($t);
            $e->addTurma($t);
        }
        
//        foreach ($e->getTurmas() as $turma) {
//            $a = new AlunoDB();
//            $a->loadAlunos($turma);
//        }
        
            
       
    }

}
