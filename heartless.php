<?php

// if(isset($_POST['submit']))
// {

// 	echo 'you don reach my end';

// }

// Connecting, selecting database
$dbconn = pg_connect("host=ec2-174-129-255-69.compute-1.amazonaws.com port=5432 dbname=d7ka121adgekhe user=vddgstwxiwlowp password=2b89fd090737660a6feb443d2f80f35cf5f2d19499eed50da8c183e420b62e42")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM isheyen';
$result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());

echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);

?>
