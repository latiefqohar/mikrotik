<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<strong class="card-title">Data Table</strong>
		</div>
		<div class="card-body">
			<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Byte Rx</th>
						<th>Byte Tx</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getInterface as $row){ ?>

						<tr>
							<td><?= $row['.id']; ?></td>
							<td><?= $row['name']; ?></td>
							<td><?= $row['rx-byte']; ?></td>
							<td><?= $row['tx-byte']; ?></td>
							<td>
								<?php if($row['running']=='true') {
									echo '<span class="badge badge-success">Running</span>';
								}else{
									echo '<span class="badge badge-danger">Not Running</span>';
								}?>
							</td>
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
