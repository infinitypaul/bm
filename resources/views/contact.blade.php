@extends('layouts.master')

@section('content')

            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-envelope"></i> <strong>Contact Us</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">We will be happy to answer all your questions and work together!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Google Map 
            <section class="site-content">
                <!-- Gmaps.js (initialized in js/pages/contact.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html 
                <div id="gmap" style="height: 350px;"></div>
            </section>
            <!-- END Google Map -->

            <!-- Support Links -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row row-items text-center">
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="gi gi-life_preserver"></i>
                            </a>
                            <h4>Open a <strong>ticket</strong></h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="gi gi-envelope"></i>
                            </a>
                            <h4><strong>Email</strong> Us</h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="fa fa-comments"></i>
                            </a>
                            <h4><strong>Chat</strong> Live</h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <h4><strong>Tweet</strong> Us</h4>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Support Links -->

            <!-- Contact -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 site-block">
                            <div class="site-block">
                                <h3 class="h2 site-heading"><strong>Company</strong> Inc</h3>
                                <address>
                                    Address: 985 106th Lane NW #53 Coon Rapids<br>
                                    Town/City: MN 55433<br>
                                    Region, Zip/Postal Code<br><br>
                                    <i class="fa fa-phone"></i> (000) 000-0000<br>
                                    <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">example@example.com</a>
                                </address>
                            </div>
                            <div class="site-block">
                                <h3 class="h2 site-heading"><strong>About</strong> Us</h3>
                                <p class="remove-margin">
                                    BibleMastery is
a web version and online segment of our overall package.

We have over 6000 BibleQuizzes online available for
practice.We also have
more than 200 free BibleQuizzes for kids and
teens...
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-8 site-block">
                            <h3 class="h2 site-heading"><strong>Contact</strong> Form</h3>
                            <form action="contact.html#form-contact" method="post" id="form-contact">
                                <div class="form-group">
                                    <label for="contact-name">Name</label>
                                    <input type="text" id="contact-name" name="contact-name" class="form-control input-lg" placeholder="Your name..">
                                </div>
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input type="text" id="contact-email" name="contact-email" class="form-control input-lg" placeholder="Your email..">
                                </div>
                                <div class="form-group">
                                    <label for="contact-message">Message</label>
                                    <textarea id="contact-message" name="contact-message" rows="10" class="form-control input-lg" placeholder="Let us know how we can assist.."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Contact -->

            @stop
            
            @section('footer')
             <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps -->
             <script src="{{asset('//maps.google.com/maps/api/js')}}"></script>
             <script src="{{asset('js/helpers/gmaps.min.js')}}"></script>
       

        <!-- Load and execute javascript code used only in this page -->
        <script src="{{asset('js/pages/contact.js')}}"></script>
        
        <script>$(function(){ Contact.init(); });</script>
            @stop