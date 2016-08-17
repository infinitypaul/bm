@extends('layouts.master')

@section('content')
        <!-- Home Carousel -->
<div id="home-carousel" class="carousel carousel-home slide" data-ride="carousel" data-interval="5000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="active item">
            <section class="site-section site-section-light site-section-top themed-background-dark-default">
                <div class="container">
                    <h1 class="text-center animation-slideDown hidden-xs"><strong>BibleMastery is
a web version and online segment of our overall package</strong></h1>
                    <h2 class="text-center animation-slideUp push hidden-xs"></h2>
                    <p class="text-center animation-fadeIn">
                    	<img src="{{asset('img/placeholders/screenshots/promo_desktop_left.png')}}">
                    </p>
                </div>
            </section>
        </div>
        <div class="item">
            <section class="site-section site-section-light site-section-top themed-background-dark-fire">
                <div class="container">
                    <h1 class="text-center animation-fadeIn360 hidden-xs"><strong>We are available for churches, conventions and events</strong></h1>
                    <h2 class="text-center animation-fadeIn360 push hidden-xs">We are here to serve you better</h2>
                    <p class="text-center animation-fadeInLeft">
                    	<img src="{{asset('img/placeholders/screenshots/promo_desktop_right.png')}}" alt="Promo Image 2">
                    </p>
                </div>
            </section>
        </div>
        <div class="item">
            <section class="site-section site-section-light site-section-top themed-background-dark-amethyst">
                <div class="container">
                    <h1 class="text-center animation-hatch hidden-xs"><strong>Ready to master this quiz...?</strong></h1>
                    <!--<h2 class="text-center animation-hatch push hidden-xs">The UI will look great and crisp</h2>-->
                    <p class="text-center animation-hatch">
                    <img src="{{asset('img/placeholders/screenshots/WB.png')}}" alt="Promo Image 3">
                    </p>
                </div>
            </section>
        </div>
        <div class="item">
            <section class="site-section site-section-light site-section-top themed-background-dark-modern">
                <div class="container">
                    <h1 class="text-center animation-fadeInLeft hidden-xs"><strong> We have 200+ free
BibleQuizzes for Kids and Teens </strong></h1>
                    <h2 class="text-center animation-fadeInRight push hidden-xs">We are live on Television!</h2>
                    <p class="text-center animation-fadeIn360">
                    <img src="{{asset('img/placeholders/screenshots/promo_tablet.png')}}" alt="Promo Image 4">
                    </p>
                </div>
            </section>
        </div>
    </div>
    <!-- END Wrapper for slides -->

    <!-- Controls -->
    <a class="left carousel-control" href="#home-carousel" data-slide="prev">
                    <span>
                        <i class="fa fa-chevron-left"></i>
                    </span>
    </a>
    <a class="right carousel-control" href="#home-carousel" data-slide="next">
                    <span>
                        <i class="fa fa-chevron-right"></i>
                    </span>
    </a>
    <!-- END Controls -->
</div>
<!-- END Home Carousel -->

<!-- Action -->
<section class="site-content site-section">
    <div class="container">
        <div class="site-block text-center">
            <a href="#" class="btn btn-lg btn-success"><i class="fa fa-shopping-cart"></i> Register</a>
            <a href="#" class="btn btn-lg btn-primary"><i class="fa fa-share"></i> Live Preview</a>
        </div>
        <hr>
    </div>
</section>
<!-- END Action -->

<!-- Promo #1 -->
<section class="site-content site-section site-slide-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
             <img src="{{asset('img/placeholders/screenshots/bible.png')}}" class="img-responsive" alt="Promo #1">
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                <h3 class="h2 site-heading site-heading-promo"><strong>Well structured</strong> Question</h3>
                <p class="promo-content">We have well over 6000 BibleQuizzes online available for practice We also have more than 200 free BibleQuizzes for kids and teens Click on the link to participate or go directly to the link above for
more <a href="{{ route('quiz') }}">Click here..</a></p>
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- END Promo #1 -->

<!-- Promo #2 -->
<section class="site-content site-section site-slide-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                <h3 class="h2 site-heading site-heading-promo"><strong>Powerful</strong> Quiz Template</h3>
                <p class="promo-content">With our unique Quiz template, our team will engage the
audience in a lively BibleQuiz presentation. <br />We are available for churches, conventions and events
 <a href="">Learn More..</a></p>
            </div>
            <div class="col-sm-6 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
            <img src="{{asset('img/placeholders/screenshots/promo_desktop_right.png')}}" class="img-responsive" alt="Promo #2">
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- END Promo #2 -->

<!-- Promo #3 -->
<section class="site-content site-section site-slide-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
            <img src="{{asset('img/placeholders/screenshots/grandprize.png')}}" class="img-responsive" alt="Promo #3">
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                <h3 class="h2 site-heading site-heading-promo"><strong>Win a Predetermined </strong>Grand Prize</h3>
                <p class="promo-content">How well did you know the Bible? Participate in BibleMastery and get $100 Cash REWARDS!!!<br />
Our Television audience engage in a series of competition for weeks until a winner emerge<br />
(This reward is for one participant with the highest score every month)<br />  
<a href="{{ route('howitwork')}}  ">Learn More..</a></p>
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- END Promo #3 -->

<!-- Promo #4 -->
<section class="site-content site-section site-slide-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                <h3 class="h2 site-heading site-heading-promo"><strong>Get to Know</strong> us</h3>
                <p class="promo-content">We encourage churches to send representatives for auditions. Use the available form to
invite us to your church, seminars and
events <a href="{{ route('contact') }}">Learn More..</a></p>
            </div>
            <div class="col-sm-6 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
            <img src="{{asset('img/placeholders/screenshots/ccare.png')}}" class="img-responsive" alt="Promo #4">
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- END Promo #4 -->

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
                        <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                    </p>
                    <blockquote class="no-symbol">
                        <p><small>I have a better understanding of the Bible due to my participation in quizzing and pouring over those valuable passages.  I remember more lessons from the Bible because of quizzing.  God wrote those lessons on my heart and to this day the Spirit will bring those back to me.  God helped me learn the passages if I just put Him first.  I have never once regretted one moment I put toward quizzing and learning God’s Word.</small></p>
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

<!-- Sign Up Action -->
<section class="site-content site-section site-section-light themed-background-dark-night">
    <div class="container">
        <h3 class="site-heading text-center"><strong>Sign Up Today</strong> and start a <strong>quiz</strong>!</h3>
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

<!-- Quick Stats -->
<section class="site-content site-section themed-background">
    <div class="container">
        <!-- Stats Row -->
        <!-- CountTo (initialized in js/app.js), for more examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="row" id="counters">
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="6800" data-after="+"></span>
                    <small>Traffic</small>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="5500" data-after="+"></span>
                    <small>Questions</small>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="100" data-after="+"></span>
                    <small>Registration Today</small>
                </div>
            </div>
        </div>
        <!-- END Stats Row -->
    </div>
</section>
<!-- END Quick Stats -->
@stop