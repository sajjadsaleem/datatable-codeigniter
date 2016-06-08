<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('dtable_page');
	}
        
        public function get_dtable_data(){
            
            
                $this->load->library('Dtable');

                $database_columns = array(

                    'it.item_id', 
                    'model.model_name',
                    'clr.colour_name',
                    'eng.engine_name',
                    'assemble.assemble_name',
                    'make.make_name',

                );

                 $from = "items as it 
                         LEFT JOIN models as model ON model.model_id = it.model_id
                         JOIN make ON make.make_id = model.make_id
                         LEFT JOIN `engines` as eng ON eng.engine_id = it.item_engine_type
                         LEFT JOIN assembly_types as assemble ON assemble.assemble_id = it.item_assemble
                         LEFT JOIN colours as clr ON clr.colour_id = it.item_colour ";

                 
                 $where = '';
                 
                 if($this->input->get('sSearch') != ''){
                     
                     $where = "model.model_name LIKE '%".$this->input->get('sSearch')."%' ";
                     $where .= " OR make.make_name LIKE '%".$this->input->get('sSearch')."%' ";
                 }

               $this->dtable->set_index('it.item_id');

               $this->dtable->config('database_columns', $database_columns);

               $this->dtable->config('from', $from);
               $this->dtable->config('where', $where);

               $selected_data = $this->dtable->get_select_data();

               $aa_data = $selected_data['aaData'];

               $new_aa_data = array();

               foreach ($aa_data as $row) {

                   $row_value = array();

                   $row_value[] = $row->item_id;
                   $row_value[] = $row->model_name;
                   $row_value[] = $row->colour_name;
                   $row_value[] = $row->engine_name;
                   $row_value[] = $row->assemble_name;
                   $row_value[] = $row->make_name;    

                   $new_aa_data[] = $row_value;

               }

               $selected_data['aaData'] = $new_aa_data;

               echo json_encode($selected_data);

        }
        
        
        public function get_dtable_data_exp_2(){
            
            
                $this->load->library('Dtable');

                $database_columns = array(
                    'models.model_id', 
                    'models.model_name',
                    'make.make_name'
                );

                 $from = "models 
                         JOIN make ON make.make_id = models.make_id";

                 $where = '';
                 
                 if($this->input->get('sSearch') != ''){
                     
                     $where = "models.model_name LIKE '%".$this->input->get('sSearch')."%' ";
                     $where .= " OR make.make_name LIKE '%".$this->input->get('sSearch')."%' ";
                 }

               $this->dtable->set_index('models.model_id');

               $this->dtable->config('database_columns', $database_columns);

               $this->dtable->config('from', $from);
               $this->dtable->config('where', $where);

               $selected_data = $this->dtable->get_select_data();

               $aa_data = $selected_data['aaData'];

               $new_aa_data = array();

               foreach ($aa_data as $row) {

                   $row_value = array();

                   $row_value[] = $row->model_id;
                   $row_value[] = $row->model_name;
                   $row_value[] = $row->make_name;    

                   $new_aa_data[] = $row_value;

               }

               $selected_data['aaData'] = $new_aa_data;

               echo json_encode($selected_data);

        }
        
        
        public function get_dtable_data_exp_3(){
            
            
                $this->load->library('Dtable');

                $database_columns = array(

                    'make_id',
                    'make_name'
                );

                 $from = "make";
                 
                 $where = '';
                 
                 if($this->input->get('sSearch') != ''){
                     $where = "make_name LIKE '%".$this->input->get('sSearch')."%' ";
                 }

               $this->dtable->set_index('make_id');

               $this->dtable->config('database_columns', $database_columns);

               $this->dtable->config('from', $from);
               $this->dtable->config('where', $where);

               $selected_data = $this->dtable->get_select_data();

               $aa_data = $selected_data['aaData'];

               $new_aa_data = array();

               foreach ($aa_data as $row) {

                   $row_value = array();

                   $row_value[] = $row->make_id;
                   $row_value[] = $row->make_name;    

                   $new_aa_data[] = $row_value;

               }

               $selected_data['aaData'] = $new_aa_data;

               echo json_encode($selected_data);

        }    
}
