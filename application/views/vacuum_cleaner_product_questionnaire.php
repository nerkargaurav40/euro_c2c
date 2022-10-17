<div class="content container-fluid pb-3 mt-5"> 
	<div class="white_box">
		<div class="title text-center">
			<h1>Question</h1>
		</div>
    	<div class="form-wizard">  
      		<div class="steps steps_dott_row">
        		<ul class="steps_dott_list">
					<?php 
						for ($i=0; $i<7 ; $i++) { 
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
        	<?php echo form_open('',array('id' => 'frm_vaccum', 'class'=> '', 'role'=>'form', 'autocomplete' => "off",'onSubmit'=>"return false;")) ?>
            <input type="hidden" name="firstAns" id="firstAns" value="" />
            <input type="hidden" name="selected_question_1" id="selected_question_1" value="" />
            <input type="hidden" name="selected_question_2" id="selected_question_2" value="" />
            <input type="hidden" name="selected_question_5" id="selected_question_5" value="" />
            <input type="hidden" name="finalAnswers" id="finalAnswers" value="" />
			<div class="myContainer">
				
			
				
        		<div class="form-container animated active">
          			<h2 class="text-center question_head pt-3">A1. What are the top 3 reasons for you to consider a vacuum cleaner purchase?</h2>
          			<div class="row mt-3">
						<div class="row mt-2">
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-1[]" data-id="question_1" value="Need for Cleaning during festive season" id="Quiz1-01" type="checkbox" name="Question-1[]" style="display: none;"/>
            						<label class="cbx" for="Quiz1-01">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Need for Cleaning during festive season</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-1[]" data-id="question_1" id="Quiz1-02" value="As a back-up in the absence of maid" type="checkbox" name="Question-1[]" style="display: none;"/>
            						<label class="cbx" for="Quiz1-02">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">As a back-up in the absence of maid</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-1[]" data-id="question_1" id="Quiz1-03" value="Saw vacuum cleaner at a friend’s / family’s home" type="checkbox" name="Question-1[]" style="display: none;"/>
            						<label class="cbx" for="Quiz1-03">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Saw vacuum cleaner at a friend’s / family’s home</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-1[]" value="Have a pet at home" data-id="question_1" id="Quiz1-04" type="checkbox" name="Question-1[]" style="display: none;"/>
            						<label class="cbx" for="Quiz1-04">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Have a pet at home</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-1[]" value="Maid doesn’t clean properly" data-id="question_1" id="Quiz1-05" type="checkbox" name="Question-1[]" style="display: none;"/>
            						<label class="cbx" for="Quiz1-05">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Maid doesn’t clean properly</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-1[]" data-id="question_1" id="Quiz1-06" type="checkbox" name="Question-1[]" value="For deep cleaning / top-up cleaning of the house" style="display: none;"/>
            						<label class="cbx" for="Quiz1-06">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">For deep cleaning / top-up cleaning of the house</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-1[]" data-id="question_1" id="Quiz1-07" type="checkbox" name="Question-1[]" value="For car cleaning" style="display: none;"/>
            						<label class="cbx" for="Quiz1-07">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">For car cleaning</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					
        																
      					</div><!-- row -->
            		</div><!-- row -->
								
					<input type="hidden" name="questions[]" id="ques_1" value="" />
					<input type="hidden" name="answers[]" id="ans_1" value="" />
					<input type="hidden" name="ques_1" value="What are the top 3 reasons for you to consider a vacuum cleaner purchase?">
				
					<div class="text-center mt-5">
						
						
						
						<button class="btn_blue_color btn_small next" q-id="question_1" rel="What are the top 3 reasons for you to consider a vacuum cleaner purchase" data-id="1" questionType="2">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A2. Please tell us where did you become aware of the Vacuum cleaner?</h2>
          			<div class="row mt-3">
						<div class="row mt-2">
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-2[]" data-id="question_2" value="Saw advertisement on television" id="Quiz2-01" type="checkbox" name="Question-2[]" style="display: none;"/>
            						<label class="cbx" for="Quiz2-01">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Saw advertisement on television</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-2[]" data-id="question_2" id="Quiz2-02" value="Saw advertisement in newspaper  /magazine" type="checkbox" name="Question-2[]" style="display: none;"/>
            						<label class="cbx" for="Quiz2-02">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Saw advertisement in newspaper  /magazine</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-2[]" data-id="question_2" id="Quiz2-03" value="Was informed to me by salesperson at the store" type="checkbox" name="Question-2[]" style="display: none;"/>
            						<label class="cbx" for="Quiz2-03">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Was informed to me by salesperson at the store</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-2[]" value="Saw advertisement on social media" data-id="question_2" id="Quiz2-04" type="checkbox" name="Question-2[]" style="display: none;"/>
            						<label class="cbx" for="Quiz2-04">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Saw advertisement on social media</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-2[]" value="Saw vacuum cleaners while researching on the internet" data-id="question_2" id="Quiz2-05" type="checkbox" name="Question-2[]" style="display: none;"/>
            						<label class="cbx" for="Quiz2-05">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Saw vacuum cleaners while researching on the internet</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-2[]" data-id="question_2" id="Quiz2-06" type="checkbox" name="Question-2[]" value="Friend / Family told me about it" style="display: none;"/>
            						<label class="cbx" for="Quiz2-06">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Friend / Family told me about it</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-2[]" data-id="question_2" id="Quiz2-07" type="checkbox" name="Question-2[]" value="Have used it in the past" style="display: none;"/>
            						<label class="cbx" for="Quiz2-07">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Have used it in the past</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-2[]" data-id="question_2" id="Quiz2-08" type="checkbox" name="Question-2[]" value="Eureka Forbes salesman came to house and did a demo" style="display: none;"/>
            						<label class="cbx" for="Quiz2-08">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Eureka Forbes salesman came to house and did a demo</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					
        																
      					</div><!-- row -->
            		</div><!-- row -->
								
					<input type="hidden" name="questions[]" id="ques_2" value="" />
					<input type="hidden" name="answers[]" id="ans_2" value="" />
					<input type="hidden" name="ques_2" value="Please tell us where did you become aware of the Vacuum cleaner?">
				
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_3" rel="Please tell us where did you become aware of the Vacuum cleaner?" data-id="2">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_3" rel="Please tell us where did you become aware of the Vacuum cleaner?" data-id="2" questionType="2">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A3. What format of Vacuum Cleaner are you considering?</h2>
          			<div class="row mt-3">
						
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="A" id="Quiz3-01" type="radio" name="Question-3" value="Handheld" style="display: none;"/>
										<label class="cbx" for="Quiz3-01">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Handheld</span>      
										</label>
									</div>
								</div>
								
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="B" id="Quiz3-02" type="radio" name="Question-3" value="Canister (dry cleaner)" style="display: none;"/>
										<label class="cbx" for="Quiz3-02">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Canister (dry cleaner)</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="C" id="Quiz3-03" type="radio" name="Question-3" value="Wet and dry" style="display: none;"/>
										<label class="cbx" for="Quiz3-03">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Wet and dry</span>       
										</label>
									</div>
								</div><!-- col -->
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="D" id="Quiz3-04" type="radio" name="Question-3" value="Robotic" style="display: none;"/>
										<label class="cbx" for="Quiz3-04">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Robotic</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="E" id="Quiz3-05" type="radio" name="Question-3" value="Upright" style="display: none;"/>
										<label class="cbx" for="Quiz3-05">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Upright</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="F" id="Quiz3-06" type="radio" name="Question-3" value="Not Aware of different formats" style="display: none;"/>
										<label class="cbx" for="Quiz3-06">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Not Aware of different formats</span>       
										</label>
									</div>
								</div><!-- col -->
						<input type="hidden" name="questions[]" id="ques_3" value="" />
						<input type="hidden" name="answers[]" id="ans_3" value="" />
						<input type="hidden" name="ques_3" value="What format of Vacuum Cleaner are you considering?">
						
            		</div><!-- row -->
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_3" rel="What format of Vacuum Cleaner are you considering?" data-id="3">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_3" rel="What format of Vacuum Cleaner are you considering?" data-id="3" questionType="0">Next</button>
						  
            		</div>
        		</div>
				
				

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A4. Please tell us your reasons for choosing the particular format over another format available?</h2>
          			<div class="row mt-3">
          				<div class="col-md-12 mt-3">
							<div class="quiz_check_row">
								
								<textarea class="form-control textarea_feild" rows="4" id="openBox4-01" name="openbox-4"></textarea>
							</div>
						</div>
          			</div>
								
					<input type="hidden" name="questions[]" id="ques_4" value="" />
					<input type="hidden" name="answers[]" id="ans_4" value="" />
					<input type="hidden" name="ques_4" value="Please tell us your reasons for choosing the particular format over another format available?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_4" rel="Please tell us your reasons for choosing the particular format over another format available" data-id="4">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_4" rel="Please tell us your reasons for choosing the particular format over another format available" data-id="4" questionType="1">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A5. What are the top 3 reasons that made you choose Eureka Forbes Vacuum Cleaner above other brands?</h2>
          			<div class="row mt-3">
						<div class="row mt-2">
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="It is a trusted and well-known brand" id="Quiz5-01" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-01">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">It is a trusted and well-known brand</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Is a leader in Vacuum Cleaners" id="Quiz5-02" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-02">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Is a leader in Vacuum Cleaners</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="My friends and family recommended this brand to me" id="Quiz5-03" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-03">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">My friends and family recommended this brand to me</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Eureka Forbes Vacuum Cleaners are of good quality" id="Quiz5-04" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-04">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Eureka Forbes Vacuum Cleaners are of good quality</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="It is value for money" id="Quiz5-05" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-05">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">It is value for money</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Provide good after-sale service" id="Quiz5-06" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-06">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Provide good after-sale service</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Eureka Forbes Products are long lasting" id="Quiz5-07" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-07">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Eureka Forbes Products are long lasting</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Their Products have the latest technology" id="Quiz5-08" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-08">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Their Products have the latest technology</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Their Products match international standards"  id="Quiz5-09" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-09">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Their Products match international standards</span>      
            						</label>
          						</div>
        					</div><!-- col -->

        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Products are suited for Indian homes" id="Quiz5-10" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-10">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Products are suited for Indian homes</span>      
            						</label>
          						</div>
        					</div><!-- col -->

        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Others (Please specify)" id="Quiz5-11" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-11">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Others (Please specify)</span>      
            						</label>
          						</div>
        					</div><!-- col -->

        					<div class=" col-md-12 mt-3 openboxspeficy5" style="display:none;">
          						<div class="quiz_check_row">
            						<textarea class="form-control textarea_feild" rows="4" id="openBoxSpecify5-01" name="openboxspecify-5"></textarea>
          						</div>
        					</div><!-- col -->
        																
      					</div><!-- row -->
            		</div><!-- row -->
								
					<input type="hidden" name="questions[]" id="ques_5" value="" />
					<input type="hidden" name="answers[]" id="ans_5" value="" />
					<input type="hidden" name="ques_5" value="What are the top 3 reasons that made you choose Eureka Forbes Vacuum Cleaner above other brands?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_5" rel="What are the top 3 reasons that made you choose Eureka Forbes Vacuum Cleaner above other brands?" data-id="5">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_5" rel="What are the top 3 reasons that made you choose Eureka Forbes Vacuum Cleaner above other brands?" data-id="5" questionType="2">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A6. Please describe Eureka Forbes Vacuum Cleaners in One word?</h2>
          			<div class="row mt-3">
          				<div class="col-md-12 mt-3">
							<div class="quiz_check_row">
								
								<textarea class="form-control textarea_feild" rows="4" id="openBox6-01" name="openbox-6"></textarea>
							</div>
						</div>
          			</div>
          			<input type="hidden" name="questions[]" id="ques_6" value="" />
					<input type="hidden" name="answers[]" id="ans_6" value="" />
					<input type="hidden" name="ques_6" value="Please describe Eureka Forbes Vacuum Cleaners in One word?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_6" rel="Please describe Eureka Forbes Vacuum Cleaners in One word?" data-id="6">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_6" rel="Please describe Eureka Forbes Vacuum Cleaners in One word?" data-id="6" questionType="1">Next</button>
						  
	        		</div>
          		</div>

          		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A7. Any feedback for Eureka Forbes Vacuum Cleaners?</h2>
          			<div class="row mt-3">
          				<div class="col-md-12 mt-3">
							<div class="quiz_check_row">
								
								<textarea class="form-control textarea_feild" rows="4" id="openBox7-01" name="openbox-7"></textarea>
							</div>
						</div>
          			</div>
          			<input type="hidden" name="questions[]" id="ques_7" value="" />
					<input type="hidden" name="answers[]" id="ans_7" value="" />
					
					<input type="hidden" name="ques_7" value="Any feedback for Eureka Forbes Vacuum Cleaners?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_7" rel="Any feedback for Eureka Forbes Vacuum Cleaners?" data-id="7">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_7" rel="Any feedback for Eureka Forbes Vacuum Cleaners?" data-id="7" questionType="1">Submit</button>
						  
	        		</div>
          		</div>
				
				<div class="form-container animated thankyou" style="display: none;">
          			<div class="thankyou_page">   
            			<div class="thankyou_content">         
              				<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                				<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                				<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
              				</svg>
              				<!-- <h1>Thank You!</h1> -->
              				<p>THANK YOU FOR FILLING THE SURVEY FORM</p>		
              				<button class="btn_blue_color btnRedirectHome">Go to home page</button>
            			</div>
          			</div>
         		</div>
			</div>
			<?php echo form_close(); ?>
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
	var ShowQues = [];
	var speficy = 1;
	
	$(".submit").on("click", function(){
	return false; 
	});

	$(".steps li:nth-of-type(1)").addClass("active");
	$(".myContainer .form-container:nth-of-type(1)").addClass("active");

	$(".form-container").on("click", ".next", function() { 
		var quesTxt = $(this).attr('rel');
		
		var quesCnt = $(this).attr('data-id');

		var questionNumber = $(this).attr('q-id');

		var questionType = $(this).attr('questionType');
		if(questionType==0)
		{

		
			if($("input:radio[name='Question-"+quesCnt+"']").is(":checked")) {

				var ansTxt = $("input:radio[name='Question-"+quesCnt+"']:checked").parent().text();
				var ansVal = $("input:radio[name='Question-"+quesCnt+"']:checked").attr('data-id');
				
				
					$('#ques_'+quesCnt).val(quesTxt);
					questions.push(quesTxt);
					$('#ans_'+quesCnt).val(ansTxt);
					answers.push(ansTxt);
					
					finalQuestionsAnswers[quesTxt] = ansTxt;
					
					
					clickCnt++;
					
					flg = 1;
					$('.error_message').html('');
					$('.alert').fadeOut();
				
					
			}else{
				flg = 0;
				$('.error_message').html('').html('Please select one option.');
				$('.alert').fadeIn();

			}
		}else if(questionType==2){
			
			
			    //do something
			    if(quesCnt==1 || quesCnt==5)
			    {
			    
				    var checkedLgth = $("input[name='Question-"+quesCnt+"[]']:checked").length;
				    
				    

				    if(checkedLgth==3)
				    {
				    	//finalQuestionsAnswers.quesTxt = [];
				    	var ct = 1;

				    	$("input[name='Question-"+quesCnt+"[]']").each(function() {
							if($(this).prop("checked"))
						   	{
						   		var ansTxt = $(this).parent().text();
						   		var ansid = $(this).attr('id');
						   		if(ansid=='Quiz5-11' && quesCnt==5)
						   		{
						   			speficy = 0;
						   			$('.openboxspeficy5').fadeIn();
						   		}else{
						   			speficy = 1;
						   			$('.openboxspeficy5').fadeOut();
						   		}
						   		finalQuestionsAnswers[quesTxt+'_'+ct] = ansTxt;
						   		ct++;
						   		//finalQuestionsAnswers.quesTxt.push[{"attribute": ansTxt}];
						   	}
						   
						   // Do something with is_checked
						});
				    	flg = 1;
				    	$('.error_message').html('');
						$('.alert').fadeOut();
						if(speficy==1){
							clickCnt++;
						}
						
				    }else if(checkedLgth > 3){
				    	flg = 0;
						$('.error_message').html('').html('Please check only 3 option.');
						$('.alert').fadeIn();
				    }else{
				    	flg = 0;
						$('.error_message').html('').html('Please check  3 option.');
						$('.alert').fadeIn();
				    }
				}else{
					var checkedLgth = $("input[name='Question-"+quesCnt+"[]']:checked").length;
					var ct = 1;
					if(checkedLgth >= 1)
				    {
				    	$("input[name='Question-"+quesCnt+"[]']").each(function(idx, elem) {
							if($(this).prop("checked"))
						   	{
						   		var ansTxt = $(this).parent().text();
						   		
						   		finalQuestionsAnswers[quesTxt+'_'+ct] = ansTxt;
						   		ct++;
						   		//finalQuestionsAnswers.quesTxt.push[{"attribute": ansTxt}];
						   	}
						   
						   // Do something with is_checked
						});
				    	flg = 1;
				    	$('.error_message').html('');
						$('.alert').fadeOut();
						clickCnt++;
						
					}else{
						flg = 0;
						$('.error_message').html('').html('Please check option.');
						$('.alert').fadeIn();
					}
				}
				if(speficy==0 && quesCnt==5)
				{
					
					var openBoxVal = $('#openBoxSpecify'+quesCnt+'-01').val();
			
					if(!$.trim($('#openBoxSpecify'+quesCnt+'-01').val()))
					{
						flg = 0;
						$('.error_message').html('').html('Please enter answer.');
						$('.alert').fadeIn();
					}else{
						
						finalQuestionsAnswers[quesTxt] = openBoxVal;
						
						//finalQuestionsAnswers.push({quesTxt:openBoxVal});
						clickCnt = 5;
						flg = 1;
						$('.error_message').html('');
						$('.alert').fadeOut();
					}
				}

			
		}
		else{
			if(quesCnt==6 || quesCnt==7)
			{
				finalQuestionsAnswers[quesTxt] = openBoxVal;
					
					//finalQuestionsAnswers.push({quesTxt:openBoxVal});
				clickCnt++;
				
				flg = 1;
				$('.error_message').html('');
				$('.alert').fadeOut();
			}else{


				var openBoxVal = $('#openBox'+quesCnt+'-01').val();
				
				if(!$.trim($('#openBox'+quesCnt+'-01').val()))
				{
					flg = 0;
					$('.error_message').html('').html('Please enter answer.');
					$('.alert').fadeIn();
				}else{
					
					finalQuestionsAnswers[quesTxt] = openBoxVal;
					
					//finalQuestionsAnswers.push({quesTxt:openBoxVal});
					clickCnt++;
					
					flg = 1;
					$('.error_message').html('');
					$('.alert').fadeOut();
				}
			}
		}
		if(clickCnt<=7 && flg==1)
		{
			
			$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 1).addClass("active");
			$(this).parents(".form-container").removeClass("active").next().addClass("active fadeIn"); 	
			console.log('clickCnt==>'+clickCnt);
			
			if(clickCnt==7)
			{
				$('#finalAnswers').val(JSON.stringify( finalQuestionsAnswers ));
				$.ajax({
                url:b_url+'home/custvaccumAnswer',
                method:'POST',
                dataType:'json',
                //data:{'questions':questions,'answers':answers,'finalAnswers':finalQuestionsAnswers},
                data:$('#frm_vaccum').serialize(),
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

	$('.btnRedirectHome').on('click',function(){
		window.location.href=b_url+'home/logout';
	});
	var searchIDs = [];
	var dataID = '';
	var txtChange = '';
	var txt = 1;
	$('.chk').on('click',function(){
		var inputId = $(this).attr('data-id');
		var inputRel = $(this).attr('rel');
		var inputchkID = $(this).attr('id');
		console.log();
		if(dataID !='')
		{
			if(dataID==inputId)
			{
				if ($(this).prop('checked')==true){ 
		        	searchIDs.push($(this).val());
		        	txtChange = $(this).parent().text();
		        	$(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        	if(inputchkID=='Quiz5-11')
		        	{
		        		$('.openboxspeficy5').fadeIn();
		        	}
		        	txt++;
			    }else{
			    	var x = searchIDs.indexOf($(this).val());
		       		searchIDs.splice(x,1);
		       		txtChange = $.trim($(this).parent().text());
		       		$(this).parent().find('span.quiz_title').text(txtChange.substr(3));
		       		updatesquense($(this),searchIDs);
		        	txt--;
		        	if(inputchkID=='Quiz5-11')
		        	{
		        		$('.openboxspeficy5').fadeOut();
		        	}
			    }
			}else{
				searchIDs = [];
				txt = 1;

				if ($(this).prop('checked')==true){ 
		        	searchIDs.push($(this).val());
		        	txtChange = $(this).parent().text();
		        	$(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        	txt++;
		        	if(inputchkID=='Quiz5-11')
		        	{
		        		$('.openboxspeficy5').fadeIn();
		        	}
			    }else{
			    	var x = searchIDs.indexOf($(this).val());
		       		searchIDs.splice(x,1);
		       		txtChange = $.trim($(this).parent().text());
		        	$(this).parent().find('span.quiz_title').text(txtChange.substr(3));
		        	updatesquense($(this),searchIDs);
		        	txt--;
		        	if(inputchkID=='Quiz5-11')
		        	{
		        		$('.openboxspeficy5').fadeIn();
		        	}else{
		        		$('.openboxspeficy5').fadeOut();
		        	}
			    }
			    dataID = inputId;
			}
		}else{
			if ($(this).prop('checked')==true){ 
	        	searchIDs.push($(this).val());
	        	txtChange = $(this).parent().text();
		        $(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        txt++;
		        if(inputchkID=='Quiz5-11')
	        	{
	        		$('.openboxspeficy5').fadeIn();
	        	}
		    }else{
		    	var x = searchIDs.indexOf($(this).val());
	       		searchIDs.splice(x,1);
	       		txtChange = $.trim($(this).parent().text());

		        $(this).parent().find('span.quiz_title').text(txtChange.substr(3));
		        updatesquense($(this),searchIDs);
		        txt--;
		        if(inputchkID=='Quiz5-11')
	        	{
	        		$('.openboxspeficy5').fadeIn();
	        	}else{
	        		$('.openboxspeficy5').fadeOut();
	        	}
		    }
		    dataID = inputId;
		}
		
		
	    
	    $('#selected_'+inputId).val(JSON.stringify( searchIDs ));
	});

	function updatesquense(data,selected)
	{
		var questionName = data.attr('rel');
		var cnt  =1;
		$("input[name='"+questionName+"']:checked").each(function() {
			txtChange = $.trim($(this).parent().text());
			var convertTxt = $.trim(txtChange.substr(3));
			var x = selected.indexOf($(this).val());
			
			cnt = parseInt(x) + parseInt(1); 
			if(selected[x]==convertTxt)
			{
				$(this).parent().find('span.quiz_title').text(cnt+'. '+txtChange.substr(3));	
			}
		    
		    //cnt++;
		});
	}
</script>