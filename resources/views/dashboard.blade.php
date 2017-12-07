
@extends('layout')
@section('content')
    <div class="title">
     <h1>All Recipes</h1>
    </div>
        <div>
            @foreach($recipes as $recipe)
                <p>{{$recipe['title']}}</p>
            @endforeach
        </div>
    </div>
@stop
