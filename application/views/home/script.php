<script type="text/javascript">
  function doUpdateStatus(){
    var status = encode64($('#input-update-status').val());
    // alert(status);

    $.ajax({
      method: "POST",
      url: "<?php echo base_url();?>index.php/account/doUpdateStatus/",
      data: { content: status }
    })
      .done(function( msg ) {
        alert( "Data Saved: " + msg );
      });
  }
</script>
