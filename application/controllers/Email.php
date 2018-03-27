<?php

class Email extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Landing_Page_model');
        $this->load->model('Applicant_model');  
    }

    function index()
    {
        if (isset($_POST['userEmail']) && !empty($_POST['userEmail']))
        {
            $this->load->library('form_validation');
            $form_reponse=$this->input->post('g-recaptcha-response');
            $url="https://www.google.com/recaptcha/api/siteverify";
            $secretkey="6LfRmzcUAAAAALyhGzTaoIa5XsHxb3MocPDbDZd_";
            $response=file_get_contents($url."?secret=".$secretkey."&response=".$form_reponse."&remoteip=".$_SERVER["REMOTE_ADDR"]);
            $dota=json_decode($response);
            //check if email is valid
            $this->form_validation->set_rules('userEmail', 'Email Addresss', 'trim|required|min_length[6]|max_length[50]|valid_email|xss_clean');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('layouts/header');
                $this->load->view('registrar_page/applicant/send_mail', array('error' => 'Please supply a valid email address.'));
                $this->load->view('layouts/footer');
            }
            else
            {
                $userEmail = trim($this->input->post('userEmail'));
                $result = $this->Landing_Page_model->email_exists($userEmail);
                $schedule = $this->input->post('schedule');

                if($result and isset($dota->success) && $dota->success=="true")
                {
                    $this->send_schedule_email($userEmail, $result, $schedule);
                    // $this->load->view('layouts/header');
                    $this->load->view('landing_page/emailsent', array('userEmail'=> $userEmail));
                    // $this->load->view('layouts/footer');
                }
                else
                {
                    // $this->load->view('layouts/header');
                    $this->load->view('registrar_page/applicant/send_mail', array('error'=> 'Either your email is not registered or you did not click the recaptcha.'));
                    // $this->load->view('layouts/footer');
                }
            }
        }
        else
        {
            $this->load->view('registrar_page/applicant/send_mail');
        }
    }

   function send_schedule_email($userEmail, $userFN, $schedule)
    {
        

        $this->load->library('email');
        $email_code = md5($this->config->item('salt') . $userFN);

        $this->email->set_mailtype('html');
        $this->email->from('gov.pascualcollege@gmail.com', 'GAPC');
        $this->email->to($userEmail);
        $this->email->subject('Interview Schedule');

        $message = '<!DOCTYPE html><html lang="en"><head></head><body>';
        $message .= '<p>Dear ' . $userFN .  ',</p>';
        $message .= '<p>Your schedule for interview will be on ' . $schedule . '';
        $message .= '<p>If this is not you, kindly ignore this message or contact us</p>';
        $message .= 'Thank you!</p>';
        $message .= '</body></html>';

        $this->email->message($message);
        $this->email->send();
    }

}


