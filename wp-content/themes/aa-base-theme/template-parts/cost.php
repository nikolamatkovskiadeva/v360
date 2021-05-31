<div class="cost-section container">
    <div class="row">
        <div class="col-12">
            <div class="left-image ">
                <img src="<?= get_field('cost_section_left_image')['url']; ?>" />
            </div>

            <div class="cost-seciton-text-box">
                <h2 class="selector"><?= get_field('cost_section_title'); ?></h2>
                <div class="cost-section-text"><?= get_field('cost_section_text');?></div>
                <div class="cost-section-text-gold"><span><?= get_field('cost_section_gold_text'); ?></span></div>
            </div>
            
            <div class="right-image">
                <img src="<?= get_field('cost_section_right_image')['url']; ?>" />
            </div>
        </div>
        <div class="white-box">
            <div class="white-inside-box"></div>
        </div>
    </div>
</div>