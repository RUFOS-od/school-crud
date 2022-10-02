@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">

        <form action="{{ url('student') }}" method="post">
            {!! csrf_field() !!}
            <label>Nom</label></br>
            <input type="text" name="nom" id="nom" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="adresse" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop