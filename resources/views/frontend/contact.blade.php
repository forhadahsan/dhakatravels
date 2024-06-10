@extends('frontend.partials.main')


@section('main-container')

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 250px">
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Contact Start -->
    <div class="container-fluid py-5  bg-white">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                {{-- <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact</h6> --}}
                <h1>Contact Us</h1>
                <p class="col-md-8 m-auto"> We value your feedback and are here to assist you with any questions or concerns. Please feel free to reach out to us through any of the following methods </p>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="contact-form" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-info py-3 px-4" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                            <h3 class="my-2"> <b> We will get back to you soon.  </b> </h3>
                            <p style="width: 80%;" class="mb-4">
                              <i class="fa-sharp fa-solid fa-location-dot"></i>
                              
                                <a href="https://maps.app.goo.gl/DQmV659t4Jwn4By69" style="text-decoration: none;" >
                                  Bashati Horizon, Road No. 17, Dhaka 1213
                                </a>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7089653904713!2d90.401596574393!3d23.79337588712691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7e897b13fed%3A0x7082413f0437e57b!2sBGL%20Overseas%20Ltd.%20RL-2017!5e0!3m2!1sen!2sbd!4v1716105043559!5m2!1sen!2sbd" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28995.105097047835!2d46.64980528602061!3d24.71355170000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0489ad31fb7b%3A0x93fee12beb03d9bb!2sAl-Rossais%20Commercial%20Center%2Cdhabab%20street%2C%20Riyadh!5e0!3m2!1sen!2sbd!4v1715141468876!5m2!1sen!2sbd" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d645.3608413347624!2d90.40369803199037!3d23.79326011819351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7e897b13fed%3A0x7082413f0437e57b!2sBGL%20Overseas%20Ltd.%20RL-2017!5e0!3m2!1sen!2sbd!4v1715141171069!5m2!1sen!2sbd" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            </p> 
                              <h5>
                                <i class="fa-regular fa-envelope"></i>
                                dhakatravels@gmail.com
                              </h5>
                              <h6 class="my-4">
                                <i class="fa-solid fa-phone"></i>
                                    019123443319
                              </h6>  
                          </div> 
               
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection