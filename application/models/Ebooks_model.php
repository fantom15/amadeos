<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ebooks_model extends CI_Model
{
    public function upload_image()
    {
        $user_data = $this->input->post();

        if(!empty($_FILES['image'])){
            $file = explode(".", $_FILES["image"]["name"]);
            $rand = time().'-image';

            $white_list = array('jpg', 'png', 'jpeg');

            if(!in_array(end($file), $white_list)){
                throw new Exception("Image's format is not valid");
            }

            $newName = $rand. '.' . end($file);

            $filePlace = 'assets/img/images_list/'.$newName;

            if(move_uploaded_file($_FILES['image']['tmp_name'],$filePlace)) {
                $final_data = array(
                    'image_name' => $newName
                );
    
                $this->db->insert('images_list', $final_data);
                
                return "Image uploaded";
            }else{
                throw new Exception("Problem in upload image. Please try again.");
            }
        }else{
            throw new Exception("Please select an image.");
        }
    }
}
