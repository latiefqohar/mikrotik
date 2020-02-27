
<?php 
error_reporting(0);
function badge($result){
    if ($result=="running") {
        $data = '<span class="badge badge-success">'.$result.'</span>';
    }else{
        $data = '<span class="badge badge-danger">'.$result.'</span>';
    }
    return $data;
}

?>
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<strong class="card-title">Data</strong>
		</div>
		<div class="card-body">
			<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Interface</th>
						<th>Address Pool</th>
						<th>Ip DNS</th>
						<th>Proxy Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getIpHotspot as $row){ 
                        ?>
						<tr>
							<td><?= $row['.id']; ?></td>
							<td><?= $row['name']; ?></td>
							<td><?= $row['interface']; ?></td>
							<td><?= $row['address-pool']; ?></td>
							<td><?= $row['ip-of-dns-name']; ?></td>
							<td><?= badge($row['proxy-status']); ?></td>
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
