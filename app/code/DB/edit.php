<?php
include "connection.php";

$sql = "SELECT * FROM `customer` WHERE `cid` = '$_GET[edit_id]'";
$res = $db->query($sql);
$row = $res->fetch_array();

?>
<form method = "post" action = "update.php">
	<input type = "hidden" name = "up_id" value = "<?php print $row['cid']?>">
	<table>
		
		<tr>
			<td>Name</td>
			<td><input type = "text" name = "cname" value = "<?php print $row['cname']?>"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type = "text" name = "cphone" value = "<?php print $row['cphone']?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type = "email" name = "cemail" value = "<?php print $row['cemail']?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name = "caddress" rows = "20" cols = "20"><?php print $row['caddress']?></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
			<?php
			if($row['cgender']=="Male") {
				print "<input type = \"radio\" name = \"cgender\" value = \"Male\" checked>Male<input type = \"radio\" name = \"cgender\" value = \"Female\">Female</td>";
		}
		else if($row['cgender'] == "Female") {
			print "<input type = \"radio\" name = \"cgender\" value = \"Male\" >Male<input type = \"radio\" name = \"cgender\" value = \"Female\" checked>Female</td>";
		}
		else {
			print "<input type = \"radio\" name = \"cgender\" value = \"Male\" >Male<input type = \"radio\" name = \"cgender\" value = \"Female\" >Female</td>";
		}
		?>
		</tr>
		<tr>
			<td>State</td>
			<td>
				<select name = "state_id">
				<option selected disabled>Choose Your State</option>
					<?php
					$sql = "SELECT * FROM `state`";
					$res = $db->query($sql);
					while($state = $res->fetch_array()) {

						if($row['city'] == $state['state_id']) {
							print "<option value = $state[state_id] selected>$state[state_name]</option>";
						}
						else {
							print "<option value = $state[state_id] >$state[state_name]</option>";

						}
					
					}
					
					
					?>	
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type = "submit" value = "Edit"></td>
		</tr>
		
	</table>
</form>