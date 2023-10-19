@extends('frontend\layouts\master')
@section('content')
    <div class="main-div">
    @include('frontend\components\hero')
    @include('frontend\components\event')
    @include('frontend\components\trending')
    @include('frontend\components\card')
    </div>
@endsection
