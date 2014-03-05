<?php

require_once './conexao.php';

class AlunoDB {

    private $conexao;

    public function cadastraAluno(Aluno $a) {

        $this->conexao = new Conexao();

        $sql = "INSERT INTO `unia2`.`aluno` (`ra`, `nome`, `sexo`) VALUES ({$a->getRa()}, '{$a->getNome()}', '{$a->getSexo()}')";
        $this->conexao->query($sql);
    }

    public function loadAlunos(Turma $t) {
        $this->conexao = new Conexao();
        
        $sql = "select aluno.ra, nome, sexo from aluno inner join pertence on aluno.ra = pertence.ra where pertence.sigla = '{$t->getSigla()}';";
        $r = $this->conexao->query($sql);
        
        while ($row = mysqli_fetch_array($r)) {
            $a = new Aluno();
            
            echo$a->getRa();
            
            $a->setRa($row['ra']);
            $a->setNome($row['nome']);
            $a->setSexo($row['sexo']);
            $t->addAluno($a);
            
            
        }
       
    }

}
