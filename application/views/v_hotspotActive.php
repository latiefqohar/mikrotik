
<?php 
function badge($result){
    if ($result=="true") {
        $data = '<span class="badge badge-success">'.$result.'</span>';
    }elseif($result=="false"){
        $data = '<span class="badge badge-danger">'.$result.'</span>';
    }
    return $data;
}

?>
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<strong class="card-title">Data </strong>
		</div>
		<div class="card-body">
			<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Server</th>
						<th>User</th>
						<th>Address</th>
						<th>Mac Address</th>
						<th>Login By</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getHotspotActive as $row){ 
                        ?>
						<tr>
							<td><?= $row['.id']; ?></td>
							<td><?= $row['server']; ?></td>
							<td><?= $row['user']; ?></td>
							<td><?= $row['address']; ?></td>
							<td><?= $row['mac-address']; ?></td>
							<td><?= $row['login-by']; ?></td>
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
