<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<strong class="card-title">Data Log</strong>
		</div>
		<div class="card-body">
			<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Time</th>
						<th>Topics</th>
						<th>Messages</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getLog as $row){ ?>
						<tr>
							<td><?= $row['.id']; ?></td>
							<td><?= $row['time']; ?></td>
							<td><?= $row['topics']; ?></td>
							<td><?= $row['message']; ?></td>							
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
