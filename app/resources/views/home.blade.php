<x-site-layout>
    <x-slot name="slot">
        <!-- start hero -->
            @livewire('hero')
        <!-- end hero -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- start about -->
            @livewire('about')
        <!-- end about -->

        <!-- start services -->
            @livewire('services')
        <!-- end services -->

        <!-- start resume -->
            @livewire('resume')
        <!-- end resume -->

        <div class="position-relative"> 
            <div class="shape overflow-hidden text-light"> 
                <svg viewBox="0 0 2880 150" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M110 105L2160 0H2880V150H0V105H110Z" fill="currentColor"></path> </svg>
            </div>
        </div>

        <!--what client says -->
            @livewire('what-client-says')
        <!-- end what client says -->

        <section class="section bg-light cta-pettern" id="cta">
            <div class="container">            
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="pattern-1 position-absolute">
                            <img src="images/p-1.svg" alt="" class="" height="80">
                        </div>
                        <h2 class="text-dark" style="line-height: 1.5; position: relative;">I Am Available For Freelancer.</h2>
                        <p class="text-muted mb-0">Browse hundreds of job offers and find the bestsuitable position.</p>
                    </div><!--end col--> 
                    <div class="col-lg-6 ml-auto">
                        <div class="cta-search">
                            <form class="position-relative">
                                <input type="email" placeholder="Email Address" required="">
                                <button type="submit" class="btn btn-dark">Send Massage</button>
                            </form>
                        </div>
                    </div><!--end col--> 
                </div><!--end row--> 
            </div><!--end container--> 
        </section>

        <!-- start projects -->
        <section class="section" id="projects">
            <div class="container">                
                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-10 col-lg-7 text-center">
                        <span class="badge badge-lg rounded bg-soft-alt-success fw-normal fs-13 text-uppercase">Work</span>
                        <h2 class="fs-2 fw-medium lh-1 text-dark my-3">My Projects</h2>
                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                            We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning .
                        </p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">                    
                    <div class="col-12 filters-group-wrap">
                        <div class="filters-group mb-5">                            
                            <ul class="mb-0 list-unstyled filter-options filter-tab">
                                <li class="list-inline-item position-relative text-dark active" data-group="all">All</li>
                                <li class="list-inline-item position-relative text-dark" data-group="angular">Angular</li>
                                <li class="list-inline-item position-relative text-dark" data-group="mongodb">Mongodb</li>
                                <li class="list-inline-item position-relative text-dark" data-group="bootstrap">Bootstrap</li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row d-flex  g-1 justify-content-center" id="grid">
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["angular", "bootstrap"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-orange d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="images/logos/Angular.svg" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href=""><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->  
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Angular</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">React</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Jquery</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["bootstrap"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-info d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="images/logos/bootstrap.svg" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href=""><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->                             
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Bootstrap</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Css</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Javascript</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["mongodb", "vue", "angular"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-success d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="images/logos/mongodb.svg" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href=""><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->                             
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Mongodb</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Javascript</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col --> 
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["vue"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-success d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="images/logos/vue.svg" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href=""><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->                             
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Vue</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Javascript</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["react", "angular"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-primary d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="images/logos/react.svg" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href=""><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->                             
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">React</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Javascript</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end projects -->

        <!-- our blogs -->
        <section class="section " id="blogs">
            <div class="container pb-5">
                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-10 col-lg-7 text-center">
                        <span class="badge badge-lg rounded bg-soft-alt-success fw-normal fs-13 text-uppercase">Blogs</span>
                        <h2 class="fs-2 fw-normal lh-1 text-dark my-3">Latest news & insights</h2>
                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                            We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning .
                        </p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow">
                            <img src="images/personal/1.jpg" alt="" class="img-fluid rounded-top">
                            <div class="card-body">
                                
                                <a href="blog-detail.html" class="fs-20 my-0 d-block fw-medium">Change the world with small things</a>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="meta-box">
                                        <div class="media">
                                            <img src="images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle me-2 align-self-center">                                       
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="m-0 fs-14">Charles Woodall</h6>
                                                <p class="mb-0 fs-12 text-muted">14 Feb 2022</p>
                                            </div><!--end media-body-->
                                        </div>                                            
                                    </div><!--end meta-box-->
                                    <div class="align-self-center">
                                        <a href="blog-detail.html" class="fs-14">Read more <i class="ti ti-arrow-right align-self-center"></i></a>
                                    </div>
                                </div>                                                                 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow">
                            <img src="images/personal/3.jpg" alt="" class="img-fluid rounded-top">
                            <div class="card-body">                                
                                <a href="blog-detail.html" class="fs-20 my-0 d-block fw-medium">With a clean, minimal and professional look</a>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="meta-box">
                                        <div class="media">
                                            <img src="images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle me-2 align-self-center">                                       
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="m-0 fs-14">Jarvis Owen</h6>
                                                <p class="mb-0 fs-12 text-muted">12 Jan 2022</p>
                                            </div><!--end media-body-->
                                        </div>                                            
                                    </div><!--end meta-box-->
                                    <div class="align-self-center">
                                        <a href="blog-detail.html" class="fs-14">Read more <i class="ti ti-arrow-right align-self-center"></i></a>
                                    </div>
                                </div>                                                                 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->           
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow">
                            <img src="images/personal/2.jpg" alt="" class="img-fluid rounded-top">
                            <div class="card-body">                                
                                <a href="blog-detail.html" class="fs-20 my-0 d-block fw-medium">With a clean, minimal and professional look</a>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="meta-box">
                                        <div class="media">
                                            <img src="images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle me-2 align-self-center">                                       
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="m-0 fs-14">Jarvis Owen</h6>
                                                <p class="mb-0 fs-12 text-muted">12 Jan 2022</p>
                                            </div><!--end media-body-->
                                        </div>                                            
                                    </div><!--end meta-box-->
                                    <div class="align-self-center">
                                        <a href="blog-detail.html" class="fs-14">Read more <i class="ti ti-arrow-right align-self-center"></i></a>
                                    </div>
                                </div>                                                                 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->            
                </div><!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!--end projects-->

        <!-- start contact us -->
        <section class="section bg-light" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-white"  style="background: url(images/personal/testi-pet.png); background-repeat: no-repeat; background-size: 15%; background-position: right bottom;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="fs-2 fw-normal lh-1 text-dark mb-3">Get in touch !</h2>
                                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 ">Always available for freelancing if the right project <br> comes along, Feel free to contact me.</p>
                                        <form method="post" name="myForm" onsubmit="return validateForm()">
                                            <span id="error-msg"></span>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label fs-16" for="name">Name</label>
                                                    <input type="text" class="form-control" placeholder="Your name" id="name" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="email">Email</label>
                                                    <input type="email" class="form-control" placeholder="Your email" id="email" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="subject">Subject</label>
                                                    <input type="text" class="form-control" placeholder="your subject" id="subject" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="number">Contact</label>
                                                    <input type="text" class="form-control" placeholder="+00 1234 5678 90" id="number" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-12 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="comments">Message</label>
                                                    <textarea class="form-control" id="comments" placeholder="Enter your message..." rows="5"></textarea>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-12">
                                                    <input type="submit" id="submit" name="send" class="btn btn-primary mt-2" value="Send message" />
                                                </div>
                                                <!-- end col -->
                                            </div><!--end row-->
                                        </form><!-- end form -->
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <img src="images/personal/contact.svg" alt="" height="200" class=" mx-auto d-block mb-5">
                                        <div class="d-flex">
                                            <div class="bg-light d-flex justify-content-center align-items-center thumb-lg  rounded">
                                                <i class="ti ti-phone fs-22"></i>
                                            </div>
                                            <div class="align-self-center ms-3">
                                                <span class="d-block lh-1">+1 234 567 89</span>
                                                <span class="text-muted fs-14 mt-n2">9:00am to 7:00pm</span>
                                            </div>
                                        </div>
                                        <hr class="hr-dashed my-3">
                                        <div class="d-flex">
                                            <div class="bg-light d-flex justify-content-center align-items-center thumb-lg  rounded">
                                                <i class="ti ti-mail fs-22"></i>
                                            </div>
                                            <div class="align-self-center ms-3">
                                                <span class="d-block lh-1">example@example.com</span>
                                                <span class="text-muted fs-14 mt-n2">Monday to Saturday</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!-- end row -->  
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!-- end col -->
                </div><!-- end row -->   
            </div><!-- end container -->
        </section>
        <!-- end contact us -->

        <div class="position-relative">
            <div class="shape overflow-hidden bg-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- start footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 border-e-dashed">
                        <a href="layout-one-1.html">
                            <img src="images/logo-sm.png" alt="" height="18" />
                            <img src="images/logo-light.png" alt="" height="16" />
                        </a>
                        <p class="my-4">In an ideal world this text wouldn’t exist, 
                            a client would acknowledge the importance of having web 
                            copy before the design starts.
                        </p>
                        <ul class="list-unstyled footer-social mb-0 mt-sm-0 mt-3">
                            <li class="list-inline-item">
                                <a href="#"> <i class="icon-xs" data-feather="facebook"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"> <i class="icon-xs" data-feather="twitter"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"> <i class="icon-xs" data-feather="github"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"> <i class="icon-xs" data-feather="instagram"></i> </a>
                            </li>
                        </ul>
                    </div><!-- end col -->
                    <div class="col-lg-6 offset-lg-1">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-5">Company</h6>
                                <ul class="list-unstyled footer-list">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#services">services</a></li>
                                    
                                </ul>
                            </div><!-- end col -->
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-4">Information</h6>
                                <ul class="list-unstyled footer-list">
                                    <li><a href="#resume">Resume</a></li>
                                    <li><a href="#review">Client Say</a></li>
                                    <li><a href="#projects">Projects</a></li>                                    
                                    
                                </ul>
                            </div><!-- end col -->
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-4">More info</h6>
                                <ul class="list-unstyled footer-list">
                                    <li><a href="#blogs">Blogs</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                    <li><a href="#">Terms & condition</a></li>
                                </ul>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->

        <!-- start footer alter -->
        <div class="footer-alt">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p> &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> Selfown. Created with <i class="las la-heart text-danger"></i> by Mannatthemes</p>
                    </div>
                    <div class="col-sm-6 text-sm-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#">- Terms & condition<sup class="text-danger">*</sup></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer alter -->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()">
            <div>
                <h3 class="fw-medium mb-0">Select Your Choice</h3>
                <hr class="hr-dashed my-3">
                <ul class="pattern">
                    <li>
                        <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                    </li>
                    <li>
                        <a class="color2" href="javascript: void(0);" onclick="setColor('info')"></a>
                    </li>
                    <li>
                        <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                    </li>
                    <li>
                        <a class="color4" href="javascript: void(0);" onclick="setColor('orange')"></a>
                    </li>
                    <li>
                        <a class="color5" href="javascript: void(0);" onclick="setColor('purple')"></a>
                    </li>
                    <li>
                        <a class="color6" href="javascript: void(0);" onclick="setColor('success')"></a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <a href="javascript: void(0);" class="settings rounded-end"><i class="las la-paint-brush fs-22"></i></a>
            </div>
        </div>
        <!-- end Style switcher -->
    </x-slot>

    <x-slot name="scripts">
        <script src="{{asset('demo/js/bootstrap.bundle.min.js')}}"></script>

        <!-- feather icon -->
        <script src="{{asset('demo/js/feather.js')}}"></script>
        <script src="{{asset('demo/js/shuffle.min.js')}}"></script>
        <script src="{{asset('demo/js/projects.init.js')}}"></script>
        <script src="{{asset('demo/js/typed.js')}}"></script>
        
        <script src="{{asset('demo/js/app.js')}}"></script>
    </x-slot>
</x-site-layout>