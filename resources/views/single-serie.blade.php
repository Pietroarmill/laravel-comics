@extends('layouts.app')

@section('main_content')
    <div class="thumb"></div>

    <div class="row-blue">
        <div class="container">
            <div class="serie-card">
                <img src="{{ $serie['thumb'] }}" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <section class="serie">
            <div class="col-left">
                <h3>{{ $serie['title'] }}</h3>
                <div class="price">
                    
                </div>
                <p>{{ $serie['description'] }}</p>
            </div>

            <div class="col-right">
                <span>AD</span>
                <div class="banner">
                    pubblicità
                </div>
            </div>
        </section>
    </div>

    <div class="bg-specifications">
      <div class="container">
        <section class="specifications">

            <div class="col-left">
                <h4>Talent</h4>
                <div class="specifications-item">
                    <h5>Art by:</h5>
                    <p>
                      @foreach ($serie['artists'] as $item)
                        <span>{{ $item }},</span>
                      @endforeach 
                    </p>
                </div>
                <div class="specifications-item">
                    <h5>Written by:</h5>
                    <p>
                      @foreach ($serie['writers'] as $item)
                        <span>{{ $item }},</span>
                      @endforeach 
                    </p>
                </div>
            </div>

            <div class="col-right">
                <h4>Spec</h4>
                <div class="specifications-item">
                    <h5>Series:</h5>
                    <p>
                      <span>{{ $serie['series'] }}</span>
                    </p>
                </div>
                <div class="specifications-item">
                    <h5>U.S. Price:</h5>
                    <p>{{ $serie['price'] }}</p>
                </div>
                <div class="specifications-item">
                  <h5>On Sale Date:</h5>
                  <p>{{ $serie['sale_date'] }}</p>
                </div>
            </div>

        </section>
      </div>
      <div class="bg-shop-tag">
        <div class="container">
          <div class="shop-tag">

            <div class="shop-tag-item">
              <h5>Digital</h5>
              <div class="img">
                img
                <img src="" alt="">
              </div>
            </div>

            <div class="shop-tag-item">
              <h5>Digital</h5>
              <div class="img">
                img
                <img src="" alt="">
              </div>
            </div>

            <div class="shop-tag-item">
              <h5>Digital</h5>
              <div class="img">
                img
                <img src="" alt="">
              </div>
            </div>

            <div class="shop-tag-item">
              <h5>Digital</h5>
              <div class="img">
                img
                <img src="" alt="">
              </div>
            </div>

            <div class="shop-tag-item">
              <h5>Digital</h5>
              <div class="img">
                img
                <img src="" alt="">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
