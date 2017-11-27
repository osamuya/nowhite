@extends('layouts.applayout')
@section('title', 'nowhite | 退会しました')

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
        <div class="col-sm-6 col-sm-offset-3">

            <div class="message mb80">
                <h2 class="h2 mb40">退会しました</h2>

                <p class="mb40">
                    退会手続きが完了しました。<br>
                    退会内容をメールで送信しております。ご確認ください。
                    <br>
                </p>

                <ol>
                    <li>退会一週間以内の場合は、会員登録を再度行うことができます。詳しくはお問い合わせください。</li>
                    <li>退会一週間を超過した場合は、新規で登録していただく必要がございます。その際、登録情報は引き継がれません。</li>
                </ol>
            </div>
        </div>
        {{-- Left Column End --}}

    </div>
</div>

@endsection
