<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dtable</title>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/jquery.dataTables.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/bootstrap/bootstrap.css" />
        <script src="<?php echo base_url(); ?>public/assets/js/jquery.dataTables.min.js"></script>
        
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js" ></script>
        <script src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js" ></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
                height: auto;
    	}
        .table{
            width:100%;
        }
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
            text-align: center !important;
        }
        
	</style>
</head>
<body>

<div class="container">
	<h1>DataTable Example</h1>

        <div id="body" class="container-fluid"  style="margin:0px 0px 50px;">
		<table id="search_result" class="table search_result">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Name</th>
                            <th>Colour</th>
                            <th>Engine type</th>
                            <th>Assembled</th>
                            <th>Make</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
	</div>
        
        <div id="container" class="container" style="padding-bottom: 30px;">
            <h3>HTML :</h3>
            <div>
                <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">
                    <table id="search_result" class="table">
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Name</th>
                                <th>Colour</th>
                                <th>Engine type</th>
                                <th>Assembled</th>
                                <th>Make</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </textarea>
                
                <p>
                    <h3>Javascirpt:</h3>
                </p>
                
            <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">
                $(function() {
        
                    $('#search_result').dataTable({
                        "sPaginationType": "full_numbers",
                        "iDisplayLength": 10,
                                "aLengthMenu": [[10, 20, 50, 100, -1], [10, 20, 50, 100, "All"]]
                    });

                });
                
                $(document).ready(function(){
                    $("#search_result").dataTable().fnDestroy();
                    datatables();

                });
    
    
                    function datatables(){

                                        $("#search_result").dataTable().fnDestroy();
                                        $('#search_result').dataTable( {
                                            "bDestroy": true,
                                            "processing": true,
                                            "sPaginationType": "full_numbers",
                                            "bFilter": true,
                                            "serverSide": true,
                                            "columnDefs": [ {"orderable": true }],
                                             "fnDrawCallback": function(oSettings) {
                                                  $('#search_result_paginate .current').attr('style', 'color: #000 !important');
                                                  $("#search_result_filter").find('input[type="search"]').addClass('search_input');
                                            },
                                             "sAjaxSource": "<?php 'echo base_url()'?>vehicle/get_dtable_data",
                                      });


                        }
            </textarea>
                
                <p>
                    <h3>Now in controller named as "Vehicle" we will create a function "get_dtable_data".</h3>
                </p>
                
                <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">
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
            </textarea>
                
            </div>
            
            
        </div>
        
        <div class="clearfix" style="margin: 20px 0px;"></div>
        
	<h1>DataTable Example2</h1>

        <div id="body" class="container-fluid" style="margin:50px 0px;">
		<table id="search_result_exp_2" class="table search_result2">
                    <thead>
                        <tr>
                            <th>Model ID</th>
                            <th>Name</th>
                            <th>Make</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
	</div>
        
        <div id="container" class="container" style="padding-bottom: 30px;">
            <h3>HTML :</h3>
            <div>
                <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">
                    <table id="search_result_exp_2" class="table search_result2">
                        <thead>
                            <tr>
                                <th>Model ID</th>
                                <th>Name</th>
                                <th>Make</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </textarea>
                
                <p>
                    <h3>Javascirpt:</h3>
                </p>
                
            <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">
                        $(function() {
        
                            $('#search_result_exp_2').dataTable({
                                "sPaginationType": "full_numbers",
                                "iDisplayLength": 10,
                                "aLengthMenu": [[10, 20, 50, 100, -1], [10, 20, 50, 100, "All"]]
                            });

                        });

                        $(document).ready(function(){
                            $("#search_result_exp_2").dataTable().fnDestroy();
                            datatables_exp_2();

                        });


                            function datatables_exp_2(){

                                $("#search_result_exp_2").dataTable().fnDestroy();
                                $('#search_result_exp_2').dataTable( {
                                    "bDestroy": true,
                                    "processing": true,
                                    "sPaginationType": "full_numbers",
                                    "bFilter": true,
                                    "serverSide": true,
                                    "columnDefs": [ {"orderable": true }],
                                     "fnDrawCallback": function(oSettings) {
                                          $('#search_result_exp_2_paginate .current').attr('style', 'color: #000 !important');
                                          $("#search_result_exp_2_filter").find('input[type="search"]').addClass('search_input_2');
                                    },
                                     "sAjaxSource": "<?php 'echo base_url()'?>vehicle/get_dtable_data_exp_2",
                              });
                }
            </textarea>
                
                <p>
                    <h3>Now in controller we will create a function named as "get_dtable_data_exp_2".</h3>
                </p>
                
                <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">
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
                </textarea>
                
            </div>
            
            
        </div>
        
        <div class="clearfix" style="margin: 50px 0px;"></div>
        
	<h1>DataTable Example3</h1>

        <div id="body" class="container-fluid" style="margin:30px 0px;">
		<table id="search_result_exp_3" class="table search_result3">
                    <thead>
                        <tr>
                            <th>Make ID</th>
                            <th>Make Name</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
	</div>

	<div id="container" class="container" style="padding-bottom: 30px;">
            <h3>HTML :</h3>
            <div>
                <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">
                    <table id="search_result_exp_3" class="table search_result3">
                        <thead>
                            <tr>
                                <th>Make ID</th>
                                <th>Make Name</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </textarea>
                
                <p>
                    <h3>Javascirpt:</h3>
                </p>
                
            <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">
                        $(function() {
        
                            $('#search_result_exp_3').dataTable({
                                "sPaginationType": "full_numbers",
                                "iDisplayLength": 10,
                                "aLengthMenu": [[10, 20, 50, 100, -1], [10, 20, 50, 100, "All"]]
                            });

                        });

                        $(document).ready(function(){
                            datatables_exp_3();
                        });


                            function datatables_exp_3(){

                                $("#search_result_exp_3").dataTable().fnDestroy();
                                $('#search_result_exp_3').dataTable( {
                                    "bDestroy": true,
                                    "processing": true,
                                    "sPaginationType": "full_numbers",
                                    "bFilter": true,
                                    "serverSide": true,
                                    "columnDefs": [ {"orderable": true }],
                                     "fnDrawCallback": function(oSettings) {
                                          $('#search_result_exp_3_paginate .current').attr('style', 'color: #000 !important');
                                          $("#search_result_exp_3_filter").find('input[type="search"]').addClass('search_input_3');
                                    },
                                     "sAjaxSource": "<?php 'echo base_url()'?>vehicle/get_dtable_data_exp_3",
                              });
                }
            </textarea>
                
                <p>
                    <h3>Now in controller we will create a function named as "get_dtable_data_exp_3".</h3>
                </p>
                
                <textarea style="width:100%; padding: 45px 0px 0px;" rows="15">

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
                </textarea>
                
            </div>
            
            
        </div>
