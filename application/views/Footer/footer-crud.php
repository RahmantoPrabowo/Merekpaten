<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 

<script src="<?php echo base_url("assets/theme");?>/js/jquery.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/select2.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.validate.js"></script>
<script src="<?php echo base_url("assets/theme");?>/js/matrix.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.tables.js"></script>
<script src="<?php echo base_url("assets/theme");?>/js/bootstrap-colorpicker.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/bootstrap-datepicker.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.toggle.buttons.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/masked.js"></script> 
 
<script src="<?php echo base_url("assets/theme");?>/js/matrix.form_common.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/wysihtml5-0.3.0.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url("assets/theme");?>/js/bootstrap-wysihtml5.js"></script>
<script src="<?php echo base_url("assets/theme");?>/js/matrix.form_validation.js"></script> 

<script>
	$('.textarea_editor').wysihtml5();
</script>

<script type="text/javascript">
  


 $('.provinsi').on('change', function() {
    var id = $(this).val();

    $.ajax({
        url: '<?php echo site_url("Ambil_data/get_kabupaten");?>',
        type: 'post',
        data: {id: id},// we send data parameter using data properties
    })

    .done(function(data) { //<---- we use .done here 
    	data = JSON.parse(data);
        var html = '<select class="kabupaten" name="kabupaten"><option value="placeholder">Pilih Kabupaten/Kota</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    $('.controls-kabupaten').html(html+"</select>");               
    })
});

 $('.controls-kabupaten').on('change', function() {
    var id = $(".kabupaten").val();
   // alert(id);
    $.ajax({
        url: '<?php echo site_url("Ambil_data/get_kecamatan");?>',
        type: 'post',
        data: {id: id},// we send data parameter using data properties
    })

    .done(function(data) { //<---- we use .done here 
    	
    	data = JSON.parse(data);
    
        var html = '<select id="kecamatan" name="kecamatan"><option value="placeholder">Pilih Kecamatan</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    $('.controls-kecamatan').html(html+"</select>");              
    })
});

 $('.controls-kecamatan').on('change', function() {
    var id = $("#kecamatan").val();
   // alert(id);
    $.ajax({
        url: '<?php echo site_url("Ambil_data/get_kelurahan");?>',
        type: 'post',
        data: {id: id},// we send data parameter using data properties
    })

    .done(function(data) { //<---- we use .done here 
    	
    	data = JSON.parse(data);
    
        var html = '<select id="kelurahan" name="kelurahan"><option value="placeholder">Pilih Kelurahan</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    $('.controls-kelurahan').html(html+"</select>");              
    })
});

/*start alamat-surat*/
 $('.provinsi-surat').on('change', function() {
    var id = $(this).val();

    $.ajax({
        url: '<?php echo site_url("Ambil_data/get_kabupaten");?>',
        type: 'post',
        data: {id: id},// we send data parameter using data properties
    })

    .done(function(data) { //<---- we use .done here 
    	data = JSON.parse(data);
        var html = '<select id="kabupaten-surat" name="kabupaten-surat"><option value="placeholder">Pilih Kabupaten/Kota</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    $('.controls-kabupaten-surat').html(html+"</select>");               
    })
});

 $('.controls-kabupaten-surat').on('change', function() {
    var id = $("#kabupaten-surat").val();
  
    $.ajax({
        url: '<?php echo site_url("Ambil_data/get_kecamatan");?>',
        type: 'post',
        data: {id: id},// we send data parameter using data properties
    })

    .done(function(data) { //<---- we use .done here 
    	
    	data = JSON.parse(data);
    
        var html = '<select id="kecamatan-surat" name="kecamatan-surat"><option value="placeholder">Pilih Kecamatan</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    $('.controls-kecamatan-surat').html(html+"</select>");              
    })
});

 $('.controls-kecamatan-surat').on('change', function() {
    var id = $("#kecamatan-surat").val();
   // alert(id);
    $.ajax({
        url: '<?php echo site_url("Ambil_data/get_kelurahan");?>',
        type: 'post',
        data: {id: id},// we send data parameter using data properties
    })

    .done(function(data) { //<---- we use .done here 
    	
    	data = JSON.parse(data);
    
        var html = '<select id="kelurahan-surat" name="kelurahan-surat"><option value="placeholder">Pilih Kelurahan </option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    $('.controls-kelurahan-surat').html(html+"</select>");              
    })
});

 /*end script alamat-surat*/
</script>

</body>
</html>
