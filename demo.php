<?php

$link   = mysql_connect('localhost', 'root', 'ndot');
$result = mysql_query('SHOW STATUS', $link);
while ($row = mysql_fetch_assoc($result)) {
    //echo $row['Variable_name'] . ' = ' . $row['Value'] . "<br>";
}

$status = explode('  ', mysql_stat($link));
echo '<pre>';
print_r($status);
echo '</pre>';
//phpinfo();

?>


<?php

//date_default_timezone_set('America/Chicago');


  /*for ($j = 1; $j <= 60; $j+=15){
	  if($j=='31')
	  {
		  exit;
	  }
    //inside the inner loop
    echo $j;
    echo '<br>';
    echo $i;
    sleep(15);
  }*/
  

?>
