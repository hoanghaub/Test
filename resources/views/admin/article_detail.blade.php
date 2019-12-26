@extends('admin')
@section('title','day la chi tiewt bai viet')
@section('main')
@if(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('success')}}</strong>
</div>
@endif
<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Them </a>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				
				<h4 class="modal-title">them chi tiet</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" role="form">
					<legend>Form title</legend>
				
					<div class="form-group">
						<label for="">name</label>
						<input type="text" class="form-control" name="name" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">day</label>
						<input type="date" class="form-control" name="day">
					</div>
				    <textarea name="description"></textarea>
					@csrf
				
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>day</th>
				<th>name</th>
				<th>description</th>
			</tr>
		</thead>
		<tbody>
		@foreach($article_detail as $y)
			<tr>
				<td>{{$y['id']}}</td>
				<td>{{$y['day']}}</td>
				<td>{{$y['name']}}</td>
				<td>{{$y['description']}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection