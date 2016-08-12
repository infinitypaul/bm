@extends('layouts.master')

@section('content')
            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-cogs"></i> <strong>How it works</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">These are the basic steps you need <strong>to follow</strong>!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Step 1 Header -->
            <section class="site-content site-section site-section-light themed-background">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-arrow-right"></i> <strong> Step One</strong></h1>
                    </div>
                </div>
            </section>
            <!-- END Step 1 Header -->

            <!-- Step 1 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <div class="col-sm-6 site-block">
             <img src="{{asset('img/placeholders/screenshots/promo_desktop_left.png')}}" class="img-responsive" alt="Promo #1">
                        
                        </div>
                        <div class="col-sm-6 col-md-5 col-md-offset-1 site-block">
                            <h3 class="h2 site-heading site-heading-promo"><strong>Sign up</strong> to our platform</h3>
                            <p class="promo-content">The first step is to sign up to our platform using our easy and quick to use registration form. You can get in your dashboard in under a minute!</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Step 1 -->

            <!-- Step 2 Header -->
            <section class="site-content site-section site-section-light themed-background">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-arrow-right"></i> <strong> Step Two</strong></h1>
                    </div>
                </div>
            </section>
            <!-- END Step 2 Header -->

            <!-- Step 2 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <div class="col-sm-6 col-md-5 site-block">
                            <h3 class="h2 site-heading site-heading-promo"><strong>Choose a</strong> package</h3>
                            <p class="promo-content">We have packages tailored to meet your knowledge about the word of God.It comes in level.</p>
                        </div>
                        <div class="col-sm-6 col-md-offset-1 site-block">
             <img src="{{asset('img/placeholders/screenshots/promo_desktop_right.png')}}" class="img-responsive" alt="Promo #2">

                        </div>
                    </div>
                </div>
            </section>
            <!-- END Step 2 -->

            <!-- Step 3 Header -->
            <section class="site-content site-section site-section-light themed-background">
                <div class="container">
                    <div class="site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <h1 class="site-heading"><i class="fa fa-arrow-right"></i> <strong> Step Three</strong></h1>
                    </div>
                </div>
            </section>
            <!-- END Step 3 Header -->

            <!-- Step 3 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        <div class="col-sm-6 col-md-5 site-block">
                            <h3 class="h2 site-heading site-heading-promo"><strong>Sit back</strong> and take a quiz!</h3>
                            <p class="promo-content">And that was it! Relax and take the quiz, it will only take 60 minutes.Have fun and increase you knowledge. </p>
                        </div>
                        <div class="col-sm-6 col-md-offset-1 site-block">
         <img src="{{asset('img/placeholders/screenshots/promo_mobile.png')}}" class="img-responsive" alt="Promo #4">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Step 3 -->

            <!-- Sign Up Action -->
            <section class="site-content site-section site-section-light themed-background-dark">
                <div class="container">
                    <h3 class="site-heading text-center"><strong>Sign Up Today</strong> and start a <strong>Quiz</strong>!</h3>
                    <div class="site-block text-center">
                        <form action="features.html" method="post" class="form-horizontal" onsubmit="return false;">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <label class="sr-only" for="register-email">Your Email</label>
                                    <div class="input-group input-group-lg">
                                        <input type="email" id="register-email" name="register-email" class="form-control" placeholder="Your Email..">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- END Sign Up Action -->

            <!-- Testimonials -->
            <section class="site-content site-section">
                <div class="container">
                    <!-- Testimonials Carousel -->
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
            <img src="{{asset('img/placeholders/avatars/avatar12.jpg')}}" class="img-circle" alt="Avatar">
                                </p>
                                <blockquote class="no-symbol">
                                    <p><small> I have a better understanding of the Bible due to my participation in quizzing and pouring over those valuable passages.  I remember more lessons from the Bible because of quizzing.  God wrote those lessons on my heart and to this day the Spirit will bring those back to me.  God helped me learn the passages if I just put Him first.  I have never once regretted one moment I put toward quizzing and learning God’s Word.</small></p>
                                    <footer><strong>Micheal Odupitan</strong>, example.com</footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <p>
                      <img src="{{asset('img/placeholders/avatars/avatar7.jpg')}}" class="img-circle" alt="Avatar">
                                </p>
                                <blockquote class="no-symbol">
                                    <p><small>Memorizing scripture has also been a big plus for me.  I believe that being able to memorize entire books of the Bible has really helped me to understand the message of the gospel and resist the tendency to focus on one idea from scripture at the expense of others.  Learning to memorize the Bible still aids me in meditating on scripture, and this is one of the main ways I am able to make contact with God in my life.</small></p>
                                    <footer><strong>Timothy Simon</strong>, example.com</footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <p>
                  <img src="{{asset('img/placeholders/avatars/avatar9.jpg')}}" class="img-circle" alt="Avatar">
                                </p>
                                <blockquote class="no-symbol">
                                    <p><small>As a parent, I have memorized right along with my younger ones.  I have seen what wonderful little sponges their brains are and how easily they can retain what they’ve learned.  I have seen the benefits of ‘training your brain’ academically.  The biggest blessing lately has been to see how obeying God by hiding His Word in our hearts.</small></p>
                                    <footer><strong>Mrs Folashade</strong>, example.com</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- END Wrapper for slides -->
                    </div>
                    <!-- END Testimonials Carousel -->
                </div>
            </section>
            <!-- END Testimonials -->

           @stop