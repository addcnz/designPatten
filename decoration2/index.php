<?php

$pathinfo = pathinfo(__FILE__);
$files = scandir($pathinfo['dirname']);
foreach($files as $file){
    if(!preg_match("/^.*\.php$/", $file) || $file==$pathinfo['basename']){
        continue;
    }
    include $pathinfo['dirname']."/".$file; //echo $pathinfo['dirname']."/".$file."<br/>";
}


$drink = new Decaf();

$drink = new Milk($drink);
//$drink = new Milk($drink);
 $drink = new Whip($drink);

echo "您点了：".$drink->getDescription();  
echo "<br/>";
echo "花费：".$drink->cost();
