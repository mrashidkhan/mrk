<!-- Contact -->
<section class="wptb-contact-form-two pt-5">
    <div class="container">
        <div class="wptb-form--wrapper">
            <div class="row">
                <div class="col-lg-5">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner">
                            <h6 class="wptb-item--subtitle"> <span>06 //</span> Contact Us</h6>
                            <h1 class="wptb-item--title"> Feel Free To Ask Us <span>Anything</span></h1>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="wptb-office">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--subtitle">
                                    Call Us For Query
                                </div>
                                <h5 class="wptb-item--title"><a href="tel:+14692642257">+1 469 264 2257</a></h5>
                            </div>
                        </div>

                        <div class="wptb-office">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--subtitle">
                                    SEND US EMAIL
                                </div>
                                <h5 class="wptb-item--title"><a href="mailto:contact@studios3sixty.com">contact@studios3sixty.com</a></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    {{-- <form class="wptb-form" action="{{ route('contact.store') }}" method="POST"> --}}
                        <form class="wptb-form" action="#" method="POST">
                        @csrf
                        <div class="wptb-form--inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12 mb-4">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Text"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="wptb-item--button">
                                        <button class="btn" type="submit">
                                            <span class="btn-wrap">
                                                <span class="text-first">Send Mail</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<br/>
