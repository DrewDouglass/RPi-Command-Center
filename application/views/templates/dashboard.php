<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="col-sm-9 col-md-10 main" data-mh="content">
	<h1 class="page-header">Dashboard</h1>
	<div class="row">
		<div data-mh="dashboard-item" class="col-sm-6 col-md-4">
			<h2>Rpi Temp</h2>
			<canvas id="temp-chart" width="250" height="250"></canvas>
			<p class="small"><em>Current temp:</em> <strong id="current-temp"></strong> &deg;C</p>
			<p class="small">The <u>highest</u> temp so far: <span id="highest-temp"></span> &deg;C</p>
			<p class="small">The <u>lowest</u> temp so far: <span id="lowest-temp"></span> &deg;C</p>
		</div>
		<div data-mh="dashboard-item" class="col-sm-6 col-md-4">
			<h2>Rpi Uptime</h2>
			<p id="uptime" class="lead"></p>
		</div>
		<div data-mh="dashboard-item" class="col-sm-6 col-md-4">
			<h2>Execution Time</h2>
			<p class="lead">Full page execution time: <strong><?php echo $this->benchmark->elapsed_time();?></strong></p>
		</div>
	</div>
</div>