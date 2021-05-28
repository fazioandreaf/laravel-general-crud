@extends('layouts.main_layout')
@section('content')
{{$match->team1}}
{{$match->point1}}
{{$match->team2}}
{{$match->point2}}
@if ($match->point1>$match->point2)
Vince il {{$match->team1}}
@elseif($match->point1=$match->point2)
Pareggio
@else
Vince il {{$match->team2}}

@endif
@include('components.return')
@endsection
