@extends('layout')
@section('title','セミナー一覧')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>セミナー一覧</h2>
      @if (session('err_msg'))
      <p class="text-danger">
        {{ session('err_msg')}}
      </p>
      @endif
      <table class="table table-striped">
        <tr>
          <th>開催形式</th>
          <th>開催日付</th>
          <th>セミナーイメージ</th>
          <th>主催</th>
          <th>開催地</th>
          <th>講座紹介</th>
        </tr>
        @foreach($seminars as $seminar)
        <tr>
          <td>{{$seminar->mst_format->name}}</td>
          <td>{{$seminar->seminar_date }}</td>
          <td><img src="{{ asset( 'storage/app/public/images/' .$seminar->seminar_image_id) }}"
              {{-- <td><img src="{{ asset( 'storage/images/' .$seminar->seminar_image_id) }}" --}}
              style="max-width: 400px; max-height: 400px; text-align:center;"></td>
          {{-- <td><img src="{{ asset( 'storage/images/6lNNi13eqjFVoO5nZqb3cwlh6ouCO1FKEpcrkTTX.png') }}"
          style="max-width: 400px; max-height: 400px;"></td>//この名前ならば表示される --}}
          {{-- <img src="{{ asset('storage/img/' .$event->img) }}" class="rsv_img_size"> --}}
          <td><a href="{{action("SeminarController@showDetail",$seminar->id) }}">{{$seminar->eventologist }}</a></td>
          <td>{{$seminar->mst_prefectures_code->name}}</td>
          <td>{{$seminar->lead }}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection