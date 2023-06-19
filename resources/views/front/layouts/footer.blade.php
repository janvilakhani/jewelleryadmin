 <!-- Footer Start -->
 <footer>
    <div class="footer footer-2 pt-100 pb-5 Footer-img">
      <div class="" style="margin: 0 35PX;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="footer-logo-area">
                <a href="index.html"><img src="{{asset('front/assets/images/2 (2).png')}}" alt="image" width="50%"></a>
                <div class="footer-social-icons">
                  <span>Follow Us:</span>
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="footer-links footer-contact-list">
                <h3>Get In Touch</h3>
                <div class="footer-content-card">
                  <i class="fas fa-map-marker-alt"></i>
                  <h5>Location:</h5>
                  <p><a href="https://goo.gl/maps/LFFvE4dNnyq67gGeA">2976 Sunrise Avenue, Las Vegas</a></p>
                </div>
                <div class="footer-content-card">
                  <i class="fas fa-envelope"></i>
                  <h5>Email:</h5>
                  <p><a
                      href="#"><span
                        class="__cf_email__"
                        >[email&#160;protected]</span></a>
                  </p>
                </div>
                <div class="footer-content-card">
                  <i class="fas fa-mobile-alt"></i>
                  <h5>Phone:</h5>
                  <p><a href="tel:+9099080109">+91-9099080109</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="footer-links footer-quick-links">
                <h3>Quick Links</h3>
                <ul>
                  <li><a href="{{route('front.about')}}" target="_blank"><i class="fas fa-angle-right"></i>
                      <span>About</span></a></li>

                  <li><a href="{{route('front.contact')}}" target="_blank"><i class="fas fa-angle-right"></i>
                      <span>Contact</span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="footer-links footer-newsletter">
                <h3>Subscribe</h3>
                <p>Subscribe To Our Newsletter To Get Our Update News!</p>
                <form>
                  <input type="text" class="form-control" placeholder="Your Email" style="font-size: 16px;">
                  <button class="default-button2" type="submit"><span>Send</span></button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <p>Copyright @
              <script data-cfasync="false"
                src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>document.write(new Date().getFullYear())</script>. <strong>Anwa</strong> All Rights Reserved By
              <a target="_blank" href="https://hibootstrap.com/">HiBootstrap</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- WhatsApp Icon -->
  <div class="go-top"><img src="{{asset('front/assets/images/wp.gif')}}" alt="" /></div>

  <!-- JavaScript Here  -->
  <script src="{{asset('front/assets/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front/assets/js/meanmenu.js')}}"></script>
  <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('front/assets/js/form-validator.min.js')}}"></script>
  <script src="{{asset('front/assets/js/contact-form-script.js')}}"></script>
  <script src="{{asset('front/assets/js/appear.min.js')}}"></script>
  <script src="{{asset('front/assets/js/TweenMax.js')}}"></script>
  <script src="{{asset('front/assets/js/odometer.min.js')}}"></script>
  <script src="{{asset('front/assets/js/jquery.barfiller.js')}}"></script>
  <script src="{{asset('front/assets/js/wow.min.js')}}"></script>
  <script src="{{asset('front/assets/js/custom.js')}}"></script>

  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('front/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('front/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <script src="{{asset('front/assets/js/jquery.slicknav.min.js')}}"></script>
  <script src="{{asset('front/assets/js/main.js')}}"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3000,
      },
    });
  </script>
</body>

</html>
