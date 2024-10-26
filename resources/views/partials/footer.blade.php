<!-- resources/views/includes/footer.blade.php -->

<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="footer_logo">
            <a href="{{ url('/') }}">
                {{-- <img src="{{ asset('assets/images/footer-logo.png') }}" alt="Footer Logo"> --}}
                <img src="{{ asset('assets/images/mrklogo1.jpg') }}" alt="Footer Logo">
            </a>
        </div>
        <div class="input_bt">
            <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
            <span class="subscribe_bt" id="basic-addon2">
                <a href="#">Subscribe</a>
            </span>
        </div>
        <div class="footer_menu">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        <li><a href="{{ route('fashion') }}">Fashion</a></li>
                        <li><a href="{{ route('electronics') }}">Electronics</a></li>
                        <li><a href="{{ route('jewellery') }}">Jewellery</a></li>
            </ul>
        </div>
        <div class="location_main">Help Line Number: <a href="tel:+12146796818">(+1) 214 6796818</a></div>
        <div class="location_main">Address: <a href="#">2727 LBJ Freeway, Suite 200, Dallas, TX, 75234</a></div>
        <div class="location_main">Email: <a href="wholesalesmrk@gmail.com ">wholesalesmrk@gmail.com</a></div>

    </div>
</div>
<!-- footer section end -->

<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">
            © All Rights Reserved. Design by
            <a href="https://mrkwholesales.com">MRK Wholesales</a>
        </p>
    </div>
</div>
<!-- copyright section end -->

<!-- Javascript files-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<!-- sidebar -->
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>
