<link rel="icon" href="{{ asset('assets/theme/images/favicon.ico')}}">
    
<!-- Vendors Style-->
<link rel="stylesheet" href="{{ asset('assets/theme/css/vendors_css.css')}}">
    
<!-- Style-->  
<link rel="stylesheet" href="{{ asset('assets/theme/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/theme/css/skin_color.css')}}">

@if(request()->path() !== '/') 
    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">
@endif