@extends('layouts.app')

@section('content')

	<div class="col-lg-12">
		<h1 class="page-header">Payroll : {{ $employee->name }}</h1>
	</div>
		@if($employee->full_time)
			<p><b>Full-Time</b> :  Yes</p>
			<p><b>Base Salary</b>: {{ $employee->role->salary }}</p>
		@else
			<p><b>Part-Time<b> : Yes</p>
			<br>
			<p><b>Base Salary<b>: 0</p>
		@endif
		
		<form action="{{ route('payrolls.store',['id'=>$employee->id])}}" method="POST"
			class="form-horizontal">
				{{ csrf_field() }}
			
			<div class="form-group">
				<label class="control-label col-md-1" for="over_time">Overtime:</label>
				<div class="col-md-4">
					<select name="over_time" id="over_time" class="form-control">
						<option value="1">Yes</option>
						<option value="0">No</option>					
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-1" for="hours">Hours: </label>
				<div class="col-md-4">					
					<input type="number" name="hours" class="form-control">		
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-1" for="rate">Rate: </label>
				<div class="col-md-4">
					<input type="number" name="rate" class="form-control">	
				</div>
			</div>			
			
			<div class="col-lg-4 text-center">
				<button class="btn btn-success" type="submit" >Submit</button>
			</div>
		</form> 

@endsection
