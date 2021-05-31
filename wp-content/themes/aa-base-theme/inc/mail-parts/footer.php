                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#000" style="padding: 30px 30px 30px 30px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="color: #ffffff; font-family: Verdana, sans-serif; font-size: 14px;" width="100%">
                                    &reg; <?= get_bloginfo('name') . ' - ' . date('Y'); ?><br/>
                                </td>
                                <!-- <td align="right" width="25%">
                                    <table border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <?php
                                                $social = $general_information['social'];
                                            ?>
                                            <?php foreach($social as $key => $val): if($val): ?>
                                            <td style="font-family: Verdana, sans-serif; font-size: 12px; font-weight: bold;">
                                                <a href="<?= $val ?>" style="color: #ffffff;">
                                                    <img src="<?= get_template_directory_uri(); ?>/build/images/email-social/social-<?= $key; ?>.png" alt="<?= $key; ?>>" width="16" height="16" style="display: block;" border="0" />
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                            <?php endif; endforeach; ?>
                                        </tr>
                                    </table>
                                </td> -->
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>