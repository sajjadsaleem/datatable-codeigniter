<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $user;

    # Holds the information of the logged in user.

    /**
     * @name		__construct
     * 
     * @desc		Call the parent constructor & load the users model.
     *
     */
    function __construct() {
        parent::__construct();

        // fetches a user's details on init
        $this->user = $this->ion_auth->user()->row();
        $this->select_language();
    }

    /**
     * @name		require_authentication
     * 
     * @desc		Retrieve the user information from the session, redirect to login if fails.
     *
     */
    public function require_auth() {
        
        if (!$this->user) {
                $this->redirection_function();
        }
    
  }

    public function admin_auth() {

        if($this->user){
            
            if ($this->ion_auth->in_group('admin')) {
                return $return_flag = true;
            } else {
                show_404();
            }
            
        } else {
            
                $this->redirection_function();
        }
         
    }
    
//  if  is admin or manager or commercial user will return true
    
    public function check_for_admin_search() {
       
        if($this->user){
            
            if ($this->ion_auth->in_group('admin') || $this->ion_auth->in_group('manager') || $this->ion_auth->in_group('commercial_user')) {

                return $return_flag = true;
            }else {
                show_404();
            }    
            
        } else {
            
                $this->redirection_function();
        }
    }
    
    public function check_admin_and_manager(){
        
        if($this->user){
            if ($this->ion_auth->in_group('admin') || $this->ion_auth->in_group('manager')){
                return $return_flag = true;
            }else {
                show_404();
            }
        }else {
                $this->redirection_function();
        }
        
    }
    public function redirection_function(){
        
                if($_SERVER['HTTP_HOST'] == 'localhost'){
                    
                    redirect(base_url());
                    
                } else
                {
                    redirect(base_url()); // 
                }
    }
    
    function select_language(){
//        session_start();
        
        
        if($this->input->get('lid') == 'it')
        {
            $this->lang->load('auth', 'italian');
            $this->lang->load('ion_auth', 'italian');
            $this->lang->load('form_validation', 'italian');
            $this->session->set_userdata('lid', 'it');
            
        }
          else if($this->input->get('lid') == 'en')
        {
            $this->lang->load('auth', 'english');
            $this->lang->load('ion_auth', 'english');
            $this->lang->load('form_validation', 'english');
            $this->session->set_userdata('lid', 'en');
           
        }
        
        else if($this->session->userdata('lid') == 'it')
        {
            $this->lang->load('auth', 'italian');
            $this->lang->load('ion_auth', 'italian');
            $this->lang->load('form_validation', 'italian');
        }
         else if($this->session->userdata('lid') == 'en')
        {
            $this->lang->load('auth', 'english');
            $this->lang->load('ion_auth', 'english');
            $this->lang->load('form_validation', 'english');
        }
        
        else
        {
            $this->lang->load('auth', 'italian');
            $this->lang->load('ion_auth', 'italian');
            $this->lang->load('form_validation', 'italian');
        }
        
        
    }

}

/* End of file MY_Controller.php */
	/* Location: application/core/MY_Controller.php */