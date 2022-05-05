<div class="header-container">
    <div id="logo">
      <img src="{{asset("images/dc-logo.png")}}" alt="">
    </div>

    <div id="nav-list">
      <ul>

        @foreach ($headerList as $elementList)
            <li>{{ $elementList['text'] }}</li>
        @endforeach

      </ul>
    </div>
</div>