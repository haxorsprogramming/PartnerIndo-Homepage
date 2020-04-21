@extends('page.master');

@section('judul_halaman','Partnerindo - Homepage')

@section('body')
<main class="main-container home">
    <div class="hero-media " data-paginate>
        <div class="inner" style="background-image: url('ladun/img/bg_hero_1.jpg');"></div>
        <img src="ladun/img/bg_hero_1.jpg" alt="" />
        <div class="text-block ">
            <h1 class="primary" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-out"
                data-aos-offset="-200">Welcome to Partnerindo</h1>
            <h4 data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-out" data-aos-offset="-200">
                We are ready to help you.</h4>
            <a href="#!" class="cta-level-three secondary" data-aos-easing="ease-out" data-aos-delay="300"
                data-aos="fade-up">Get in touch</a>
        </div>
    </div>

    <div class="banner banner-bubble" style="margin-top:12px;">
        <img src="ladun/img/social_deks.jpg" alt="Social desk with seven people working" />
        <div class="circle right aos-init aos-animate" data-aos="fade-left">
            <div class="circle__inner">
                <div class="circle__wrapper">
                    <div class="circle__content">
                        <h4>With great service we meet you</h4>
                        <div class="circle__content__rte">
                            <a href="#!">Go</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-tags aos-init aos-animate" data-aos="fade-up" style="margin-top:100px;">
        <h2>Look what we can do for you</h2>
        <div class="text-links owl-carousel owl-theme flex">
            <div class="row">
                <div class="column">
                    <div class="img-grab-sec-mid">
                        <img src='ladun/img/product_side.png' style="width: 200px;"><br />
                    </div>
                    <a href="#!" class="button primary dark-transparency aos-init aos-animate"
                        data-aos-easing="ease-out" data-aos-delay="400" data-aos="fade-up">
                        Our Product
                    </a>
                </div>
                <div class="column">
                    <div class="img-grab-sec-mid">
                        <img src='ladun/img/service_side.png' style="width: 200px;"><br />
                    </div>
                    <a href="#!" class="button primary dark-transparency aos-init aos-animate"
                        data-aos-easing="ease-out" data-aos-delay="400" data-aos="fade-up">
                        Our Service
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="text-tags aos-init aos-animate" data-aos="fade-up" style="padding-top:100px;">
        <h2>Contact Us</h2>
        <div class="row">
            <div class="column-contact">
                <div class="img-grab-sec-mid">
                    <label class="label-contact">First Name *</label>
                    <input class="w3-input" type="text">
                </div>
            </div>
            <div class="column-contact">
                <div class="img-grab-sec-mid">
                    <label class="label-contact">Last Name *</label>
                    <input class="w3-input" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column-contact">
                <div class="img-grab-sec-mid">
                    <label class="label-contact">Job Title</label>
                    <input class="w3-input" type="text">
                </div>
            </div>
            <div class="column-contact">
                <div class="img-grab-sec-mid">
                    <label class="label-contact">Email Adress *</label>
                    <input class="w3-input" type="text">
                </div>
            </div>
        </div>
</main>
</div>

</main>
@endsection