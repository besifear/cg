@extends('layout')

@section('top-content')
<!-- Jumbotron Header -->
<header class="jumbotron hero-spacer">
    <h1>A Warm Welcome! </h1>
    <p class="col-lg-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel lectus risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ut quam turpis. Nunc vel mi mi. Nunc in lacus non libero facilisis volutpat a et nibh. Suspendisse ac est et nunc malesuada porttitor vel efficitur nibh. Donec ac justo egestas elit laoreet finibus. Donec at felis posuere leo pharetra molestie.
    </p>
    <p class="col-lg-4">
    </p>
    <p class="col-lg-4">
Donec ac justo egestas elit laoreet finibus. Donec at felis posuere leo pharetra molestie. Pellentesque sollicitudin volutpat magna, sit amet aliquam purus rhoncus quis. Nam magna est, laoreet convallis ullamcorper eu, lobortis quis massa. Proin eget vulputate velit. Pellentesque interdum quam massa, ut dapibus ex interdum nec.Donec ac justo egestas elit laoreet finibus. Donec at felis posuere leo pharetra molestie.
</p>
    <p><a class="btn btn-primary btn-large">Call to action!</a>
    </p>
</header>
@stop

@section('bottom-content')
<!-- Page Features -->
<div class="row text-center">

@foreach($heroes as $hero)
    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="{{ asset($hero->thumbnail->path) }}" alt="hero Image">
            <div class="caption">
                <h3>{{$hero->name}}</h3>
                <p>{{$hero->nickname}}</p>
                <p>
                    <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>
@endforeach

</div>
@stop