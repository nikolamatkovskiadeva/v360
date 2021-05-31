<?php

    $logo = wp_get_attachment_image_url(get_option('options_mail_html_template_elements_logo'), 'full');
    $email_banner = wp_get_attachment_image_url(get_option('options_mail_html_template_elements_email_header_banner'), 'email-banner');
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body bgcolor="#eaeaea" style="margin: 0; padding: 15px 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%"> 
    <tr>
        <td style="padding: 0;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">

                <?php if($logo): ?>
                <tr>
                    <td align="center" bgcolor="#fff" style="padding: 15px 0;">
                        <a href="<?= get_site_url(); ?>">
                            <img style="display: block; margin: 0 auto; width: 180px !important; height: auto !important;" src="<?= $logo; ?>" width="180" height="" style="display: block;" />
                        </a>
                    </td>
                </tr>
                <?php endif; ?>

                <?php if($email_banner): ?>
                <tr>
                    <td align="center" bgcolor="#fff" style="padding: 0; color: #153643;">
                        <img src="<?= $email_banner; ?>" width="600" height="180" style="display: block;" />
                    </td>
                </tr>
                <?php endif; ?>

                <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="padding: 0; color: #153643; font-family: Verdana, sans-serif; font-size: 13px; line-height: 20px;">