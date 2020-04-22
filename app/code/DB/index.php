<?php
include "connection.php";

print "<table border = '1' align = 'center' cellpadding = '10'>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Address</th>
			<th>Gender</th>
			<th>State</th>
			<th>Skills</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>";

$sql = "SELECT * FROM `customer`";
$res = $db->query($sql);
while($row = $res->fetch_array()) {

	$sql1 = "SELECT * FROM `state` WHERE `state_id` = '$row[city]'";
	$res1 = $db->query($sql1);
	$state = $res1->fetch_array();

	print "<tr>
				<td>$row[cid]</td>
				<td>$row[cname]</td>
				<td>$row[cphone]</td>
				<td>$row[cemail]</td>
				<td>$row[caddress]</td>
				<td>$row[cgender]</td>
				<td>$state[state_name]</td>
				<td>$row[skills]</td>
				<td><a href = 'edit.php?edit_id=$row[cid]'>Edit</a></td>
				<td><a href = 'delete.php?del_id=$row[cid]'>Delete</a></td>
			
			</tr>";
}
?>
</table>
<a href = "insertform.php">Insert</a>