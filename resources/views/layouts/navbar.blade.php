   <!-- Start Nav Bar -->
                
   <a id="top"></a>     <!-- Back to top tag -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
              </li>
             
              @if(Auth::User()->role=='Manager' || Auth::User()->role=='Staff')
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/create/contacts">Create Contacts</a>
                    <a class="dropdown-item" href="/create/projects">Create New Project</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Admin Panel</a>
                  </div>
              </li>
              @endif
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">V.01</a>
                </li>
           </ul>
            <form class="form-inline my-2 my-lg-0" action="/search/contacts">
              <input class="form-control mr-sm-2" type="search" style="width:175px" name="search" placeholder=" Search Contact Name" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
      </div>
</nav>
<!-- End Nav Bar -->