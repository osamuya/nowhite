@extends('layouts.applayout')
@section('title', 'nowhite top | Error')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Error</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-6 col-sm-offset-3">

            <div class="message mb30">
                <h2 class="h2 mb40">Error {{$error_message}}</h2>

                <p class="">
                    {{$error_description}}<br>
                    <br>
                </p>
            </div>

            <div class="message mb80">
                <a href="javascript:history.back();">戻る</a> | <a href="/home">ダッシュボード</a>
            </div>
        </div>
        {{-- Left Column End --}}

    </div>
</div>

@endsection

