@extends('layouts.default')
@section('content')

<div>
	<form action="/join-activity" method="POST">
	<table id="activityDetail">
		<tr><td><img width="150" height="150" src="/upload/activity-image/{{ $activity->picture }}" /></td></tr>
		<tr><td><b>{{ $activity->activity_name }}</b></td></tr>
		<tr><td>{{ $activity->description }}</td></tr>
		<tr><td>by {{ $owner->first_name . ' ' . $owner->last_name }}</td></tr>
		<tr><td>Location: {{ $activity->location }}</td></tr>
	</table>

	<style>
		#activityDetail tr td {
			padding: 8px;
		}
	</style>

	<input name="activityId" type="hidden" value="{{ $activity->id }}" />
	<input type="submit" value="Join" style="margin-left: 25px;">
	</form>
</div>
@stop
