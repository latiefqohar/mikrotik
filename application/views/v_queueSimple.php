
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
						<th>Nama</th>
						<th>Target</th>
						<th>Priority</th>
						<th>Queue</th>
						<th>Max Limit</th>
						<th>Bytes</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getqueueSimple as $row){ 
                        ?>
						<tr>
							<td><?= $row['.id']; ?></td>
							<td><?= $row['name']; ?></td>
							<td><?= $row['target']; ?></td>
							<td><?= $row['priority']; ?></td>
							<td><?= $row['queue']; ?></td>
							<td><?= $row['max-limit']; ?></td>
							<td><?= $row['bytes']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
