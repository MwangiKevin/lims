<?php

    /* Controller: Mail */

    class Mail extends MY_Controller {


        // IMAP/POP3 (mail server) LOGIN
        var $imap_server    = '{imap.gmail.com:993/imap/ssl}';
        var $imap_user        = 'lims.eidvl@gmail.com';
        var $imap_pass        = 'eidvl.tz2014';


        // Constuctor

        function __construct() {

            parent::Controller();

            $this->load->library('Imap');

        }

        // index

        function index() {

            $inbox = $this->imap->cimap_open($this->imap_server, 'INBOX', $this->imap_user, $this->imap_pass) or die(imap_last_error());

            $data_array['totalmsg']    = $this->imap->cimap_num_msg($inbox);
            $data_array['quota']    = $this->imap->cimap_get_quota($inbox);

            $this->load->view('mail_view', $data_array);    
        }
    }

?>
