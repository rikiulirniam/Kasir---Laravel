<nav class="navbar navbar-expand-lg sticky-top bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="manage-forms.html">Formify</a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       <li class="nav-item px-2">
         <a class="nav-link active ">
            {{ Auth::user()->username }}
        </a>
       </li> 
       <li class="nav-item px-2">
        <form method="POST" action={{ route('auth.logout') }} >
            <button type="submit" class="btn bg-white text-primary">
                Logout
            </button>
            @csrf
        </form>
          {{-- <a href="index.html" class="btn bg-white text-primary ms-4">Logout</a> --}}
       </li>
     </ul> 
    </div>
  </nav>