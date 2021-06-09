<div class="before-after-section container">
    <div class="decoration-steps">
        <span class="line"></span>
        <span>360 whiteining</span>
    </div>
    <div class="paralax-eff">
        <div class="row">
            <div class="col-12">
                <div class="cost-seciton-text-box">
                    <h2><?= get_field('before_after_title'); ?></h2>
                    <div class="cost-section-text"><?= get_field('before_after_text');?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-10 offset-1" >
                <div class="cost-seciton-slider-box">
                        <div class="slider">
                            <?php foreach(get_field('before_after_slider') as $slide): ?>
                                <div class="slide">
                                    <div class="slider-image">
                                        <img src="<?= $slide['image']['url']; ?>" />
                                    </div>
                                    <div class="slider-text">
                                        <div class="above-name"><?= $slide['above_name']?></div>
                                        <div class="name"><?= $slide['name']?></div>
                                        <div class="text"><?= $slide['text']?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>