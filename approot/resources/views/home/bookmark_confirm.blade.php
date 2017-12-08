@extends('layouts.applayout')
@section('title', 'nowhite top')

@section('content')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="/home">Dashboard</li>
            <li class="active">Bookmark登録</li>
        </ol>
    </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

<div class="container">
    <div class="row">

        {{-- Right Column --}}
        <div class="col-sm-9 col-xm-9 ">
            <h4 class="h4 mb40">Bookmark登録</h4>
            <form class="form-horizontal" method="POST" action="/home/bookmark/store" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="siteName" class="col-md-4 control-label">
                        サイトまたはブログ名</label>
                    <div class="col-md-6">
                        <input id="siteName" type="text" class="readonly" name="siteName" value="{{$siteName}}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label for="url" class="col-md-4 control-label">URL</label>
                    <div class="col-md-6">
                        <input id="url" type="url" class="readonly" name="url" value="{{$url}}" readonly="readonly" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-md-4 control-label">
                        概要(200文字程度)
                    </label>

                    <div class="col-md-6">
                        <textarea id="description" type="description" class="readonly" name="description" readonly="readonly" >{{$description}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="rss" class="col-md-4 control-label">RSS</label>
                    <div class="col-md-6">
                        <input id="rss" type="rss" class="readonly" name="rss" value="{{$rss}}" readonly="readonly" >
                    </div>
                </div>

                <div class="form-group pt60">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="button" onclick="history.back()" class="btn btn-default">
                            もどる
                        </button>
                        <button type="submit" class="btn btn-black">
                            ブックマーク登録
                        </button>
                    </div>
                </div>
            </form>
        </div>
        {{-- Right Column End --}}

        {{-- Left Column --}}
        <div class="col-sm-3 col-xm-3">

            @section('hometitle', 'Bookmark regist')
            @include('block.home_sidebar')

        </div>
        {{-- Left Column End --}}


    </div>
</div>
@endsection
