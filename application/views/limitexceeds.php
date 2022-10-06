<div class="content container-fluid pb-3 mt-5"> 
	<div class="white_box">
		<div class="title text-center">
			<h1>warning</h1>
		</div>
    	<div class="form-wizard">  
      		
			<div class="myContainer">
				
			
				
				
				<div class="form-container animated thankyou" style="display: block;">
          			<div class="thankyou_page">   
            			<div class="thankyou_content">         
              				
              				
              				<p>Your Limit is exceeds.</p>		
              				<button class="btn_blue_color btnRedirect">Go to home page</button>
            			</div>
          			</div>
         		</div>
			</div>
    	</div>
  	</div><!-- white_box -->
</div><!-- content -->
<script>
   

	$('.btnRedirect').on('click',function(){
		window.location.href=b_url+'home/logout';
	})
</script>