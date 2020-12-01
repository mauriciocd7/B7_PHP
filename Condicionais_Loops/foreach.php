<?php //Foreach 

    $lista = [
        'nome' => 'Maurício',
        'idade' => '28',
        'vida' => 1000,
        'mana' => 928,
    ];
    //Passa por todo o array.
    foreach($lista as $chave => $valor ){ 
        echo $chave." ".$valor."<br>";
    }

    
?>