<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->Login_model->is_logged_in()) {
            if (!$this->Permission_model->can('gallery')) {
                return redirect(base_url() . 'admin');
            }
        } else {
            return redirect(base_url() . 'admin');
        }

        $this->load->model(['Image_list_model']);
    }


    /**
     * Upload new image
     *
     * @return void
     */
    public function upload_image()
    {
        if (!$this->input->is_ajax_request()) {
			show_404();
			exit;
		}

		$return = array('success' => false);
		try {
			$return['message'] = $this->Image_list_model->upload_image();
			$return['success'] = true;
		} catch (Exception $e) {
			$return['message'] = $e->getMessage();
		}

		echo json_encode($return);
    }


    /**
     * index
     *
     * @return void
     */
    public function index($folder = null)
    {
        $folders = ['3d', 'dashboard', 'sign', 'situation'];
        if (!empty($folder) && in_array($folder, $folders)) {
            $inner_data = [];
            $this->db->select('*');
            $this->db->from('images_list');
            $this->db->where(['folder' => $folder]);
            $this->db->order_by('id', 'DESC');
            $inner_data['images'] = $this->db->get();
            $inner_data['folder'] = $folder;
            $data['content'] = $this->load->view('admin/gallery/upload', $inner_data, true);
        }else{
            $data['content'] = $this->load->view('admin/gallery/index', NULL, true);
        }

        $this->load->view('admin/master_page', $data);
    }
}
