<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin._meta')
    @include('layouts.admin._style')
</head>
<body class="sb-nav-fixed">
    @include('layouts.admin._header') 
    <div id="layoutSidenav">
    @switch(Auth::user()->role->name)
                @case ('Admin')
                    @include('layouts.admin.sidebar._adminsidebar')  
                    @break
                @case ('Management Assistant')
                    @include('layouts.admin.sidebar._masidebar')   
                    @break  
                @case ('Development Officer')
                    @include('layouts.admin.sidebar._dosidebar') 
                     @break
        @endswitch
   
    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    @yield('header')
                    @yield('content')
</div>
</main>
    @include('layouts.admin._footer') 
</div>
</div>
@include('layouts.admin._script')
@yield('js')

</body>
</html>

