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
        
    </div>
    

@endsection
