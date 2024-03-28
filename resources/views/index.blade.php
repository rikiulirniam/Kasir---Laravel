<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kantin - THP</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
  </head>
  <body>
   
   <main>
      <section class="login">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-6">
                  <h1 class="text-center mb-4">Kantin - THP</h1>
                  <div class="card card-default">
                     <div class="card-body">
                        <h3 class="mb-3">Login</h3>
                        
                        <form method="POST" action={{ route('auth.login') }}> 
                           <div class="form-group my-3">
                              <label for="username" class="mb-1 text-muted">Username</label>
                              <input type="text" id="username" name="username" value="" class="form-control" autofocus />
                           </div> 

                           <div class="form-group my-3">
                              <label for="password" class="mb-1 text-muted">Password</label>
                              <input type="password" id="password" name="password" value="" class="form-control" />
                           </div>
                           
                           <div class="mt-4">
                              <button type="submit" class="btn btn-primary">Login</button>
                           </div>
                        @csrf
                        </form>
                        

                     </div>
                  </div> 
               </div>
            </div>
         </div>
      </section>
   </main>

    <script src={{ asset('js/bootstrap') }}></script>
    <script src={{ asset('js/popper.js') }}></script>
  </body>
</html>