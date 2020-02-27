
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
						<th>Interface</th>
						<th>Address</th>
						<th>Gateway</th>
						<th>DHCP Server</th>
						<th>Primary DNS</th>
						<th>Secondary DNS</th>
						<th>status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getDhcpClient as $row){ 
                        ?>
						<tr>
							<td><?= $row['.id']; ?></td>
							<td><?= $row['interface']; ?></td>
							<td><?= $row['address']; ?></td>
							<td><?= $row['gateway']; ?></td>
							<td><?= $row['dhcp-server']; ?></td>
							<td><?= $row['primary-dns']; ?></td>
							<td><?= $row['secondary-dns']; ?></td>
							<td><?= $row['status']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
