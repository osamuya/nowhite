@extends('layouts.applayout')
@section('title', 'nowhite top | 403')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">403</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-6 col-sm-offset-3">

            <div class="message mb80">
                <h2 class="h2 mb40">403 Forbidden</h2>

                <p class="">
                    閲覧が禁止されています。<br>
                    閲覧可能なページをご覧ください。<br>
                    <br>
                    <br>
                    <ol>
                        <li>あるいはすでに完了したページ操作を行っている可能性があります。<a href="/login">Login</a></li>
                        <li>閲覧禁止のURLにアクセスしているか、ご操作の可能性があります。</li>
                    </ol>
                    <br>
                    <a href="/">トップページ</a>
                </p>
            </div>
        </div>
        {{-- Left Column End --}}

    </div>
</div>

@endsection

