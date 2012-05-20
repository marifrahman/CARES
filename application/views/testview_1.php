<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>
<script defer src="http://needim.github.com/noty/js/noty/js/jquery.noty.js"></script>
<link rel="stylesheet" href="http://needim.github.com/noty/js/noty/css/jquery.noty.css">
<link rel="stylesheet" href="http://needim.github.com/noty/js/noty/css/noty_theme_twitter.css">
<a href="#" class="test" id="test" > Test </a>
<a href="#" class="test" id="test" > Test </a>
<a href="#" class="test" id="test" > Test </a>
<a href="#" class="test" id="test" > Test </a>
<a href="#" class="test" id="test" > Test </a>


<script>
    /*$(document).ready(function(){
		
                $("#test").click(function(e){
                    jNotify('Notification : <strong>Bold</strong>, <u>Underline</u> and <i>Italic</i> !',{VerticalPosition : 'top'});
                })
           })   */
           
    $('.test').click(function() {
        noty({"text":"Hi! I'm an example text. When I grow up I want to be a noty message.","theme":"noty_theme_twitter","layout":"topRight","type":"error","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":500,"timeout":5000,"closeButton":false,"closeOnSelfClick":true,"closeOnSelfOver":false,"modal":false});
    });        
    
</script>    

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>