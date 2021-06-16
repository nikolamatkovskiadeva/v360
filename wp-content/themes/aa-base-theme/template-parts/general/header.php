<header>
    <div class="hero-image">
        <img class="animate" src="<?= get_field("hero_image")['url']; ?>" />
    </div>
    <div class="container above-header">
        <div class="row">
            <div id="logo" class="col-6">
                <a href="<?= get_home_url(); ?>" >
                    <img src="<?= get_field('logo','options')['url']; ?>" />
                </a>
            </div>
            <div class="col-6 header-right-side">
                <div class="social-networks">
                    <a href="<?= get_field("twitter","options"); ?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="<?= get_field("facebook","options"); ?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?= get_field("instagram","options"); ?>">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="find-dentist">
                    <a href="#">Find A 360 Dentist</a>
                </div>
                <div class="search">
                    <img src="<?= get_template_directory_uri() ?>/build/images/search.png" />
                </div>
            </div>
        </div>
    </div>
    <div class="container hero-content">
        <div class="row">
            <div class=" col-lg-6 col-md-7 col-12 offset-lg-6 offset-md-5 hero-content-inside">
                <div class="above-above-text animate">Lorem ipsum dolor sit ame</div>
                <h2 class="animate">Discover the Power of a 360 Smile</h2>
                <div class="below-hero-text animate">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Aliquam Tincidunt, Ex Sit Amet Dictum Ultrices, Lectus Felis Vehicula Risus, Vitae.</div>
                <div class="hero-content-buton animate">
                    <a href="#">Find Out More</a>
                </div>
                <div class="scroll-down">
                    <span class="line"></span>
                    <span>Scroll down</span>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay-wrap"></div>
</header>