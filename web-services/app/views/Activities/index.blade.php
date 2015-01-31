@extends('layouts.default')
@section('content')
<ul><div class="col-xs-12"><h1 style="text-align:center">All activities</h1></div>
</ul>
<ul>
	<div class="col-xs-12"><hr></div>
</ul>
<div class="container">
<?php foreach ($activities as $activity):?>
<ul>
	<div class="row">
		<div class="col-xs-3"><img src="https://pbs.twimg.com/profile_images/1158130486/freefood.jpg" alt="HTML tutorial" style="width:80px;height:80px;border:0"></div>
        <div class="col-xs-9"><h3><?php echo $activity->activity_name;?></h3></div>
	</div>
	<hr>
</ul>
<?php endforeach; ?>
</div>

@stop
