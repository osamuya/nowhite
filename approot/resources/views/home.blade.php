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
        <div class="col-sm-6 col-xm-6">

            <h2 class="h2 mb60">Dashboard</h2>

            <ul>
                <li><a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                <li><a href="/home/unsubscribe_on">退会</a></li>
                <li><a href="/home/update">登録情報の変更</a></li>
            </ul>


            <div class="panel-body">


                You are logged in!s
            </div>
        </div>
        {{-- Left Column End --}}

        {{-- Right Column --}}
        <div class="col-sm-6 col-xm-6 ">
            foobar
        </div>
        {{-- Right Column End --}}
    </div>
</div>
@endsection
