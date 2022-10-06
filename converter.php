// make a BMI Calculator Using Raw PHP  

<?php  

echo "Calculating BMI Using Matric Measurement's";

echo PHP_EOL;

$age = readline('enter Your  Age- ');
$kg = readline('enter Your Wight in KG- ');
$hight = readline('enter Your Height in CM- ');


$BMI = $kg/($hight/100 * $hight/100);


echo "According to Your Information Your BMI is ",$BMI; 

echo PHP_EOL;

echo "Comments- \n";

if($BMI <= 18.4 ){
    echo "You are Under Weight";
}elseif($BMI < 18.5 || $BMI < 24.4 ){
    echo "You Have Normal Weight";
}elseif($BMI < 25 || $BMI < 39){
    echo "You are Over Weight. Try to lose weight !!";
}elseif($BMI > 40.5){
    echo "You are Obes. Obesity Level 01";
}else{
    echo "wrong input try again !!";
}




?>