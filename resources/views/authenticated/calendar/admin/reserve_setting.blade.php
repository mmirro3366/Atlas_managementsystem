@extends('layouts.sidebar')
@section('content')
<div class="w-100 d-flex pt-5 pb-5" style="align-items:center; justify-content:center; background:#ECF1F6;">
  <div class="w-75 m-auto text-center">
    <div class="w-100 m-auto pt-5 pb-5"  style="border-radius:5px; background:#FFF;">
      <p>{{ $calendar->getTitle() }}</p>
      <p>{!! $calendar->render() !!}</p>
      <div class="adjust-table-btn m-auto text-right">
        <input type="submit" class="btn btn-primary" value="登録" form="reserveSetting" onclick="return confirm('登録してよろしいですか？')">
      </div>
    </div>
  </div>
</div>
@endsection
