<html>
<head>
</head>
<?php
include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
?>
<body>
<div id="main">
<?php
foreach ($FacturaCollectorObj->readFacturas() as $c){
  echo "<tr>";
  echo "<td>".$c->getId() ."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getTotal()."</td>";
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
