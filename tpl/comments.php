<div class="comments">
    <form method="POST" id="comment_form">
        <div class="textarea">
            <textarea name="comment_content" id="comment_content" placeholder="ADD YOUR COMMENT HERE"></textarea>
        </div><br>  
        <input class="com_sub" type="submit" name="submit" id="submit" value="Send" /><br><br><br>
    </form>
   <span id="comment_message"></span><br/>
   <div id="display_comment"></div>
    
</div>
    <script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  <?php $_SESSION["comm_id"]=$id; ?>
  event.preventDefault();
<?php if(isset($_SESSION["login"])){?>
  var form_data = $(this).serialize();
  $.ajax({
   url:"tpl/add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data){
    if(data.error != ''){
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     load_comment();
    }
   }
  })
<?php } ?>
 });

 load_comment();

 function load_comment(){
  $.ajax({
   url:"tpl/fetch_comment.php",
   method:"POST",
   success:function(data){
    $('#display_comment').html(data);
   }
  })
 } 
});
</script>