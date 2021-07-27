<?php
			$db = "select * from data";
			$result = $con->query($db);
			while ($row = $result->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['number']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['country']; ?></td>
					<td><?php echo $row['Message']; ?></td>
					<td><?php echo $row['id'];?></td>
				</tr>
			<?php } ?>