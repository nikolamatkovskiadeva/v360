<div class="timing-section" >
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="timing-image-wrap" >
                    <img src="<?= get_field('timing_section_left_image')['url']; ?>" />
                </div>
            </div>
            <div class="col-7">
                <div class="timing-text-wrap">
                    <h2><?= get_field('timing_section_title');?></h2>
                    <div class="timing-text-inside"><?= get_field('timing_section_text');?></div>
                </div>
                
                <div class="timing-time-wrap">
                    <div class="timing-time"><?= get_field('timing_section_timing'); ?></div>
                    <div class="timing-time-button"><a href="<?= get_field('timing_section_button_link'); ?>"><?= get_field('timing_section_button_text'); ?></a></div>
                </div>
            </div>
        </div>
    </div>
</div>