@include('web.include.header')
	@yield('style')
    @yield('content')
    @if(isset($page))
        @include('web.common')
    @endif
@include('web.include.footer')
@yield('script')