@extends('layouts.master')

@section('content')

            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-arrow-right"></i> <strong>Log In</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Login to your Account!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Log In -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                            @if (count($errors) > 0)

                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="fa fa-times-circle"></i> Error</h4>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <a href="javascript:void(0)" class="alert-link"></a>
                                </div>
                                @endif
                            <!-- Log In Form -->
                            {!!   Form::open(array('url' => 'login', 'class' => 'form-horizontal',
                            'id'=>'form-sign-up')
                            ) !!}
                            {{ csrf_field()}}
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="login-email" name="username" class="form-control
                                            input-lg" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="login-password" name="password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-6">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me" checked><span></span>
                                        </label>
                                        <small>Remember me</small>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Log In</button>
                                    </div>
                                </div>
                                <div class="form-group">

                                </div>
                            {!!  Form::close()  !!}
                            <div class="text-center">
                                <a href="javascript:void(0)"><small>Forgot password?</small></a>
                            </div>
                            <!-- END Log In Form -->
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Log In -->

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
                </div>
            </section>
            <!-- END Support Links -->
 @stop