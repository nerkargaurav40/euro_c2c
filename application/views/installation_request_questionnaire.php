<div class="content container-fluid pb-3 mt-5"> 
	<div class="white_box">
		<div class="title text-center">
			<h1>Question</h1>
		</div>
    	<div class="form-wizard">  
      		<div class="steps steps_dott_row">
        		<ul class="steps_dott_list">
					<?php 
						for ($i=0; $i<8 ; $i++) { 
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
        	<?php echo form_open('',array('id' => 'frm_install', 'class'=> '', 'role'=>'form', 'autocomplete' => "off",'onSubmit'=>"return false;")) ?>
            <input type="hidden" name="firstAns" id="firstAns" value="" />
            <input type="hidden" name="secondAns" id="secondAns" value="" />
            
            <input type="hidden" name="selected_question_4" id="selected_question_4" value="" />
            <input type="hidden" name="selected_question_3" id="selected_question_3" value="" />
            <input type="hidden" name="finalAnswers" id="finalAnswers" value="" />
			<div class="myContainer">
				
			
				
        		<div class="form-container animated active">
          			<h2 class="text-center question_head pt-3">A1. Are you a first-time buyer of Water Purifier product?</h2>
          			<div class="row mt-3">
						
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="A" id="Quiz1-01" type="radio" name="Question-1" value="I am a first-time buyer" style="display: none;"/>
										<label class="cbx" for="Quiz1-01">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">I am a first-time buyer</span>      
										</label>
									</div>
								</div>
								
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="B" id="Quiz1-02" type="radio" name="Question-1" value="I have purchased Electric water purifier before" style="display: none;"/>
										<label class="cbx" for="Quiz1-02">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">I have purchased Electric water purifier before</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="C" id="Quiz1-03" type="radio" name="Question-1" value="I have purchased a non-Electric water purifier before" style="display: none;"/>
										<label class="cbx" for="Quiz1-03">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">I have purchased a non-Electric water purifier before</span>       
										</label>
									</div>
								</div><!-- col -->
								
						
						
						<input type="hidden" name="questions[]" id="ques_1" value="" />
						<input type="hidden" name="answers[]" id="ans_1" value="" />
						<input type="hidden" name="ques_1" value="Are you a first-time buyer of Eureka Forbes’s Water purifier product?" />
						
            		</div><!-- row -->
					<div class="text-center mt-5">
						
						
						
						<button class="btn_blue_color btn_small next" q-id="question_1" rel="Are you a first-time buyer of Eureka Forbes’s Water purifier product?" data-id="1" questionType="0">Next</button>
						  
            		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A2. If you are a first-time buyer, how were you purifying your water before?</h2>
          			<div class="row mt-3">
						
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="A" id="Quiz2-01" type="radio" name="Question-2" value="I was boiling the water before drinking" style="display: none;"/>
										<label class="cbx" for="Quiz2-01">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">I was boiling the water before drinking</span>      
										</label>
									</div>
								</div>
								
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="B" id="Quiz2-02" type="radio" name="Question-2" value="Using Bottled water / Water Cans" style="display: none;"/>
										<label class="cbx" for="Quiz2-02">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Using Bottled water / Water Cans</span>       
										</label>
									</div>
								</div><!-- col -->

								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="C" id="Quiz2-03" type="radio" name="Question-2" value="Filtering using cloth or sieve" style="display: none;"/>
										<label class="cbx" for="Quiz2-03">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Filtering using cloth or sieve</span>       
										</label>
									</div>
								</div><!-- col -->
								<div class="col-md-6 mt-3">
									<div class="quiz_check_row">
										<input class="inp-cbx" data-id="D" id="Quiz2-04" type="radio" name="Question-2" value="Directly from tap" style="display: none;"/>
										<label class="cbx" for="Quiz2-04">
											<span>
												<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
											</span>
											<span class="quiz_title">Directly from tap</span>       
										</label>
									</div>
								</div><!-- col -->

								
						<input type="hidden" name="questions[]" id="ques_2" value="" />
						<input type="hidden" name="answers[]" id="ans_2" value="" />
						<input type="hidden" name="ques_2" value="If you are a first-time buyer, how were you purifying your water before?">
						
            		</div><!-- row -->
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_2" rel="If you are a first-time buyer, how were you purifying your water before?" data-id="2">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_2" rel="If you are a first-time buyer, how were you purifying your water before?" data-id="2" questionType="0">Next</button>
						  
            		</div>
        		</div>
				
				

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A3. What are the top 3 reasons for purchasing water purifier?</h2>
          			<div class="row mt-3">
						<div class="row mt-2">
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Recommended by friend or family" id="Quiz3-01" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-01">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Recommended by friend or family</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Recommended by retail store / salesman" id="Quiz3-02" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-02">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Recommended by retail store / salesman</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Saw ad on television / newspaper" id="Quiz3-03" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-03">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Saw ad on television / newspaper</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row"> 
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Family member fell ill/ to keep family safe from water related diseases" id="Quiz3-04" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-04">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Family member fell ill/ to keep family safe from water related diseases</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Recommended by doctor" id="Quiz3-05" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-05">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Recommended by doctor</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Started receiving Poor quality / dirty water" id="Quiz3-06" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-06">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Started receiving Poor quality / dirty water</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Don’t like the taste of water" id="Quiz3-07" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-07">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Don’t like the taste of water</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Everyone in neighborhood has a water purifier" id="Quiz3-08" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-08">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Everyone in neighborhood has a water purifier</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-3[]" data-id="question_3" value="Birth of a child/ wife expecting a child" id="Quiz3-09" type="checkbox" name="Question-3[]" style="display: none;"/>
            						<label class="cbx" for="Quiz3-09">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Birth of a child/ wife expecting a child</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        																
      					</div><!-- row -->
            		</div><!-- row -->
								
					<input type="hidden" name="questions[]" id="ques_3" value="" />
					<input type="hidden" name="answers[]" id="ans_3" value="" />
					<input type="hidden" name="ques_3" value="What are the top 3 reasons for purchasing water purifier?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_3" rel="What are the top 3 reasons for purchasing water purifier?" data-id="3">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_3" rel="What are the top 3 reasons for purchasing water purifier?" data-id="3" questionType="2">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A4. What are the top 3 reasons for upgrading to a new water purifier?</h2>
          			<div class="row mt-3">
						<div class="row mt-2">
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Purifier was old and was not working" id="Quiz4-01" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-01">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Purifier was old and was not working</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Upgrading it as I upgrade all my gadgets from time to time" id="Quiz4-02" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-02">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Upgrading it as I upgrade all my gadgets from time to time</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="High maintenance cost of old purifier" id="Quiz4-03" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-03">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">High maintenance cost of old purifier</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Service technician advised me to upgrade" id="Quiz4-04" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-04">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Service technician advised me to upgrade</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Needed to change technology from RO to UV" id="Quiz4-05" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-05">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Needed to change technology from RO to UV</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Needed to change technology from UV to RO" id="Quiz4-06" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-06">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Needed to change technology from UV to RO</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Renovating my house or shifting to a new house" id="Quiz4-07" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-07">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Renovating my house or shifting to a new house</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="Needed latest technology like copper, Alkaline, Hot water, stainless steel tank etc." id="Quiz4-08" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-08">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">Needed latest technology like copper, Alkaline, Hot water, stainless steel tank etc.</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					<div class="col-sm-6 col-md-4 mt-3">
          						<div class="quiz_check_row">
            						<input class="inp-cbx chk" rel="Question-4[]" data-id="question_4" value="I was looking for a purifier with water storage option" id="Quiz4-09" type="checkbox" name="Question-4[]" style="display: none;"/>
            						<label class="cbx" for="Quiz4-09">
                						<span>
                  							<svg width="12px" height="9px" viewbox="0 0 12 9">
                    							<polyline points="1 5 4 8 11 1"></polyline>
                  							</svg>
                						</span>
                						<span class="quiz_title">I was looking for a purifier with water storage option</span>      
            						</label>
          						</div>
        					</div><!-- col -->
        					
        																
      					</div><!-- row -->
            		</div><!-- row -->
								
					<input type="hidden" name="questions[]" id="ques_4" value="" />
					<input type="hidden" name="answers[]" id="ans_4" value="" />
					<input type="hidden" name="ques_4" value="What are the top 3 reasons for upgrading to a new water purifier?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_4" rel="What are the top 3 reasons for upgrading to a new water purifier?" data-id="4">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_4" rel="What are the top 3 reasons for upgrading to a new water purifier?" data-id="4" questionType="2">Next</button>
						  
	        		</div>
        		</div>

        		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A5. How long were you using your old Water purifier before purchasing a new one?</h2>
          			<div class="row mt-3">
          				<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="A" id="Quiz5-01" type="radio" name="Question-5" value="less than 3 years" style="display: none;"/>
								<label class="cbx" for="Quiz5-01">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">less than 3 years</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="B" id="Quiz5-02" type="radio" name="Question-5" value="4 to 5 years" style="display: none;"/>
								<label class="cbx" for="Quiz5-02">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">4 to 5 years</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="C" id="Quiz5-03" type="radio" name="Question-5" value="5-7 years" style="display: none;"/>
								<label class="cbx" for="Quiz5-03">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">5-7 years</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="D" id="Quiz5-04" type="radio" name="Question-5" value="7-10 years" style="display: none;"/>
								<label class="cbx" for="Quiz5-04">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">7-10 years</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="E" id="Quiz5-05" type="radio" name="Question-5" value="more than 10 years" style="display: none;"/>
								<label class="cbx" for="Quiz5-05">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">more than 10 years</span>       
								</label>
							</div>
						</div><!-- col -->
						
          			</div>
          			<input type="hidden" name="questions[]" id="ques_5" value="" />
					<input type="hidden" name="answers[]" id="ans_5" value="" />
					<input type="hidden" name="ques_5" value="How long were you using your old Water purifier before purchasing a new one?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_5" rel="How long were you using your old Water purifier before purchasing a new one?" data-id="5">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_6" rel="How long were you using your old Water purifier before purchasing a new one?" data-id="5" questionType="0">Next</button>
						  
	        		</div>
          		</div>

          		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A6. What is a reasonable wait time for installation post-delivery of your product?</h2>
          			<div class="row mt-3">
          				<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="A" id="Quiz6-01" type="radio" name="Question-6" value="less than 2 hours" style="display: none;"/>
								<label class="cbx" for="Quiz6-01">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">less than 2 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="B" id="Quiz6-02" type="radio" name="Question-6" value="2 - 6 hours" style="display: none;"/>
								<label class="cbx" for="Quiz6-02">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">2 - 6 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="C" id="Quiz6-03" type="radio" name="Question-6" value="6 - 12 hours" style="display: none;"/>
								<label class="cbx" for="Quiz6-03">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">6 - 12 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="D" id="Quiz6-04" type="radio" name="Question-6" value="12 - 24 hours" style="display: none;"/>
								<label class="cbx" for="Quiz6-04">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">12 - 24 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="E" id="Quiz6-05" type="radio" name="Question-6" value="24 - 48 hours" style="display: none;"/>
								<label class="cbx" for="Quiz6-05">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">24 - 48 hours</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="F" id="Quiz6-06" type="radio" name="Question-6" value="more than 48 hours" style="display: none;"/>
								<label class="cbx" for="Quiz6-06">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">more than 48 hours</span>       
								</label>
							</div>
						</div><!-- col -->
          			</div>
          			<input type="hidden" name="questions[]" id="ques_6" value="" />
					<input type="hidden" name="answers[]" id="ans_6" value="" />
					
					<input type="hidden" name="ques_6" value="What is a reasonable wait time for installation post-delivery of your product?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_6" rel="What is a reasonable wait time for installation post-delivery of your product?" data-id="6">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_6" rel="What is a reasonable wait time for installation post-delivery of your product?" data-id="6" questionType="0">Next</button>
						  
	        		</div>
          		</div>

          		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A7. What would you rate our installation experience?</h2>
          			<div class="row mt-3">
          				<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="A" id="Quiz7-01" type="radio" name="Question-7" value="Poor" style="display: none;"/>
								<label class="cbx" for="Quiz7-01">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Poor</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="B" id="Quiz7-02" type="radio" name="Question-7" value="Fair" style="display: none;"/>
								<label class="cbx" for="Quiz7-02">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Fair</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="C" id="Quiz7-03" type="radio" name="Question-7" value="Good" style="display: none;"/>
								<label class="cbx" for="Quiz7-03">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Good</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="D" id="Quiz7-04" type="radio" name="Question-7" value="Very Good" style="display: none;"/>
								<label class="cbx" for="Quiz7-04">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Very Good</span>       
								</label>
							</div>
						</div><!-- col -->
						<div class="col-md-6 mt-3">
							<div class="quiz_check_row">
								<input class="inp-cbx" data-id="E" id="Quiz7-05" type="radio" name="Question-7" value="Excellent" style="display: none;"/>
								<label class="cbx" for="Quiz7-05">
									<span>
										<svg width="12px" height="9px" viewbox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
									</span>
									<span class="quiz_title">Excellent</span>       
								</label>
							</div>
						</div><!-- col -->

          			</div>
          			<input type="hidden" name="questions[]" id="ques_7" value="" />
					<input type="hidden" name="answers[]" id="ans_7" value="" />
					
					<input type="hidden" name="ques_7" value="What would you rate our installation experience?">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_7" rel="What would you rate our installation experience?" data-id="7">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_7" rel="What would you rate our installation experience?" data-id="7" questionType="0">Next</button>
						  
	        		</div>
          		</div>

          		<div class="form-container animated">
          			<h2 class="text-center question_head pt-3">A8. You have rated the installation experience as “Poor” or ‘Fair”. Please tell us the reason for the same.</h2>
          			<div class="row mt-3">
          				<div class="col-md-12 mt-3">
							<div class="quiz_check_row">
								
								<textarea class="form-control textarea_feild" rows="4" id="openBox8-01" name="openbox-8"></textarea>
							</div>
						</div>
          			</div>
          			<input type="hidden" name="questions[]" id="ques_8" value="" />
					<input type="hidden" name="answers[]" id="ans_8" value="" />
					
					<input type="hidden" name="ques_8" value="You have rated the installation experience as “Poor” or ‘Fair”. Please tell us the reason for the same.">
					<div class="text-center mt-5">
						
						<button class="btn_grey_color btn_small back" q-id="question_8" rel="You have rated the installation experience as “Poor” or ‘Fair”. Please tell us the reason for the same." data-id="8">Back</button>
						
						<button class="btn_blue_color btn_small next" q-id="question_8" rel="You have rated the installation experience as “Poor” or ‘Fair”. Please tell us the reason for the same." data-id="8" questionType="1">Submit</button>
						  
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
				if(quesCnt==1 && ansVal=='A')
				{
					$('#firstAns').val(ansVal);
				}else if(quesCnt==1 && ansVal!='A'){
					$('#firstAns').val(ansVal);
				}else{
					$('#firstAns').val();
				}

				if(quesCnt==7 && (ansVal=='A' || ansVal=='B'))
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
			    
			    
			    var checkedLgth = $("input[name='Question-"+quesCnt+"[]']:checked").length;
			    
			    

			    if(checkedLgth==3)
			    {
			    	//finalQuestionsAnswers.quesTxt = [];
			    	var ct = 1;
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
			    }else if(checkedLgth > 3){
			    	flg = 0;
					$('.error_message').html('').html('Please check only 3 option.');
					$('.alert').fadeIn();
			    }else{
			    	flg = 0;
					$('.error_message').html('').html('Please check  3 option.');
					$('.alert').fadeIn();
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
		
		if(clickCnt<=8 && flg==1)
		{
			


			var selectedOption = $('#firstAns').val();
			var selectedOption1 = $('#secondAns').val();
			if(selectedOption=='A' && quesCnt==3)
			{
				
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 3).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().next().next().addClass("active fadeIn"); 
				clickCnt = 6;	
				 
			}else if(selectedOption !='A' && quesCnt==1){
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 3).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().next().next().addClass("active fadeIn"); 
				clickCnt = 4;
			}else if(selectedOption1=='Y' && quesCnt==7)
			{
				console.log('option A OR B Selected');
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 1).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().addClass("active fadeIn");
				clickCnt = 7;
			}else if(selectedOption1 !='Y' && quesCnt==7)
			{
				
				/*$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 1).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().addClass("active fadeIn");*/
				clickCnt = 8;
			}else{
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() + 1).addClass("active");
				$(this).parents(".form-container").removeClass("active").next().addClass("active fadeIn"); 	
			}
			
			if(clickCnt==8)
			{
				$('#finalAnswers').val(JSON.stringify( finalQuestionsAnswers ));
				$.ajax({
	                url:b_url+'home/custinstallAnswer',
	                method:'POST',
	                dataType:'json',
	                //data:{'questions':questions,'answers':answers,'finalAnswers':finalQuestionsAnswers},
	                data:$('#frm_install').serialize(),
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
		if(selectedOption=='A' && quesCnt==5)
			{
				
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() - 2).addClass("active");
				$(this).parents(".form-container").removeClass("active fadeIn").prev().prev().addClass("active fadeIn");
				 
			}else if(selectedOption!='A' && quesCnt==4)
			{
				
				$(".steps li .dott_circle").eq($(this).parents(".form-container").index() - 2).addClass("active");
				$(this).parents(".form-container").removeClass("active fadeIn").prev().prev().prev().addClass("active fadeIn");
			}
			else if(selectedOption1 =='Y' && quesCnt==7){
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
		if(dataID !='')
		{
			if(dataID==inputId)
			{
				if ($(this).prop('checked')==true){ 
		        	searchIDs.push($(this).val());
		        	txtChange = $(this).parent().text();
		        	$(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        	txt++;
			    }else{
			    	var x = searchIDs.indexOf($(this).val());
		       		searchIDs.splice(x,1);
		       		txtChange = $.trim($(this).parent().text());
		       		$(this).parent().find('span.quiz_title').text(txtChange.substr(3));
		       		updatesquense($(this),searchIDs);
		        	txt--;
			    }
			}else{
				searchIDs = [];
				txt = 1;

				if ($(this).prop('checked')==true){ 
		        	searchIDs.push($(this).val());
		        	txtChange = $(this).parent().text();
		        	$(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        	txt++;
			    }else{
			    	var x = searchIDs.indexOf($(this).val());
		       		searchIDs.splice(x,1);
		       		txtChange = $.trim($(this).parent().text());
		        	$(this).parent().find('span.quiz_title').text(txtChange.substr(3));
		        	updatesquense($(this),searchIDs);
		        	txt--;
			    }
			    dataID = inputId;
			}
		}else{
			if ($(this).prop('checked')==true){ 
	        	searchIDs.push($(this).val());
	        	txtChange = $(this).parent().text();
		        $(this).parent().find('span.quiz_title').text(txt+'. '+txtChange);
		        txt++;
		    }else{
		    	var x = searchIDs.indexOf($(this).val());
	       		searchIDs.splice(x,1);
	       		txtChange = $.trim($(this).parent().text());

		        $(this).parent().find('span.quiz_title').text(txtChange.substr(3));
		        updatesquense($(this),searchIDs);
		        txt--;
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