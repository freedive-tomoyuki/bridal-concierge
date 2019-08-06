@extends('admin.layouts.app')

@section('script')
    @include('admin/shop/_script')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>店舗編集</h1>
            @include ('admin/shop/_form', ['url' => route('admin.shops.update', $shop->id), 'method' => 'put', 'shop' => $shop])
        </div>
    </div>
</div>
@endsection

