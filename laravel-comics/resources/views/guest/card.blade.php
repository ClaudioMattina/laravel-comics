@extends('guest.layouts.main')

@section('main-content')
    
    <div class="single-card-container">
        <div class="blue-space"> 
            <div class="card-img">
                <img src="{{$singleComic['thumb']}}" alt="">
            </div>
        </div>
        
        <div class="info-container">

            <div class="info">
                <h1>{{$singleComic['title']}}</h1>
                <div class="price-container">
                    <div class="price">
                        <p>U.S. Price: {{$singleComic['price']}}</p>
                        <p class="color-grey">AVAIBLE</p>
                    </div>
                    <div class="check">
                        <p class="color-white">Check Availability</p>
                    </div>
                </div>
                <div class="desciprion">
                    <p>{{$singleComic['description']}}</p>
                </div>
            </div>
            <div class="img-info">
                <div class="short-description">
                    <p>ADVERTISEMENT</p>
                </div>
                
                <div class="img-container">
                    <img src="/images/adv.jpg" alt="">
                </div>
            </div>
        </div>

    </div>


    <div class="info-author-container">
        <div class="big-container">
            <div class="talent">
                <div>
                    <h1>Talent</h1>
                </div>
                <div>
                    <p>Art by:</p>
                    <p class="color-blue">......</p>
                </div>
                <div>
                    <p>Written by:</p>
                    <p class="color-blue">......</p>
                </div>
            </div>
            <div class="spects">
                <div>
                    <h1>Spects</h1>
                </div>
                <div>
                    <p>Series:</p>
                    <p class="color-blue">{{$singleComic['type']}}</p>
                </div>
                <div>
                    <p>U.S. Price:</p>
                    <p>{{$singleComic['price']}}}</p>
                </div>
                <div>
                    <p>On Sale Date:</p>
                    <p>{{$singleComic['sale_date']}}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="option-container">
        <div class="options">
            <div>
                <div>
                    <h5>DIGITAL COMICS</h5>
                </div>
                <div>
                    <img src="/images/buy-comics-subscriptions.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <h5>SHOP DC</h5>
                </div>
                <div>
                    <img src="/images/buy-comics-merchandise.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <h5>COMICS SHOP LOCATOR</h5>
                </div>
                <div>
                    <img src="/images/buy-comics-shop-locator.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <h5>SUBSCRIPTIONS</h5>
                </div>
                <div>
                    <img src="/images/buy-comics-digital-comics.png" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
