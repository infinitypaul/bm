@extends('layouts.master')

@section('content')

            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-plus"></i> <strong>Sign Up</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Get your quiz in few seconds!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Sign Up -->
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
                            <!-- Sign Up Form -->
                            {!!   Form::open(array('url' => 'register', 'class' => 'form-horizontal',
                            'id'=>'form-sign-up')
                            ) !!}
                                {{ csrf_field()}}
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            {{ Form::text('username', null, array(
    'placeholder' => 'username',
    'required' => 'required',
    'class'=>'form-control input-lg',
    'id' => 'register-firstname'
)) }}

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            {{ Form::email('email', null, array(
   'placeholder' => 'Email Address',
   'required' => 'required',
   'class'=>'form-control input-lg',
   'id' => 'register-email'
)) }}

                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        {{ Form::number('mobile', null, array(
'placeholder' => 'Mobile No',
'required' => 'required',
'class'=>'form-control input-lg',
'id' => 'register-mobile'
)) }}

                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            {{ Form::password('password', array(
  'placeholder' => 'Password',
  'required' => 'required',
  'class'=>'form-control input-lg',
  'id' => 'register-password'
)) }}

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            {{ Form::password('Password-retype', array(
  'placeholder' => 'Verify Password',
  'required' => 'required',
  'class'=>'form-control input-lg',
  'id' => 'register-password-verify'
)) }}

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-6">
                                        <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                            <input type="checkbox" id="register-terms" name="register-terms"><span></span>
                                        </label>
                                        <a href="#modal-terms" data-toggle="modal" class="register-terms"><small>View Terms</small></a>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        {!!  Form::button('<i class="fa fa-plus"></i> Register Now', array(
                                    'class' => 'btn btn-sm btn-primary',
                                    'type' => 'submit'
                                    ))  !!}

                                    </div>
                                </div>
                            {!!  Form::close()  !!}
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Sign Up -->

            <!-- Quick Stats -->
            <section class="site-content site-section themed-background">
                <div class="container">
                    <!-- Stats Row -->
                    <!-- CountTo (initialized in js/app.js), for more examples you can check out https://github.com/mhuggins/jquery-countTo -->
                    <div class="row" id="counters">
                        <div class="col-sm-6 col-md-3">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="6800" data-after="+"></span>
                                <small>Traffic</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="5500" data-after="+"></span>
                                <small>Questions</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="12362"></span>
                                <small>Register Today</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="2150"></span>
                                <small>Quiz Taken</small>
                            </div>
                        </div>
                    </div>
                    <!-- END Stats Row -->
                </div>
            </section>
            <!-- END Quick Stats -->

            <!-- Modal Terms -->
            <div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Terms &amp; Conditions</h4>
                        </div>
                        <div class="modal-body">
                            <h4>1. Terms</h4>
                            <p>
By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.</p>
                            <!--<p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                            <h4>2. Use License</h4>
                            <p>
<b>a.</b>	Permission is granted to temporarily download one copy of the materials (information or software) on Blessed Assurance Providence Limited's web site for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:<br />
i.	modify or copy the materials;<br />
ii.	use the materials for any commercial purpose, or for any public display (commercial or non-commercial);<br />
iii.	attempt to decompile or reverse engineer any software contained on Blessed Assurance Providence Limited's web site;<br />
iv.	remove any copyright or other proprietary notations from the materials; or<br />
v.	transfer the materials to another person or "mirror" the materials on any other server.<br />
<b>b.</b>	This license shall automatically terminate if you violate any of these restrictions and may be terminated by Blessed Assurance Providence Limited at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
</p>
                            <h4>3. Disclaimer</h4>
                            <p>
<b>a.</b>	The materials on Blessed Assurance Providence Limited's web site are provided "as is". Blessed Assurance Providence Limited makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Blessed Assurance Providence Limited does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
</p>
							<h4>4. Limitations</h4>
                            <p>
In no event shall Blessed Assurance Providence Limited or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Blessed Assurance Providence Limited's Internet site, even if Blessed Assurance Providence Limited or a Blessed Assurance Providence Limited authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
</p>

                            <h4>5. Revisions and Errata</h4>
                            <p>
The materials appearing on Blessed Assurance Providence Limited's web site could include technical, typographical, or photographic errors. Blessed Assurance Providence Limited does not warrant that any of the materials on its web site are accurate, complete, or current. Blessed Assurance Providence Limited may make changes to the materials contained on its web site at any time without notice. Blessed Assurance Providence Limited does not, however, make any commitment to update the materials.
</p>

                            <h4>6. Links</h4>
                            <p>
Blessed Assurance Providence Limited has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Blessed Assurance Providence Limited of the site. Use of any such linked web site is at the user's own risk.
</p>

                            <h4>7. Site Terms of Use Modifications</h4>
                            <p>
Blessed Assurance Providence Limited may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.
</p>

                            <h4>8. Governing Law</h4>
                            <p>
Any claim relating to Blessed Assurance Providence Limited's web site shall be governed by the laws of the State of MINNESOTA without regard to its conflict of law provisions.
</p>

                            <h4><strong>General Terms and Conditions applicable to Use of a Web Site.</strong></h4>


                            <h4>Privacy Policy</h4>
                            <p>
Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.
•	Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.<br />
•	We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.<br />
•	We will only retain personal information as long as necessary for the fulfillment of those purposes.<br />
•	We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.<br />
•	Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.<br />
•	We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.<br />
•	We will make readily available to customers information about our policies and practices relating to the management of personal information.<br />
We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.<br />
</p>
					</div>
                    </div>
                </div>
            </div>
            <!-- END Modal Terms -->

            @stop
