@extends('base')
@section('title')
	View Incident Type
@stop
@section('content')
<div class="content-header">
    <div class="title">
      <h1>View Incident Type</h1>
    </div>
    <a href="{{url('incident/type')}}">
    	<button type="button" class="primary">Back</button>
    </a>
</div>
<table class="striped two-col bordered">
	<tr>
		<td>Name : </td>
		<td>{{$incident_type->name}}</td>
	</tr>
	<tr>
		<td>Description:</td>
		<td>{{$incident_type->description}}</td>
	</tr>
</table>
@endsection
