
<footer>
    <div class="container">
        <div class="row">
            <div class="footer-logo col-3"><img src="<?= get_field('footer_logo','options')['url']; ?>" /></div>
            <div class="footer-number col-3"><a href="tel:<?= get_field('telephone_number','options'); ?>"><?= get_field('telephone_number','options'); ?></a></div>
            <div class="footer-social col-2">
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
            <div class="footer-find-dentis col-4">
                <form method="POST">
                    <input type="text" name="city"  placeholder="City" />
                    <input type="text" name="postcode" placeholder="Postcode" />
                    <input type="submit" name="find-dentist" value="GO" />
                </form>
            </div>
        </div>
        <div class="row">
            <div class="cpy-right text-center">© Copyright - 360 Visualise</div>
        </div>
    </div>
</footer>