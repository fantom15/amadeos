<?php if (!defined('BASEPATH')) exit('Direct access allowed');
class Language_switcher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function switch_lang($language = "")
    {
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
