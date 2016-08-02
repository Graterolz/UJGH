<?php
    function do_upload(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')){

            $error = array('error' => $this->upload->display_errors());
            $this->load->view('usuario/add_usuario_adjunto', $error);

            $data = NULL;
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $this->index();
            //$this->load->view('upload_success', $data);
        }

        return $data;
    }
?>