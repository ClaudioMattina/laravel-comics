@extends('guest.layouts.main')

@section('main-content')
    
    <div class="single-card-container">
        <div class="blue-space"> 
        </div>

        <div class="info-container">
            <div class="info">
                <h1>title</h1>
                <div class="price-container">
                    <div class="price">
                        <p>U.S. Price: 22.22 {{}}</p>
                        <p class="color-grey">{AVAIBLE}</p>
                    </div>
                    <div class="check">
                        <p class="color-white">Check Availability</p>
                    </div>
                </div>
                <div class="desciprion">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolorem maiores libero? Dignissimos est, nam impedit ea itaque magnam sequi reiciendis facere hic perspiciatis. Aliquam iure itaque aspernatur eaque fugiat?</p>
                </div>
            </div>
            <div class="img-info">
                <div class="short-description">
                    <p>advsmntpf</p>
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
                    <p class="color-blue">paragrafo</p>
                </div>
                <div>
                    <p>Written by:</p>
                    <p class="color-blue">paragrafo</p>
                </div>
            </div>
            <div class="spects">
                <div>
                    <h1>Spects</h1>
                </div>
                <div>
                    <p>Series:</p>
                    <p class="color-blue">{ACTION}</p>
                </div>
                <div>
                    <p>U.S. Price:</p>
                    <p>{19.90}</p>
                </div>
                <div>
                    <p>On Sale Date:</p>
                    <p>{Oct...}</p>
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
