<?php

$x=array(1,2,3,4,5,6,7,8,9);
$odd=[];


foreach($x as $v){
    if($v%2!=0){
     $odd[]=$v;
    }
}
 var_dump( $odd);

$larg=[
    "Hi",
"Hello",
"Welcome",
"Good"
];
$max="";
echo"<br>";
foreach($larg as $f){
    if((strlen($f))>(strlen($max))){
        $max=$f;
    }
    
}
echo $max."<br>";
$a=[1,2,3];
$b=[2,4,6,8];
$multi=[];
$loop = count($a) > count($b)? $a : $b;
foreach ($loop as $key => $value){
    $multi[]=(($a[$key]??0) * ($b[$key])??0);
}
var_dump($multi);

function fact($n){
    $sum=1;
    for($i=1;$i<=$n;$i++){
        $sum*=$i;
    }
    echo "The Factorial Is : $sum";
}
echo"<br>";
function prim($pr){
    for($i=($pr/2);$i>=1;$i--){
    if($pr%$i==0){
        return "The Number $pr Is Not Prime";
        
    }
        
        
    
}
return "The Number $pr Is Prime";
}
echo prim(51);
echo"<br>";
fact(4);

?>