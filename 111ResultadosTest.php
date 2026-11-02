
<?
  
 $b=0;
  $arr[3][3];
  $cont = 0;
  $c =0;  
  $a = 0;
  $b=0;
  $e=0;

  while($a < 3)
  {
    for($b = 0;$b < 3;$b++)
    {
      $cont += 1;
      $arr[$a][$b] = $cont;
    }
    $a++;
  }
   for ($d=0; $d<3; $d++)
  {  
     for($e = 0; $e <3; $e++)
    {
       $c= $arr[$d][$e];
       echo  $c;
    }
  }
  print_r($arr);


?>