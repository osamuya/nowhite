@extends('layouts.applayout')
@section('title', 'nowhite top | 404')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">404</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-6 col-sm-offset-3">

            <div class="message mb80">
                <h2 class="h2 mb40">404 Not found</h2>

                <p class="">
                    お探しのページは見つかりませんでした。<br>
                    以下の方法をお試しください。<br>
                    <br>
                </p>

                <ol>
                    <li>アクセスURLが正しいかどうか確認してください。</li>
                    <li>ブラウザーキャッシュを削除してください。</li>
                    <li>ブラウザーを再起動してください。</li>
                </ol>
            </div>
        </div>
        {{-- Left Column End --}}

    </div>
</div>

@endsection

