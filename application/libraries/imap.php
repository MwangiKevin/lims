<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    /* Library Class: Imap */

    class Imap {


        // Open IMAP connection

        function cimap_open($host, $mailbox, $username, $password)
        {
            return imap_open('{'.$host.':143}'.$mailbox, $username, $password);
        }

        // Find number of msg in mailbox

        function cimap_num_msg($imap_connection)
        {
            return imap_num_msg($imap_connection);
        }

        // Find disk quota amount

        function cimap_get_quota($imap_connection)
        {
            $storage = $quota['STORAGE']= imap_get_quotaroot($imap_connection, "INBOX");

            function kilobyte($filesize)
            {
                return round($filesize / 1024, 2) . ' Mb';
            }

            return kilobyte($storage['usage']) . ' / ' . kilobyte($storage['limit']) . ' (' . round($storage['usage'] / $storage['limit'] * 100, 2) . '%)';
        }    

    }

?>