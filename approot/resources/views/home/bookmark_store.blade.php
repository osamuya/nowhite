@extends('layouts.applayout')
@section('title', 'ブックマーク登録完了')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/home">Dash board</a></li>
            <li class="active">Stored</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-6 col-xm-6">
            <h2 class="h2 mb60">Bookmark Registed</h2>

            <p class="">
                ブックマーク登録が完了しました。
            </p>
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
