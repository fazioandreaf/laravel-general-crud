@extends('layouts.main_layout')
@section('content')
<form method="post" action="{{route('edit_function',$match->id)}}">
    @csrf
    @method('POST')
    <label for="">team1</label>
    <input type="text" name="team1" value="{{$match->team1}}">
    <label for="">team2</label>
    <input type="text" name="team2" value="{{$match->team2}}">
    <label for="">point1</label>
    <input type="number" name="point1" value="{{$match->point1}}">
    <label for="">point2</label>
    <input type="number" name="point2" value="{{$match->point2}}">
    <button type="submit">Invia</button>
    {{-- @if(point1>$point2)
    <input type="number" name="result" value="1">
    @else --}}
    <input type="number" name="result" value="{{$match->result}}">


</form>
@endsection
