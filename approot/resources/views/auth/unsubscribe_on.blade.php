@extends('layouts.applayout')
@section('title', 'nowhite | 退会')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Unsubscribe</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-6 col-xm-6">
            <h2 class="h2 mb60">退会手続き</h2>

            <p class="">
                登録しているEmailアドレスを入力してください。<br>
                <br>
            </p>

            <form class="form-horizontal" method="POST" action="/home/unsubscribed" novalidate="novalidate" id="unsubscribe">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-black">
                            退会する
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
<script>
$(function(){
    $("#unsubscribe").bind('submit', function(){
        alert("本当に退会しましか？OKボタンを押すと退会手続きが完了します。");
    });
});


</script>
@endsection


