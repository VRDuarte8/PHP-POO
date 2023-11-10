<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Funcionario.php';
            require_once 'Professor.php';
            
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();
            
            $p1->setNome("Pedro");
            $p1->setSexo("M");
            $p1->setIdade(18);
                    
            $p2->setNome("Maria");
            $p2->setSexo("F");
            $p2->setIdade(15);
                    
            $p3->setNome("Claudio");
            $p3->setSexo("M");
            $p3->setIdade(40);
                    
            $p4->setNome("Fabiana");
            $p4->setSexo("F");
            $p4->setIdade(25);
            
            $p2->setCurso("Informática");
            $p3->setSalario(2500.25);
            $p4->setSetor("Estoque");
            
            print_r($p1);
            echo "<br><br>";
            print_r($p2);
            echo "<br><br>";
            print_r($p3);
            echo "<br><br>";
            print_r($p4);
        ?>
        </pre>
    </body>
</html>
