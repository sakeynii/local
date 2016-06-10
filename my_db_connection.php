<?php
$host = "localhost";
$db_user = "wid_man";
$db_pass = "224998";
$db_name = "widget_corp";

$db_connect = mysqli_connect($host, $db_user, $db_pass, $db_name);
if(!$db_connect){
	echo mysqli_connect_error()."<br>";
	echo "(".mysqli_connect_errno().")";
	die("<br>Database connection faild.");
}

$query = "Select * from pages ";
$query .= "where visible = 1 ";
//$query .= "order by position asc";

$result = mysqli_query($db_connect, $query);
 if(!$result){
	 die("Database query failed.");
 }
 // Display results..
while($r = mysqli_fetch_assoc($result)){
	echo $r["id"].": ";
	echo $r["menu_name"]."<br>";
	//echo $r["position"];
	//echo $r["visible"];
	
}
// Free results.
mysqli_free_result($result);

mysqli_close($db_connect);
?>