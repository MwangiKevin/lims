<?php
if($this->session->userdata('id')){
?>
Welcome <b><?php echo $this -> session -> userdata('Name');?></b>
<a href='<?php echo base_url() . "login/logout";?>'>Logout</a>
<?php
}
?>
