<?php
define("IS_CORE", true);
require_once("../core.php");
HTTP::echos();
//for($i=0;$i<500000;$i++) db::doquery('INSERT INTO `magaz` SET cols = "200", uid="45";', true);
db::doquery("SELECT (SUM(cols)/cols/(SELECT count(DISTINCT uid) FROM `magaz`)) as alls, (SELECT count(uid) FROM `magaz` as b WHERE b.uid=magaz.uid) as att, uid, cols, cols as or_cols, (SELECT count(DISTINCT uid) FROM `magaz`) as tov FROM `magaz` GROUP BY uid ORDER BY att DESC", true);
echo "<table>";
echo "<tr><td>sold</td><td>sold</td><td>Original cols</td><td>New cols</td></tr>";
while($row = db::fetch_assoc()) {
	$row['alls'] = ($row['alls'])/100;
	$row['cols'] = ceil(($row['cols']*($row['tov']/4))-($row['cols']/$row['alls']));
//	var_dump($row);
	echo "<tr><td>".$row['att']."</td><td>".$row['uid']."</td><td>".$row['or_cols']."</td><td>".$row['cols']."</td></tr>";
//echo "<br />";
}
echo "</table>";