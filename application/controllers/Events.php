<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        //Events

        class Events extends MY_Controller {
                public function index(){

                    $data['events'] = $this->Events_model->get_events();
                    
                    $data['title'] = 'Calendar';
                    
                    $this->load->view('templates/header/header', $data);
                    $this->load->view('pages/calendar', $data);
                    $this->load->view('templates/footer/footer');
                }

                public function view($event_id = null){

                    $data['event'] = $this->Events_model->get_events($event_id);

                    if(empty($data['event'])){
                            show_404();
                    }

                    $data['title'] = $data['event']['event_title'];

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('events/view', $data);
                    $this->load->view('templates/footer/footer');
                }

                public function create(){

                    $data['title'] = 'Create Event';

                    $this->form_validation->set_rules('event_title', 'Event Title', 'required');

                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header/header', $data);
                        $this->load->view('events/create', $data);
                        $this->load->view('templates/footer/footer');
                    } else {
                        $this->Events_model->create_event();
                        redirect('events');     
                    }
                }

                public function delete($event_id){

                    $this->Events_model->delete_event($event_id);
                    redirect('events');
                }

                public function edit($event_id){

                    $data['event'] = $this->Events_model->get_events($event_id);

                    if(empty($data['event'])){
                            show_404();
                    }

                    $data['title'] = 'Edit Event';

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('events/update', $data);
                    $this->load->view('templates/footer/footer');
                }

                public function update(){

                    $this->Vehicle_model->update_event();
                    redirect('events');
                }

                public function select_edit(){ 

                    $data['events'] = $this->Vehicle_model->get_events();

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('events/edit', $data);
                    $this->load->view('templates/footer/footer-container');
                    $this->load->view('templates/footer/footer');
                }

                public function select_delete(){ 

                    $data['events'] = $this->Vehicle_model->get_events();

                    $this->load->view('templates/header/header', $data);
                    $this->load->view('events/delete', $data);
                    $this->load->view('templates/footer/footer');
                }
        }
?>