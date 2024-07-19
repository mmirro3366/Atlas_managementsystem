@extends('layouts.sidebar')

@section('content')
<div class="pt-5 pb-5" style="background:#ECF1F6;">
  <div class="w-75 m-auto text-center" style="border-radius:5px; background:#FFF;">
    <div class="w-75 m-auto pt-5 pb-5">
      <p>{{ $calendar->getTitle() }}</p>
      <p>{!! $calendar->render() !!}</p>
    </div>
  </div>
</div>
@endsection
