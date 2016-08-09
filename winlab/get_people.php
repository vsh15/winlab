<?php 
$Refresh = 6000;
$a = array();
$b = array();
$file = fopen("people.txt","r");

#while(! feof($file))
  {
  	$var = fgets($file);
  	$var1 = explode(';',$var);
  	
  	$length=count($var1);

  	echo $length;

  	for($i=0;$i<$length;$i++)
  	{
  		if($i%2==0)
  		{
  			array_push($a, $var1[$i]);
  		}
  		else
  			array_push($b, $var1[$i]);

  	}
  }

fclose($file);

echo json_encode($a);
echo json_encode($b);
?>