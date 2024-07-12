 <!-- Navbar Start -->
 <div class="container-fluid bg-light position-relative shadow">
     <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
         <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
             <i class="flaticon-043-teddy-bear"></i>
             <span class="text-primary">1</span>
         </a>
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
             <div class="navbar-nav font-weight-bold mx-auto py-0">
                 <a href="index.html" class="nav-item nav-link active">11</a>
                 <a href="about.html" class="nav-item nav-link">12</a>
                 <a href="class.html" class="nav-item nav-link">13</a>
                 <a href="team.html" class="nav-item nav-link">14</a>
                 <a href="gallery.html" class="nav-item nav-link">15</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                     <div class="dropdown-menu rounded-0 m-0">
                         <a href="blog.html" class="dropdown-item">Blog Grid</a>
                         <a href="single.html" class="dropdown-item">Blog Detail</a>
                     </div>
                 </div>
                 <a href="contact.html" class="nav-item nav-link">Contact</a>
             </div>
             <a href="{{ url('login') }}" class="btn btn-primary px-4">Login</a>
             <a href="{{ url('register') }}" style="margin-left: 10px" class="btn btn-primary px-4">Register</a>
         </div>
     </nav>
 </div>
 <!-- Navbar End -->
