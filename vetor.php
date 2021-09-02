<?php

$despesas[0] = 345.55; 
$despesas[1] = 135; 
$despesas[2] = 600; 
$despesas[3] = 900.00; 
$despesas[4] = 400; 

for($i=0;$i<5;$i++){
    echo $despesas[$i] . '<br>';
}

unset($despesas);//Destroe o vetor
    
$despesas['mercado'] = 345.55; 
$despesas['estacionamento'] = 135; 
$despesas['alimentacao'] = 600; 
$despesas['bar'] = 900; 
$despesas['educacao'] = 400; 
//Os indices se tornam os nomes

echo "<br>Despesas<br>";

foreach( $despesas as $indice => $valor){
    //para cada iteração, o $indice tera tal valor
    //$despesas(array) as $indice(indice do array) => $valor (valor atribuido naquele indice)
    echo "$indice: R$ " . number_format($valor, 2, ',', '.') . "<br>";
    // (number_format), formata aquele valor, separar milhar e etc
    // number_format($valor, 2, ',', '.'), valor/ duas casas decimais/separadas por virgula
}