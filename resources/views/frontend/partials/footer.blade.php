


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    {{-- <h1 class="text-primary"><span class="text-white">DHAKA</span>TRAVEL</h1> --}}
                </a>
                <a href="{{url('/')}}" class="navbar-brand">
                    {{-- <h1 class="m-0 text-primary"><span class="text-dark">Dhaka </span>TRAVEL</h1> --}}
                    <img src="{{asset('frontend/travelassets/img/logo1.jpeg')}}" alt="logo"  style="height: 80px; width: 250px;" >
                </a>
                <p class="p-3">
                    At Dhaka Travels and Tours, we are dedicated to providing you with exceptional travel experiences. Whether you’re 
                    planning a family vacation, a romantic getaway, or a business trip, our team of experts is here to make your journey unforgettable.
                </p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;"> Quick Link</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="{{route('service')}}"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="{{ route('career')}}"><i class="fa fa-angle-right mr-2"></i>Career</a>
                    <a class="text-white-50 mb-2" href="{{route('package')}}"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="{{route('guide')}}"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="{{route('testimonial')}}"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="{{route('blog')}}"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Site Information</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="{{ route('team')}}"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                    <a class="text-white-50 mb-2" href="{{ route('client')}}"><i class="fa fa-angle-right mr-2"></i>Our Client </a>
                    <a class="text-white-50 mb-2" href="{{ route('stories')}}"><i class="fa fa-angle-right mr-2"></i> Stories </a>
                    
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Others Website</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href=""><i class="fa fa-angle-right mr-2"></i>BGL Overseas bd</a>
                    <a class="text-white-50 mb-2" href=""><i class="fa fa-angle-right mr-2"></i>BGL Overseas Soudi</a>
                    <a class="text-white-50 mb-2" href=" "><i class="fa fa-angle-right mr-2"></i>Tarud Constaction</a>
                    <a class="text-white-50 mb-2" href=" "><i class="fa fa-angle-right mr-2"></i> AR Brothers </a>
                    <a class="text-white-50 mb-2" href=" "><i class="fa fa-angle-right mr-2"></i> A1 Study </a>

                </div>
               
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Dhaka Travels & Tours </a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="">Forhad Ahsan</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/travelassets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/travelassets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/travelassets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/travelassets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('frontend/travelassets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontend/travelassets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('frontend/travelassets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/travelassets/js/main.js') }}"></script>
</body>

</html>