<?php
$a=49;
if($a%7 == 0 || $a%3 == 0){
    echo "True <br>";
}

$n1=2; $n2=5;$n3=1;
if($n1>$n2 && $n1>$n3){
    echo"$n1 is the largest number";
}elseif($n2>$n1 && $n2>$n3){
    echo"$n2 is the largest number";
}elseif($n3>$n2 && $n3>$n1){
    echo"$n3 is the largest number";
}
echo"<br>";
$a1=50;
$a2=180;

$a3=100-$a1;
$a4=100-$a2;
if($a3<0){
    $a3*=-1;
}
if($a4<0){
    $a4*=-1;
}
if($a3>$a4){
    echo"$a2 is near to 100";
}elseif($a4>$a3){
    echo"$a1 is near to 100";
}else{
    echo"0!!";
}
$n01 = 25;
$n02 = 28;
echo"<br>";
if($n01 >= 20 && $n01<=30 && $n02 >=20 && $n02<=30){
    if($n01>$n02){
        echo"$n01 is greater than $n02";
    }else{
        echo"$n02 is greater than $n01";
    }
}else{
    echo"The number not in the range!";
}
echo"<br>";
$text='I have 200';
$count=0;
for($i=0;$i<=strlen($text)-1;$i++){
    if($text[$i] >=0 && $text[$i] <=9 ){
        $count++;
    }
}
echo"Number is $count <br>";

$n4=121;
$sum4=0;
for($i=0;$i<3;$i++){
    $n5=$n4%10;
    $sum4+=$n5;
    $n4/10;
}
echo"The sum is $sum4 <br>";

$string="Welcome !";
$rev="";
for($i=strlen($string)-1;$i>=0;$i--){
    $char=$string[$i];
    $rev.=$char;
    
}
echo $rev;
?>
