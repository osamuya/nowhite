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
<form class="form-horizontal" method="POST" action="/regist_confirm" novalidate="novalidate">
                <input type="hidden" name="_token" value="o553HSMffc1tzfj5zK7OfXlq24drXohXpw3RHl3Z">
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">
                        User name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="" required="" autofocus="">

                                            </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">Email</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="" required="">

                                            </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">
                        Password
                    </label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required="">

                                            </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Retype Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-black">
                            登録
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
