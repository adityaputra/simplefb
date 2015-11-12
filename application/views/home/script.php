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
      data: { 'content': status }
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
          var threadId = $.now();
            $('#live-feed').append(
                '<div class="panel panel-default"><div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>'+this.name+'</h4></div>'
                +'<div class="panel-body"><img src="<?php echo base_url();?>uploads/picture/'+this.picture_loc+'" class="pull-right" width="100" height="100"> <a href="#">On '+this.timestamp+' wrote</a><div class="clearfix"></div><hr>'
                +'<p>'+decode64(this.content)+'</p><hr>'
                +'<div class="input-group"><div class="input-group-btn"><button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button></div>'
                +'<input type="hidden" id="input-comment-username-'+threadId+'" value="'+this.username+'"/>'
                +'<input type="hidden" id="input-comment-timestamp-'+threadId+'" value="'+this.timestamp+'"/>'
                +'<input type="text" class="form-control" placeholder="Add a comment.." id="input-comment-content-'+threadId+'"><div class="input-group-btn"><button class="btn btn-default" onclick="doSubmitComment(\''+threadId+'\')">Send</button></div></div>'
                +'<div id="div-status-comment-'+threadId+'">'
                  // comments here
                +'</div>'
                +'</div></div>'

            );
            doRefreshComment(threadId);
        });
    });

  }

  function doSubmitComment(threadId){

    // var inUsername = '#input-comment-username-'+threadId;
    var username = ($('#input-comment-username-'+threadId).val());
    var timestamp = ($('#input-comment-timestamp-'+threadId).val());
    var content = ($('#input-comment-content-'+threadId).val());
    // alert(username+"\n"+timestamp+"\n"+content)

    $.ajax({
      method: "POST",
      url: "<?php echo base_url();?>index.php/account/doSubmitComment/",
      data: { 'status_username': username, 'status_timestamp':timestamp, 'content':content }
    })
      .done(function( msg ) {
        // alert( "Data Saved: " + msg );
        var result = $.parseJSON(msg);
        if(result.status == '1'){
          doRefreshComment(threadId);
          alert(msg);
        }
        else{
          alert("Failed to post comment.")
        }
      });

  }

  function doRefreshComment(threadId){
    var status_username = ($('#input-comment-username-'+threadId).val());
    var status_timestamp = ($('#input-comment-timestamp-'+threadId).val());
    $.ajax({
      method: "POST",
      url: "<?php echo base_url();?>index.php/account/doRefreshComment/",
      data: {'status_username':status_username, 'status_timestamp':status_timestamp }
    })
      .done(function( msg ) {
        // alert( "Comments Loaded: " + msg );
        var result = $.parseJSON(msg);
        $('#div-status-comment-'+threadId).html('');
        $.each(result.content, function() {
            $('#div-status-comment-'+threadId).append(
              '<hr/><div class="row">'
              +'<div class="col-sm-3"></div>'
              +'<div class="col-sm-7">On <span>'+this.timestamp+'</span>, <span><strong>'+this.name+'</strong></span> commented:<br/>'+this.content+'</div>'
              +'<div class="col-sm-2"><img src="<?php echo base_url();?>uploads/picture/'+this.picture_loc+'" class="pull-right" width="54" height="51"></div>'
              +'</div>'

            );
        });
    });

  }
</script>
