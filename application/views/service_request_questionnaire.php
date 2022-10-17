<div class="content container-fluid pb-3 mt-5"> 
	<div class="white_box">
		<div class="title text-center">
			<h1>Question</h1>
		</div>
    	<div class="form-wizard">  
      		<div class="steps steps_dott_row">
        		<ul class="steps_dott_list">
					<?php 
						for ($i=0; $i<9 ; $i++) { 
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
        	<?php echo form_open('',array('id' => 'frm_service', 'class'=> '', 'role'=>'form', 'autocomplete' => "off",'onSubmit'=>"return false;")) ?>
            <input type="hidden" name="firstAns" id="firstAns" value="" />
            <input type="hidden" name="secondAns" id="secondAns" value="" />
            
            <input type="hidden" name="selected_question_4" id="selected_question_4" value="" />
            <input type="hidden" name="selected_question_5" id="selected_question_5" value="" />
            <input type="hidden" name="finalAnswers" id="finalAnswers" value="" />
			<div class="myContainer">
				
			
				
        		<div class="form-container animated active">
          			<h2 class="text-center question_head pt-3">A1. What type of service was availed?</h2>
          			<div class="row mt-3">
						
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="A" id="Quiz1-01" type="radio" name="Question-1" value="Complaint" style="display: none;"/>
										<label class="cbx" for="Quiz1-01">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Complaint</span>      
										</label>
									</div>
								</div>
								
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="B" id="Quiz1-02" type="radio" name="Question-1" value="Renewal/ Purchase of AMC" style="display: none;"/>
										<label class="cbx" for="Quiz1-02">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Renewal/ Purchase of AMC</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="C" id="Quiz1-03" type="radio" name="Question-1" value="Regular (Mandatory) Service" style="display: none;"/>
										<label class="cbx" for="Quiz1-03">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Regular (Mandatory) Service</span>       
										</label>
									</div>
								</div><!-- col -->
								
						
						
						<input type="hidden" name="questions[]" id="ques_1" value="" />
						<input type="hidden" name="answers[]" id="ans_1" value="" />
						<input type="hidden" name="ques_1" value="What type of service was availed?" />
						
            		</div><!-- row -->
					<div class="text-center mt-5">
						
						
						
						<button class="btn_blue_color btn_small next" q-id="question_1" rel="What type of service was availed?" data-id="1" questionType="0">Next</button>
						  
            		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A2. What is your preferred mode of placing a service request?</h2>
          			<div class="row mt-3">
						
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="A" id="Quiz2-01" type="radio" name="Question-2" value="Call Aquaguard helpline number" style="display: none;"/>
										<label class="cbx" for="Quiz2-01">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Call Aquaguard helpline number</span>      
										</label>
									</div>
								</div>
								
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="B" id="Quiz2-02" type="radio" name="Question-2" value="Fill form on website" style="display: none;"/>
										<label class="cbx" for="Quiz2-02">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Fill form on website</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="C" id="Quiz2-03" type="radio" name="Question-2" value="Call the salesperson who sold me the Aquaguard" style="display: none;"/>
										<label class="cbx" for="Quiz2-03">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Call the salesperson who sold me the Aquaguard</span>       
										</label>
									</div>
								</div><!-- col -->
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="D" id="Quiz2-04" type="radio" name="Question-2" value="Call my regular service technician" style="display: none;"/>
										<label class="cbx" for="Quiz2-04">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Call my regular service technician</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="E" id="Quiz2-05" type="radio" name="Question-2" value="Eureka Forbes Service APP" style="display: none;"/>
										<label class="cbx" for="Quiz2-05">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Eureka Forbes Service APP</span>       
										</label>
									</div>
								</div><!-- col -->
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="F" id="Quiz2-06" type="radio" name="Question-2" value="Whatsapp" style="display: none;"/>
										<label class="cbx" for="Quiz2-06">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Whatsapp</span>       
										</label>
									</div>
								</div><!-- col -->
						<input type="hidden" name="questions[]" id="ques_2" value="" />
						<input type="hidden" name="answers[]" id="ans_2" value="" />
						<input type="hidden" name="ques_2" value="What is your preferred mode of placing a service request?">
						
            		</div><!-- row -->
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_2" rel="What is your preferred mode of placing a service request?" data-id="2">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_2" rel="What is your preferred mode of placing a service request?" data-id="2" questionType="0">Next</button>
						  
            		</div>
        		</div>
				
				<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A3. Do you have an existing AMC?</h2>
          			<div class="row mt-3">
						<div class="row mt-2">
        					<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="A" id="Quiz3-01" type="radio" name="Question-3" value="Yes" style="display: none;"/>
										<label class="cbx" for="Quiz3-01">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Yes</span>      
										</label>
									</div>
								</div>
								
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="B" id="Quiz3-02" type="radio" name="Question-3" value="Fill form on website" style="display: none;"/>
										<label class="cbx" for="Quiz3-02">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">No</span>       
										</label>
									</div>
								</div><!-- col -->
        					
        																
      					</div><!-- row -->
            		</div><!-- row -->
								
					<input type="hidden" name="questions[]" id="ques_3" value="" />
					<input type="hidden" name="answers[]" id="ans_3" value="" />
					<input type="hidden" name="ques_3" value="Do you have an existing AMC?">
				
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_3" rel="Do you have an existing AMC?" data-id="3">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_3" rel="Do you have an existing AMC?" data-id="3" questionType="0">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A4. If you have an existing AMC. What are the top 3 reasons for considering Aquaguard AMC?</h2>
          			<div class="row mt-3">
						<div class="row mt-2">
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="I prefer company owned AMC" id="Quiz4-01" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-01">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">I prefer company owned AMC</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Trust Aquaguard for service" id="Quiz4-02" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-02">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Trust Aquaguard for service</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="I get genuine spare parts with AMC" id="Quiz4-03" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-03">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">I get genuine spare parts with AMC</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Technician recommended it to me" id="Quiz4-04" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-04">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Technician recommended it to me</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Recommended by friends / family" id="Quiz4-05" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-05">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Recommended by friends / family</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Aquaguard service is fast" id="Quiz4-06" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-06">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Aquaguard service is fast</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Aquaguard service quality is good" id="Quiz4-07" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-07">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Aquaguard service quality is good</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Don’t like calling unknown people in the house" id="Quiz4-08" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-08">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Don’t like calling unknown people in the house</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Complete peace of mind" id="Quiz4-09" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-09">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Complete peace of mind</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        																
      					</div><!-- row -->
            		</div><!-- row -->
								
					<input type="hidden" name="questions[]" id="ques_4" value="" />
					<input type="hidden" name="answers[]" id="ans_4" value="" />
					<input type="hidden" name="ques_4" value="If you have an existing AMC. What are the top 3 reasons for considering Aquaguard AMC?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_4" rel="If you have an existing AMC. What are the top 3 reasons for considering Aquaguard AMC?" data-id="4">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_4" rel="If you have an existing AMC. What are the top 3 reasons for considering Aquaguard AMC?" data-id="4" questionType="2">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A5. If you don’t have an existing AMC. What are the top 3 reasons for not considering Aquaguard AMC?</h2>
          			<div class="row mt-3">
						<div class="row mt-2">
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Expensive" id="Quiz5-01" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-01">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Expensive</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="I don’t feel the need of servicing my Aquaguard" id="Quiz5-02" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-02">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">I don’t feel the need of servicing my Aquaguard</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="I will service only when it breaks down" id="Quiz5-03" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-03">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">I will service only when it breaks down</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Local technician / retailer does it faster in my area" id="Quiz5-04" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-04">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Local technician / retailer does it faster in my area </span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Getting it a cheaper cost from a local service provider" id="Quiz5-05" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-05">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Getting it a cheaper cost from a local service provider</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="I will purchase AMC later" id="Quiz5-06" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-06">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">I will purchase AMC later</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Friends/ family recommended local service person" id="Quiz5-07" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-07">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Friends/ family recommended local service person</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-5[]" data-id="question_5" value="Any other (please specify)" id="Quiz5-08" type="checkbox" name="Question-5[]" style="display: none;"/>
            						<label class="cbx" for="Quiz5-08">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Any other (please specify)</span>      
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
					<input type="hidden" name="ques_5" value="If you don’t have an existing AMC. What are the top 3 reasons for not considering Aquaguard AMC?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_5" rel="If you don’t have an existing AMC. What are the top 3 reasons for not considering Aquaguard AMC?" data-id="5">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_5" rel="If you don’t have an existing AMC. What are the top 3 reasons for not considering Aquaguard AMC?" data-id="5" questionType="2">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A6. Ideally how many times in a year should the purifier be serviced?</h2>
          			<div class="row mt-3">
          				<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx rdo" data-id="A" id="Quiz6-01" type="radio" name="Question-6" value="None" style="display: none;"/>
								<label class="cbx" for="Quiz6-01">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">None</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx rdo" data-id="B" id="Quiz6-02" type="radio" name="Question-6" value="Once a year" style="display: none;"/>
								<label class="cbx" for="Quiz6-02">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Once a year</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row ">
								<input class="inp-cbx rdo" data-id="C" id="Quiz6-03" type="radio" name="Question-6" value="Twice a year" style="display: none;"/>
								<label class="cbx" for="Quiz6-03">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Twice a year</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx rdo" data-id="D" id="Quiz6-04" type="radio" name="Question-6" value="3 Times a year" style="display: none;"/>
								<label class="cbx" for="Quiz6-04">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">3 Times a year</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx rdo" data-id="E" id="Quiz6-05" type="radio" name="Question-6" value="4 times a year" style="display: none;"/>
								<label class="cbx" for="Quiz6-05">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">4 times a year</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx rdo" data-id="F" id="Quiz6-06" type="radio" name="Question-6" value="Any other please specify" style="display: none;"/>
								<label class="cbx" for="Quiz6-06">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Any other please specify</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class=" col-md-12 mt-3 openboxspeficy6" style="display:none;">
          						<div class="quiz_check_row">
            						<textarea class="form-control textarea_feild" rows="4" id="openBoxSpecify6-01" name="openboxspecify-6"></textarea>
          						</div>
        					</div><!-- col -->
          			</div>
          			<input type="hidden" name="questions[]" id="ques_6" value="" />
					<input type="hidden" name="answers[]" id="ans_6" value="" />
					<input type="hidden" name="ques_6" value="Ideally how many times in a year should the purifier be serviced?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_6" rel="Ideally how many times in a year should the purifier be serviced?" data-id="6">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_6" rel="Ideally how many times in a year should the purifier be serviced?" data-id="6" questionType="0">Next</button>
						  
	        		</div>
          		</div>

          		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A7. How long are you ready to wait for the actual service after you have placed a service request?</h2>
          			<div class="row mt-3">
          				<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="A" id="Quiz7-01" type="radio" name="Question-7" value="less than 2 hours" style="display: none;"/>
								<label class="cbx" for="Quiz7-01">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">less than 2 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="B" id="Quiz7-02" type="radio" name="Question-7" value="2 - 6 hours" style="display: none;"/>
								<label class="cbx" for="Quiz7-02">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">2 - 6 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="C" id="Quiz7-03" type="radio" name="Question-7" value="6 - 12 hours" style="display: none;"/>
								<label class="cbx" for="Quiz7-03">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">6 - 12 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="D" id="Quiz7-04" type="radio" name="Question-7" value="12 - 24 hours" style="display: none;"/>
								<label class="cbx" for="Quiz7-04">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">12 - 24 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="E" id="Quiz7-05" type="radio" name="Question-7" value="24 - 48 hours" style="display: none;"/>
								<label class="cbx" for="Quiz7-05">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">24 - 48 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="F" id="Quiz7-06" type="radio" name="Question-7" value="more than 48 hours" style="display: none;"/>
								<label class="cbx" for="Quiz7-06">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">more than 48 hours</span>       
								</label>
							</div>
						</div><!-- col -->
          			</div>
          			<input type="hidden" name="questions[]" id="ques_7" value="" />
					<input type="hidden" name="answers[]" id="ans_7" value="" />
					
					<input type="hidden" name="ques_7" value="How long are you ready to wait for the actual service after you have placed a service request?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_7" rel="How long are you ready to wait for the actual service after you have placed a service request?" data-id="7">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_7" rel="How long are you ready to wait for the actual service after you have placed a service request?" data-id="7" questionType="0">Next</button>
						  
	        		</div>
          		</div>

          		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A8. How would you rate Aquaguard service?</h2>
          			<div class="row mt-3">
          				<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="A" id="Quiz8-01" type="radio" name="Question-8" value="Poor" style="display: none;"/>
								<label class="cbx" for="Quiz8-01">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Poor</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="B" id="Quiz8-02" type="radio" name="Question-8" value="Fair" style="display: none;"/>
								<label class="cbx" for="Quiz8-02">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Fair</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="C" id="Quiz8-03" type="radio" name="Question-8" value="Good" style="display: none;"/>
								<label class="cbx" for="Quiz8-03">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Good</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="D" id="Quiz8-04" type="radio" name="Question-8" value="Very Good" style="display: none;"/>
								<label class="cbx" for="Quiz8-04">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Very Good</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="E" id="Quiz8-05" type="radio" name="Question-8" value="Excellent" style="display: none;"/>
								<label class="cbx" for="Quiz8-05">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Excellent</span>       
								</label>
							</div>
						</div><!-- col -->

          			</div>
          			<input type="hidden" name="questions[]" id="ques_8" value="" />
					<input type="hidden" name="answers[]" id="ans_8" value="" />
					
					<input type="hidden" name="ques_8" value="How would you rate Aquaguard service?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_8" rel="How would you rate Aquaguard service?" data-id="8">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_8" rel="How would you rate Aquaguard service?" data-id="8" questionType="0">Next</button>
						  
	        		</div>
          		</div>

          		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A9. What is the one thing you would like to change in our service experience?</h2>
          			<div class="row mt-3">
          				<div class="col-md-12 mt-3">
							<div class="quiz_check_row">
								
								<textarea class="form-control textarea_feild" rows="4" id="openBox9-01" name="openbox-9"></textarea>
							</div>
						</div>
          			</div>
          			<input type="hidden" name="questions[]" id="ques_9" value="" />
					<input type="hidden" name="answers[]" id="ans_9" value="" />
					
					<input type="hidden" name="ques_9" value="What is the one thing you would like to change in our service experience?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_9" rel="What is the one thing you would like to change in our service experience?" data-id="9">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_9" rel="What is the one thing you would like to change in our service experience?" data-id="9" questionType="1">Submit</button>
						  
	        		</div>
          		</div>
				
				<div class="form-container animated thankyou" style="display: none;">
          			<div class="thankyou_page">   
            			<div class="thankyou_content">         
              				<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                				<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                				<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
              				</svg>
              				
              				<p>THANK YOU FOR FILLING THE SURVEY FORM.</p>		
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

		console.log('quesCnt==>'+quesCnt);
		if(questionType==0)
		{

		
			if($("input:radio[name='Question-"+quesCnt+"']").is(":checked")) {

				var ansTxt = $("input:radio[name='Question-"+quesCnt+"']:checked").parent().text();
				var ansVal = $("input:radio[name='Question-"+quesCnt+"']:checked").attr('data-id');
				if(quesCnt==3 && ansVal=='A')
				{
					$('#firstAns').val(ansVal);
				}else if(quesCnt==3 && ansVal!='A'){
					$('#firstAns').val(ansVal);
				}else{
					$('#firstAns').val();
				}

				if(quesCnt==6)
				{
					var radioID = $("input:radio[name='Question-"+quesCnt+"']:checked").attr('id');
					if(radioID=='Quiz6-06')
					{
						speficy = 0;
						$('.openboxspeficy6').fadeIn();
					}else{
						speficy = 1;
						$('.openboxspeficy6').fadeOut();
					}
				}else{
					speficy = 1;
				}

				if(quesCnt==8 && (ansVal=='A' || ansVal=='B'))
				{
					$('#secondAns').val('Y');
				}else{
					$('#secondAns').val('N');
				}
				
				
					$('#ques_'+quesCnt).val(quesTxt);
					questions.push(quesTxt);
					$('#ans_'+quesCnt).val(ansTxt);
					answers.push(ansTxt);
					
					finalQuestionsAnswers[quesTxt] = ansTxt;
					if(speficy==1)
					{
						clickCnt++;	
					}
					
					
					flg = 1;
					$('.error_message').html('');
					$('.alert').fadeOut();
				
					
			}else{
				flg = 0;
				$('.error_message').html('').html('Please select one option.');
				$('.alert').fadeIn();

			}

			if(speficy==0 && quesCnt==6)
			{
				if(quesCnt==6)
				{
					/*finalQuestionsAnswers[quesTxt] = openBoxVal;
						
					//finalQuestionsAnswers.push({quesTxt:openBoxVal});
					//clickCnt = 6;
					clickCnt++;
					flg = 1;
					$('.error_message').html('');
					$('.alert').fadeOut();*/
					var openBoxVal = $('#openBoxSpecify'+quesCnt+'-01').val();
			
					if(!$.trim($('#openBoxSpecify'+quesCnt+'-01').val()))
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
				}else{


					var openBoxVal = $('#openBoxSpecify'+quesCnt+'-01').val();
			
					if(!$.trim($('#openBoxSpecify'+quesCnt+'-01').val()))
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
		}else if(questionType==2){
			
			
			    //do something
			    
			    
			    var checkedLgth = $("input[name='Question-"+quesCnt+"[]']:checked").length;
			    
			    

			    if(checkedLgth==3)
			    {
			    	//finalQuestionsAnswers.quesTxt = [];
			    	var ct = 1;
			    	$("input[name='Question-"+quesCnt+"[]']").each(function(idx, elem) {
						if($(this).prop("checked"))
					   	{
					   		var ansTxt = $(this).parent().text();
					   		var ansid = $(this).attr('id');
					   		if(ansid=='Quiz5-08' && quesCnt==5)
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
		
		if(clickCnt<=9 && flg==1)
		{
			


			var selectedOption = $('#firstAns').val();
			var selectedOption1 = $('#secondAns').val();
			console.log('selectedOption==>'+selectedOption);
			console.log('selectedOption1===>'+selectedOption1);
			console.log('quesCnt===>'+quesCnt);
			if(selectedOption=='A' && quesCnt==4)
			{
				
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 2).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().next().addClass("active fadeIn"); 
				clickCnt = 5;	
				 
			}else if(selectedOption !='A' && quesCnt==3){
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 2).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().next().addClass("active fadeIn"); 
				clickCnt = 4;
			}else if(selectedOption1=='Y'  && quesCnt==8)
			{
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 1).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().addClass("active fadeIn");
			}else if(selectedOption1!='Y' && quesCnt==8)
			{
				/*$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 1).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().addClass("active fadeIn");*/
				clickCnt = 9;
			}else{
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 1).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().addClass("active fadeIn"); 	
			}

			console.log('clickCnt==>'+clickCnt);
			
			if(clickCnt==9)
			{
				$('#finalAnswers').val(JSON.stringify( finalQuestionsAnswers ));
				$.ajax({
	                url:b_url+'home/custserviceAnswer',
	                method:'POST',
	                dataType:'json',
	                //data:{'questions':questions,'answers':answers,'finalAnswers':finalQuestionsAnswers},
	                data:$('#frm_service').serialize(),
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
            	});
			}
		}
	});

	$(".form-container").on("click", ".back", function() {  
		var selectedOption = $('#firstAns').val();
		var selectedOption1 = $('#secondAns').val();
		var quesCnt = $(this).attr('data-id');
		if(selectedOption=='A' && quesCnt==6)
			{
				
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() - 2).addClass("active");
				$(this).parents(".form-container").removeClass("active fadeIn").prev().prev().addClass("active fadeIn");
				 
			}else if(selectedOption!='A' && quesCnt==5)
			{
				
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() - 2).addClass("active");
				$(this).parents(".form-container").removeClass("active fadeIn").prev().prev().addClass("active fadeIn");
			}
			else if(selectedOption1 =='Y' && quesCnt==8){
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() - 1).addClass("active");
				$(this).parents(".form-container").removeClass("active fadeIn").prev().addClass("active fadeIn"); 
			}else{
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() - totalSteps).removeClass("active"); 
  				$(this).parents(".form-container").removeClass("active fadeIn").prev().addClass("active fadeIn"); 
			}
  		
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
		if(dataID !='')
		{
			if(dataID==inputId)
			{
				if ($(this).prop('checked')==true){ 
		        	searchIDs.push($(this).val());
		        	txtChange = $(this).parent().text();
		        	$(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        	if(inputchkID=='Quiz5-08')
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
		       		if(inputchkID=='Quiz5-08')
		        	{
		        		$('.openboxspeficy5').fadeOut();
		        	}
		        	txt--;
			    }
			}else{
				searchIDs = [];
				txt = 1;

				if ($(this).prop('checked')==true){ 
		        	searchIDs.push($(this).val());
		        	txtChange = $(this).parent().text();
		        	$(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        	if(inputchkID=='Quiz5-08')
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
		        	if(inputchkID=='Quiz5-08')
		        	{
		        		$('.openboxspeficy5').fadeIn();
		        	}else{
		        		$('.openboxspeficy5').fadeOut();
		        	}
		        	txt--;
			    }
			    dataID = inputId;
			}
		}else{
			if ($(this).prop('checked')==true){ 
	        	searchIDs.push($(this).val());
	        	txtChange = $(this).parent().text();
		        $(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        if(inputchkID=='Quiz5-08')
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
		        if(inputchkID=='Quiz5-08')
	        	{
	        		$('.openboxspeficy5').fadeIn();
	        	}else{
	        		$('.openboxspeficy5').fadeOut();
	        	}
		        txt--;
		    }
		    dataID = inputId;
		}
		
		
	    
	    $('#selected_'+inputId).val(JSON.stringify( searchIDs ));
	});

	$('.rdo').on('click',function(){
		var inputchkID = $(this).attr('id');
		if ($(this).prop('checked')==true){ 
			if(inputchkID=='Quiz6-06')
			{
				$('.openboxspeficy6').fadeIn();
			}else{
				$('.openboxspeficy6').fadeOut();
			}
		}else{
			if(inputchkID=='Quiz6-06')
			{
				$('.openboxspeficy6').fadeIn();
			}else{
				$('.openboxspeficy6').fadeOut();
			}
		}
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