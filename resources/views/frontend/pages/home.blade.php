@extends('frontend\layouts\master')
@section('content')
    <div class="main-div">
    @include('frontend\components\hero')
    @include('frontend\components\blog')
    @include('frontend\components\trending')
    @include('frontend\components\card')
    </div>
@endsection
