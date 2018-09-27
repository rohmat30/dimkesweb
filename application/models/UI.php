<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ui extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function template($page, $vars = array()) {
        $this->load->view('template/layout/header',$vars);
        $this->load->view('template/'.$page,$vars);
        $this->load->view('template/layout/footer',$vars);
    }

    private function menu($level) {
        $menu_superadmin = array(
            array('url' => 'admin_home','icon' => 'home','text' => 'Dashboard Super'),
            array('url' => 'admin_berita','icon' => 'rss-square','text' => 'Berita'),
            array('url' => 'admin_pegawai','icon' => 'users','text' => 'Pegawai'),
            array('url' => 'admin_kegiatan','icon' => 'users','text' => 'Pegawai'),
            array('url' => array(
                    array('url' => 'admin_kategori','text' => 'Kategori'),
                    array('url' => 'admin_pegawai','text' => 'Pegawai')
                ),'icon' => 'cog','text' => 'Berita'
            )
        );
        $menu_admin = array(
            array('url' => 'admin_home','icon' => 'home','text' => 'Dashboard Admin'),
            array('url' => array(
                array('url' => 'admin_berita','text' => 'Post Berita'),
                array('url' => 'admin_kategori','text' => 'Kategori')
            ),'icon' => 'rss','text' => 'Berita'),
            array('url' => 'admin_kegiatan','icon' => 'image','text' => 'Kagiatan')
        );
        $menu_user = array(
            array('url' => 'admin_home','icon' => 'home','text' => 'Dashboard User'),
            array('url' => 'admin_berita','icon' => 'rss-square','text' => 'Berita'),
            array('url' => 'admin_pegawai','icon' => 'users','text' => 'Pegawai'),
            array('url' => 'admin_kegiatan','icon' => 'users','text' => 'Pegawai'),
            array('url' => array(
                    array('url' => 'admin_kategori','text' => 'Kategori'),
                    array('url' => 'admin_pegawai','text' => 'Pegawai')
                ),'icon' => 'cog','text' => 'Berita'
            )
        );
        $menu = array($menu_superadmin,$menu_admin,$menu_user);
        return $this->activemenu($menu[$level - 1]);
    }

    private function activemenu($menus) {
        $uri = $this->uri->segment(1);
        foreach ($menus as $key => $menu) {
            if (is_array($menu['url'])) {
                $rm[$key] = $menu;
                foreach ($menu['url'] as $index => $submenu) {
                    if ($submenu['url'] == $uri) {
                        $rm[$key]['active'] = true;
                        $rm[$key]['url'][$index]['active'] = true;
                    }
                }
            } else {
                $rm[$key] = $menu;
                if ($menu['url'] == $uri) {
                    $rm[$key]['active'] = true;
                }
                
            }
        }
        return $rm;
    }

    public function admin($page, $vars = array()) {
        if ($this->session->username) {
            $admin = $this->get_admin();
            $vars['menus'] = $this->menu($admin->admin_level);
            $vars['access'] = isset($vars['access']) ? $vars['access'] : $admin->admin_level;
            $vars['admin_login'] = $admin;
            $vars['add_css'] = isset($vars['add_css']) ? is_array($vars['add_css']) ? $vars['add_css'] : array($vars['add_css']) : array();
            $vars['add_js'] = isset($vars['add_js']) ? is_array($vars['add_js']) ? $vars['add_js'] : array($vars['add_js']) : array();
            if ($this->access($admin->admin_level,$vars['access'])) {
                $this->load->view('admin/_layout/header',$vars);
                $this->load->view('admin/_layout/sidebar',$vars);
                $this->load->view('admin/_layout/top-menu',$vars);
                $this->load->view('admin/'.$page,$vars);
                $this->load->view('admin/_layout/footer',$vars);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
     }

    private function get_admin() {
        return $this->db->get_where('admin', array('admin_username' => $this->session->username))->result_object()[0];
    }

    private function access($admin_level, $admin_access) {
        if (is_array($admin_access)) {
            return in_array($admin_level, $admin_access);
        }
        return $admin_level == $admin_access;
    }
}

/* End of file Ui.php */
