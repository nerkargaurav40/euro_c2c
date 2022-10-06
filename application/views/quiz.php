<div class="content container-fluid pb-3 mt-5"> 
	<div class="white_box">
		<div class="title text-center">
			<h1>Question</h1>
		</div>
    	<div class="form-wizard">  
      		<div class="steps steps_dott_row">
        		<ul class="steps_dott_list">
					<?php 
						for ($i=0; $i<15 ; $i++) { 
						$class = ($i==0)?'active':'';
					?>
          			<li>
            			<div class="dott_circle <?php echo $class; ?>"></div>
          			</li>
          			<?php } ?>
        		</ul>
      		</div><!-- steps_dott_row -->
			  <div class="alert alert-danger alert_position" style="display: none;" >
                <p class="error_message"></p>
            </div>
			<div class="myContainer">
				
			
				<?php 
					$cnt=1;
					foreach ($questions as $key => $value) {
				?>
				
        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3"><?php echo $key; ?>?</h2>
          			<div class="row mt-3">
						<?php 
							if($value->isopenBox==0)
							{
						?>
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" id="Quiz<?php echo $cnt; ?>-01" type="radio" name="Question-<?php echo $cnt; ?>" style="display: none;"/>
										<label class="cbx" for="Quiz<?php echo $cnt; ?>-01">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title"><?php echo $value->options_1; ?>.</span>      
										</label>
									</div>
								</div>
								
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" id="Quiz<?php echo $cnt; ?>-02" type="radio" name="Question-<?php echo $cnt; ?>" style="display: none;"/>
										<label class="cbx" for="Quiz<?php echo $cnt; ?>-02">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title"><?php echo $value->options_2; ?>.</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" id="Quiz<?php echo $cnt; ?>-03" type="radio" name="Question-<?php echo $cnt; ?>" style="display: none;"/>
										<label class="cbx" for="Quiz<?php echo $cnt; ?>-03">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title"><?php echo $value->options_3; ?>.</span>       
										</label>
									</div>
								</div><!-- col -->
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" id="Quiz<?php echo $cnt; ?>-04" type="radio" name="Question-<?php echo $cnt; ?>" style="display: none;"/>
										<label class="cbx" for="Quiz<?php echo $cnt; ?>-04">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title"><?php echo $value->options_4; ?>.</span>      
										</label>
									</div>
								</div><!-- col -->
						<?php	
							}else{
						?>
								<div class="col-md-12 mt-3">
									<div class="quiz_check_row">
										
										<textarea class="form-control textarea_feild" rows="4" id="openBox<?php echo $cnt; ?>-01" name="openbox-<?php echo $cnt; ?>"></textarea>
									</div>
								</div>
						<?php 
							}
						?>
						<input type="hidden" name="questions[]" id="ques_<?php echo $cnt; ?>" value="" />
						<input type="hidden" name="answers[]" id="ans_<?php echo $cnt; ?>" value="" />
            		</div><!-- row -->
					<div class="text-center mt-5">
						<?php 
							if($cnt>1){
						?>
							<button class="btn_grey_color btn_small back" rel="<?php echo $key; ?>" data-id="<?php echo $cnt; ?>">Back</button>
						<?php } ?>
						<button class="btn_blue_color btn_small next" rel="<?php echo $key; ?>" data-id="<?php echo $cnt; ?>" questionType="<?php echo $value->isopenBox; ?>">Next</button>
						  
            		</div>
        		</div><!-- Question 02 -->
				<?php 
					$cnt++;
					}
				?>
				
				<div class="form-container animated thankyou" style="display: none;">
          			<div class="thankyou_page">   
            			<div class="thankyou_content">         
              				<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                				<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                				<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
              				</svg>
              				<h1>Thank You!</h1>
              				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>		
              				<button class="btn_blue_color btnRedirect">Go to home page</button>
            			</div>
          			</div>
         		</div>
			</div>
    	</div>
  	</div><!-- white_box -->
</div><!-- content -->
<script>
    var totalSteps = $(".steps li .dott_circle").length;
	var clickCnt = 0;
	var flg = 1;
	var questions = [];
	var finalQuestionsAnswers = {};
	var answers = [];
	$(".submit").on("click", function(){
	return false; 
	});

	$(".steps li:nth-of-type(1)").addClass("active");
	$(".myContainer .form-container:nth-of-type(1)").addClass("active");

	$(".form-container").on("click", ".next", function() { 
		var quesTxt = $(this).attr('rel');
		
		var quesCnt = $(this).attr('data-id');

		var questionType = $(this).attr('questionType');
		if(questionType==0)
		{

		
			if($("input:radio[name='Question-"+quesCnt+"']").is(":checked")) {
				$('#ques_'+quesCnt).val(quesTxt);
				questions.push(quesTxt);
				//$("input[name='questions[]']").val(quesTxt);
				var ansTxt = $("input:radio[name='Question-"+quesCnt+"']:checked").parent().text();
				$('#ans_'+quesCnt).val(ansTxt);
				answers.push(ansTxt);
				//$("input[name='answers[]']").val(ansTxt);
				finalQuestionsAnswers[quesTxt] = ansTxt;
				//finalQuestionsAnswers.push({quesTxt:ansTxt});
				clickCnt++;
				flg = 1;
				$('.error_message').html('');
				$('.alert').fadeOut();
			}else{
				flg = 0;
				$('.error_message').html('').html('Please select one option.');
				$('.alert').fadeIn();

			}
		}else{
			var openBoxVal = $('#openBox'+quesCnt+'-01').val();
			
			if(!$.trim($('#openBox'+quesCnt+'-01').val()))
			{
				flg = 0;
				$('.error_message').html('').html('Please enter answer.');
				$('.alert').fadeIn();
			}else{
				console.log(openBoxVal);
				finalQuestionsAnswers[quesTxt] = openBoxVal;
				//finalQuestionsAnswers.push({quesTxt:openBoxVal});
				clickCnt++;
				flg = 1;
				$('.error_message').html('');
				$('.alert').fadeOut();
			}
		}
		if(clickCnt<=15 && flg==1)
		{
			console.log('ClickCount====>'+clickCnt);
			$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 1).addClass("active"); 
  			$(this).parents(".form-container").removeClass("active").next().addClass("active fadeIn");   
			if(clickCnt==15)
			{
				$.ajax({
                url:b_url+'home/custquestionAnswer',
                method:'POST',
                dataType:'json',
                data:{'questions':questions,'answers':answers,'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>','finalAnswers':finalQuestionsAnswers},
                success:function(response){
                    
                    if(response.status=='error')
                    {
                        $('.error_message').html('').html(response.error);
                        $('.alert').fadeIn('slow');
                    }else if(response.status=='success'){
                        $(".form-container").fadeOut();
						$('.thankyou').fadeIn();
                    }
                }
            })
			}
		}
	});

	$(".form-container").on("click", ".back", function() {  
  		$(".steps li .dott_circle").eq($(this).parents(".form-container").index() - totalSteps).removeClass("active"); 
  		$(this).parents(".form-container").removeClass("active fadeIn").prev().addClass("active fadeIn"); 
		  clickCnt--;
	});

	$('.btnRedirect').on('click',function(){
		window.location.href=b_url+'home/logout';
	})
</script>