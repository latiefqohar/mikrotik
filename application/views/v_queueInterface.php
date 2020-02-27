
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
						<th>Queue</th>
						<th>Default Queue</th>
						<th>Active Queue</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getqueueInterface as $row){ 
                        ?>
						<tr>
							<td><?= $row['.id']; ?></td>
							<td><?= $row['interface']; ?></td>
							<td><?= $row['queue']; ?></td>
							<td><?= $row['default-queue']; ?></td>
							<td><?= $row['active-queue']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
