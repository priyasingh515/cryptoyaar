@include('backend.layouts.header') 

  @yield('content')
    @stack('scripts')
  
@include('backend.layouts.footer')