@extends('layout')

<!-- contentul din pagina contact -->
@section('content')
<section>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center g-0">
        
    <!-- titlu contact -->

    <div class="col-md-6 text-start">
                    <h1>
                       <div class="display-5 ms-4">Aveți curiozități?</div>
                       <div class="text-muted ms-4"><h3>Completați formularul si vom raspunde in 24h.</h3></div>
                    </h1><br><br><br>
                    <h3 class="ms-4">Ne puteti găsi si prin:</h3>
                    <div class="p-3 m-3 border-start border-4 border-primary rounded-pill"><h4><i class="bi bi-envelope-fill">calin.cufteac24@yahoo.com</i></h4></div> 
                    <div class="p-3 m-3 border-start border-4 border-primary rounded-pill"><h4><i class="bi bi-telephone-fill">0785205148</i></h4></div>
                    <div class="p-3  m-3 border-start border-4 border-primary rounded-pill"><h4><i class="bi bi-geo-alt-fill">str Dârstelor 6</i></h4></div>
                    
    </div>
    
    
    <!-- contact form -->             
    <div class="col-md-5">
           
        <div class="card-contact text-white">
            <div class="card-header text-center text-white">
               <h3>Contactati-ne</h3>
             </div>
        <div class="card-body rounded-pill ">
          <form action="{{ url('insert-data') }}" method="POST">
                @csrf
            <div class="mb-3">
                <label for="nume" class="form-label">Nume </label>
                <input type="text" class="form-control" id="nume" name="nume" placeholder="Mario Ten">
               
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="mario@email.com"> 
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon</label>
                <input type="text" class="form-control" id="phone" name="telefon" placeholder="+407854637">
            </div>
            <div class="mb-3">
                <label for="msg" class="form-label">Mesaj</label>
               <textarea name="mesaj" id="msg"  class="form-control" placeholder="Vreau sa stiu cat dureaza livrarea..."></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                </div>
                </div>
                </div>

                </div>
            </div>
</section>
<div class="text-center my-5 ">
    <h1 class="border-4 border-bottom rounded-pill "><i class="bi bi-bookmarks"></i> Informații suplimentare</h1>
    <h4 class="text-muted">Site-ul dispune și de un magazin fizic in orașul Sibiu. Acolo veti găsi o gamă mult mai larga, pana la 5000 de produse.
        Puteți să ne apelați la datele de contact poate avem produsul pe care il doriți în magazin și incă nu este postat pe site. 
    </h4>
</div>

<section>
    <div class="container ">
        <div class="row justify-content-center">
            
<div class="mapouter my-4">
    <div class="title text-center"><h3><i class="bi bi-geo"></i> Aici găsiti,</h3>
       <h5 class="text-secondary"> Harta magazinului de unde puteți ridica direct coletele.</h5>
</div>
    <div class="gmap_canvas mb-5">
        <iframe width="1080" height="345" id="gmap_canvas" src="https://maps.google.com/maps?q=Darstelor%206&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
           <br>
            <style>.mapouter{position:relative;text-align:right;height:345px;width:1080px;}</style>
            <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:345px;width:1080px;}</style>
        </div>
    </div>
        </div>
        </div>
        
</section>

@endsection