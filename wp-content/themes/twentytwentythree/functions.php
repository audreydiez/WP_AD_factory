<?php

add_action('template_redirect', 'redirectPage');

function redirectPage()
{
    if (!is_user_logged_in()) {
        auth_redirect();
    }
}
