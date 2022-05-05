@extends('guest.layouts.main')

@section('main-content')
<div id="content-container">

    <div class="my-special-container">

        @foreach ($mainContent as $index => $contentItem)
        <div class="my-scheda">
            <div class="img-scheda-container">
              <img src="{{ $contentItem['thumb'] }}" :alt="serieTitle">
            </div>
            <a href="{{ route('guest-single-card', ['id' => $index]) }}">
                <h3> {{$contentItem['series']}} </h3>
            </a>
        </div>
        @endforeach
        
    
      </div>
    
      <div id="my-btn">
          <a href="#">LOAD MORE</a>
      </div>

</div>    


@endsection