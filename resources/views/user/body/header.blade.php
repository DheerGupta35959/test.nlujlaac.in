<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="#" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center">
                    <img src="{{asset('upload/Logo.png')}}" name="Logo">
                    <p style="color: white;font-size: 31px;font-weight: bold; font-family: 'Roboto', sans-serif;" class="m-1 px-2">Legal Aid &amp; Awareness Committee</p>
                </a>
            </div>
            <div class="col-lg-9 bg-secondary">
                <div class="row border-bottom d-none d-lg-flex" style="color:#fcfcfc">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>contact@nlujlaac.in</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+91-9521231685</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+91- 8874703922</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.facebook.com/nlujlaac/?ref=br_rs">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://in.linkedin.com/in/legal-aid-and-awareness-committee-laac-national-law-university-jodhpur-4711231a3">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://twitter.com/AidCommittee/">
                                <i class="fab fa-twitter"></i>
                            </a>                            
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.instagram.com/laac_nluj/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.youtube.com/channel/UCBHKvg92K7g0xSkhVAyheMA">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light p-1">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Legal Aid &amp; Awareness Committee</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-2">
                        <a href="{{route('user.home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('user.aboutus')}}" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="{{route('user.ourteam')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Team</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="#" class="dropdown-item">Patrons</a>
                                <a href="#" class="dropdown-item">Faculty Coordinators</a>
                                <a href="{{route('user.ourteam')}}" class="dropdown-item">Student Memebers</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Board Of Advisors</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="#" class="dropdown-item">Our Mentors</a>
                                <a href="#" class="dropdown-item">Former Conveners</a>
                                <a href="#" class="dropdown-item">Alumni</a>
                            </div>
                        </div>                        
                        <a href="{{route('user.contact')}}" class="nav-item nav-link">Contact</a>
                        <a href="{{route('user.blog')}}" class="nav-item nav-link">दर्पण Blog</a>
                        <a href="{{route('user.donation')}}" class="nav-item nav-link">Donation</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>    