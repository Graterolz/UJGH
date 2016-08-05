<?php
    function do_upload($name){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';
        //$config['max_size'] = 100;
        //$config['max_width'] = 1024;
        //$config['max_height'] = 768;
echo "asdf: ".$name."<br>";
        $CI = & get_instance ();
        
        $CI->load->library('upload', $config);

        if ( ! $CI->upload->do_upload($name)){

            $data = array('error' => $CI->upload->display_errors());
            //$CI->load->view('usuario/add_usuario_adjunto', $error);

            //$data = NULL;
        }
        else{
            $data = array('upload_data' => $CI->upload->data());
            //$CI->index();
            //$this->load->view('upload_success', $data);
        }

        return $data;
    }

function do_upload2($name = NULL) {
    $config ['upload_path'] = './uploads/';
    $config ['allowed_types'] = 'jpg|png|jpeg|pdf';
    // $config ['max_size'] = '100';
    // $config ['max_width'] = '1024';
    // $config ['max_height'] = '768';
    $CI = & get_instance ();

    $CI->load->library ( 'upload', $config );
    $CI->upload->initialize($config);

    if($name==NULL){
        $name="userfile";
    }
    if (! $CI->upload->do_upload ($name)) {

        $data = array( 
            'error' => $CI->upload->display_errors ()
        );

        //$data = NULL;
    } else {
        $data = array(
            'upload_data' => $CI->upload->data () 
        );
    }
    return $data;
}    
?>