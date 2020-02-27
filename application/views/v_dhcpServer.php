
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
						<th>Name</th>
						<th>Interface</th>
						<th>Lease Time</th>
						<th>Add Arp</th>
						<th>Dinamic</th>
						<th>Invalid</th>
						<th>Disabled</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getDhcpServer as $row){ 
                        ?>
						<tr>
							<td><?= $row['.id']; ?></td>
							<td><?= $row['name']; ?></td>
							<td><?= $row['interface']; ?></td>
							<td><?= $row['lease-time']; ?></td>
							<td><?= badge($row['add-arp']); ?></td>	
							<td><?= badge($row['dynamic']); ?></td>	
							<td><?= badge($row['invalid']); ?></td>	
							<td><?= badge($row['disabled']); ?></td>	

						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
