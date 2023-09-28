@section ('navbar-mobile')

<!-- --- Mobile Navbar Begins --- -->
    <nav>
        <div class="navigation-mobile">
            <div class="logo-mobile-menu">
                <img src="/images/logo/logo_round-removebg.png">
            </div>    
            <div class="navigation-links" id="mobile">
                <ul class="nav-ul">
                    <li><a href="/">Home</a></li>
                    <li><a href="{!! Request::is('/') ? '' : url('/') !!}#Services">Services</a></li>
                    <li><a href="{!! Request::is('/') ? '' : url('/') !!}#About">About</a></li>
                    <li><a href="{!! Request::is('/') ? '' : url('/') !!}#Contact">Contact</a></li>
                    <li><a href="/blog">Blog</a></li>

                    @if (Auth::check())
                    @can('admin-or-editor-only')
                    <li><a href="/dashboard">Admin</a></li>
                    @endcan
                    @endif

            </ul>    
            </div>
            <div class="socials-mobile-container">
                <h1>Follow our Socials</h1>
                <ul class="socials-mobile">
                    <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                </ul>   
            </div>    
        </div>    
    </nav>
<!-- --- Mobile Navbar Ends --- -->    