<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Zaman</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
       
       
        <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/plugins/waves/waves.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet">

      

        <link href="{{asset('admin/assets/css/alpha.min.css')}}" rel="stylesheet">
        
     


    </head>
    <body>

        <div class="alpha-app">
        @include('admin.header')
            
            <!-- Page Header -->


            
            
            <!-- Quick Search Results -->
        @include('admin.sidever')
            
            
            <!-- Left Sidebar -->
            <div class="page-content">

            @yield('contant')
                
            </div>

            
        </div>
        
        
        <!-- App Container -->
        
        <!-- Javascripts -->
         
        <script src="{{asset('admin/assets/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
    
        <script src="{{asset('admin/assets/plugins/waves/waves.min.js')}}"></script>
 
        <script src="{{asset('admin/assets/js/alpha.min.js')}}"></script>
        
        


    </body>
</html>