<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_galeri extends CI_Controller {

    public function index()
    {
        show_404();
    }

    public function file_manager() {
        $data['images'] = glob('./dist/images/upload/*_thumb.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
        $this->load->view('fileman',$data);
    }

    public function simpan() {
        $this->load->library('image_lib');
        $config['upload_path']   = './dist/images/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_filename']  = 100;
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
            echo  $this->upload->display_errors();
        }
        else
        {
            $data = $this->upload->data();
            $thumb_size = 240;
            $json = array('error'=>0,'content'=>base_url('dist/images/upload/'.$data['file_name']));
            $width = $data['image_width'];
            $height = $data['image_height'];

            // setting image resize
            $configi['image_library']  = 'gd2';
            $configi['source_image']   = $data['full_path'];
            $configi['maintain_ratio'] = TRUE;
            $configi['new_image']      = $data['file_path'].$data['raw_name'].'_thumb'.$data['file_ext'];
            if ($width > $height) {
                $configi['height']     = $thumb_size;
            } else {
                $configi['width']      = $thumb_size;
            }
            
            // resize
            $this->image_lib->clear();
            $this->image_lib->initialize($configi);
            $this->image_lib->resize();
            
            $configi['source_image']   = $configi['new_image'];
            
            // setting image crop
            $configi['maintain_ratio'] = FALSE;

            if ($width > $height) {
                $configi['width']      = $thumb_size;
                $configi['x_axis']     = ceil(abs(floor((($width * $thumb_size / $height) - ($thumb_size - 2))) / 2));
                $configi['y_axis']     = 0;
            } else {
                $configi['height']     = $thumb_size;
                $configi['x_axis']     = 0;
                $configi['y_axis']     = 0;
            }

            // crop
            $this->image_lib->clear();
            $this->image_lib->initialize($configi);
            $this->image_lib->crop();            
            $this->output->set_content_type('application/json')->set_output(json_encode($json));                
        }
    }

    public function hapus() {
        $image = $this->input->post('image');
        if ($this->input->post() && $this->session->username) {
            if ($image) {
                unlink('./dist/images/upload/'.$image);
                unlink('./dist/images/upload/'.str_replace('_thumb.','.',$image));
                $json = (object) array('error' => 0, 'msg' => 'Berhasil di hapus!','image_id' => $this->input->post('image_id'));
            } else {
                $json = (object) array('error' => 1);
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($json));
        } else {
            show_404();
        }
    }

}

/* End of file Admin_galeri.php */
