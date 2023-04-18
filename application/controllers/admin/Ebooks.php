<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ebooks extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->Login_model->is_logged_in()) {
            if (!$this->Permission_model->can('ebooks')) {
                return redirect(base_url() . 'admin');
            }
        } else {
            return redirect(base_url() . 'admin');
        }

        $this->load->model('Ebooks_model');
    }


    /**
     * index
     *
     * @param  mixed $id
     * @return void
     */
    public function index($id = null)
    {
        $inner_data = [];
        $inner_data['topic'] = null;
        if (!empty($id)) {
            $topic = $this->db->get_where('ebooks', ['id' => $id, 'status' => 'active']);
            if ($topic->num_rows() == 1) {
                $inner_data['topic'] = $topic;
                $inner_data['topic_language'] = $this->db->get_where('languages', ['id' => $topic->row()->language_id]);
            }
        }
        $inner_data['languages'] = $this->db->get_where('languages', array('status' => 'active'));

        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where(['status' => 'active']);
        $this->db->order_by('sort', 'ASC');
        $inner_data['ebooks'] = $this->db->get();

        $data['title'] = 'Ebooks';
        $data['content'] = $this->load->view('admin/ebooks/index', $inner_data, true);
        $this->load->view('admin/master_page', $data);
    }


    /**
     * insert topic language
     *
     * @return void
     */
    public function insert_language()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            exit;
        }

        $return = array('success' => false);
        try {
            $name = $this->input->post('name');
            if (empty($name)) {
                throw new Exception('Language name is empty.');
            }

            if (!is_string($name)) {
                throw new Exception('Language name is not valid.');
            }

            $final_data = ['language_name' => $name];
            $this->db->insert('languages', $final_data);

            $return['message'] = 'Language added.';
            $return['success'] = true;
        } catch (Exception $e) {
            $return['message'] = $e->getMessage();
        }

        echo json_encode($return);
    }


    /**
     * insert topic title
     *
     * @return void
     */
    public function insert_topic()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            exit;
        }

        $return = array('success' => false, 'insert_id' => null);
        try {
            $name = $this->input->post('title');
            $language_id = $this->input->post('language');
            if (empty($name)) {
                throw new Exception('title is empty.');
            }

            if (!is_string($name)) {
                throw new Exception('title is not valid.');
            }

            if (empty($language_id)) {
                throw new Exception('please select language');
            }

            $this->db->select('*');
            $this->db->from('ebooks');
            $this->db->where(['language_id' => $language_id]);
            $this->db->order_by('sort', 'DESC');
            $this->db->limit(1);
            $last_sort = $this->db->get();

            $final_data = [];
            $final_data['title'] = $name;
            $final_data['language_id'] = $language_id;
            $final_data['sort'] = ($last_sort->num_rows() > 0) ? $last_sort->row()->sort + 1 : 1;
            $this->db->insert('ebooks', $final_data);
            $return['insert_id'] = $this->db->insert_id();

            $return['message'] = 'Topic added.';
            $return['success'] = true;
        } catch (Exception $e) {
            $return['message'] = $e->getMessage();
        }

        echo json_encode($return);
    }


    /**
     * insert topic content
     *
     * @return void
     */
    public function insert_content()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            exit;
        }

        $return = array('success' => false);
        try {
            $input = $this->input->post();
            if (empty($input['id'])) {
                if (!empty($input['title'])) {
                    throw new Exception('Title is empty.');
                }
                throw new Exception('Please select topic or add new topic');
            }

            if (empty($input['title'])) {
                throw new Exception('Title is empty.');
            }

            $input['content'] = trim($input['content']);

            if ($input['content'] == '') {
                throw new Exception('Content is empty.');
            }

            $this->db->where('id', $input['id']);
            $this->db->update('ebooks', $input);

            $return['message'] = 'Topic added.';
            $return['success'] = true;
        } catch (Exception $e) {
            $return['message'] = $e->getMessage();
        }

        echo json_encode($return);
    }


    /**
     * List of images for topic
     *
     * @return void
     */
    public function img_list()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            exit;
        }

        $inner_data = [];

        $this->db->select('*');
        $this->db->from('images_list');
        $this->db->order_by('id', 'DESC');
        $inner_data['image_list'] = $this->db->get();

        $this->load->view('admin/ebooks/img_list', $inner_data);
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
            $return['message'] = $this->Ebooks_model->upload_image();
            $return['success'] = true;
        } catch (Exception $e) {
            $return['message'] = $e->getMessage();
        }

        echo json_encode($return);
    }


    /**
     * Disable topic
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id = null)
    {
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->update('ebooks', ['status' => 'inactive']);
        }

        return redirect('admin/ebooks');
    }


    /**
     *  Change topic position to up
     *
     * @param  mixed $id
     * @return void
     */
    public function up($id = null)
    {
        if (!empty($id)) {
            $topic = $this->db->get_where('ebooks', ['id' => $id, 'status' => 'active']);
            if ($topic->num_rows() == 1) {
                $this->db->select('*');
                $this->db->from('ebooks');
                $this->db->where(['sort < ' => $topic->row()->sort, 'language_id' => $topic->row()->language_id, 'status' => 'active']);
                $this->db->order_by('sort', 'DESC');
                $this->db->limit(1);
                $before_topic = $this->db->get();
                if ($before_topic->num_rows() == 1) {
                    $this->db->where('id', $id);
                    $this->db->update('ebooks', ['sort' => $before_topic->row()->sort]);

                    $this->db->where('id', $before_topic->row()->id);
                    $this->db->update('ebooks', ['sort' => $topic->row()->sort]);
                }
            }
        }

        return redirect('admin/ebooks');
    }


    /**
     * Change topic position to down
     *
     * @param  mixed $id
     * @return void
     */
    public function down($id = null)
    {
        if (!empty($id)) {
            $topic = $this->db->get_where('ebooks', ['id' => $id, 'status' => 'active']);
            if ($topic->num_rows() == 1) {
                $this->db->select('*');
                $this->db->from('ebooks');
                $this->db->where(['sort > ' => $topic->row()->sort, 'language_id' => $topic->row()->language_id, 'status' => 'active']);
                $this->db->order_by('sort', 'ASC');
                $this->db->limit(1);
                $before_topic = $this->db->get();
                if ($before_topic->num_rows() == 1) {
                    $this->db->where('id', $id);
                    $this->db->update('ebooks', ['sort' => $before_topic->row()->sort]);

                    $this->db->where('id', $before_topic->row()->id);
                    $this->db->update('ebooks', ['sort' => $topic->row()->sort]);
                }
            }
        }

        return redirect('admin/ebooks');
    }

    /**
     * Highlight text in topic
     *
     * @param  mixed $topic_id
     * @param  mixed $question_id
     * @return void
     */
    public function highlight_text($topic_id = null, $question_id = null)
    {
        if (empty($topic_id) || !is_numeric($topic_id) || empty($question_id) || !is_numeric($question_id)) {
            show_404();
            exit();
        }

        $inner_data = [];
        $inner_data['question'] = $this->db->get_where('questions', ['id' => $question_id]);
        $inner_data['topic'] = $this->db->get_where('ebooks', ['id' => $topic_id]);
        $data['content'] = $this->load->view('admin/ebooks/highlight_text', $inner_data, true);
        $this->load->view('admin/master_page', $data);
    }


    /**
     * Save topic content highlighted for specific questiob
     *
     * @return void
     */
    public function save_content_highlighted()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            exit();
        }

        $return = [];
        $return['success'] = false;
        try {
            $user_data = $this->input->post();
            if (empty($user_data['id'])) {
                throw new Exception('Id is not valid');
            }

            if (empty($user_data['text'])) {
                throw new Exception('Text is not valid');
            }


            $this->db->where(['id' => $user_data['id']]);
            $this->db->update('questions', ['topic_highlighted' => $user_data['text']]);
            $return['message'] = 'Topic saved successfully';
            $return['success'] = true;
        } catch (Exception $e) {
            $return['message'] = $e->getMessage();
        }

        echo json_encode($return);
    }
}
