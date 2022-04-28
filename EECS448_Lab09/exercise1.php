<?php
include ".main.html";
echo "<table>";
echo "<tr>";
echo "<th>&nbsp;<th>";
for($i =1;$i<=100;$i++)
{
  echo "<th>$i<th>";
}
echo "<tr>";
for($x=1; $x<=100; $x++)
{
  echo "<tr>";
  echo "<td>".$x."<td>";
  for ($y=1; $y<=100; $y++)
  {
    echo "<td>".$x*$y. "<td>";
  }
  echo "<tr>";
}
?>