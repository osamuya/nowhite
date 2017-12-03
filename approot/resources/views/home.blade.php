@extends('layouts.applayout')
@section('title', 'nowhite top')

@section('content')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-4 col-xm-4">

            @section('hometitle', 'Dashboard')
            @include('block.home_sidebar')

        </div>
        {{-- Left Column End --}}

        {{-- Right Column --}}
        <div class="col-sm-8 col-xm-8 ">
            foobar
        </div>
        {{-- Right Column End --}}
    </div>
</div>
@endsection
