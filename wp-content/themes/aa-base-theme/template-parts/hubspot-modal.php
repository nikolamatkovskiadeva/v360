<div class="modal-overlay">
    <div class="modal">
        <div class="close-modal">
            <img src="<?= get_template_directory_uri();?>/build/images/close-white.png" />
        </div>
        <form method="POST">
            <div class="modal-form-fields">
                <label>Name</label>
                <input type="text" name="name" />
            </div>
            <div class="modal-form-fields">
                <label>Last Name</label>
                <input type="text" name="last_name" />
            </div>
            <div class="modal-form-fields">
                <label>E-mail</label>
                <input type="text" name="email" />
            </div>
            <div class="modal-form-fields">
                <label>Postcode</label>
                <input type="text" name="postcode" />
            </div>
            <div class="modal-form-fields radios-fields">
                <div class="radio-fields">
                    <input type="radio" name="patient" id="patient" /><label for="patient">I am a patient</label>
                </div>
                <div class="radio-fields">
                    <input type="radio" name="patient" id="dentist" /><label for="dentist">I am a dentist</label>
                </div>
            </div>
            <div class="modal-form-fields practice" style="display:none;">
                <label>if you are a dentist please input your practice. </label>
                <input type="text" name="dentist_practice" />
            </div>
            <input type="submit" name="submit" value="SUBMIT" />
        </form>
        <div class="modal-message"></div>
    </div>
</div>
