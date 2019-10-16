<?php
[juampy@carboncete ~]$ php -r "\$from = \$to = 'traoreabdoulaye097@gmail.com'; \$x = mail(\$to, 'subject'.time(), 'Hello World', 'From: '. \$from); var_dump(\$x);"
add_action( 'phpmailer_init', 'setup' );
function setup( PHPMailer $phpmailer ) {
    $phpmailer->Host = 'mailhog';
    $phpmailer->Port = 1025;
    $phpmailer->IsSMTP();
}
