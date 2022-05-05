@extends('guest.layouts.main')

@section('main-content')
<div id="content-container">

    <div class="my-special-container">

        @foreach ($mainContent as $contentItem)
        <div class="my-scheda">
            <div class="img-scheda-container">
              <img src="{{ $contentItem['thumb'] }}" :alt="serieTitle">
            </div>
            <h3> {{$contentItem['series']}} </h3>
        </div>
        @endforeach
        
    
      </div>
    
      <div id="my-btn">
          <a href="#">LOAD MORE</a>
      </div>

</div>    


@endsection