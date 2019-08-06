@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>店舗一覧</h1>

            @if (Session::has('message'))
                <div class="alert alert-warning">{{ session('message') }}</div>
            @endif

            <a href="{{ route('admin.shops.create') }}" class="btn btn-primary">新規作成</a>
            <table class="table">
                <tr>
                    <th>ブランド名</th>
                    <th>店名</th>
                    <th>都道府県</th>
                    <th>エリア詳細</th>
                    <th>登録日時</th>
                    <th>更新日時</th>
                    <th></th>
                </tr>
                @foreach ($shops as $s)
                    <tr>
                        <td>{{ $s->company->name }}</td>
                        <td>{{ $s->name }}</td>
                        <td>{{ $s->area->prefecture->name }}</td>
                        <td>{{ $s->area->name }}</td>
                        <td>{{ $s->created_at }}</td>
                        <td>{{ $s->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.shops.edit', [$s->id]) }}" class="btn btn-primary">編集</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $shops->links() }}
        </div>
    </div>
</div>
@endsection
