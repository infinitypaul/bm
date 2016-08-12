@extends('layouts.master')

@section('content')

            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-thumbs-up"></i> <strong>Flexible Plans</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Affordable pricing for everyone! We want <strong>you</strong> to get the <strong>best deal</strong>!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Plans -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="site-block">
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- You can add the class 'table-featured' to feature the best plan. In this case, make sure to remove the hover functionality from js/pages/pricing.js -->
                                <table class="table table-borderless table-pricing animation-fadeIn">
                                    <thead>
                                        <tr>
                                            <th class="table-featured">Personal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>2</strong> Projects</td>
                                        </tr>
                                        <tr>
                                            <td><strong>10GB</strong> Storage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>15</strong> Clients</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong> Support</td>
                                        </tr>
                                        <tr>
                                            <td class="table-price">
                                                <h1>&#8358;9<br><small>per month</small></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <!-- You can add the class 'table-featured' to feature the best plan. In this case, make sure to remove the hover functionality from js/pages/pricing.js -->
                                <table class="table table-borderless table-pricing animation-fadeIn">
                                    <thead>
                                        <tr>
                                            <th class="table-featured"><i class="fa fa-check"></i> Business</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>10</strong> Projects</td>
                                        </tr>
                                        <tr>
                                            <td><strong>30GB</strong> Storage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>100</strong> Clients</td>
                                        </tr>
                                        <tr>
                                            <td><strong>FULL</strong> Support</td>
                                        </tr>
                                        <tr>
                                            <td class="table-price">
                                                <h1> &#8358;39<br><small>per month</small></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <!-- You can add the class 'table-featured' to feature the best plan. In this case, make sure to remove the hover functionality from js/pages/pricing.js -->
                                <table class="table table-borderless table-pricing animation-fadeIn">
                                    <thead>
                                        <tr>
                                            <th class="table-featured">VIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>50</strong> Projects</td>
                                        </tr>
                                        <tr>
                                            <td><strong>100GB</strong> Storage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>1000</strong> Clients</td>
                                        </tr>
                                        <tr>
                                            <td><strong>FULL</strong> Support</td>
                                        </tr>
                                        <tr>
                                            <td class="table-price">
                                                <h1>&#8358;99<br><small>per month</small></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <!-- You can add the class 'table-featured' to feature the best plan. In this case, make sure to remove the hover functionality from js/pages/pricing.js -->
                                <table class="table table-borderless table-pricing animation-fadeIn">
                                    <thead>
                                        <tr>
                                            <th class="table-featured">Pro</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Unlimited</strong> Projects</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Unlimited</strong> Storage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Unlimited</strong> Clients</td>
                                        </tr>
                                        <tr>
                                            <td><strong>FULL</strong> Support</td>
                                        </tr>
                                        <tr>
                                            <td class="table-price">
                                                <h1>&#8358;199<br><small>per month</small></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Plans -->

            <!-- Testimonials -->
            <section class="site-content site-section">
                <div class="container">
                    <div id="testimonials-carousel" class="carousel slide carousel-html" data-ride="carousel" data-interval="4000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                            <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- END Indicators -->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner text-center">
                            <div class="active item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p><small>I have a better understanding of the Bible due to my participation in quizzing and pouring over those valuable passages.  I remember more lessons from the Bible because of quizzing.  God wrote those lessons on my heart and to this day the Spirit will bring those back to me.  God helped me learn the passages if I just put Him first.  I have never once regretted one moment I put toward quizzing and learning God’s Word.</small></p>
                                    <footer><strong>Micheal Odupitan</strong>, example.com</footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar7.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p><small>Memorizing scripture has also been a big plus for me.  I believe that being able to memorize entire books of the Bible has really helped me to understand the message of the gospel and resist the tendency to focus on one idea from scripture at the expense of others.  Learning to memorize the Bible still aids me in meditating on scripture, and this is one of the main ways I am able to make contact with God in my life.</small></p>
                                    <footer><strong>Timothy Simon</strong>, example.com</footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar9.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p><small>As a parent, I have memorized right along with my younger ones.  I have seen what wonderful little sponges their brains are and how easily they can retain what they’ve learned.  I have seen the benefits of ‘training your brain’ academically.  The biggest blessing lately has been to see how obeying God by hiding His Word in our hearts.</small></p>
                                    <footer><strong>Mrs Folashade</strong>, example.com</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- END Wrapper for slides -->
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Testimonials -->

            <!-- Extra Info -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="site-block">
                        <h3 class="site-heading text-center"><strong>All Plans</strong> Include</h3>
                        <div class="row push-bit">
                            <div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
                                <ul class="fa-ul ul-breath">
                                    <li><i class="fa fa-check text-primary fa-li"></i> Free updates for life</li>
                                    <li><i class="fa fa-check text-primary fa-li"></i> Premium documentation</li>
                                    <li><i class="fa fa-check text-primary fa-li"></i> Premium back up features</li>
                                </ul>
                            </div>
                            <div class="col-sm-5 col-md-4">
                                <ul class="fa-ul ul-breath">
                                    <li><i class="fa fa-check text-primary fa-li"></i> 100% Uptime</li>
                                    <li><i class="fa fa-check text-primary fa-li"></i> US, Europe & Asia Locations</li>
                                    <li><i class="fa fa-check text-primary fa-li"></i> One year access to our asset library</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="javascript:void(0)" class="btn btn-lg btn-primary"><i class="fa fa-angle-right"></i> Sign Up Now <i class="fa fa-angle-left"></i> </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Extra Info -->

            
            @stop
            
            @section('footer')
            <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/pricing.js"></script>
        <script>$(function(){ Pricing.init(); });</script>
        @stop