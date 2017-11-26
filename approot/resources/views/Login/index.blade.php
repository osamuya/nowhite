@extends('layouts.applayout')
@section('title', 'nowhite top')

@section('content')

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Sign up</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-6 col-xm-6 ">
            <form method="POST" action="/register" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-black">Submit</button>
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
