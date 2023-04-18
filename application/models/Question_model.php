<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Question_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function upload_image()
    {
        $data = $this->input->post();
        if(empty( $data['image'])){
            throw new Exception('Please select an image');
        }

        if ($data['question_id'] != 0) {
            $final_data = array(
                'image'  => $data['image'],
            );
            $this->db->where('id', $data['question_id']);
            $this->db->update('questions', $final_data);
            return 'admin/questions/index/' . $data['topic_id'] . '/' . $data['question_id'];
        } else {
            $final_data = array(
                'topic_id' => $data['topic_id'],
                'language_id'  => $data['language_id'],
                'categories'  => $data['categories'],
                'question_type'  => $data['question_type'],
                'image'  => $data['image'],
            );
            $this->db->insert('questions', $final_data);
            $insert_id = $this->db->insert_id();

            return 'admin/questions/index/' . $data['topic_id'] . '/' . $insert_id;
        }
    }

    public function insert()
    {
        $data = $this->input->post();
        if (empty($data)) {
            throw new Exception('Data is empty');
        }

        if (empty($data['answers']) || $data['answers'] == 'undefined') {
            throw new Exception('Answer is not valid');
        }

        if (empty($data['id'])) {
            if (empty($data['topic_id'])) {
                throw new Exception('Topic id is not valid');
            }

            if (empty($data['language_id'])) {
                throw new Exception('Language id is not valid');
            }

            if (empty($data['categories'])) {
                throw new Exception('Categories is not valid');
            }

            if (empty($data['question_type'])) {
                throw new Exception('Question type is not valid');
            }

            if (in_array($data['question_type'], ['three_answer', 'abc'])) {
                $options = explode(',', $data['answer_option']);
                for ($i = 0; $i < 3; $i++) {
                    if (empty($options[$i])) {
                        throw new Exception('Answer is not valid');
                    }
                }

                $data['answer_option'] = json_encode($options, true);
            }

            if ($data['question_type'] == 'number' && $data['answers'] == 0) {
                throw new Exception('Answer is not valid');
            }

            $this->db->insert('questions', $data);
            $insert_id = $this->db->insert_id();

            return 'admin/questions/index/' . $data['topic_id'] . '/' . $insert_id;
        } else {

            if (in_array($data['question_type'], ['three_answer', 'abc'])) {
                $options = explode(',', $data['answer_option']);
                for ($i = 0; $i < 3; $i++) {
                    if (empty($options[$i])) {
                        throw new Exception('Answer is not valid');
                    }
                }

                $data['answer_option'] = json_encode($options, true);
            }

            if ($data['question_type'] == 'number' && $data['answers'] == 0) {
                throw new Exception('Answer is not valid');
            }

            $this->db->where('id', $data['id']);
            $this->db->update('questions', $data);

            return 'admin/questions/index/' . $data['topic_id'] . '/' . $data['id'];
        }
    }
}
