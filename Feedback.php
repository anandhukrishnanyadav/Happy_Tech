<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends Main_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('myjob_model');
	}
    
    public function index()
    {
        $this->rbac->check_user_authentication();

		$data['jobs'] = $this->myjob_model->get_all_applied_jobs(); // Fetching Applied jobs

		$data['user_sidebar'] = 'jobseeker/user_sidebar'; // load sidebar for user

		$data['title'] = trans('applied_jobs');
		$data['meta_description'] = 'your meta description here';
		$data['keywords'] = 'meta tags here';

		$data['layout'] = 'jobseeker/my_jobs/feedback_page';
        //print_r($data);
		$this->load->view('layout', $data);
    }
}