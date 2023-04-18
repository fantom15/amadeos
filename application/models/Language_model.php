<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Language_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_language()
    {
        $languages = $this->db->get_where('languages', ['status' => 'active']);
        if (!$languages)
            return 0;

        return $languages;
    }

    public function get_user_language($lang_id = null)
    {
        if (empty($lang_id)) {
            return false;
        }
        $languages = $this->db->get_where('languages', ['id' => $lang_id]);
        if (!$languages)
            return 0;

        return $languages;
    }
}
