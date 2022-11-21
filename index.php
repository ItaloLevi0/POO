<?php
    require_once("Pessoa.php");
    require_once("Sala.php");


    $pessoa = new Pessoa("Italo", 18);
    echo "nome:". $pessoa->nome;
    echo "<br>";
    echo "salario: ". $pessoa -> getSalario();
    echo "<br>";

    $sala = new Sala("Sou-Dev");
    echo "sala: ". $sala->nome;
    $sala->alunos[] = $pessoa->nome;

    var_dump($sala->alunos);

   