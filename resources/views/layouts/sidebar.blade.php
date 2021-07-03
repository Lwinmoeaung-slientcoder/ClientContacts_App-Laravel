
 <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ClientContacts App</span> </a>
                <div class="nav_list">          
                    <a href="/dashboard" class="nav_link"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 

                    <a href="/user/accounts" class="nav_link"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Users</span> 
                    </a> 
                    <a href="/mail" class="nav_link"> 
                        <i class='bx bx-mail-send nav_icon'></i> 
                        <span class="nav_name">Send Mail</span>
                    </a> 

                    <a href="/contacts" class="nav_link"> 
                        <i class='bx bxs-contact nav_icon'></i> 
                        <span class="nav_name">Client Contacts</span> 
                </a> 

                    <a href="/projects" class="nav_link"> 
                        <i class='bx bx-folder nav_icon'></i> 
                        <span class="nav_name">Client Projects</span> 
                    </a>

              </div> <!--End nav div -->
            </div>  <!--End nav bar div -->
            <a href="{{ url('/logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
    
    <div class="col-md-12">

        @include('layouts.navbar')
       
  
            