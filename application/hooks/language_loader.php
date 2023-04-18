<?php
class Language_loader
{
    function initialize()
    {
        $ci = &get_instance();

        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('information', $siteLang);
        } else {
            $ci->lang->load('information', 'english');
        }
    }
}
