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
            {{-- @livewire('resume') --}}
        <!-- end resume -->

        <div class="position-relative"> 
            <div class="shape overflow-hidden text-light"> 
                <svg viewBox="0 0 2880 150" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M110 105L2160 0H2880V150H0V105H110Z" fill="currentColor"></path> </svg>
            </div>
        </div>

        <!--what client says -->
            {{-- @livewire('what-client-says') --}}
        <!-- end what client says -->

        {{-- <section class="section bg-light cta-pettern" id="cta">
            <div class="container">            
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="pattern-1 position-absolute">
                            <img src="/demo/images/p-1.svg" alt="" class="" height="80">
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
        </section> --}}

        <!-- start projects -->
            {{-- @livewire('projects') --}}
        <!-- end projects -->

        <!-- our blogs -->
            {{-- @livewire('blogs') --}}
        <!--end blogs-->

        <!-- start contact us -->
            {{-- @livewire('contact-us') --}}
        <!-- end contact us -->

        <div class="position-relative">
            <div class="shape overflow-hidden bg-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- start footer -->
        @livewire('footer')
        <!-- end footer -->

        <!-- start footer alter -->
        {{-- @livewire('footer-alt') --}}
        <!-- end footer alter -->

        <!-- Style switcher -->
        {{-- <div id="style-switcher" onclick="toggleSwitcher()">
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
        </div> --}}
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