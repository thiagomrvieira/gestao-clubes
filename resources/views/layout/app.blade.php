<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="{{asset('css/app.css')}}" />
    
</head>
<body>
    <div class="container">
        @component('navbar')
        @endcomponent
        <main role="main">
            
            @hasSection('body')
                @yield('body')
            @endif
        
        </main>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>