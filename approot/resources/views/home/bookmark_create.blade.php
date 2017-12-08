@extends('layouts.applayout')
@section('title', 'nowhite top')

@section('content')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="/home"><a href="">Dashboard</a></li>
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
            <form class="form-horizontal" method="POST" action="/home/bookmark/confirm" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="siteName" class="col-md-4 control-label">
                        サイトまたはブログ名</label>
                    <div class="col-md-6">
                        <input id="siteName" type="text" class="form-control" name="siteName" value="{{old('siteName')}}" required="" autofocus="">
                        <span class="help-block">
                            <strong>{{ $errors->first('siteName') }}</strong>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="url" class="col-md-4 control-label">URL</label>

                    <div class="col-md-6">
                        <input id="url" type="url" class="form-control" name="url" value="{{old('url')}}" required="">
                        <span class="help-block">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-md-4 control-label">
                        概要(200文字程度)
                    </label>

                    <div class="col-md-6">
                        <textarea id="description" type="description" class="form-control" name="description" >{{old('description')}}</textarea>
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="rss" class="col-md-4 control-label">RSS</label>

                    <div class="col-md-6">
                        <input id="rss" type="text" class="form-control" name="rss" value="{{old('rss')}}">
                        <span class="help-block">
                            <strong>{{ $errors->first('rss') }}</strong>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-black">
                            確認する
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
