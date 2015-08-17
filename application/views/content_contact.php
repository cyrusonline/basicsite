<div id="content">
<?php 
$this->load->helper("form");
echo form_open("site/send_email");
echo form_label("Name: ","fullname");
$data = array(
	"name"=>"fullName",
	"id"=>"fullName",
	"value"=>""	
		
		
);

echo form_input($data);

echo form_close();

?>
</div>