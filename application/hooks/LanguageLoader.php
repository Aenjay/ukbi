<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        // $ci->load->library('session');
        // $ci->lang->load('message',"indonesian");
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('information', $siteLang);
            $ci->config->set_item('language', $siteLang);
        } else {
            $ci->session->set_userdata('site_lang', "english");
            $ci->lang->load('information','english');
            $ci->config->set_item('language', 'english');
        }
    }
}