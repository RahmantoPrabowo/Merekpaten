<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="<?php echo base_url("assets/theme");?>/js/excanvas.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.flot.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/fullcalendar.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.dashboard.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.gritter.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.interface.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.chat.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.validate.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.form_validation.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.wizard.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/select2.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.popover.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.tables.js"></script> 

<script>
// assumes you're using jQuery
$(document).ready(function() {

$('.confirm-div').hide();
<?php if($this->session->flashdata('msg')){ ?>
    alert("<?php echo $this->session->flashdata('msg');?>");
<?php } ?>
</script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

<!-- Script special for this page -->
<script src="<?php echo base_url("assets/theme");?>/js/bootstrap-colorpicker.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/bootstrap-datepicker.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.toggle.buttons.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/masked.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.form_common.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/wysihtml5-0.3.0.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/bootstrap-wysihtml5.js"></script> 
<script>
  $('.textarea_editor').wysihtml5();
</script>

<script type="text/javascript">
  $("#passbaru").keyup(function() {
 
      baru1 = $("#passbaru1").val();
      if($(this).val() != baru1){
        $("#peringatanpass").css("display", "block");
      }
      else{
        $("#peringatanpass").css("display", "none");
        $("#submit-edit-profil").removeAttr('disabled');
      }
  });
</script>
<!-- end of script special -->

</body>
</html>
