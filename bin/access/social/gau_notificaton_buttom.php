    
    <style>
  #alert_popover
  {
   display:block;
   position:absolute;
   bottom:50px;
   left:50px;
  }
  .wrapper {
    display: table-cell;
    vertical-align: bottom;
    height: auto;
    width:200px;
  }
  .alert_default
  {
   color: #fff;
   background-color: #b722ff;
   border-color: #48a7fe;
  }
  </style>
    


			
		<div id="alert_popover">
    <div class="wrapper">
     <div id="content">

     </div>
    </div>
   </div>


<script>
$(document).ready(function(){

 setInterval(function(){
  load_last_notification();
 }, 5000);

 function load_last_notification()
 {
  $.ajax({
   url:"http://localhost/social/gau_feedback_ans_alt.php",
   method:"POST",
   success:function(data)
   {
    $('#content').html(data);
   }
  })
  $.ajax({
   url:"http://localhost/social/gau_tracker_alt.php",
   method:"POST",
   success:function(data)
   {
    $('#content').html(data);
   }
  })
    $.ajax({
   url:"http://localhost/social/gau_feedback_alt.php",
   method:"POST",
   success:function(data)
   {
    $('#content').html(data);
   }
  })
     $.ajax({
   url:"http://localhost/social/gau_message_alt.php",
   method:"POST",
   success:function(data)
   {
    $('#content').html(data);
   }
  })
 }
});
</script>

