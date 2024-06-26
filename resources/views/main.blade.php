<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>

    <body>
        @include('partials._nav')
        
        <div class="container">
            @include('partials._message')
            
            @yield('content')

            @include('partials._footer')
            
        </div> <!-- End of .Container -->
        
        @include('partials._javascripts')
        
        @yield('scripts')
    </body>
</html>