<?php
    $nome = "Eduardo";
    $idade = 16;
    echo "Meu nome é ".$nome.", e tenho ".$idade." anos.";
    echo "<hr>";
    echo "<center><h2>SENAI - DEVELOPER</h2></center>";
    echo "<hr>";
    $valor1 = 8;
    $valor2 = 11;
    echo "A soma dos valores foi:".$valor1+$valor2."<br>";
    echo "A subtração dos valores foi:".$valor1-$valor2."<br>";
    echo "A multiplicação dos valores foi:".$valor1*$valor2."<br>";
    $result = $valor1/$valor2;
    $numformatado = number_format($result, 2, ',', '.');
    echo "A divisão dos valores foi:".$numformatado;
    echo "<hr>";
    $datahora = date('d/m/Y H:i:s');
    echo "Data atual: ".$datahora;
    echo "<hr>";
    $data1 = new datetime('2025-01-01');
    //data: 2025-01-01 22:30:23 = Y-m-d H:i:s
    $data2 = new datetime('2025-08-06');
    $intervalo= $data1 ->diff($data2);
    echo "a diferença em anos:" .$intervalo->y."<br>";
    echo "a diferença em meses" .$intervalo->m."<br>";
    echo "a diferença em dias" .$intervalo->days."<br>";
    $horas = $intervalo->days*24;
    echo "a diferença em horas" .$intervalo->h."<br>";
    echo "a diferença em minutos" .$intervalo->m."<br>";
    echo "a diferença em segundo" .$intervalo->s."<br>";
    echo "<hr>";
    echo "<h2>função condicional - IF</h2>";
    $a = 3;
    $b = 5;
    if ($a > $b){
    echo "a é maior que b!";
    } else {
    echo "b é maior que a!";
    }
    echo "<br>saiu do IF";
    ?>