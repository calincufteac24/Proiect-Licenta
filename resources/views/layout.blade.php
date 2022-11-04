<!DOCTYPE html>
<html>
<head>
 <title>Ps-Master</title>
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

 <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script> src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
 <style>
       
       .checkout-form label{
           font-size: 20px;
           font-weight: 200;
       }
       .checkout-form input{
           font-size: 20px;
         
           padding: 5px;
       }
       .card-checkout{
           background-image: url(img/bg4.jpg);
           background-size: cover;
       }

       .card-details{
           background-image: url(img/bg5.jpg);
           background-size: cover;
       }
       .order-details{
           font-size: 25px;
       }
        body {
                font-family: "Constantia"; 
                background:!important;
            }
            img {
            display: block;
            max-width: 100%;
            height: auto;
            }
            
            .card-contact
            {
            background-image: url(img/bg.jpg);
            background-size: cover;
                    }
            a{
                text-decoration: none !important;
            }
         .sort-font{
             font-size: 30px;
             margin: 0 10px;
         }
    </style>

 
</head>
<body>
    <!-- mesaj success -->

<!-- Navbar de conectare la cont-->

                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        
                        @guest
                            @if (Route::has('login'))
                          
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Conectare') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inregistrare') }}</a>
                                </li>
                                
                            @endif
                        @else
                            <li class="nav-item dropdown" value="{{ Auth::user()->role_as }}" id="navitem">
                                <a id="navbarDropdown" value="{{ Auth::user()->role_as }}" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconectare') }}
                                    </a>
                                    
                                    <a class="dropdown-item" id="admindash" value="{{ Auth::user()->role_as }}" href="{{ url('/dashboard') }}">{{ __('Panou Admin ') }}</a>
                                    
                                    <li class="nav-item">
                                    <a class="nav-link"  href="{{ url('my-orders') }}">{{ __('Contul meu ') }}</a>
                                     </li>
                              

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




<!-- Bara de navigare logo -->
    <nav class="navbar navbar-expand-md navbar-light shadow">
        <div class="container-md">
        <a href="{{ url('/') }}">   <img src="/img/logo2.png" height="120" width="330" alt="logo"></a>
         
         


<!-- Linkuri bara de navigare -->
<div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav pt-4 ">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link"><h4>Acasă</h4></a>
                </li>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/category') }}" class="nav-link"><h4>Produse</h4></a>
                </li>
                 <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('discount') }}" class="nav-link"><h4>Oferte</h4></a>
                </li>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/contact') }}" class="nav-link "><h4>Contact</h4></a>
                </li>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/cart') }}" class="btn btn-info "><H4>Coș <span class="badge badge-pill badge-danger"></span><i class="bi bi-cart4"></i></H4></a>
                </li>
                 
        </div>

    </div>
    </nav>


    @if(session('message'))
           <div class="alert alert-success text-center">{{session('message')}}</div>
    @endif



<div class="container">


 @yield('content')
</div>

@yield('scripts')


<!-- Newsletter -->
<section class="bg-light mt-5 shadow-lg" >
            <div class="container-lg" >
                <div class="row justify-content-center align-items-center pt-3">
                <div class="col-xl-3 col-lg-3 col-md-3 pt-4 px-5 text-start">
                    
                    
                    <h5> <a href="{{ url('/') }}" class="text-muted text-decoration-none"><i class="bi bi-house text-info"></i> Acasă</a><br>
                        <a href="{{ url('/category') }}" class="text-muted text-decoration-none"><i class="bi bi-router text-info"></i> Produse </a><br>
                        <a href="{{ url('/discount') }}" class="text-muted text-decoration-none"><i class="bi bi-percent text-info"></i> Oferte</a><br>
                        <a href="{{ url('/contact') }}" class="text-muted text-decoration-none"><i class="bi bi-telephone text-info"></i> Contact</a><br>
                        <a href="{{ url('/cart') }}" class="text-muted text-decoration-none"><i class="bi bi-cart4 text-info"></i> Coș</a></h5>
                </div>
             



                    <div class="col-lg-4 col-xl-6 col-md-3 text-center pt-3">
                    <div class="text-center ">
                    <h2>Abonează-te acum</h2>
                    <p class="lead">Fii la curent cu toate ofertele noastre...</p>
                </div>
                       <p class="text-muted my-2">
                          Abonează-te acum la newsletter-ul nostru unde vă vom ține le curent cu ultimele noastre oferte și reduceri de produse.
                       </p> 
                       <button class="btn btn-outline-info my-3" data-bs-toggle="modal" data-bs-target="#reg-modal">Mă inregistrez</button>
                    </div>
                  
                    <div class="col-xl-3 col-lg-3 col-md-3 text-end">
                        <h5>Comenzile pot fi ridicate și fizic din :</h5>
                        <div class="bg-info rounded-pill text-center mt-4">
                            <a href="https://www.facebook.com/UnitelSibiu" class="text-decoration-underline text-dark">Magazinul UNITEL SRL</a>
                            <p>str DARSTELOR nr 6 <br>Sibiu</p>
                            
                        </div>
                    </div>
                 </div>
            </div>


  
 <!--Mesajul Pop-up  -->
 <form action="{{ url('newsletters') }}" method="POST">
                @csrf
 <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content bg-light ">
                     <div class="modal-header">
                         <h5 class="modal-title " id="modal-title">Fii la curent cu toate ofertele noastre!</h5>
                         <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <h5>Introdu adresa ta de email și te vom ține la curent cu toate noutățile noastre.<br>
                         </h5>
                         <label for="email" class="form-label">Adresa ta de email:</label>
                         <div class="mb-4 input-group">
                            <span class="input-group-text">
                            <i class="bi bi-envelope-heart-fill"></i>
                            </span>
                       
                         <input type="email" class="form-control" name='email' id="modal-email" placeholder="e.g.mario@example.com" >
                        </div>
                </div>
                     <div class="modal-footer ">
                         <button class="btn btn-info" type="submit">Submit</button>
                     </div>
                 </div>
             </div>
         </div>
</form>
</section>

<!-- Sectiune iconite social-media -->
<section class="bg-light">
<div class="container-md">
            <div class="row justify-content-center ">
         
                <div class="text-center text-light">  
                <h2>
                <a href="https://twitter.com/CufteacC" class="bi bi-twitter text-info"></a>
                <a href="https://wa.me/40785205148?text=M-ar%20interesa%20produsul%20de%20pe%20website%20..." class="bi bi-whatsapp text-success"></a>
                <a href="https://www.facebook.com/cufteac.calin/" class="bi bi-facebook"></a>
                <a href="https://www.instagram.com/calin.cufteac/" class="bi bi-instagram text-danger"></a>
                
                </h2>
                </div>
            </div>
</div>
</section>







<!-- SCRIPTS -->
 <script>
         const tooltips = document.querySelectorAll('.tt')
         tooltips.forEach(t=> {
             new bootstrap.Tooltip(t)
         })
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/624c31482abe5b455fc4fa72/1fvsq10og';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
     var panou = $('#navitem').val();
     $(document).ready(function(){
        $('#navbarDropdown').on('click', function() {   
            if(panou==0)
            {
                $('#admindash').hide();
            }
  
          
        });
       
       
    });
   
</script>



</body>
</html>