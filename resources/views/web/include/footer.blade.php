<footer>
    <div class="container">
       <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
             <div class="footer_title">
                <h2>About us</h2>
                <p>{{ !empty($frontend) ? $frontend->about : '' }}</p>
                <ul class="social_icon">
                   <li>
                      <a href="{{ !empty($frontend) ? $frontend->fb_id : '#' }}"><i class="fa fa-facebook"></i></a>
                   </li>
                   <li>
                      <a href="{{ !empty($frontend) ? $frontend->tw_id : '#' }}"><i class="fa fa-twitter"></i></a>
                   </li>
                   <li>
                      <a href="{{ !empty($frontend) ? $frontend->yt_id : '#' }}"><i class="fa fa-skype"></i></a>
                   </li>
                   <li>
                      <a href="{{ !empty($frontend) ? $frontend->sk_id : '#' }}"><i class="fa fa-pinterest"></i></a>
                   </li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
             <div class="footer_title">
                <h2>Quick Links</h2>
                <ul class="footer_link">
                   <li><a href="{{ route('web.index') }}"><i class="fa fa-chevron-right"></i> Home</a></li>
                   <li><a href="course-grid.html"><i class="fa fa-chevron-right"></i> Courses</a></li>
                   <li><a href="event.html"><i class="fa fa-chevron-right"></i> Events</a></li>
                   <li><a href="gallery-1.html"><i class="fa fa-chevron-right"></i> Gallery</a></li>
                   <li><a href="blog-grid.html"><i class="fa fa-chevron-right"></i> Blog</a></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
             <div class="footer_title">
                <h2>Recent Events</h2>
                <ul class="event_blog">
                   <li><a href="event-detail.html" class="custom_hover_img"><img src="{{ asset('web/assets/images/event/event_1.png') }}" alt="event" class="img-responsive"></a></li>
                   <li><a href="event-detail.html" class="custom_hover_img"><img src="{{ asset('web/assets/images/event/event_2.png') }}" alt="event" class="img-responsive"></a></li>
                   <li><a href="event-detail.html" class="custom_hover_img"><img src="{{ asset('web/assets/images/event/event_3.png') }}" alt="event" class="img-responsive"></a></li>
                   <li><a href="event-detail.html" class="custom_hover_img"><img src="{{ asset('web/assets/images/event/event_4.png') }}" alt="event" class="img-responsive"></a></li>
                   <li><a href="event-detail.html" class="custom_hover_img"><img src="{{ asset('web/assets/images/event/event_5.png') }}" alt="event" class="img-responsive"></a></li>
                   <li><a href="event-detail.html" class="custom_hover_img"><img src="{{ asset('web/assets/images/event/event_6.png') }}" alt="event" class="img-responsive"></a></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
             <div class="footer_title">
                <h2>Contact</h2>
                <p>{{ !empty($frontend) ? $frontend->address : '' }}</p>
                <ul class="contact_us">
                   <li>Phone : <a href="tel:+91-{{ !empty($frontend) ? $frontend->mobile : '' }}">{{ !empty($frontend) ? $frontend->mobile : '' }}</a></li>
                   <li>Email : <a href="mailto:{{ !empty($frontend) ? $frontend->email : '' }}">{{ !empty($frontend) ? $frontend->email : '' }}</a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <div class="copy_right">
    <p>
       Copyright <i class="fa fa-copyright"></i> 2020. All Rights Reserved
    </p>
 </div>
 <div class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
       <div class="l-modal__shadow js-modal-hide"></div>
       <div class="login_popup login_modal_body">
          <div class="Popup_title d-flex justify-content-between">
             <h2 class="hidden">&nbsp;</h2>
             <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                   <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                   </ul>
                </div>
                <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                   <div class="tab-content card">
                      <div class="tab-pane fade in show active" id="login" role="tabpanel">
                         <form action="#">
                            <div class="row">
                               <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                  <div class="form-group">
                                     <label class="control-label">Email</label>
                                     <input type="email" class="form-control" placeholder="Username">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                  <div class="form-group">
                                     <label class="control-label">Password</label>
                                     <input type="password" class="form-control" placeholder="Password">
                                  </div>
                               </div>
                            </div>
                            <div class="row">
                               <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                  <a href="javascript:void(0)" title="" class="forget_pass">Forget Password ?</a>
                                  <button type="submit" class="btn btn-default login_btn">Login</button>
                               </div>
                               <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                  <div class="social_login">
                                     <div class="social_items">
                                        <button class="google_login google">Login Google</button>
                                        <button class="google_login facebook">Login Facebook</button>
                                        <button class="google_login twitter">Login Twitter</button>
                                        <button class="google_login linkdin">Login Linkdin</button>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </form>
                      </div>
                      <div class="tab-pane fade" id="panel2" role="tabpanel">
                         <form action="#" class="register">
                            <div class="row">
                               <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                  <div class="form-group">
                                     <label class="control-label">Name</label>
                                     <input type="text" class="form-control" placeholder="Username">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                  <div class="form-group">
                                     <label class="control-label">Email</label>
                                     <input type="email" class="form-control" placeholder="Email">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                  <div class="form-group">
                                     <label class="control-label">Password</label>
                                     <input type="password" class="form-control" placeholder="Password">
                                  </div>
                               </div>
                            </div>
                            <div class="row">
                               <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                  <button type="submit" class="btn btn-default login_btn">Register</button>
                               </div>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <a class="btn btn-lg  scrollup"><i class="fa fa-arrow-up"></i></a>
 <script src="{{ asset('web/assets/js/jquery.min.js') }}"></script>
 <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('web/assets/js/jquery.countdown.min.js') }}"></script>
 <script src="{{ asset('web/assets/plugins/owl-carousel/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('web/assets/js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('web/assets/js/mobilemenu.js') }}"></script>
 <script src="{{ asset('web/assets/js/custom.js') }}"></script>
</body>
</html>