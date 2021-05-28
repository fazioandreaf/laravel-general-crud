@extends('layouts.main_layout')
@section('content')
<ul>

    @foreach ($matches as $item)
<li>

    <a href="{{route('description',$item->id)}}">

        {{$item->team1}} -
        {{$item->team2}}
    </a>
    /
    <a href="{{route('edit',$item->id)}}">
        edit
    </a>
</li>
    @endforeach
</ul>
@include('components.create')
@endsection
