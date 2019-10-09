









<?php
spl_autoload_register(function($className)
{
    $namespace=str_replace("\\","/",__NAMESPACE__);
    $className=str_replace("\\","/",$className);
    $class= "../classes/".(empty($namespace)?"":$namespace."/")."{$className}.php";
    include_once($class);
});


include 'includes.html';

?>

<!DOCTYPE html>
<html>
<head>
	<title>dcfed</title>
</head>
<body>

<?php
$db1 = new DB("demoproject");
$colz= $db1->getColumns("brands");
?>

<div style="width:90%;margin: 20px auto"> 
<table class="table table-bordered table-striped ">
<thead><tr>

<?php foreach ($colz as $key => $value) {
	echo "<th>$value</th>";
}  ?>

</tr></thead>
<tbody>



<?php

$dbh1 = $db1->getDBHandler();

 $stmt1 = $dbh1->query("SELECT * FROM brands");
 $stmt1->setFetchMode(PDO::FETCH_ASSOC);
 $res1 = $stmt1->fetchAll();

foreach ($res1 as $key => $value) {
	echo "<tr>";
	foreach ($value as $k => $v) {
		echo "<td> $v  </td>";
	}
	echo "</tr>";
}


echo "</tbody>";
echo "</table></div>";


 ?>






</body>
</html>
















 //echo "<pre>";

//print_r($res1);

?>



