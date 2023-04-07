<?php

session_start();
if(isset($_SESSION['tasksArray'])){
    //se a session já estiver com um array setado, nada será executado
}
else{$_SESSION['tasksArray'] = array(); //caso contrário, criará um array
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "Nome: ".$_POST['name']."<br>";
    echo "Detalhes: ".$_POST['details']. "<br><br>";

    array_push($_SESSION['tasksArray'], $_POST['name']);
}

print_r ($_SESSION['tasksArray']);