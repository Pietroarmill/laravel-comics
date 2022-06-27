@extends('layouts.app')

@section('main_content')
    <div class="thumb"></div>

    <div class="row-blue">
        <div class="container">
            <div class="serie-card">
              <div class="serie-card-box">
                <img src="{{ $serie['thumb'] }}" alt="">
                <span class="tag tag-top">COMIC BOOK</span>
                <span class="tag tag-bottom">VIEW GALLERY</span>
              </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="serie">
            <div class="col-left">
                <h3>{{ $serie['title'] }}</h3>
                <div class="price">
                    <div class="price-col price-left">
                      <div class="item-price">U.S. Price: <span>{{ $serie['price'] }}</span></div>

                      <div class="available">AVALAIBLE</div>
                    </div>

                    <div class="price-col price-right">
                      <span>Check Availability</span> <i class="fas fa-sort-down"></i>
                    </div>
                </div>
                <p>{{ $serie['description'] }}</p>
            </div>

            <div class="col-right">
                <p>ADVERTISEMENT</p>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
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
                        <span>{{ $item }}<span class="black">,</span></span>
                      @endforeach 
                    </p>
                </div>
                <div class="specifications-item">
                    <h5>Written by:</h5>
                    <p>
                      @foreach ($serie['writers'] as $item)
                        <span>{{ $item }}<span>,</span></span>
                      @endforeach 
                    </p>
                </div>
            </div>

            <div class="col-right">
                <h4>Specs</h4>
                <div class="specifications-item">
                    <h5>Series:</h5>
                    <p>
                      <span class="upper-c">{{ $serie['series'] }}</span>
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
              <h5>digital comics</h5>
              <div class="img">
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
              </div>
            </div>

            <div class="shop-tag-item">
              <h5>shop dc</h5>
              <div class="img">
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
              </div>
            </div>

            <div class="shop-tag-item">
              <h5>comic shop locator</h5>
              <div class="img">
                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
              </div>
            </div>

            <div class="shop-tag-item">
              <h5>subscriptions</h5>
              <div class="img">
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
