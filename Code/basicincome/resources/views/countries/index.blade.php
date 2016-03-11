@extends('layout')

@section('header')
<title>Countries List</title>
@stop
    
@section('content')
<h1>Countries</h1><br>

<?php $flag = ""; ?>

<table class="table table-striped">
    <thead>
        <tr><th><h3>Flag</h3></th>
            <th><h3>Code</h3></th>
            <th><h3>Name</h3></th>
            <th><h3>Continent</h3></th>
        </tr>
    </thead>
    <tbody>    
        @foreach($countries as $country)
            <tr><td><img src='/{{ $country->flag }}' width="62" height="33" /></td>
                <td><h4>{{ $country->country_id }}</h4></td>
                <td><h4>{{ $country->nicename }}</h4></td>
                <td><h4>{{ $country->continent->contname}}</h4></td>
            </tr>           
        @endforeach
    </tbody>
</table>

@stop
