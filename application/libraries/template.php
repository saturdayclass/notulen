<?php

class Template {
    function admin_notulen($view=null, $data=null) {
        $ci =& get_instance();

        $ci = $this->load->view('admin/template/bg_header', $data);
        $ci = $this->load->view('admin/'.$view, $data);
        $ci = $this->load->view('admin/template/bg_footer', $data);
    }

    function login_notulen($view=null, $data=null){
        $ci =& get_instance();

        $ci = $this->load->view('auth/template/bg_header', $data);
        $ci = $this->load->view('auth/'. $view, $data);
        $ci = $this->load->view('auth/template/bg_header', $data);
    }
}

?>