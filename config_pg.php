<?php  
$conn = pg_connect("host=localhost port=5432 dbname= user= password=");  
if (!$conn) {  
 echo "An error occurred.\n";  
 exit;  
}  
$result = pg_query($conn, "SELECT * FROM cards ORDER BY cards DESC LIMIT 1");  
if (!$result) {  
 echo "An error occurred.\n";  
 exit;  
}  
while ($row = pg_fetch_row($result)) {  

 date_default_timezone_set('Europe/Sofia'); 
 $id = $row[0]+1;
 $id_number = $row[1]+0000001;
 $begindate = date("Y-m-d H:m:s"); 
 $enddate = date("Y-m-d H:m:s", strtotime(' + 5 years')); 
 $discountsid = 1;
}  
?> 