<h3 class="text-center mb-3 text-muted"><?= $resource[0]['platform']; ?></h3>
<h5>CPU</h5>
<div class="col-lg-3 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-four text-primary">
				<div class=" stat-icon dib">
					<i class="fa fa-cogs "></i>
				</div>
				<div class="stat-content">
					<div class="text-left dib">
						<div class="stat-heading">CPU</div>
						<div class="stat-text">
							<?= $resource[0]['cpu']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-four text-primary">
				<div class="stat-icon dib">
					<i class="fa fa-cogs "></i>
				</div>
				<div class="stat-content">
					<div class="text-left dib">
						<div class="stat-heading">CPU Count</div>
						<div class="stat-text">
							<?= number_format($resource[0]['cpu-count'],0,",",".");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-four text-primary">
				<div class="stat-icon dib">
					<i class="fa fa-cogs "></i>
				</div>
				<div class="stat-content">
					<div class="text-left dib">
						<div class="stat-heading">CPU Fequency</div>
						<div class="stat-text">
							<?= number_format($resource[0]['cpu-frequency'],0,",",".");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-four text-primary">
				<div class="stat-icon dib">
					<i class="fa fa-cogs "></i>
				</div>
				<div class="stat-content">
					<div class="text-left dib">
						<div class="stat-heading">CPU Load</div>
						<div class="stat-text">
							<?= number_format($resource[0]['cpu-load'],0,",",".");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<h5>Memory</h5>
<div class="col-lg-6 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-four text-success">
				<div class="stat-icon dib">
					<i class="fa fa-save "></i>
				</div>
				<div class="stat-content">
					<div class="text-left dib">
						<div class="stat-heading">Free Memory</div>
						<div class="stat-text">
							<?= number_format($resource[0]['free-memory'],0,",","."); ?>/<?= number_format($resource[0]['total-memory'],0,",","."); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-6 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="stat-widget-four text-success">
				<div class="stat-icon dib">
					<i class="fa fa-save "></i>
				</div>
				<div class="stat-content">
					<div class="text-left dib">
						<div class="stat-heading">Free Hdd</div>
						<div class="stat-text">
							<?= number_format($resource[0]['free-hdd-space'],0,",","."); ?>/<?=number_format($resource[0]['total-hdd-space'],0,",","."); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body">
			<select id="interface">
			<?php foreach($getInterface as $row){
			if ($row['running']=='true') { ?>
				<option value="<?= $row['.id']; ?>"><?= $row['name']; ?></option>
			<?php } } ?>
			</select>
			<div id="curve_chart" style="width: 900px; height: 500px"></div>
		</div>
	</div>
</div>