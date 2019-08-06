@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>申し込み一覧</h1>

            @if (Session::has('message'))
                <div class="alert alert-warning">{{ session('message') }}</div>
            @endif

            <table class="table">
                <tr>
                    <th>名前</th>
                    <th>年齢</th>
                    <th>性別</th>
                    <th>来店人数</th>
                    <th>来店回数</th>
                    <th>来店目的</th>
                    <th>来店店舗</th>
                    <th>申込日時</th>
                </tr>
                @foreach ($applications as $a)
                    <tr>
                        <td>{{ $a->name }} ({{$a->kana }})</td>
                        <td>{{ $a->age }}</td>
                        <td>{{ gender_text($a->gender) }}</td>
                        <td>{{ people_text($a->people) }}</td>
                        <td>{{ visited_text($a->visited_code) }}</td>
                        <td>
                            @if ($a->objective_of_visit)
                                @foreach (explode(',', $a->objective_of_visit) as $o)
                                    <div>・{{ objective_of_visit_text($o) }}</div>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            @foreach ($a->dates as $d)
                                <div>{{ $d->shop->company->name}}:{{ $d->shop->name }} | {{ $d->datetime }}</div>
                            @endforeach
                        </td>
                        <td>{{ $a->created_at }}</td>
                    </tr>
                @endforeach
            </table>
            {{ $applications->links() }}
        </div>
    </div>
</div>
@endsection
