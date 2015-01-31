@extends('layouts.default')
@section('content')

<form action="/join-activity" method="POST">
<table>
	<tr><td><img width="150" height="150" src="/upload/activity-image/{{ $activity->picture }}" /></td></tr>
	<tr><td><b>{{ $activity->activity_name }}</b></td></tr>
	<tr><td>{{ $activity->description }}</td></tr>
	<tr><td>by {{ $owner->first_name . ' ' . $owner->last_name }}</td></tr>
	<tr><td>Location:</td></tr>
</table>

<input id="activityId" type="hidden" value="{{ $activity->id }}" />
<input type="submit" value="Join">
</form>
@stop