</div>
    
    <script type="text/javascript">
    
    $(function() {
        
            $('#search_result').dataTable({
                "sPaginationType": "full_numbers",
                "iDisplayLength": 10,
    			"aLengthMenu": [[10, 20, 50, 100, -1], [10, 20, 50, 100, "All"]]
            });
            
        });
    
    $(document).ready(function(){
        
        datatables();
        datatables_exp_2();
        datatables_exp_3();
        
    });
    
    
    function datatables(){
        
                        $("#search_result").dataTable().fnDestroy();
                        $('#search_result').dataTable( {
                            "bDestroy": true,
                            "processing": true,
                            "sPaginationType": "full_numbers",
                            "bFilter": true,
                            "serverSide": true,
                            "columnDefs": [ {"orderable": true }],
                             "fnDrawCallback": function(oSettings) {
                                  $('#search_result_paginate .current').attr('style', 'color: #000 !important');
                                  $("#search_result_filter").find('input[type="search"]').addClass('search_input');
                            },
//                            "fnServerParams": function ( aoData ) {
//                              aoData.push( { "name": "field_name(you want to send as)", "value": field_value } );  
//                            },
                             "sAjaxSource": "<?php echo base_url()?>vehicle/get_dtable_data",
                      });
              
        
        }
    
    
    function datatables_exp_2(){
        
                        $("#search_result_exp_2").dataTable().fnDestroy();
                        $('#search_result_exp_2').dataTable( {
                            "bDestroy": true,
                            "processing": true,
                            "sPaginationType": "full_numbers",
                            "bFilter": true,
                            "serverSide": true,
                            "columnDefs": [ {"orderable": true }],
                             "fnDrawCallback": function(oSettings) {
                                  $('#search_result_exp_2_paginate .current').attr('style', 'color: #000 !important');
                                  $("#search_result_exp_2_filter").find('input[type="search"]').addClass('search_input_2');
                            },
                             "sAjaxSource": "<?php echo base_url()?>vehicle/get_dtable_data_exp_2",
                      });
        }
    
    
    function datatables_exp_3(){
        
                        $("#search_result_exp_3").dataTable().fnDestroy();
                        $('#search_result_exp_3').dataTable( {
                            "bDestroy": true,
                            "processing": true,
                            "sPaginationType": "full_numbers",
                            "bFilter": true,
                            "serverSide": true,
                            "columnDefs": [ {"orderable": true }],
                             "fnDrawCallback": function(oSettings) {
                                  $('#search_result_exp_3_paginate .current').attr('style', 'color: #000 !important');
                                  $("#search_result_exp_3_filter").find('input[type="search"]').addClass('search_input_3');
                            },
                             "sAjaxSource": "<?php echo base_url()?>vehicle/get_dtable_data_exp_3",
                      });
        }
    
    
    </script>

</body>
</html>