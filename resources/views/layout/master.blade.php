@include('partials.header')

    @if(Route::current()->getName() == 'homePage' || Route::current()->getName() =='shop')
        @include('partials.slide_front_page')
    @endif
</div>

@yield('content')

@include('partials.footer')
