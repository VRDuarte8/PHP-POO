<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();
            $p1->abrirConta("CC");
            $p1->setDono("Vinicius");
            $p1->setNumConta(1234);
            print_r($p1);
            $p1->depositar(800);
            $p1->sacar(3000);
            $p1->pagarMensal();
            $p1->fecharConta();
            echo '<p>------------------------------</p>';
            $p2 = new ContaBanco();
            $p2->abrirConta("CP");
            $p2->setDono("Isabella");
            $p2->setNumConta(4321);
            print_r($p2);
            $p2->sacar(150);
            $p2->pagarMensal();
            $p2->fecharConta();
            $p2->depositar(20);
            $p2->fecharConta();
            $p2->depositar(50);
        ?>
        </pre></body>
</html>
