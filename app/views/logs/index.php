<?php require 'C:\wamp\www\orders\app\views\header.php'; ?>

<?php require 'C:\wamp\www\orders\app\views\menu.php'; ?>

<table class="table table-bordered">
<thead>
	<tr><th colspan = "2">Action Logs</th></tr>
	<tr><th>Date</th><th>Action</th></tr>
</thead>
<tbody>
	<?php  
		for($i=0;$i<count($data['logs']);$i++){
			echo "<tr>";
			echo "<td>".date("D, F d Y : H:i" ,strtotime($data['logs'][$i]['date']))."</td>";
			echo "<td class='description'>".$data['logs'][$i]['action']."</td>";
			echo "</tr>";
		}
	?>
</tbody>
</table>

<?php require 'C:\wamp\www\orders\app\views\footer.php'; ?>