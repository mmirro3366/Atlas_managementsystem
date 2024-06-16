@extends('layouts.sidebar')

@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF;">
    <div class="w-75 m-auto border" style="border-radius:5px;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right w-75 m-auto">
      <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">
    </div>
  </div>
</div>

<!--モーダルの中身-->
<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <li>予約日：
      <a class="modal_getData"></a>
      <input type="hidden" class="modal_getData" name="getData" value="" form="deleteParts">
    </li>
    <li>時間：リモ
      <a class="modal_getPart"></a>部
      <input type="hidden" class="modal_getPart" name="getPart" value="" form="deleteParts">
    </li>
    <li>上記の予約をキャンセルしてもよろしいですか？</li>
    <div>
    <a class="js-modal-close btn btn-primary d-inline-block" href="" >閉じる</a>
    <input type="submit" class="btn btn-danger d-block" value="キャンセル" onclick="return confirm('キャンセルしてもよろしいですか？')" form="deleteParts"></input>
    </div>
  </div>
  {{ csrf_field()}}
</div>
@endsection
