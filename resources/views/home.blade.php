@extends('layouts.app')

@section('title')
    DC | homepage
@endsection

@section('main_content')
    <div class="thumb"></div>
    <div class="bg-current-series">
        <div class="container">
            <span class="tag-current-series">current series</span>
            <section class="current-series">
                @foreach ($comics_array as $item)
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ $item['thumb'] }}" alt="">
                        </div>
                        <p>{{ $item['title'] }}</p>
                    </div>
                @endforeach
            </section>
            <div class="btn-blue">load more</div>
        </div>
    </div>
@endsection
