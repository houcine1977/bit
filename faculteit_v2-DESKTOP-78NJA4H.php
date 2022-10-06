
<?php
echo "Kies een getal: ";

$a = (int)readline();
$b = 1;
for ($i = 1; $i <=$a; $i++) {
    $b = $b * $i;}
    echo "$b" . PHP_EOL;
 echo "Wat is jouw minimaal waarde? ";    
$c = (int)readline(); 
while ($b < $c){
  
   for ($i = 1;$i <= $a; $i++){
    $b =$b * $i; 
    $i++;
    

}echo  $b ;

}  

    
