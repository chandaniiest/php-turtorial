<?php
include "connection.php";
?>
<form method = "post" action = "insertquery.php">
	<table>
		
		<tr>
			<td>Name</td>
			<td><input type = "text" name = "cname"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type = "text" name = "cphone"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type = "email" name = "cemail"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name = "caddress"></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type = "radio" name = "cgender" value = "Male">Male<input type = "radio" name = "cgender" value = "Female">Female</td>
		</tr>
		<tr>
			<td>State</td>
			<td>
				<select name = "state_id">
				<option selected disabled>Choose Your State</option>
					<?php
					$sql = "SELECT * FROM `state`";
					$res = $db->query($sql);
					while($row = $res->fetch_array()) {
						print "<option value = $row[state_id]>$row[state_name]</option>";
					
					}
					
					
					?>	
				</select>
			</td>
		</tr>
		<tr>
			<td>Software Skills</td>
			<td>
				<?php
					$sql = "SELECT * FROM `skills`";
					$res = $db->query($sql);
					while($row = $res->fetch_array()) {
						print "<input type = \"checkbox\" value = $row[skills_name] name = \"skills[]\">$row[skills_name]";
					
					}
					
					
					?>	
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type = "submit" value = "Insert"></td>
		</tr>
		
	</table>
</form>