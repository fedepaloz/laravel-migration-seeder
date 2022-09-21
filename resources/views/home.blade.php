@extends('layouts.main')

@section('train-section')
<table>
    <tr>
        <th>stazione di partenza</th>
        <th>stazione di arrivo</th>
        <th>orario di partenza</th>
        <th>orario di arrivo</th>
        <th>codice treno</th>
        <th>numero carrozze</th>
        <th>in orario</th>
        <th>cancellato</th>
    </tr>
    @foreach ($trains as $train)
    <tr>
      <td>{{$train->stazione_di_partenza}}</td>
      <td>{{$train->stazione_di_arrivo}}</td>
      <td>{{$train->orario_di_partenza}}</td>
      <td>{{$train->orario_di_arrivo}}</td>
      <td>{{$train->codice_treno}}</td>
      <td>{{$train->numero_carrozze}}</td>
      <td>{{$train->in_orario}}</td>
      <td>{{$train->cancellato}}</td>
      
      

    </tr>
    @endforeach
@endsection