<?php //switch se aplica quando se há uma variável e executa vários situações diferentes

$tipo = 'foto';

    switch($tipo){
        case 'foto':
            echo 'Exibindo foto';
        break;
        case 'video':
            echo 'Exibindo video';
        break;
        case 'texto':
            echo 'Exibindo texto';
        break;
    }
    
?>