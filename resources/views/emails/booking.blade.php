予約メールです

お客様情報

氏名: {{ $application->name }}
ふりがな: {{ $application->kana }}
年齢: {{ $application->age }}
性別: {{ gender_text($application->gender) }}
電話番号: {{ $application->tel }}
メールアドレス: {{ $application->email }}
来店人数: {{ people_text($application->people) }}
来店回数: {{ visited_text($application->visited_code) }}
来店目的: 
@if ($application->objective_of_visit)
@foreach (explode(',', $application->objective_of_visit) as $o)
・{{ objective_of_visit_text($o) }}
@endforeach
@endif
---
来店予定日時: {{ $date->datetime }}

