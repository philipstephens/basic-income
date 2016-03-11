@extends('layout')

@section('header')
<title>Continents List</title>
@stop
    
@section('content')
<h1>Continents</h1><br>

<table class="table">
    <thead>
        <tr><th><h3>Code</h3></th>
            <th><h3>Continent</h3></th>
        </tr>
    </thead>
    <tbody>    
        @foreach($continents as $continent)
            <tr><td><h4>{{ $continent->continents_id }}</h4></td>
                <td><h4>{{ $continent->contname }}</h4></td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
