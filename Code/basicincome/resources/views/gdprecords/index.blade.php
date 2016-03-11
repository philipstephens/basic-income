@extends('layout')

@section('header')
<title>Basic Income Calculator</title>
@stop
    
@section('content')

<h1>Basic Income Calculator</h1><br>
<br>
<form class="form-group" method="POST" action="/basicincome/settings">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="row psrow">
        <div class="col-sm-3">Percent of Gross Domestic Product</div>
        <select class="col-sm-1" name="percentGDP">
            <option>10</option><option>20</option><option>30</option><option>40</option><option>50</option>
        </select>
        <div class="col-sm-1">{{ $gdpratio }}</div>
        <div class="col-sm-7"></div>
    </div>
    <div class="row psrow">
        <div class="col-sm-3">Adult to Child Basic Income Ratio</div>
        <select class="col-sm-1" name="adultchildratio" value>
            <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option>
            <option>5</option><option>6</option><option>7</option><option>8</option><option>9</option>
            <option>10</option>
        </select>
        <div class="col-sm-1">{{ $bi_ratio }}</div>
        <div class="col-sm-7"></div>
    </div>    
    <div class="row psrow">
        <div class="col-sm-3">Year</div>
        <select name="fyear" class="col-sm-1"><option>2014</option></select>
        <div class="col-sm-1">{{ $current_year }}</div>
        <div class="col-sm-7"></div>
    </div>
    <div class="row psrow">
        <div class="col-sm-3"></div>
        <button type="submit" class="col-sm-1">Submit</button>
        <div class="col-sm-8"></div>
    </div>
</form>

<br><br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th></th>
            <th>Flag</th>
            <th>Country</th>
            <th>Adult BI</th>
            <th>Monthly</th>
            <th>Daily</th>
            @if($bi_ratio != 0)
                <th>Child BI</th>
                <th>Monthly</th>
                <th>Daily</th>
            @endif
        </tr>
    </thead>
    <tbody>
        <?php $count=0; ?>
        @foreach($sorted_gdprecords as $gdprecord)
            <?php $count++; ?>
            <tr>
                <td>{{$count}}</td> 
                <td><img src='/{{$gdprecord->countries->flag}}' width="62" height="33"</td>
                <td>{{$gdprecord->countries->nicename}}</td>               
                <td>{{ $gdprecord->bi_adult }}</td>
                <td>{{ $gdprecord->bi_adult_monthly }}</td>
                <td>{{ $gdprecord->bi_adult_daily }}</td>
                @if($bi_ratio != 0)
                    <td>{{ $gdprecord->bi_child }}</td>
                    <td>{{ $gdprecord->bi_child_monthly }}</td>
                    <td>{{ $gdprecord->bi_child_daily }}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>

@stop
