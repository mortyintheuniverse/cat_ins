@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.side_bar')
        </div>
        <div class="col-6">
            @include('shared.success_message')
            @include('shared.submit')
            <hr>
            @foreach($catins as $catinsInfo)
            <div class="mt-3">
                @include('shared.cat_info')
            </div>
            @endforeach
            <div class="mt-3"> </div>
                {{ $catins -> links() }}
        </div>
        <div class="col-3">
            @include('shared.search')
            @include('shared.follow')
        </div>
    </div>
@endsection
