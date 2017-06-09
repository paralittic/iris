<?php
        class Pages extends CI_Controller {
                public function view($page = 'home')
                {
                        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                        {
                                show_404();
                        }

                        $data['title'] = ucfirst($page); // Capitalize the first letter               

                        $this->load->view('templates/header/header-required', $data);
                        $this->load->view('templates/header/header-nav');
                        $this->load->view('templates/header/header-container');
                        $this->load->view('pages/'.$page, $data);
                        $this->load->view('templates/footer/footer-required');
                }
        }
