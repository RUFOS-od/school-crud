@extends('students.layout')
@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">nom : {{ $students->nom }}</h5>
            <p class="card-text">adresse : {{ $students->adresse }}</p>
            <p class="card-text">Momobilebile : {{ $students->mobile }}</p>
        </div>

        </hr>

    </div>
</div>