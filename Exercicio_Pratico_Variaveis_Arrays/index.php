<?php //Exercício de Revisão Arrays em php

    $lista = [
        'nome' => 'Maurício',
        'idade' => '28',
        'atributos' => [
            'forca' => 60,
            'agilidade' => 80,
            'destreza' => 50
        ],
        'vida' => 1000,
        'mana' => 928,
    ];
    
    echo "Nome: ".$lista['nome']."<br>";    
    echo "Idade: ".$lista['idade']."<br>";
    echo "Força: ".$lista['atributos']['forca']."<br>";
    echo "Agilidade: ".$lista['atributos']['agilidade']."<br>";
    echo "Destreza: ".$lista['atributos']['destreza']."<br>";
    echo "Vida: ".$lista['vida']."<br>";    
    echo "Mana: ".$lista['mana']."<br>";

    echo '<pre>'; print_r($lista); echo '<pre/>'; //Visualização Array
?>