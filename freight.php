<html>
<body>
  <table border="0" cellpadding="3">
    <tr>
	  <td bgcolor="#CCCCCC" align="center">Distance</td>
	  <td bgcolor="#CCCCCC" align="center">Cost</td>
	</tr>
	
	<?php
	  $distance = 50;
	  while ( $distance <= 250 ) {
		  echo '<tr>
		          <td>'.$distance.'</td>
				  <td>'.$distance / 10 .'</td>
				<tr>';
		$distance += 50;
	  }
	?>
  </table>
</body>