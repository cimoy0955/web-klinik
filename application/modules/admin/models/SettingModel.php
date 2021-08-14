<?php (defined('BASEPATH')) or exit('No direct script access allowed');

class SettingModel extends CI_Model
{
    public function cek_setting($key)
    {
        $cek = $this->db->get_where('klik_settings', [
            'setting_name' => $key
        ])->num_rows();

        if ($cek > 0) {
            return true;
        }

        return false;
    }

    public function update_setting($key, $value)
    {
        $this->db->where('setting_name', $key)->update('klik_settings', [
            'setting_value' => $value
        ]);

        return true;
    }

    public function insert_setting($key, $value)
    {
        $this->db->insert('klik_settings', [
            'setting_name' => $key,
            'setting_value' => $value
        ]);

        return true;
    }

    public function detail()
    {
        $detail = $this->db->query('SELECT
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "site_name" ) AS site_name,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "site_description" ) AS site_description,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "site_address" ) AS site_address,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "site_icon" ) AS site_icon,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "site_contact" ) AS site_contact,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "site_email" ) AS site_email,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "site_open" ) AS site_open,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "sambutan" ) AS sambutan,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "foto_direktur" ) AS foto_direktur,
            ( SELECT setting_value FROM klik_settings WHERE setting_name = "template" ) AS template,
        ( SELECT setting_value FROM klik_settings WHERE setting_name = "site_open_on" ) AS site_open_on 
    FROM
        klik_settings 
        LIMIT 1')->row();

        return $detail;
    }

    public function detail_socialmedia()
    {
        $detail = $this->db->query('select (
                    select setting_value from klik_settings where setting_name = "site_facebook"
                ) as site_facebook, (
                    select setting_value from klik_settings where setting_name = "site_twitter"
                ) as site_twitter, (
                    select setting_value from klik_settings where setting_name = "site_gplus"
                ) as site_gplus, (
                    select setting_value from klik_settings where setting_name = "site_instagram"
                ) as site_instagram, (
                    select setting_value from klik_settings where setting_name = "site_linkedin"
                ) as site_linkedin from klik_settings limit 1')->row();

        return $detail;
    }

    public function color()
    {
        $detail = $this->db->query('select (
            select setting_value from klik_settings where setting_name = "color"
            ) as color, (
                select setting_value from klik_settings where setting_name = "color_2"
            ) as color_2, (
                select setting_value from klik_settings where setting_name = "color_3"
            ) as color_3 from klik_settings limit 1')->row();

        return $detail;
    }


    public function detail_link()
    {
        $detail = $this->db->query('
            select (
                select setting_value from klik_settings where setting_name = "site_link_1"
            ) as site_link_1, (
                select setting_value from klik_settings where setting_name = "site_link_2"
            ) as site_link_2, (
                select setting_value from klik_settings where setting_name = "site_link_3"
            ) as site_link_3, (
                select setting_value from klik_settings where setting_name = "site_link_4"
            ) as site_link_4, (
                select setting_value from klik_settings where setting_name = "site_name_link_1"
            ) as site_name_link_1, (
                select setting_value from klik_settings where setting_name = "site_name_link_2"
            ) as site_name_link_2, (
                select setting_value from klik_settings where setting_name = "site_name_link_3"
            ) as site_name_link_3, (
                select setting_value from klik_settings where setting_name = "site_name_link_4"
            ) as site_name_link_4 from klik_settings limit 1')->row();

        return $detail;
    }
}
