<div class="steps-section">
    
    <div class="white-box">
        <div class="white-inside-box"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 " >
                <h2><?= get_field('steps_title'); ?></h2>
                <div class="steps-subtitle"><?= get_field('steps_text'); ?></div>
            </div>
            <div class="col-12 step-wrap">
                <?php foreach(get_field('steps_steps') as $box): ?>
                    <div class="steps-box">
                        <div class="img-box">
                            <div class="img-box-border"></div>
                            <img src="<?= $box['image']['url'] ?>" />
                        </div>
                        <div class="steps-box-title"><?= $box['title']; ?></div>
                        <div class="steps-box-text"><?= $box['text']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>