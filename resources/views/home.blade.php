@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ようこそ  {{ Auth::user()->name }} さん</div>

                <div class="panel-body">
                    ログインしました。
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
