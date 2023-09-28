@section ('navbar-desktop')

<!-- Desktop Navbar Begins --- -->        
        <div class="grid-item navi">
             <div class="top-bar">
                <a href="tel:+4407741681645"><i class="fa-solid fa-phone-volume black" id="top-bar-m"></i> Call: 07741681645</a>
            </div>    
            <nav class="navigation-bar">
                <div class="logo">
                    <img src="/images/logo/logo_square-removebg1.png">
                </div>
                <a href="#" class="nav-toggle"><i class="fa-solid fa-bars"></i></a>
                 <div class="navigation-links">
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
                <div class="telephone centered">
                    <a class="button-large" href="tel:+4407741681645"><i class="fa-solid fa-phone-volume black" id="top-bar-m"></i>Call: 07741681645</a>
                </div>
            </nav>
            
        </div>
<!-- Desktop Navbar Ends --- -->

