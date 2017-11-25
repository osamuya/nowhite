@extends('layouts.applayout')
@section('title', 'nowhite top')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/register">Sign up</a></li>
            <li class="active">Sign up confirm</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-6 col-xm-6">
            <h2 class="h2 mb60">Sign up confirm</h2>
            <form class="form-horizontal" method="POST" action="/store" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">
                        User name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control-no-border" name="name" value="{{$name}}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">Email</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control-no-border" name="email" value="{{$email}}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">
                        Password
                    </label>
                    <div class="col-md-6">
                        <input type="password" class="form-control-no-border" name="password" value="{{$password}}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="button" onclick="history.back()" class="btn btn-default">
                            もどる
                        </button>
                        <button type="submit" class="btn btn-black">
                            この内容で登録
                        </button>
                    </div>
                </div>
            </form>
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
