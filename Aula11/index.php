<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            require_once 'Professor.php';
            require_once 'Visitante.php';
            require_once 'Tecnico.php';
            
            $v = new Visitante();
            $a = new Aluno();
            $b = new Bolsista();
            $p = new Professor();
            $t = new Tecnico();
            
            $v->setNome("Matheus");
            $v->setIdade(22);
            $v->setSexo("M");
            
            $a->setNome("Vinicius");
            $a->setIdade(21);
            $a->setSexo("M");
            $a->setMat(1234);
            $a->setCurso("Analise e Desenvolvimento de Sistemas");
            
            $b->setNome("Isabella");
            $b->setIdade(18);
            $b->setSexo("F");
            $b->setMat(4321);
            $b->setCurso("Medicina");
            $b->setBolsa(6354.15);
            
            $p->setNome("Aline");
            $p->setIdade(40);
            $p->setSexo("F");
            $p->setSalario(5469.54);
            $p->setEspecialidade("Matemática");
            $p->receberAumento(500);
            
            $t->setNome("Ana");
            $t->setIdade(17);
            $t->setSexo("F");
            $t->setMat(6546);
            $t->setCurso("Informática");
            $t->setRegistroProfissional(8484);
            
            print_r($v);
            echo "<br><br>";
            print_r($a);
            $a->pagarMensalidade();
            echo "<br><br>";
            print_r($b);
            $b->pagarMensalidade();
            echo "<br><br>";
            print_r($p);
            echo "<br><br>";
            print_r($t);
            $t->pagarMensalidade();
            $t->praticar();
            
        ?>
        </pre>
    </body>
</html>
