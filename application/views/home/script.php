<script type="text/javascript">
  jQuery(function() {
    doRefreshFeed();
  });
  function doUpdateStatus(){
    var status = encode64($('#input-update-status').val());
    // alert(status);

    $.ajax({
      method: "POST",
      url: "<?php echo base_url();?>index.php/account/doUpdateStatus/",
      data: { content: status }
    })
      .done(function( msg ) {
        // alert( "Data Saved: " + msg );
        var result = $.parseJSON(msg);
        if(result.status == '1'){
          doRefreshFeed();
        }
        else{
          alert("Failed to post status update.")
        }
      });
  }
  function doRefreshFeed(){
    $.ajax({
      method: "POST",
      url: "<?php echo base_url();?>index.php/account/doRefreshFeed/",
      data: { }
    })
      .done(function( msg ) {
        // alert( "Feed Loaded: " + msg );
        var result = $.parseJSON(msg);
        $('#live-feed').html('');
        $.each(result.content, function() {
            $('#live-feed').append(
                '<div class="panel panel-default"><div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>'+this.name+'</h4></div>'
                +'<div class="panel-body"><img src="<?php echo base_url();?>uploads/picture/'+this.picture_loc+'" class="img-circle pull-right"> <a href="#">On '+this.timestamp+' wrote</a><div class="clearfix"></div><hr>'
                +'<p>'+decode64(this.content)+'</p><hr>'
                +'<form><div class="input-group"><div class="input-group-btn"><button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button></div><input type="text" class="form-control" placeholder="Add a comment.."></div></form>'
                +'</div></div>'

            );
        });
    });

  }
</script>
