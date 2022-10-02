@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('student/' .$students->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="nom" value="{{$students->nom}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="adresse" id="adresse" value="{{$students->adresse}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop