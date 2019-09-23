<?php 

 $file  = "./percentage.txt";
 $number = file_get_contents($file);
 if (!isset(explode(".", $number)[1])){
    $ran = mt_rand(1,100);
    $rand = $ran;
 }
 else if (strlen(explode(".", $number)[1])){
     $int = strlen(explode(".", $number)[1])+2;
     $ran = mt_rand(1, pow(10, $int));
     $rand = $ran;
 }
if (!is_numeric($number)) {
    echo "percentage must have number";
}

else if ( $rand <= $number* pow(10 , strlen(explode(".", $number)[1]))  ){
    echo "correct <br />\n";
    echo "random is ".$rand."<br />\nmade by jongwon ";
    echo "<br />\npercent : ".$number. " % ";
}
else if ($rand >= $number* pow(10 , strlen(explode(".", $number)[1]))){
    echo "fail <br />\n";
    echo "random is ".$rand."<br />\n made by jongwon";
    echo "<br />\npercent : ".$number. " % ";
}
   



?>