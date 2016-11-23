<?Php
mysql_connect("localhost","root","");
	mysql_select_db("users_db");

$count="SELECT roll,name, bangla, english, math, sum(bangla + english + math ) as total from students group by roll";

echo "<table>";
echo "<tr><th>roll</th><th>name</th><th>bangla</th><th>english</th><th>math</th><th>total</th></tr>";
foreach ($students->query($count) as $row) {
echo "<tr ><td>$row[roll]</td><td>$row[name]</td><td>$row[bangla]</td><td>$row[english]</td><td>$row[math]</td><td>$row[total]</td></tr>";
}
echo "</table>";
?>