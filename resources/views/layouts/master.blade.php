<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width = device-width , initial-scale = 1.0" />
    <link rel="stylesheet" href="/fonts/css/font-awesome.min.css" />    
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/sweetalert.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />    
  </head>
  <body>
    
                                             {{-- This is header file --}}

    @include('includes.header')
    
    <div class="main">
                                            {{-- HOME PAGE --}}
                     
      @yield('home')
      @yield('owl_carousel')

                                            {{-- SINGLE POST PAGE --}}

      @yield('singlepost')

                                            {{-- PROFILE PAGE START --}}
      
      @yield('profile')

                                             {{-- UPDATE PROFILE PAGE START --}}
      
      @yield('updateprofile')

                                             {{-- DASHBOARD PAGE --}}
      @yield('dashboard')
  
    </div>
    
    @include('includes.footer')
  
                                            {{-- SCRIPT START HERE --}}

  <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
  <script src="{{URL::asset('tinymce/tinymce.min.js')}}"></script>
  <script src="{{URL::asset('tinymce/init-tinymce.js')}}"></script>
  
  @yield('owl_js')
  <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
  @include('sweet::alert')
  
</body>
</html>
