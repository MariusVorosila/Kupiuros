<?php 

//gauti pinigu suma is imput field
Skaiciot($_POST["suma"]);

//apskaicioja kiek ir kokios kupiurus sudaro suma
function Skaiciot($moneystart){

$counter = 0;

//pinigu nominalai
while($counter == 0){
		
		//moneystart priskiriama gaunamai pinigu sumai
		$money = $moneystart;
		
            $e500 = floor($money / 500);//kiek kupiuru yra sumoje
            $money = $money % 500;//sumos liekana

            $e100 = floor($money / 100);
            $money  = $money % 100;

			$e50 = floor($money/50);
            $money = $money%50;

            $e20 = floor($money/20);
            $money = $money%20;

            $e10 = floor($money/10);
            $money = $money%10;

           $e5 = floor($money/5);
           $money = $money%5;

           $e1 = $money;
		   
           $counter++;
		   
}//while
	
	//sudedame koks minimalus kupiuru skaicius
	$kupiuros = $e500 + $e100 + $e50 + $e20 + $e10 + $e5 + $e1;
	
	$result  = "<h3>Kiek ir kokios kupiuros sudaro: " .$_POST["suma"]."&#8364;</h3>"
            . $e500 . " 500 euru vertes banknotas, </br>"
            . $e100 . " 100 euru vertes banknotas, </br>"
            . $e50 . " 50 euru vertes banknotas,</br>"
            . $e20 . " 20 euru vertes banknotas,</br>"
            . $e10 . " 10 euru vertes banknotas,</br>"
            . $e5 . " 5 euru vertes banknotas.</br>"
			. $e1 . " 1 euru vertes moneta.</br>";
			
    echo $result; 		
	echo "<h3> Minimalus kupiuru/motenu skaicius: </h3> ".$kupiuros;
}
?>



