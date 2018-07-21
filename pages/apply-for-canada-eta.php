<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="<?= __BASE_URL;?>/assets/images/icons/favicon.ico">
        <meta name="msvalidate.01" content="65F1DAE1EE3B0B83EEC18DDCD1C8D38B" />
        <script type="text/javascript" src="<?= __BASE_URL;?>/assets/js/jquery-1.11.3.min.js"></script>
        
        <!-- Hotjar Tracking Code for canada-etavisa.info -->
        <script>
        (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:543236,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
         })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
        
        <script>
            $(document).ready(function(){
               
                $('#changeCountryname').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#lawfullcontainer').css("display", "none");
                       $('#notEligible').css("display", "none");
                       $('#travellingCanada').css("display", "none");
                       $('#landorSee').css("display", "none");
                       $('#completeInfo').css("display", "none");
                       $('#minorChild').css("display", "none");
                       $('#doYouStillWantToApplycon').css("display", "none");
                    } else
                        if ($(this).val() === 'Israel' || $(this).val() === 'British Overseas Citizen' || $(this).val() === 'Hong Kong SAR' ||
                            $(this).val() === 'national overseas' || $(this).val() === 'Andorra' || $(this).val() === 'Australia' ||
                            $(this).val() === 'Antigua' || $(this).val() === 'Bahamas' || $(this).val() === 'Barbados' ||
                            $(this).val() === 'Belgium' || $(this).val() === 'British Citizen' || $(this).val() === 'Brunei Darussalam' ||
                            $(this).val() === 'Chile' || $(this).val() === 'Croatia' || $(this).val() === 'Cyprus' ||
                            $(this).val() === 'Czech Republic' || $(this).val() === 'Denmark' || $(this).val() === 'Estonia' ||
                            $(this).val() === 'Greece' || $(this).val() === 'Germany' || $(this).val() === 'France' || $(this).val() === 'Hungary' ||
                            $(this).val() === 'Iceland' || $(this).val() === 'Ireland' || $(this).val() === 'Italy' ||
                            $(this).val() === 'Japan' || $(this).val() === 'Korea' || $(this).val() === 'Liechtenstein' ||
                            $(this).val() === 'Latvia' || $(this).val() === 'Lithuania' || $(this).val() === 'Luxembourg' ||
                            $(this).val() === 'Malta' || $(this).val() === 'Monaco' || $(this).val() === 'Netherlands' ||
                            $(this).val() === 'New Zealand' || $(this).val() === 'Norway' || $(this).val() === 'Papua New Guinea' ||
                            $(this).val() === 'Poland' || $(this).val() === 'Portugal' || $(this).val() === 'Samoa' ||
                            $(this).val() === 'San Marino' || $(this).val() === 'Singapore' || $(this).val() === 'Spain' ||
                            $(this).val() === 'Sweden' || $(this).val() === 'Switzerland' || $(this).val() === 'Anguilla' ||
                            $(this).val() === 'Bermuda' || $(this).val() === 'Cayman Islands' || $(this).val() === 'Falkland Islands' ||
                            $(this).val() === 'Gibraltar' || $(this).val() === 'Montserrat' || $(this).val() === 'Saint Helena'
               
                ) {        
                         $('#travellingCanada').css("display", "block");
                         $('#lawfullcontainer').css("display", "none");
                    } else {
                         $('#lawfullcontainer').css("display", "block");
                         $('#travellingCanada').css("display", "none");
                    }
                });
               
                $('#changeLawful').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#travellingCanada').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#travellingCanada').css("display", "none");
                        $('#notEligible').css("display", "block");
                    } else {
                        $('#travellingCanada').css("display", "block");
                          $('#notEligible').css("display", "none");
                    }
                });
               
                  $('#travelCanada').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#landorSee').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#landorSee').css("display", "none");
                        $('#notEligible').css("display", "block");
                    } else {
                        $('#landorSee').css("display", "block");
                          $('#notEligible').css("display", "none");
                    }
                });
               
                $('#landSeechange').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#doYouStillWantToApplycon').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#doYouStillWantToApplycon').css("display", "none");
                        $('#isRepresentativecon').css("display", "block");
                       
                    } else {
                        $('#doYouStillWantToApplycon').css("display", "block");
                         $('#isRepresentativecon').css("display", "none");
                    }
                });
               
                $('#isRepresentative').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#completeInfo').css("display", "none");
                        $('#minorChild').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#completeInfo').css("display", "block");
                        $('#representative-information').css("display", "none");
                       
                        $("#representative").prop("required", false);
                        $("#representApplicant").prop("required", false);
                            $("#lastname").prop("required", false);
                            $("#firstname").prop("required", false);
                                $("#mailingAddress").prop("required", false);
                               
                        $('#minorChild').css("display", "none");
                    } else {
                        $('#minorChild').css("display", "block");
                        $('#representative-information').css("display", "block");
                        $('#completeInfo').css("display", "none");
                        $("#representative").prop("required", true);
                        $("#representApplicant").prop("required", true);
                            $("#lastname").prop("required", true);
                            $("#firstname").prop("required", true);
                                $("#mailingAddress").prop("required", true);
                    }
                });
 
                $('#employmentOccupation').change(function() {
                    $('#employmentTitle option[value="Not Selected"]').attr('selected','selected');
                    if ($(this).val() !== "Homemaker" && $(this).val() !== "Retired" && $(this).val() !== "Unemployed") {
                        if ($(this).val() === "Student") {
                            $("#employmentTitleBlock").css("display", "none");
                        } else {
                            $("#employmentTitleBlock").css("display", "block");
                        }
                        $("#employment-details").css("display", "block");
                        $("#employmentTitle").prop("required", "required");
                        $("#employmentName").prop("required", "required");
                        $("#employmentCity").prop("required", "required");
                        $("#employmentCountry").prop("required", "required");
                        $("#employmentStartYear").prop("required", "required");
                        var tmpClass = "";
                        if ($(this).val() === "Art, culture, recreation and sport occupations") {
                            tmpClass = "emp-art";
                        } else if ($(this).val() === "Business, finance and administration occupations") {
                            tmpClass = "emp-business";
                        } else if ($(this).val() === "Education, law and social, community and government services occupations") {
                            tmpClass = "emp-edu";
                        } else if ($(this).val() === "Health occupations") {
                            tmpClass = "emp-heal";
                        } else if ($(this).val() === "Management occupations") {
                            tmpClass = "emp-manag";
                        } else if ($(this).val() === "Manufacturing and utilities occupations") {
                            tmpClass = "emp-manuf";
                        } else if ($(this).val() === "Military/armed forces") {
                            tmpClass = "emp-army";
                        } else if ($(this).val() === "Natural and applied sciences and related occupations") {
                            tmpClass = "emp-tech";
                        } else if ($(this).val() === "Natural resources, agriculture and related production occupations") {
                            tmpClass = "emp-natur";
                        } else if ($(this).val() === "Sales and service occupations") {
                            tmpClass = "emp-sale";
                        } else if ($(this).val() === "Trades, transport and equipment operators and related occupations") {
                            tmpClass = "emp-oper";
                        }
                        $("#employmentTitle option").css("display", "none");
                        $("#employmentTitle option."+tmpClass).css("display", "block");
                    } else {
                        $("#employment-details").css("display", "none");
                        $("#employmentTitle").prop("required", "");
                        $("#employmentName").prop("required", "");
                        $("#employmentCity").prop("required", "");
                        $("#employmentCountry").prop("required", "");
                        $("#employmentStartYear").prop("required", "");
                    }
                });
               
                 $('#doYouStillWantToApply').change(function() {
                     if ($(this).val() === 'Select') {
                      $('#minorChild').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#isRepresentativecon').css("display", "none");
                          $('#notEligible').css("display", "block");
                          $('#minorChild').css("display", "none");
                    } else {
                        $('#isRepresentativecon').css("display", "block");
                         $('#notEligible').css("display", "none");
                    }
                });
               
               
                 $('#minorchildChange').change(function() {
                     if ($(this).val() === 'Select') {
                      $('#completeInfo').css("display", "none");
                    } else if ($(this).val() === 'No') {
                          $('#notEligible').css("display", "none");
                          $('#completeInfo').css("display", "block");
                    } else {
                        $('#completeInfo').css("display", "block");
                         $('#notEligible').css("display", "none");
                    }
                });
               
                $('#hasOtherCitizenship').change(function() {
                     if ($(this).val() === 'Select') {
                      $('#CitizenshipsInfoCon').css("display", "none");
                    } else if ($(this).val() === 'No') {
                          $('#CitizenshipsInfoCon').css("display", "none");
                    } else {
                        $('#CitizenshipsInfoCon').css("display", "block");
                    }
                });
               
                  $('#hasPreviouslyApplied').change(function() {
                     if ($(this).val() === 'Select') {
                      $('#UICnumber').css("display", "none");
                    } else if ($(this).val() === 'No') {
                          $('#UICnumber').css("display", "none");
                    } else {
                        $('#UICnumber').css("display", "block");
                    }
                });
               
               
               
            })
        </script>
        <style>
            #notEligible {
                display: none;
            }
            #lawfullcontainer {
                display: none;
            }
            #travellingCanada {
                display: none;
            }
            #landorSee {
                display: none;
            }
            #completeInfo {
                display: none;
            }
            #minorChild {
                display: none;
            }
            #doYouStillWantToApplycon {
                display:none;
            }
            #isRepresentativecon {
                display:none;
            }
            #CitizenshipsInfoCon {
                display: none;
            }
            #UICnumber {
                display: none;
            }
        </style>
		
		<link rel="stylesheet" href="<?= __BASE_URL; ?>/assets/components/minifyx/cache/styles_1e2a103354.css" type="text/css" />
		
	</head>
	
    <body class="cart-empty">
	
		<div id="header">
		 
            <div class="container">
			
                <div class="row">
 
                    <div class="logo clearfix">
 
						<div class="span4">
						
							<a href="<?= __BASE_URL; ?>/index.html">
							
								<img class="top-logo" src="<?= __BASE_URL; ?>/assets/images/header/eta_new.png" alt="Canada eTA"/>
							</a>
							
						</div>
						
						<div class="span4 slogan hidden-phone">  
						
						   <p>TOURIST | TRANSIT | BUSINESS</p>
						   
						</div>
						
						<div class="span2 contact-button">                            
							
							<p><a href="mailto:info@etavisa-gov.ca" class="btn btn-default btn-small">&#9993; | Help and Support</a></p>
						
						</div>
						
						<div class="span2 customer-services hidden-phone"></div>
					
					</div>
				
				</div>
			
			</div>
			
		</div>
   
        <div class="container">
           
			<h1>Canada eTA Application</h1>
			
			<div id="mainContent"></div> 
				 
				<div class="row esta-apply">
					
					<div class="span8">
					
						<form method="post" action="<?= __BASE_URL; ?>/apply-for-canada-eta/action" class="form-horizontal" id="apply-form">
						
							<div id="prerequisite-information" style="padding-bottom: 12px;">
							
								<h2>Application Information</h2>
								
								<div class="control-group form-field">
								
									<label class="control-label"> What is the Country/Territory of your passport?</label>
									
									<div class="controls">
									
										<div class="input-append">
										
											<select name="countryName" required="required" id="changeCountryname">
											
												<option value="Select">Select</option>
												<option value="Afghanistan">Afghanistan</option>
												<option value="Albania">Albania</option>
												<option value="Algeria">Algeria</option>
												<option value="Andorra">Andorra</option>
												<option value="Angola">Angola</option>  
												<option value="Anguilla">Anguilla</option>
												<option value="Antigua">Antigua And Barbuda</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas, Commonwealth of the</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bermuda">Bermuda</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Brunei Darussalam">Brunei Darussalam</option>
												<option value="Barbados">Barbados</option>
												<option value="Belarus">Belarus</option>
												<option value="Belgium">Belgium</option>
												<option value="Belize">Belize</option>
												<option value="Benin">Benin, Republic of</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bolivia">Bolivia</option>
												<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
												<option value="Botswana">Botswana, Republic Of</option>
												<option value="Brazil">Brazil</option>
												<option value="British Citizen">British Citizen</option>
												<option value="British National Overseas">British National Overseas</option>
												<option value="British Overseas Citizen">British Overseas Citizen</option>
												<option value="Brunei">Brunei</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burkina Faso">Burkina Faso</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cayman Islands">Cayman Islands</option>
												<option value="Cameroon">Cameroon, Republic of</option>
												<option value="Canada">Canada</option>
												<option value="Cape Verde">Cape Verde Islands</option>
												<option value="Central African">Central African Republic</option>
												<option value="Chad, Republic Of">Chad, Republic Of</option>
												<option value="China">China, People's Republic of</option>
												<option value="Chile">Chile</option>
												<option value="Colombia">Colombia</option>
												<option value="Comoros">Comoros</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Cote d'Ivoire">Cote d'Ivoire, Republic of</option>
												<option value="Croatia">
													Croatia
												</option><option value="Cuba">
													Cuba
												</option><option value="Cyprus">
													Cyprus
												</option><option value="Czech Republic">
													Czech Republic
												</option><option value="Denmark">
													Denmark
												</option><option value="Djibouti, Republic of">
													Djibouti, Republic of
												</option><option value="Dominica">
													Dominica, Commonwealth of
												</option><option value="Dominican">
													Dominican Republic
												</option><option value="DPR Korea">
													DPR Korea (North)
												</option><option value="East Timor">
													East Timor
												</option><option value=" Ecuador">
													Ecuador
												</option><option value="Egypt">
													Egypt
												</option><option value="El Salvador">
													El Salvador
												</option><option value="Eritrea">
													Eritrea
												</option><option value="Estonia">
													Estonia
												</option><option value="Ethiopia">
													Ethiopia
												</option>
												<option value="Falkland Islands">
													Falkland Islands
												</option>
												<option value="Federated States">
													Federated States of Micronesia
												</option><option value="Fiji">
													Fiji
												</option><option value="Finland">
													Finland
												</option><option value="France">
													France
												</option><option value="FYR Macedonia">
													FYR Macedonia
												</option><option value="Gabonese">
													Gabonese Republic
												</option><option value="Gambia">
													Gambia
												</option>
												<option value="Gibraltar">
													Gibraltar
												</option>
												<option value="Georgia">
													Georgia
												</option><option value="Germany">
													Germany
												</option><option value="Ghana">
													Ghana
												</option><option value="Greece">
													Greece
												</option><option value="Grenada">
													Grenada
												</option><option value="Guatemala">
													Guatemala
												</option><option value="Haiti">
													Haiti
												</option><option value="Hong Kong SAR">
													Hong Kong SAR
												</option><option value="Hungary">
													Hungary
												</option><option value="Iceland">
													Iceland
												</option><option value="India">
													India
												</option><option value="Indonesia">
													Indonesia, Republic of
												</option><option value="Iran">
													Iran
												</option><option value="Iraq">
													Iraq
												</option><option value="Ireland">
													Ireland, Republic Of
												</option><option value="Israel">
													Israel
												</option><option value="Italy">
													Italy
												</option><option value="Jamaica">
													Jamaica
												</option><option value="Japan">
													Japan
												</option><option value="Jordan">
													Jordan
												</option><option value="Kenya">
													Kenya
												</option><option value="Korea">
													Korea, Republic Of (South)
												</option><option value="Kuwait">
													Kuwait
												</option><option value="Latvia">
													Latvia
												</option> 
												<option value="Lebanon">
													Lebanon
												</option><option value="Lesotho">
													Lesotho
												</option><option value="Liberia">
													Liberia
												</option><option value="Libya">
													Libya
												</option>
												<option value="Liechtenstein">
													Liechtenstein
												</option>
												<option value="Lithuania">
													Lithuania
												</option>
												<option value="Luxembourg">
													Luxembourg
												</option>
				 
												<option value="Malaysia">
													Malta
												</option>
												<option value="Malta">
													Malaysia
												</option><option value="Mexico">
													Mexico
												</option><option value="Monaco">
													Monaco
												</option>
												<option value="Montserrat">
													Montserrat
												</option>
												<option value="Mongolia">
													Mongolia
												</option><option value="Morocco">
													Morocco
												</option><option value="Mozambique">
													Mozambique
												</option><option value="Nepal">
													Nepal
												</option>
												<option value="Netherlands">
													Netherlands
												</option>
												<option value="New Zealand">
													New Zealand
												</option><option value="Norway">
													Norway
												</option><option value="Oman">
													Oman
												</option><option value="Pakistan">
													Pakistan
												</option><option value="Palestinian">
													Palestinian Autho.Gaza/W Bank
												</option>
												<option value="Papua New Guinea">Papua New Guinea</option>
												<option value="Panama">Panama, Republic of</option>
												<option value="Philippines">Philippines</option>
												<option value="Portugal">Portugal</option>
												<option value="Poland">Poland</option>
												<option value="Qatar">
													Qatar
												</option><option value="Romania">
													Romania
												</option><option value="Russia">
													Russia
												</option>
												<option value="San Marino">San Marino</option>
												<option value="Saint Lucia">Saint Lucia</option>
												<option value="Saint Helena">Saint Helena</option>
												<option value="Samoa">Samoa, American</option>
												<option value="Saudi Arabia">Saudi Arabia</option>
												<option value="Singapore">Singapore</option>
												<option value="South Sudan">South Sudan, Republic of</option>
												<option value="Spain">Spain</option>
												<option value="Sri Lanka">Sri Lanka</option>
												<option value="Sudan">Sudan, Republic of</option>
												<option value="Swaziland">Swaziland</option>
												<option value="Sweden">Sweden</option>
												<option value="Switzerland">
													Switzerland
												</option><option value="Syria">
													Syria
												</option><option value="Taiwan">
													Taiwan
												</option><option value="Tajikistan">
													Tajikistan
												</option><option value="Tanzania">
													Tanzania, United Republic Of
												</option><option value="Thailand">
													Thailand
												</option><option value="Togolese">
													Togolese Republic
												</option><option value="Tonga">
													Tonga
												</option><option value="Trinidad">
													Trinidad &amp; Tobago, Republic of
												</option><option value="Tunisia">
													Tunisia
												</option><option value="Turkey">
													Turkey
												</option><option value="Turkmenistan">
													Turkmenistan
												</option><option value="Tuvalu">
													Tuvalu
												</option><option value="United Arab Emirates">
													United Arab Emirates
												</option><option value="  United States of America">
													United States of America
												</option><option value="Uruguay">
													Uruguay
												</option><option value="Uzbekistan">
													Uzbekistan
												</option><option value="Vanuatu">
													Vanuatu
												</option><option value="Venezuela">
													Venezuela
												</option><option value="Western Sahara">
													Western Sahara
												</option><option value="Yemen">
													Yemen, Republic of
												</option><option value="Zambia">
													Zambia
												</option><option value="Zimbabwe">
													Zimbabwe
												</option>
												
											</select>
											
										</div>
										
									</div>
									
								</div>
								
								<div class="control-group form-field" id="lawfullcontainer">
								
									<label class="control-label">Are you a lawful permanent resident of the United States with a valid alien registration card (Green Card)?</label>
									
									<div class="controls">
										<div class="input-append">
										
											<select name="permanentResident" required="required" id="changeLawful">
											
												<option value="Select">Select </option>
												
												<option value="Yes">Yes </option>
												
												<option value="No">No </option>
												
											</select>
												
										</div>
											
									</div>
										
								</div>
									
								<div class="control-group form-field" id="travellingCanada">
								
									<label class="control-label">
										Are you travelling to Canada by air?
									</label>
									
									<div class="controls">
									
										<div class="input-append">
										
											<select name="travellingCanada" id="travelCanada" required="required">
											
												<option value="Select">Select</option>
												
												<option value="Yes"> Yes</option>
												
												<option value="No">  No </option>
												
											</select>
											
										</div>
										
									</div>
									
								</div>
								
								<div class="control-group form-field" id="landorSee">
								
									<label class="control-label">
										Are you any of the following?<br>• A visitor entering Canada by land or sea<br>• A citizen of France residing in and travelling from St. Pierre and Miquelon<br>• A student with a valid study permit for Canada, which I obtained on or after August 1, 2015<br>• A foreign worker with a valid work permit for Canada, which I obtained on or after August 1, 2015<br>• A person holding valid status in Canada and entering Canada from the United States or St. Pierre and Miquelon<br>• A member of Visiting Forces visiting Canada on official duties/orders<br>• A member of flight crew, a civil aviation inspector or an accident investigator<br>• An accredited diplomat
									</label>
									
									<div class="controls">
									
										<div class="input-append">
										
											<select name="landorSee" required="required" id="landSeechange">
											
												<option value="Select">Select</option>
												
												<option value="Yes">Yes</option>
												
												<option value="No">No</option>
												
											</select>
											
										</div>
										
									</div>
									
								</div>
							   
								<div class="control-group form-field" id="doYouStillWantToApplycon">
									<label class="control-label">
										For the purpose of your current travel, you do not require an eTA. You may still apply for one if you wish
									</label>
									<div class="controls">
										<div class="input-append">
											<select id="doYouStillWantToApply">
												<option value="Select">
													Select
												</option>
												<option value="Yes">
													Yes
												</option>
												<option value="No">
													No
												</option>
											</select>
										</div>
									</div>
								</div>
							   
								<div class="control-group form-field" id="isRepresentativecon">
									<label class="control-label">
										Are you a representative or a parent/guardian applying on behalf of an eTA applicant?
									</label>
									<div class="controls">
										<div class="input-append">
											<select id="isRepresentative" name="isRepresentativecon">
												<option value="Select">
													Select
												</option>
												<option value="Yes">
													Yes
												</option>
												<option value="No">
													No
												</option>
											</select>
										</div>
									</div>
								</div>
							   
								<div class="control-group form-field" id="minorChild">
									<label class="control-label">
										Are you applying on behalf of a minor child?
									</label>
									<div class="controls">
										<div class="input-append">
											<select name="minorChild" id="minorchildChange" required="required">
												<option value="Select">
													Select
												</option>
												<option value="Yes">
													Yes
												</option>
												<option value="No">
													No
												</option>
											</select>
										</div>
									</div>
								</div>
								
								<div id="notEligible">
									<h2>Not eTA-eligible</h2>
									<p>Based on your answers, for the purpose of your current travel, you <strong>may be eligible for a visa</strong> to visit Canada.</p>
									<p>To find out, use the Come to Canada tool. Answer a few questions to find out which visa type may be best for you. You will need about 10-15 minutes to complete the questionnaire. Once completed, you will get a detailed list of instructions on what to do next and how to submit your application.</p>
									<p><a href="http://www.cic.gc.ca/ctc-vac/getting-started.asp" target="_blank"> Start questionnaire </a></p>
								</div>      
								
								<div id="completeInfo">
						 
									<div id="representative-information">
									
										<h2>Representative information</h2>
										
										<div class="control-group form-field">
										
											<label class="control-label">
												My representative is
											</label>
											<div class="controls">
												<div class="input-append">
													<select name="representative" id="representative" required="required">
														<option value="">
															Select
														</option>
														<option value="A Canadian provincial or territorial law society">
															A Canadian provincial or territorial law society
														</option><option value="A family member or friend">
															A family member or friend
														</option><option value="A member of a non-governmental or religious organization">
															A member of a non-governmental or religious organization
														</option><option value="A member of the Immigration Consultants of Canada Regulatory Council (ICCRC)">
															A member of the Immigration Consultants of Canada Regulatory Council (ICCRC)
														</option><option value="A travel agent">
															A travel agent
														</option><option value="The Chambre des notaires du Quebec">
															The Chambre des notaires du Quebec
														</option>
													</select>
												</div>
											</div>
										</div>
											
										<div class="control-group form-field">
											<label class="control-label">
												Are you being paid to represent the applicant and complete the form on their behalf?
											</label>
											<div class="controls">
												<div class="input-append">
													<select name="representApplicant" id="representApplicant" required="required">
														<option value="Not Selected">
															Select
														</option>
														<option value="Yes">
															Yes
														</option>
														<option value="No">
															No
														</option>
													</select>
												</div>
											</div>
										</div>
							   
							   
										<div class="control-group form-field">
											<label class="control-label">
												Last name(s)
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" maxlength="50" name="lastname" id="lastname" required="required">
												</div>
											</div>
										</div>
							   
										<div class="control-group form-field">
											<label class="control-label">
												First name(s)
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="firstname" maxlength="50" id="firstname" required="required">
												</div>
											</div>
										</div>
							   
										<div class="control-group form-field">
											<label class="control-label">
												Mailing Address
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="mailingAddress" maxlength="200"  id="mailingAddress" required="required">
												</div>
											</div>
										</div>
							   
										<div class="control-group form-field">
											<label class="control-label">
												Telephone number
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" maxlength="20" name="tellNumb">
												</div>
											</div>
										</div>
							   
										<div class="control-group form-field">
											<label class="control-label">
												Fax number
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="faxNumber" maxlength="20">
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Email address
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="emailAddress" maxlength="100">
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<div class="controls">
												<label class="checkbox">
													<input type="checkbox">
													I declare that my contact and personal information above is truthful, complete and correct.
												</label>
											</div>
										</div>
										<div class="control-group form-field">
											
											<div class="controls">
												<label class="checkbox">
													<input type="checkbox">
													I understand and accept that I am the person appointed by the applicant to conduct business on the applicant or sponsor's behalf with Citizenship and Immigration Canada and the Canada Border Services Agency.
												</label>
											</div>
											
										</div>
										
									</div>
									   
							   
									<div id="personal-information">
									
										<h2>Personal details</h2>
										
										<div class="control-group form-field">
											<label class="control-label">
												Last name(s)
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="plastname" maxlength="50" required="required">
												</div>
											</div>
										</div>
							   
										<div class="control-group form-field">
											<label class="control-label">
												First name(s)
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="pfirstName" maxlength="50" required="required">
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Date of birth
											</label>
											<div class="controls">
												<div class="input-append">
													 <input type="date" name="pdate" required="required" >
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Country/territory of birth
											</label>
											
											<div class="controls">
											
												<div class="input-append">
													<select name="pcountrybirth" required="required">
														<option value="Not Selected">
															Select
														</option>
														<option value="Afghanistan">
															Afghanistan
														</option><option value="Albania">
															Albania
														</option><option value="Algeria">
															Algeria
														</option><option value="Andorra">
															Andorra
														</option><option value="Angola">
															Angola
														</option><option value="Antigua">
															Antigua And Barbuda
														</option><option value="Argentina">
															Argentina
														</option><option value="Armenia">
															Armenia
														</option><option value="Australia">
															Australia
														</option><option value="Austria">
															Austria
														</option><option value="Azerbaijan">
															Azerbaijan
														</option><option value="Bahamas">
															Bahamas, Commonwealth of the
														</option><option value="Bahrain">
															Bahrain
														</option><option value="Bangladesh">
															Bangladesh
														</option><option value="Barbados">
															Barbados
														</option><option value="Belarus">
															Belarus
														</option><option value="Belgium">
															Belgium
														</option><option value="Belize">
															Belize
														</option><option value="Benin">
															Benin, Republic of
														</option><option value="Bhutan">
															Bhutan
														</option><option value="Bolivia">
															Bolivia
														</option><option value="Bosnia and Herzegovina">
															Bosnia and Herzegovina
														</option><option value="Botswana">
															Botswana, Republic Of
														</option><option value="Brazil">
															Brazil
														</option><option value="British Citizen">
															British Citizen
														</option><option value="British National Overseas">
															British National Overseas
														</option><option value="British Overseas Citizen">
															British Overseas Citizen
														</option><option value="Brunei">
															Brunei
														</option><option value="Bulgaria">
															Bulgaria
														</option><option value="Burkina Faso">
															Burkina Faso
														</option><option value="Burundi">
															Burundi
														</option><option value="Cambodia">
															Cambodia
														</option><option value="Cameroon">
															Cameroon, Republic of
														</option><option value="Canada">
															Canada
														</option><option value="Cape Verde">
															Cape Verde Islands
														</option><option value="Central African">
															Central African Republic
														</option><option value="Chad, Republic Of">
															Chad, Republic Of
														</option>
														<option value="China">
															China, People's Republic of
														</option><option value="Colombia">
															Colombia
														</option><option value="Comoros">
															Comoros
														</option><option value="Costa Rica">
															Costa Rica
														</option><option value="Cote d'Ivoire">
															Cote d'Ivoire, Republic of
														</option><option value="Croatia">
															Croatia
														</option><option value="Cuba">
															Cuba
														</option><option value="Cyprus">
															Cyprus
														</option><option value="Czech Republic">
															Czech Republic
														</option><option value="Denmark">
															Denmark
														</option><option value="Djibouti, Republic of">
															Djibouti, Republic of
														</option><option value="Dominica">
															Dominica, Commonwealth of
														</option><option value="Dominican">
															Dominican Republic
														</option><option value="DPR Korea">
															DPR Korea (North)
														</option><option value="East Timor">
															East Timor
														</option><option value=" Ecuador">
															Ecuador
														</option><option value="Egypt">
															Egypt
														</option><option value="El Salvador">
															El Salvador
														</option><option value="Eritrea">
															Eritrea
														</option><option value="Estonia">
															Estonia
														</option><option value="Ethiopia">
															Ethiopia
														</option><option value="Federated States">
															Federated States of Micronesia
														</option><option value="Fiji">
															Fiji
														</option><option value="Finland">
															Finland
														</option><option value="France">
															France
														</option><option value="FYR Macedonia">
															FYR Macedonia
														</option><option value="Gabonese">
															Gabonese Republic
														</option><option value="Gambia">
															Gambia
														</option><option value="Georgia">
															Georgia
														</option><option value="Germany">
															Germany
														</option><option value="Ghana">
															Ghana
														</option><option value="Greece">
															Greece
														</option><option value="Grenada">
															Grenada
														</option><option value="Guatemala">
															Guatemala
														</option><option value="Haiti">
															Haiti
														</option><option value="Hong Kong SAR">
															Hong Kong SAR
														</option><option value="Hungary">
															Hungary
														</option><option value="Iceland">
															Iceland
														</option><option value="India">
															India
														</option><option value="Indonesia">
															Indonesia, Republic of
														</option><option value="Iran">
															Iran
														</option><option value="Iraq">
															Iraq
														</option><option value="Ireland">
															Ireland, Republic Of
														</option><option value="Israel">
															Israel
														</option><option value="Italy">
															Italy
														</option><option value="Jamaica">
															Jamaica
														</option><option value="Japan">
															Japan
														</option><option value="Jordan">
															Jordan
														</option><option value="Kenya">
															Kenya
														</option><option value="Korea">
															Korea, Republic Of (South)
														</option><option value="Kuwait">
															Kuwait
														</option><option value="Lebanon">
															Lebanon
														</option><option value="Lesotho">
															Lesotho
														</option><option value="Liberia">
															Liberia
														</option><option value="Libya">
															Libya
														</option><option value="Malaysia">
															Malaysia
														</option><option value="Mexico">
															Mexico
														</option><option value="Monaco">
															Monaco
														</option><option value="Mongolia">
															Mongolia
														</option><option value="Morocco">
															Morocco
														</option><option value="Mozambique">
															Mozambique
														</option><option value="Nepal">
															Nepal
														</option><option value="New Zealand">
															New Zealand
														</option><option value="Norway">
															Norway
														</option><option value="Oman">
															Oman
														</option><option value="Pakistan">
															Pakistan
														</option><option value="Palestinian">
															Palestinian Autho.Gaza/W Bank
														</option><option value="Panama">
															Panama, Republic of
														</option><option value="Philippines">
															Philippines
														</option><option value="Poland">
															Poland
														</option><option value="Qatar">
															Qatar
														</option><option value="Romania">
															Romania
														</option><option value="Russia">
															Russia
														</option><option value="Saint Lucia">
															Saint Lucia
														</option><option value="Samoa">
															Samoa, American
														</option><option value="Saudi Arabia">
															Saudi Arabia
														</option><option value="Singapore">
															Singapore
														</option><option value="South Sudan">
															South Sudan, Republic of
														</option><option value="Spain">
															Spain
														</option><option value="Sri Lanka">
															Sri Lanka
														</option><option value="Sudan">
															Sudan, Republic of
														</option><option value="Swaziland">
															Swaziland
														</option><option value="Sweden">
															Sweden
														</option><option value="Switzerland">
															Switzerland
														</option><option value="Syria">
															Syria
														</option><option value="Taiwan">
															Taiwan
														</option><option value="Tajikistan">
															Tajikistan
														</option><option value="Tanzania">
															Tanzania, United Republic Of
														</option><option value="Thailand">
															Thailand
														</option><option value="Togolese">
															Togolese Republic
														</option><option value="Tonga">
															Tonga
														</option><option value="Trinidad">
															Trinidad &amp; Tobago, Republic of
														</option><option value="Tunisia">
															Tunisia
														</option><option value="Turkey">
															Turkey
														</option><option value="Turkmenistan">
															Turkmenistan
														</option><option value="Tuvalu">
															Tuvalu
														</option><option value="United Arab Emirates">
															United Arab Emirates
														</option><option value="  United States of America">
															United States of America
														</option><option value="Uruguay">
															Uruguay
														</option><option value="Uzbekistan">
															Uzbekistan
														</option><option value="Vanuatu">
															Vanuatu
														</option><option value="Venezuela">
															Venezuela
														</option><option value="Western Sahara">
															Western Sahara
														</option><option value="Yemen">
															Yemen, Republic of
														</option><option value="Zambia">
															Zambia
														</option><option value="Zimbabwe">
															Zimbabwe
														</option>
														
													</select>
													
												</div>
												
											</div>  
											
										</div>
										
										<div class="control-group form-field">
											<label class="control-label">
												City of birth
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="pcityofbirth" required="required">
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Are you a citizen of a country/territory other than the one on your passport?
											</label>
											<div class="controls">
												<div class="input-append">
													<select name="hasOtherCitizenship" id="hasOtherCitizenship" required="required">
														<option value="Not selected">
															Select
														</option>
														<option value="Yes">
															Yes
														</option>
														<option value="No">
															No
														</option>
													</select>
												</div>
											</div>
										</div>
							   
							   
										<div class="control-group form-field" id="CitizenshipsInfoCon">
										
											<label class="control-label">Citizenships Information</label>
											
											<div class="controls">
											
												<div class="input-append">
												   <select name="CitizenshipsInfo" id="CitizenshipsInfo" required="required">
													<option value="Select">
														Select
													</option>
													<option value="Afghanistan">
														Afghanistan
													</option><option value="Albania">
														Albania
													</option><option value="Algeria">
														Algeria
													</option><option value="Andorra">
														Andorra
													</option><option value="Angola">
														Angola
													</option><option value="Antigua">
														Antigua And Barbuda
													</option><option value="Argentina">
														Argentina
													</option><option value="Armenia">
														Armenia
													</option><option value="Australia">
														Australia
													</option><option value="Austria">
														Austria
													</option><option value="Azerbaijan">
														Azerbaijan
													</option><option value="Bahamas">
														Bahamas, Commonwealth of the
													</option><option value="Bahrain">
														Bahrain
													</option><option value="Bangladesh">
														Bangladesh
													</option><option value="Barbados">
														Barbados
													</option><option value="Belarus">
														Belarus
													</option><option value="Belgium">
														Belgium
													</option><option value="Belize">
														Belize
													</option><option value="Benin">
														Benin, Republic of
													</option><option value="Bhutan">
														Bhutan
													</option><option value="Bolivia">
														Bolivia
													</option><option value="Bosnia and Herzegovina">
														Bosnia and Herzegovina
													</option><option value="Botswana">
														Botswana, Republic Of
													</option><option value="Brazil">
														Brazil
													</option><option value="British Citizen">
														British Citizen
													</option><option value="British National Overseas">
														British National Overseas
													</option><option value="British Overseas Citizen">
														British Overseas Citizen
													</option><option value="Brunei">
														Brunei
													</option><option value="Bulgaria">
														Bulgaria
													</option><option value="Burkina Faso">
														Burkina Faso
													</option><option value="Burundi">
														Burundi
													</option><option value="Cambodia">
														Cambodia
													</option><option value="Cameroon">
														Cameroon, Republic of
													</option><option value="Canada">
														Canada
													</option><option value="Cape Verde">
														Cape Verde Islands
													</option><option value="Central African">
														Central African Republic
													</option><option value="Chad, Republic Of">
														Chad, Republic Of
													</option>
													<option value="China">
														China, People's Republic of
													</option><option value="Colombia">
														Colombia
													</option><option value="Comoros">
														Comoros
													</option><option value="Costa Rica">
														Costa Rica
													</option><option value="Cote d'Ivoire">
														Cote d'Ivoire, Republic of
													</option><option value="Croatia">
														Croatia
													</option><option value="Cuba">
														Cuba
													</option><option value="Cyprus">
														Cyprus
													</option><option value="Czech Republic">
														Czech Republic
													</option><option value="Denmark">
														Denmark
													</option><option value="Djibouti, Republic of">
														Djibouti, Republic of
													</option><option value="Dominica">
														Dominica, Commonwealth of
													</option><option value="Dominican">
														Dominican Republic
													</option><option value="DPR Korea">
														DPR Korea (North)
													</option><option value="East Timor">
														East Timor
													</option><option value=" Ecuador">
														Ecuador
													</option><option value="Egypt">
														Egypt
													</option><option value="El Salvador">
														El Salvador
													</option><option value="Eritrea">
														Eritrea
													</option><option value="Estonia">
														Estonia
													</option><option value="Ethiopia">
														Ethiopia
													</option><option value="Federated States">
														Federated States of Micronesia
													</option><option value="Fiji">
														Fiji
													</option><option value="Finland">
														Finland
													</option><option value="France">
														France
													</option><option value="FYR Macedonia">
														FYR Macedonia
													</option><option value="Gabonese">
														Gabonese Republic
													</option><option value="Gambia">
														Gambia
													</option><option value="Georgia">
														Georgia
													</option><option value="Germany">
														Germany
													</option><option value="Ghana">
														Ghana
													</option><option value="Greece">
														Greece
													</option><option value="Grenada">
														Grenada
													</option><option value="Guatemala">
														Guatemala
													</option><option value="Haiti">
														Haiti
													</option><option value="Hong Kong SAR">
														Hong Kong SAR
													</option><option value="Hungary">
														Hungary
													</option><option value="Iceland">
														Iceland
													</option><option value="India">
														India
													</option><option value="Indonesia">
														Indonesia, Republic of
													</option><option value="Iran">
														Iran
													</option><option value="Iraq">
														Iraq
													</option><option value="Ireland">
														Ireland, Republic Of
													</option><option value="Israel">
														Israel
													</option><option value="Italy">
														Italy
													</option><option value="Jamaica">
														Jamaica
													</option><option value="Japan">
														Japan
													</option><option value="Jordan">
														Jordan
													</option><option value="Kenya">
														Kenya
													</option><option value="Korea">
														Korea, Republic Of (South)
													</option><option value="Kuwait">
														Kuwait
													</option><option value="Lebanon">
														Lebanon
													</option><option value="Lesotho">
														Lesotho
													</option><option value="Liberia">
														Liberia
													</option><option value="Libya">
														Libya
													</option><option value="Malaysia">
														Malaysia
													</option><option value="Mexico">
														Mexico
													</option><option value="Monaco">
														Monaco
													</option><option value="Mongolia">
														Mongolia
													</option><option value="Morocco">
														Morocco
													</option><option value="Mozambique">
														Mozambique
													</option><option value="Nepal">
														Nepal
													</option><option value="New Zealand">
														New Zealand
													</option><option value="Norway">
														Norway
													</option><option value="Oman">
														Oman
													</option><option value="Pakistan">
														Pakistan
													</option><option value="Palestinian">
														Palestinian Autho.Gaza/W Bank
													</option><option value="Panama">
														Panama, Republic of
													</option><option value="Philippines">
														Philippines
													</option><option value="Poland">
														Poland
													</option><option value="Qatar">
														Qatar
													</option><option value="Romania">
														Romania
													</option><option value="Russia">
														Russia
													</option><option value="Saint Lucia">
														Saint Lucia
													</option><option value="Samoa">
														Samoa, American
													</option><option value="Saudi Arabia">
														Saudi Arabia
													</option><option value="Singapore">
														Singapore
													</option><option value="South Sudan">
														South Sudan, Republic of
													</option><option value="Spain">
														Spain
													</option><option value="Sri Lanka">
														Sri Lanka
													</option><option value="Sudan">
														Sudan, Republic of
													</option><option value="Swaziland">
														Swaziland
													</option><option value="Sweden">
														Sweden
													</option><option value="Switzerland">
														Switzerland
													</option><option value="Syria">
														Syria
													</option><option value="Taiwan">
														Taiwan
													</option><option value="Tajikistan">
														Tajikistan
													</option><option value="Tanzania">
														Tanzania, United Republic Of
													</option><option value="Thailand">
														Thailand
													</option><option value="Togolese">
														Togolese Republic
													</option><option value="Tonga">
														Tonga
													</option><option value="Trinidad">
														Trinidad &amp; Tobago, Republic of
													</option><option value="Tunisia">
														Tunisia
													</option><option value="Turkey">
														Turkey
													</option><option value="Turkmenistan">
														Turkmenistan
													</option><option value="Tuvalu">
														Tuvalu
													</option><option value="United Arab Emirates">
														United Arab Emirates
													</option><option value="  United States of America">
														United States of America
													</option><option value="Uruguay">
														Uruguay
													</option><option value="Uzbekistan">
														Uzbekistan
													</option><option value="Vanuatu">
														Vanuatu
													</option><option value="Venezuela">
														Venezuela
													</option><option value="Western Sahara">
														Western Sahara
													</option><option value="Yemen">
														Yemen, Republic of
													</option><option value="Zambia">
														Zambia
													</option><option value="Zimbabwe">
														Zimbabwe
													</option>
													
												</select>
												
												</div>
												
											</div>
											
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Gender
											</label>
											<div class="controls">
												<div class="input-append">
													<select name="papplyGender" required="required">
														<option value="Not Selected">
															Select
														</option>
														<option value="Female">
															Female
														</option><option value="Male">
															Male
														</option><option value="Other">
															Other
														</option>
													</select>
												</div>
											</div>
										</div>
			 
										<div class="control-group form-field">
											<label class="control-label">
												Marital status
											</label>
											<div class="controls">
												<div class="input-append">
													<select name="maritalStatus" required="required">
														<option value="Not Selected" disabled="" selected="" style="display: none;" class="">Please select</option>
														<option value="Married">Married</option>
														<option value="Legally Separated">Legally Separated</option>
														<option value="Divorced">Divorced</option>
														<option value="Annulled Marriage">Annulled Marriage</option>
														<option value="Widowed">Widowed</option>
														<option value="Common-Law">Common-Law</option>
														<option value="Never Married/Single">Never Married/Single</option>
													</select>
												</div>
											</div>
										</div>
							   
										<div class="control-group form-field">
											<label class="control-label">
												Have you previously applied to enter or remain in Canada? Select YES if, in the past, you submitted an application to come to Canada, such as a study permit, work permit or visitor visa.
											</label>
											<div class="controls">
												<div class="input-append">
													<select name="phasPreviouslyAppliedToCanada" id="hasPreviouslyApplied" required="required">
														<option value="Select">
															Select
														</option>
														<option value="Yes">
															Yes
														</option>
														<option value="No">
															No
														</option>
													</select>
												</div>
											</div>
										</div>
										<div class="control-group form-field" id="UICnumber">
											<label class="control-label">
												Unique client identifier (UCI) / Previous Canadian visa or permit number
											</label>
											<div class="controls">
												<div class="input-append">
												   <input type="text" name="UICnuumb" />
												</div>
											</div>
										</div>
							   
							   
										<div class="control-group form-field">
											<label class="control-label">
												Funds available for travel to Canada
											</label>
											<div class="controls">
												<div class="input-append">
													<select name="pavailableFunds" required="required">
														<option value="Not Selected">
															Select
														</option>
														<option value="$0">
															$0
														</option><option value="1 - $999">
															$1 - $999
														</option><option value="$1,000 - $2,999">
															$1,000 - $2,999
														</option><option value="$3,000 - $4,999">
															$3,000 - $4,999
														</option><option value="$5,000 - $9,999">
															$5,000 - $9,999
														</option><option value="$10,000 - $49,999">
															$10,000 - $49,999
														</option><option value="$50,000 and more">
															$50,000 and more
														</option>
													</select>
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Passport number
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" id="ppassportNumber" name="ppassportNumber" maxlength="30" required="required">
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Country/territory of issue
											</label>
											<div class="controls">
												<div class="input-append">
													   <select name="pcountryOfIssuance" required="required">
													<option value="Not Selected">
														Select
													</option>
													<option value="Afghanistan">
														Afghanistan
													</option><option value="Albania">
														Albania
													</option><option value="Algeria">
														Algeria
													</option><option value="Andorra">
														Andorra
													</option><option value="Angola">
														Angola
													</option><option value="Antigua">
														Antigua And Barbuda
													</option><option value="Argentina">
														Argentina
													</option><option value="Armenia">
														Armenia
													</option><option value="Australia">
														Australia
													</option><option value="Austria">
														Austria
													</option><option value="Azerbaijan">
														Azerbaijan
													</option><option value="Bahamas">
														Bahamas, Commonwealth of the
													</option><option value="Bahrain">
														Bahrain
													</option><option value="Bangladesh">
														Bangladesh
													</option><option value="Barbados">
														Barbados
													</option><option value="Belarus">
														Belarus
													</option><option value="Belgium">
														Belgium
													</option><option value="Belize">
														Belize
													</option><option value="Benin">
														Benin, Republic of
													</option><option value="Bhutan">
														Bhutan
													</option><option value="Bolivia">
														Bolivia
													</option><option value="Bosnia and Herzegovina">
														Bosnia and Herzegovina
													</option><option value="Botswana">
														Botswana, Republic Of
													</option><option value="Brazil">
														Brazil
													</option><option value="British Citizen">
														British Citizen
													</option><option value="British National Overseas">
														British National Overseas
													</option><option value="British Overseas Citizen">
														British Overseas Citizen
													</option><option value="Brunei">
														Brunei
													</option><option value="Bulgaria">
														Bulgaria
													</option><option value="Burkina Faso">
														Burkina Faso
													</option><option value="Burundi">
														Burundi
													</option><option value="Cambodia">
														Cambodia
													</option><option value="Cameroon">
														Cameroon, Republic of
													</option><option value="Canada">
														Canada
													</option><option value="Cape Verde">
														Cape Verde Islands
													</option><option value="Central African">
														Central African Republic
													</option><option value="Chad, Republic Of">
														Chad, Republic Of
													</option>
													<option value="China">
														China, People's Republic of
													</option><option value="Colombia">
														Colombia
													</option><option value="Comoros">
														Comoros
													</option><option value="Costa Rica">
														Costa Rica
													</option><option value="Cote d'Ivoire">
														Cote d'Ivoire, Republic of
													</option><option value="Croatia">
														Croatia
													</option><option value="Cuba">
														Cuba
													</option><option value="Cyprus">
														Cyprus
													</option><option value="Czech Republic">
														Czech Republic
													</option><option value="Denmark">
														Denmark
													</option><option value="Djibouti, Republic of">
														Djibouti, Republic of
													</option><option value="Dominica">
														Dominica, Commonwealth of
													</option><option value="Dominican">
														Dominican Republic
													</option><option value="DPR Korea">
														DPR Korea (North)
													</option><option value="East Timor">
														East Timor
													</option><option value=" Ecuador">
														Ecuador
													</option><option value="Egypt">
														Egypt
													</option><option value="El Salvador">
														El Salvador
													</option><option value="Eritrea">
														Eritrea
													</option><option value="Estonia">
														Estonia
													</option><option value="Ethiopia">
														Ethiopia
													</option><option value="Federated States">
														Federated States of Micronesia
													</option><option value="Fiji">
														Fiji
													</option><option value="Finland">
														Finland
													</option><option value="France">
														France
													</option><option value="FYR Macedonia">
														FYR Macedonia
													</option><option value="Gabonese">
														Gabonese Republic
													</option><option value="Gambia">
														Gambia
													</option><option value="Georgia">
														Georgia
													</option><option value="Germany">
														Germany
													</option><option value="Ghana">
														Ghana
													</option><option value="Greece">
														Greece
													</option><option value="Grenada">
														Grenada
													</option><option value="Guatemala">
														Guatemala
													</option><option value="Haiti">
														Haiti
													</option><option value="Hong Kong SAR">
														Hong Kong SAR
													</option><option value="Hungary">
														Hungary
													</option><option value="Iceland">
														Iceland
													</option><option value="India">
														India
													</option><option value="Indonesia">
														Indonesia, Republic of
													</option><option value="Iran">
														Iran
													</option><option value="Iraq">
														Iraq
													</option><option value="Ireland">
														Ireland, Republic Of
													</option><option value="Israel">
														Israel
													</option><option value="Italy">
														Italy
													</option><option value="Jamaica">
														Jamaica
													</option><option value="Japan">
														Japan
													</option><option value="Jordan">
														Jordan
													</option><option value="Kenya">
														Kenya
													</option><option value="Korea">
														Korea, Republic Of (South)
													</option><option value="Kuwait">
														Kuwait
													</option><option value="Lebanon">
														Lebanon
													</option><option value="Lesotho">
														Lesotho
													</option><option value="Liberia">
														Liberia
													</option><option value="Libya">
														Libya
													</option><option value="Malaysia">
														Malaysia
													</option><option value="Mexico">
														Mexico
													</option><option value="Monaco">
														Monaco
													</option><option value="Mongolia">
														Mongolia
													</option><option value="Morocco">
														Morocco
													</option><option value="Mozambique">
														Mozambique
													</option><option value="Nepal">
														Nepal
													</option><option value="New Zealand">
														New Zealand
													</option><option value="Norway">
														Norway
													</option><option value="Oman">
														Oman
													</option><option value="Pakistan">
														Pakistan
													</option><option value="Palestinian">
														Palestinian Autho.Gaza/W Bank
													</option><option value="Panama">
														Panama, Republic of
													</option><option value="Philippines">
														Philippines
													</option><option value="Poland">
														Poland
													</option><option value="Qatar">
														Qatar
													</option><option value="Romania">
														Romania
													</option><option value="Russia">
														Russia
													</option><option value="Saint Lucia">
														Saint Lucia
													</option><option value="Samoa">
														Samoa, American
													</option><option value="Saudi Arabia">
														Saudi Arabia
													</option><option value="Singapore">
														Singapore
													</option><option value="South Sudan">
														South Sudan, Republic of
													</option><option value="Spain">
														Spain
													</option><option value="Sri Lanka">
														Sri Lanka
													</option><option value="Sudan">
														Sudan, Republic of
													</option><option value="Swaziland">
														Swaziland
													</option><option value="Sweden">
														Sweden
													</option><option value="Switzerland">
														Switzerland
													</option><option value="Syria">
														Syria
													</option><option value="Taiwan">
														Taiwan
													</option><option value="Tajikistan">
														Tajikistan
													</option><option value="Tanzania">
														Tanzania, United Republic Of
													</option><option value="Thailand">
														Thailand
													</option><option value="Togolese">
														Togolese Republic
													</option><option value="Tonga">
														Tonga
													</option><option value="Trinidad">
														Trinidad &amp; Tobago, Republic of
													</option><option value="Tunisia">
														Tunisia
													</option><option value="Turkey">
														Turkey
													</option><option value="Turkmenistan">
														Turkmenistan
													</option><option value="Tuvalu">
														Tuvalu
													</option><option value="United Arab Emirates">
														United Arab Emirates
													</option><option value="  United States of America">
														United States of America
													</option><option value="Uruguay">
														Uruguay
													</option><option value="Uzbekistan">
														Uzbekistan
													</option><option value="Vanuatu">
														Vanuatu
													</option><option value="Venezuela">
														Venezuela
													</option><option value="Western Sahara">
														Western Sahara
													</option><option value="Yemen">
														Yemen, Republic of
													</option><option value="Zambia">
														Zambia
													</option><option value="Zimbabwe">
														Zimbabwe
													</option>
												</select>
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Issue date
											</label>
											<div class="controls">
												<div class="input-append">
													<input type="date" name="pissueDate" required="required" />
												</div>
											</div>
										</div>
										<div class="control-group form-field">
											<label class="control-label">
												Expiry date
											</label>
											<div class="controls">
												<div class="input-append">
												   <input type="date" name="pexpiryDat" required="required" />
												</div>
											</div>
										</div>
									</div>
									<div>
										<div id="employment-information">
											<h2>Employment information</h2>
											<div class="control-group form-field">
												  <label class="control-label">
													  <b>Occupation</b><br>
													  Select the option that best describes your current employment situation.
												  </label>
												  <div class="controls">
													  <div class="input-append">
														  <select name="employmentOccupation" id="employmentOccupation" required="required">
															  <option value="Not Selected" disabled="" selected="" style="display: none;" class="">Please select</option>
															  <option value="Art, culture, recreation and sport occupations">Art, culture, recreation and sport occupations</option>
															  <option value="Business, finance and administration occupations">Business, finance and administration occupations</option>
															  <option value="Education, law and social, community and government services occupations">Education, law and social, community and government services occupations</option>
															  <option value="Health occupations">Health occupations</option>
															  <option value="Homemaker">Homemaker</option>
															  <option value="Management occupations">Management occupations</option>
															  <option value="Manufacturing and utilities occupations">Manufacturing and utilities occupations</option>
															  <option value="Military/armed forces">Military/armed forces</option>
															  <option value="Natural and applied sciences and related occupations">Natural and applied sciences and related occupations</option>
															  <option value="Natural resources, agriculture and related production occupations">Natural resources, agriculture and related production occupations</option>
															  <option value="Retired">Retired</option>
															  <option value="Sales and service occupations">Sales and service occupations</option>
															  <option value="Student">Student</option>
															  <option value="Trades, transport and equipment operators and related occupations">Trades, transport and equipment operators and related occupations</option>
															  <option value="Unemployed">Unemployed</option>
														  </select>
													  </div>
												  </div>
											</div>
											<div id="employment-details" style="display: none;">
											
												<div class="control-group form-field" id="employmentTitleBlock">
												
													<label class="control-label">
													
														  <b>Job title</b><br>
														  Select the option that best describes your job.
													  </label>
													  
													<div class="controls">
													
														<div class="input-append">
														
															<select name="employmentTitle" id="employmentTitle" required="required">
																
																<option value="Not Selected" disabled="" selected="" style="display: none;" class="">Please select</option>
			 
																	<!-- Art, culture, recreation and sport occupations -->
																	<option class="emp-art" value="Announcers and other performers">Announcers and other performers</option>
																	<option class="emp-art" value="Athletes, coaches, referees and related occupations">Athletes, coaches, referees and related occupations</option>
																	<option class="emp-art" value="Creative and performing artists">Creative and performing artists</option>
																	<option class="emp-art" value="Creative designers and craftspersons">Creative designers and craftspersons</option>
																	<option class="emp-art" value="Librarian, archivist, conservator or curator">Librarian, archivist, conservator or curator</option>
																	<option class="emp-art" value="Photographers, graphic arts technicians, technical and coordinating occupations in motion pictures, broadcasting and the performing arts">Photographers, graphic arts technicians, technical and coordinating occupations in motion pictures, broadcasting and the performing arts</option>
																	<option class="emp-art" value="Technical occupations in libraries, public archives, museums and art galleries">Technical occupations in libraries, public archives, museums and art galleries</option>
																	<option class="emp-art" value="Writing, translating and related communications professionals">Writing, translating and related communications professionals</option>

																	<!-- Business, finance and administration occupations -->
																	<option class="emp-business" value="Administrative and regulatory occupations">Administrative and regulatory occupations</option>
																	<option class="emp-business" value="Administrative services supervisors">Administrative services supervisors</option>
																	<option class="emp-business" value="Auditors, accountants and investment professionals">Auditors, accountants and investment professionals</option>
																	<option class="emp-business" value="Court reporters, transcriptionists, records management technicians and statistical officers">Court reporters, transcriptionists, records management technicians and statistical officers</option>
																	<option class="emp-business" value="Finance, insurance and related business administrative occupations">Finance, insurance and related business administrative occupations</option>
																	<option class="emp-business" value="Financial, insurance and related administrative support workers">Financial, insurance and related administrative support workers</option>
																	<option class="emp-business" value="General office workers">General office workers</option>
																	<option class="emp-business" value="Human resources and business service professionals">Human resources and business service professionals</option>
																	<option class="emp-business" value="Library, correspondence and other clerks">Library, correspondence and other clerks</option>
																	<option class="emp-business" value="Mail and message distribution occupations">Mail and message distribution occupations</option>
																	<option class="emp-business" value="Office administrative assistants - general, legal and medical">Office administrative assistants - general, legal and medical</option>
																	<option class="emp-business" value="Office equipment operators">Office equipment operators</option>
																	<option class="emp-business" value="Supply chain logistics, tracking and scheduling coordination occupations">Supply chain logistics, tracking and scheduling coordination occupations</option>

																	<!-- Education, law and social, community and government services occupations -->
																	<option class="emp-edu" value="College and other vocational instructors">College and other vocational instructors</option>
																	<option class="emp-edu" value="Home care providers and educational support occupations">Home care providers and educational support occupations</option>
																	<option class="emp-edu" value="Judges, lawyers and notaries">Judges, lawyers and notaries</option>
																	<option class="emp-edu" value="Legal and public protection support occupations">Legal and public protection support occupations</option>
																	<option class="emp-edu" value="Occupations in front-line public protection services">Occupations in front-line public protection services</option>
																	<option class="emp-edu" value="Paraprofessional occupations in legal, social, community and education services">Paraprofessional occupations in legal, social, community and education services</option>
																	<option class="emp-edu" value="Policy and program researchers, consultants and officers">Policy and program researchers, consultants and officers</option>
																	<option class="emp-edu" value="Secondary and elementary school teachers and educational counsellors">Secondary and elementary school teachers and educational counsellors</option>
																	<option class="emp-edu" value="Social and community service professionals">Social and community service professionals</option>
																	<option class="emp-edu" value="University professors and post-secondary assistants">University professors and post-secondary assistants</option>

																	<!-- Health occupations -->
																	<option class="emp-heal" value="Assisting occupations in support of health services">Assisting occupations in support of health services</option>
																	<option class="emp-heal" value="Medical technologists and technicians">Medical technologists and technicians</option>
																	<option class="emp-heal" value="Optometrists, chiropractors, other health diagnosing and treating professionals">Optometrists, chiropractors, other health diagnosing and treating professionals</option>
																	<option class="emp-heal" value="Other technical occupations in health care">Other technical occupations in health care</option>
																	<option class="emp-heal" value="Pharmacists, dieticians and nutritionists">Pharmacists, dieticians and nutritionists</option>
																	<option class="emp-heal" value="Physicians, dentists and veterinarians">Physicians, dentists and veterinarians</option>
																	<option class="emp-heal" value="Professional occupations in nursing">Professional occupations in nursing</option>
																	<option class="emp-heal" value="Technical occupations in dental health care">Technical occupations in dental health care</option>
																	<option class="emp-heal" value="Therapy and assessment professionals">Therapy and assessment professionals</option>

																	<!-- Management occupations -->
																	<option class="emp-manag" value="Administrative services managers">Administrative services managers</option>
																	<option class="emp-manag" value="Corporate sales managers">Corporate sales managers</option>
																	<option class="emp-manag" value="Legislators and senior management, including political officials">Legislators and senior management, including political officials</option>
																	<option class="emp-manag" value="Managers in agriculture, horticulture and aquaculture">Managers in agriculture, horticulture and aquaculture</option>
																	<option class="emp-manag" value="Managers in art, culture, recreation and sport">Managers in art, culture, recreation and sport</option>
																	<option class="emp-manag" value="Managers in communication">Managers in communication</option>
																	<option class="emp-manag" value="Managers in construction,  facility operation and maintenance">Managers in construction,  facility operation and maintenance</option>
																	<option class="emp-manag" value="Managers in customer and personal services">Managers in customer and personal services</option>
																	<option class="emp-manag" value="Managers in education and social and community services">Managers in education and social and community services</option>
																	<option class="emp-manag" value="Managers in engineering, architecture, science and information systems">Managers in engineering, architecture, science and information systems</option>
																	<option class="emp-manag" value="Managers in financial and business services">Managers in financial and business services</option>
																	<option class="emp-manag" value="Managers in food service and accommodation">Managers in food service and accommodation</option>
																	<option class="emp-manag" value="Managers in health care">Managers in health care</option>
																	<option class="emp-manag" value="Managers in manufacturing and utilities">Managers in manufacturing and utilities</option>
																	<option class="emp-manag" value="Managers in natural resources production and fishing">Managers in natural resources production and fishing</option>
																	<option class="emp-manag" value="Managers in public administration">Managers in public administration</option>
																	<option class="emp-manag" value="Managers in public protection services">Managers in public protection services</option>
																	<option class="emp-manag" value="Managers in transportation">Managers in transportation</option>
																	<option class="emp-manag" value="Retail and wholesale trade managers">Retail and wholesale trade managers</option>

																	<!-- Manufacturing and utilities occupations -->
																	<option class="emp-manuf" value="Central control and process operators in processing and manufacturing">Central control and process operators in processing and manufacturing</option>
																	<option class="emp-manuf" value="Labourers in processing, manufacturing and utilities">Labourers in processing, manufacturing and utilities</option>
																	<option class="emp-manuf" value="Machine operators and related workers in chemical, plastic and rubber processing">Machine operators and related workers in chemical, plastic and rubber processing</option>
																	<option class="emp-manuf" value="Machine operators and related workers in food, beverage and associated products processing">Machine operators and related workers in food, beverage and associated products processing</option>
																	<option class="emp-manuf" value="Machine operators and related workers in mineral and metal products processing and manufacturing">Machine operators and related workers in mineral and metal products processing and manufacturing</option>
																	<option class="emp-manuf" value="Machine operators and related workers in pulp and paper production and wood processing and manufacturing">Machine operators and related workers in pulp and paper production and wood processing and manufacturing</option>
																	<option class="emp-manuf" value="Machine operators and related workers in textile, fabric, fur and leather products processing and manufacturing">Machine operators and related workers in textile, fabric, fur and leather products processing and manufacturing</option>
																	<option class="emp-manuf" value="Mechanical, electrical and electronics assemblers">Mechanical, electrical and electronics assemblers</option>
																	<option class="emp-manuf" value="Other assembly and related occupations">Other assembly and related occupations</option>
																	<option class="emp-manuf" value="Printing equipment operators and related occupations">Printing equipment operators and related occupations</option>
																	<option class="emp-manuf" value="Supervisors in assembly and fabrication">Supervisors in assembly and fabrication</option>
																	<option class="emp-manuf" value="Supervisors in processing and manufacturing occupations">Supervisors in processing and manufacturing occupations</option>
																	<option class="emp-manuf" value="Utilities equipment operators and controllers">Utilities equipment operators and controllers</option>

																	<!-- Military/armed forces -->
																	<option class="emp-army" value="Aerospace Control Officer">Aerospace Control Officer</option>
																	<option class="emp-army" value="Aerospace Control Operator">Aerospace Control Operator</option>
																	<option class="emp-army" value="Aerospace Engineering Officer">Aerospace Engineering Officer</option>
																	<option class="emp-army" value="Aerospace Telecommunication and Information Systems Technician">Aerospace Telecommunication and Information Systems Technician</option>
																	<option class="emp-army" value="Air Combat Systems Officer">Air Combat Systems Officer</option>
																	<option class="emp-army" value="Aircraft Structures Technician">Aircraft Structures Technician</option>
																	<option class="emp-army" value="Armour Officer">Armour Officer</option>
																	<option class="emp-army" value="Armoured Soldier">Armoured Soldier</option>
																	<option class="emp-army" value="Artillery Officer">Artillery Officer</option>
																	<option class="emp-army" value="Artillery Soldier - Field">Artillery Soldier - Field</option>
																	<option class="emp-army" value="Artillery Soldier / Air Defence">Artillery Soldier / Air Defence</option>
																	<option class="emp-army" value="Aviation Systems Technician">Aviation Systems Technician</option>
																	<option class="emp-army" value="Avionics Systems Technician">Avionics Systems Technician</option>
																	<option class="emp-army" value="Biomedical Electronics Technologist">Biomedical Electronics Technologist</option>
																	<option class="emp-army" value="Boatswain">Boatswain</option>
																	<option class="emp-army" value="Chaplain">Chaplain</option>
																	<option class="emp-army" value="Combat Engineer">Combat Engineer</option>
																	<option class="emp-army" value="Communications and Electronics Engineering (Air) Officer">Communications and Electronics Engineering (Air) Officer</option>
																	<option class="emp-army" value="Communicator Research Operator">Communicator Research Operator</option>
																	<option class="emp-army" value="Construction Technician">Construction Technician</option>
																	<option class="emp-army" value="Cook">Cook</option>
																	<option class="emp-army" value="Dental Office">Dental Officer</option>
																	<option class="emp-army" value="Electrical and Mechanical Engineering Officer">Electrical and Mechanical Engineering Officer</option>
																	<option class="emp-army" value="Electrical Distribution Technician">Electrical Distribution Technician</option>
																	<option class="emp-army" value="Electrical Generating Systems Technician">Electrical Generating Systems Technician</option>
																	<option class="emp-army" value="Engineering Officer">Engineering Officer</option>
																	<option class="emp-army" value="Fire Fighter">Fire Fighter</option>
																	<option class="emp-army" value="Geomatics Technician">Geomatics Technician</option>
																	<option class="emp-army" value="Health Care Administration Officer">Health Care Administration Officer</option>
																	<option class="emp-army" value="Imagery Technician">Imagery Technician</option>
																	<option class="emp-army" value="Infantry Officer">Infantry Officer</option>
																	<option class="emp-army" value=">Infantry Soldier">Infantry Soldier</option>
																	<option class="emp-army" value="Intelligence Officer, Naval Reserve">Intelligence Officer, Naval Reserve</option>
																	<option class="emp-army" value="Intelligence Operator">Intelligence Operator</option>
																	<option class="emp-army" value="Land Communications and Information Systems Technician">Land Communications and Information Systems Technician</option>
																	<option class="emp-army" value="Legal Officer">Legal Officer</option>
																	<option class="emp-army" value="Line Technician">Line Technician</option>
																	<option class="emp-army" value="Logistics (Support), Naval Reserve Officer">Logistics (Support), Naval Reserve Officer</option>
																	<option class="emp-army" value="Logistics Officer">Logistics Officer</option>
																	<option class="emp-army" value="Maritime Surface and Sub-surface Officer">Maritime Surface and Sub-surface Officer</option>
																	<option class="emp-army" value="Medical Officer">Medical Officer</option>
																	<option class="emp-army" value="Medical Technician">Medical Technician</option>
																	<option class="emp-army" value="Military Police">Military Police</option>
																	<option class="emp-army" value="Military Police Officer">Military Police Officer</option>
																	<option class="emp-army" value="Mobile Support Equipment Operator">Mobile Support Equipment Operator</option>
																	<option class="emp-army" value="Musician">Musician</option>
																	<option class="emp-army" value="Naval Combat Information Operator">Naval Combat Information Operator</option>
																	<option class="emp-army" value="Naval Communicator">Naval Communicator</option>
																	<option class="emp-army" value="Nursing Officer">Nursing Officer</option>
																	<option class="emp-army" value="Personnel Selection Officer">Personnel Selection Officer</option>
																	<option class="emp-army" value="Pharmacy Officer">Pharmacy Officer</option>
																	<option class="emp-army" value="Pilot">Pilot</option>
																	<option class="emp-army" value="Plumbing and Heating Technician">Plumbing and Heating Technician</option>
																	<option class="emp-army" value="Port Inspection Diver">Port Inspection Diver</option>
																	<option class="emp-army" value="Public Affairs Officer">Public Affairs Officer</option>
																	<option class="emp-army" value="Refrigeration and Mechanical Systems Technician">Refrigeration and Mechanical Systems Technician</option>
																	<option class="emp-army" value="Resource Management Support Clerk, Air Reserve">Resource Management Support Clerk, Air Reserve</option>
																	<option class="emp-army" value="Resource Management Support Clerk, Army Reserve">Resource Management Support Clerk, Army Reserve</option>
																	<option class="emp-army" value="Resource Management Support Clerk, Naval Reserve">Resource Management Support Clerk, Naval Reserve</option>
																	<option class="emp-army" value="Signal Operator">Signal Operator</option>
																	<option class="emp-army" value="Signals (Officer)">Signals (Officer)</option>
																	<option class="emp-army" value="Supply Technician, Air Reserve">Supply Technician, Air Reserve</option>
																	<option class="emp-army" value="Supply Technician, Army Reserve">Supply Technician, Army Reserve</option>
																	<option class="emp-army" value="Supply Technician, Naval Reserve">Supply Technician, Naval Reserve</option>
																	<option class="emp-army" value="Traffic Technician">Traffic Technician</option>
																	<option class="emp-army" value="Vehicle Technician, Army Reserve">Vehicle Technician, Army Reserve</option>
																	<option class="emp-army" value="Water, Fuels and Environmental Technician">Water, Fuels and Environmental Technician</option>
																	<option class="emp-army" value="Weapons Technician / Land">Weapons Technician / Land</option>

																	<!-- Natural and applied sciences and related occupations -->
																	<option class="emp-tech" value="Architects, urban planners and land surveyors">Architects, urban planners and land surveyors</option>
																	<option class="emp-tech" value="Civil, mechanical, electrical and chemical engineers">Civil, mechanical, electrical and chemical engineers</option>
																	<option class="emp-tech" value="Computer and information systems professionals">Computer and information systems professionals</option>
																	<option class="emp-tech" value="Life science professionals">Life science professionals</option>
																	<option class="emp-tech" value="Mathematicians, statisticians and actuaries">Mathematicians, statisticians and actuaries</option>
																	<option class="emp-tech" value="Other engineers">Other engineers</option>
																	<option class="emp-tech" value="Other technical inspectors and regulatory officers">Other technical inspectors and regulatory officers</option>
																	<option class="emp-tech" value="Physical science professionals">Physical science professionals</option>
																	<option class="emp-tech" value="Technical occupations in architecture, drafting, surveying, geomatics and meteorology">Technical occupations in architecture, drafting, surveying, geomatics and meteorology</option>
																	<option class="emp-tech" value="Technical occupations in civil, mechanical and industrial engineering">Technical occupations in civil, mechanical and industrial engineering</option>
																	<option class="emp-tech" value="Technical occupations in computer and information systems">Technical occupations in computer and information systems</option>
																	<option class="emp-tech" value="Technical occupations in electronics and electrical engineering">Technical occupations in electronics and electrical engineering</option>
																	<option class="emp-tech" value="Technical occupations in life sciences">Technical occupations in life sciences</option>
																	<option class="emp-tech" value="Technical occupations in physical science">Technical occupations in physical science</option>
																	<option class="emp-tech" value="Transportation officers and controllers">Transportation officers and controllers</option>

																	<!-- Natural resources, agriculture and related production occupations -->
																	<option class="emp-natur" value="Agriculture and horticulture workers">Agriculture and horticulture workers</option>
																	<option class="emp-natur" value="Contractors and supervisors in agriculture, horticulture and related operations and services">Contractors and supervisors in agriculture, horticulture and related operations and services</option>
																	<option class="emp-natur" value="Contractors and supervisors in mining, oil and gas">Contractors and supervisors in mining, oil and gas</option>
																	<option class="emp-natur" value="Fishing vessel masters and fishermen/fisherwomen">Fishing vessel masters and fishermen/fisherwomen</option>
																	<option class="emp-natur" value="Harvesting, landscaping and natural resources labourers">Harvesting, landscaping and natural resources labourers</option>
																	<option class="emp-natur" value="Logging and forestry workers">Logging and forestry workers</option>
																	<option class="emp-natur" value="Logging machinery operators">Logging machinery operators</option>
																	<option class="emp-natur" value="Mine service workers and operators in oil and gas drilling">Mine service workers and operators in oil and gas drilling</option>
																	<option class="emp-natur" value="Other workers in fishing and trapping and hunting occupations">Other workers in fishing and trapping and hunting occupations</option>
																	<option class="emp-natur" value="Supervisors, logging and forestry">Supervisors, logging and forestry</option>
																	<option class="emp-natur" value="Underground miners, oil and gas drillers and related occupations">Underground miners, oil and gas drillers and related occupations</option>

																	<!-- Sales and service occupations -->
																	<option class="emp-sale" value="Butchers and bakers">Butchers and bakers</option>
																	<option class="emp-sale" value="Cashiers">Cashiers</option>
																	<option class="emp-sale" value="Chefs and cooks">Chefs and cooks</option>
																	<option class="emp-sale" value="Cleaners">Cleaners</option>
																	<option class="emp-sale" value="Customer and information services representatives">Customer and information services representatives</option>
																	<option class="emp-sale" value="Food counter attendants, kitchen helpers and related support occupations">Food counter attendants, kitchen helpers and related support occupations</option>
																	<option class="emp-sale" value="Insurance, real estate and financial sales occupations">Insurance, real estate and financial sales occupations</option>
																	<option class="emp-sale" value="Occupations in food and beverage services">Occupations in food and beverage services</option>
																	<option class="emp-sale" value="Occupations in travel and accommodation">Occupations in travel and accommodation</option>
																	<option class="emp-sale" value="Other occupations in personal services">Other occupations in personal services</option>
																	<option class="emp-sale" value="Other sales support and related occupations">Other sales support and related occupations</option>
																	<option class="emp-sale" value="Other service support and related occupations">Other service support and related occupations</option>
																	<option class="emp-sale" value="Retail sales supervisors">Retail sales supervisors</option>
																	<option class="emp-sale" value="Retail salespersons">Retail salespersons</option>
																	<option class="emp-sale" value="Sales and account representatives">Sales and account representatives</option>
																	<option class="emp-sale" value="Security guards and related security service occupations">Security guards and related security service occupations</option>
																	<option class="emp-sale" value="Service supervisors">Service supervisors</option>
																	<option class="emp-sale" value="Specialized occupations in personal and customer services">Specialized occupations in personal and customer services</option>
																	<option class="emp-sale" value="Support occupations in accommodation, travel and amusement services">Support occupations in accommodation, travel and amusement services</option>
																	<option class="emp-sale" value="Technical sales specialists in wholesale trade and retail and wholesale buyers">Technical sales specialists in wholesale trade and retail and wholesale buyers</option>
																	<option class="emp-sale" value="Tourism and amusement services occupations">Tourism and amusement services occupations</option>

																	<!-- Trades, transport and equipment operators and related occupations -->
																	<option class="emp-oper" value="Automotive service technicians">Automotive service technicians</option>
																	<option class="emp-oper" value="Carpenters and cabinetmakers">Carpenters and cabinetmakers</option>
																	<option class="emp-oper" value="Contractors and supervisors in industrial, electrical and construction trades and related workers">Contractors and supervisors in industrial, electrical and construction trades and related workers</option>
																	<option class="emp-oper" value="Contractors and supervisors in maintenance trades and heavy equipment and transport operators">Contractors and supervisors in maintenance trades and heavy equipment and transport operators</option>
																	<option class="emp-oper" value="Crane operators, drillers and blasters">Crane operators, drillers and blasters</option>
																	<option class="emp-oper" value="Electrical trades and electrical power line and telecommunications workers">Electrical trades and electrical power line and telecommunications workers</option>
																	<option class="emp-oper" value="Heavy equipment operators">Heavy equipment operators</option>
																	<option class="emp-oper" value="Longshore workers and material handlers">Longshore workers and material handlers</option>
																	<option class="emp-oper" value="Machinery and transportation equipment mechanics">Machinery and transportation equipment mechanics</option>
																	<option class="emp-oper" value="Machining, metal forming, shaping and erecting trades">Machining, metal forming, shaping and erecting trades</option>
																	<option class="emp-oper" value="Masonry and plastering trades">Masonry and plastering trades</option>
																	<option class="emp-oper" value="Motor vehicle and transit drivers">Motor vehicle and transit drivers</option>
																	<option class="emp-oper" value="Other construction trades">Other construction trades</option>
																	<option class="emp-oper" value="Other installers, repairers and servicers">Other installers, repairers and servicers</option>
																	<option class="emp-oper" value="Other mechanics and related repairers">Other mechanics and related repairers</option>
																	<option class="emp-oper" value="Other transport equipment operators and related maintenance workers">Other transport equipment operators and related maintenance workers</option>
																	<option class="emp-oper" value="Plumbers, pipefitters and gas fitters">Plumbers, pipefitters and gas fitters</option>
																	<option class="emp-oper" value="Printing press operators, other trades and related occupations">Printing press operators, other trades and related occupations</option>
																	<option class="emp-oper" value="Public works and other labourers">Public works and other labourers</option>
																	<option class="emp-oper" value="Trades helpers and labourers">Trades helpers and labourers</option>
																	<option class="emp-oper" value="Train crew operating occupations">Train crew operating occupations</option>
			 
																</select>
																
															</div>
															
														</div>
														
													</div>
													
													<div class="control-group form-field">
														<label class="control-label">
															  Please provide the name of company, employer, school or facility as applicable
														</label>
														  <div class="controls">
															  <div class="input-append">
																  <input type="text" name="employmentName" id="employmentName" maxlength="255" >
															  </div>
														  </div>
													</div>
													<div class="control-group form-field">
														<label class="control-label">
														Country/territory
														</label>
														<div class="controls">
															<div class="input-append">
																<select name="employmentCountry" id="employmentCountry" >
																	<option value="Not Selected">
																	  Select
																	</option>
																	<option value="Afghanistan">
																	Afghanistan
																	</option><option value="Albania">
																	Albania
																	</option><option value="Algeria">
																	Algeria
																	</option><option value="Andorra">
																	Andorra
																	</option><option value="Angola">
																	Angola
																	</option><option value="Antigua">
																	Antigua And Barbuda
																	</option><option value="Argentina">
																	Argentina
																	</option><option value="Armenia">
																	Armenia
																	</option><option value="Australia">
																	Australia
																	</option><option value="Austria">
																	Austria
																	</option><option value="Azerbaijan">
																	Azerbaijan
																	</option><option value="Bahamas">
																	Bahamas, Commonwealth of the
																	</option><option value="Bahrain">
																	Bahrain
																	</option><option value="Bangladesh">
																	Bangladesh
																	</option><option value="Barbados">
																	Barbados
																	</option><option value="Belarus">
																	Belarus
																	</option><option value="Belgium">
																	Belgium
																	</option><option value="Belize">
																	Belize
																	</option><option value="Benin">
																	Benin, Republic of
																	</option><option value="Bhutan">
																	Bhutan
																	</option><option value="Bolivia">
																	Bolivia
																	</option><option value="Bosnia and Herzegovina">
																	Bosnia and Herzegovina
																	</option><option value="Botswana">
																	Botswana, Republic Of
																	</option><option value="Brazil">
																	Brazil
																	</option><option value="British Citizen">
																	British Citizen
																	</option><option value="British National Overseas">
																	British National Overseas
																	</option><option value="British Overseas Citizen">
																	British Overseas Citizen
																	</option><option value="Brunei">
																	Brunei
																	</option><option value="Bulgaria">
																	Bulgaria
																	</option><option value="Burkina Faso">
																	Burkina Faso
																	</option><option value="Burundi">
																	Burundi
																	</option><option value="Cambodia">
																	Cambodia
																	</option><option value="Cameroon">
																	Cameroon, Republic of
																	</option><option value="Canada">
																	Canada
																	</option><option value="Cape Verde">
																	Cape Verde Islands
																	</option><option value="Central African">
																	Central African Republic
																	</option><option value="Chad, Republic Of">
																	Chad, Republic Of
																	</option>
																	<option value="China">
																	China, People's Republic of
																	</option><option value="Colombia">
																	Colombia
																	</option><option value="Comoros">
																	Comoros
																	</option><option value="Costa Rica">
																	Costa Rica
																	</option><option value="Cote d'Ivoire">
																	Cote d'Ivoire, Republic of
																	</option><option value="Croatia">
																	Croatia
																	</option><option value="Cuba">
																	Cuba
																	</option><option value="Cyprus">
																	Cyprus
																	</option><option value="Czech Republic">
																	Czech Republic
																	</option><option value="Denmark">
																	Denmark
																	</option><option value="Djibouti, Republic of">
																	Djibouti, Republic of
																	</option><option value="Dominica">
																	Dominica, Commonwealth of
																	</option><option value="Dominican">
																	Dominican Republic
																	</option><option value="DPR Korea">
																	DPR Korea (North)
																	</option><option value="East Timor">
																	East Timor
																	</option><option value=" Ecuador">
																	Ecuador
																	</option><option value="Egypt">
																	Egypt
																	</option><option value="El Salvador">
																	El Salvador
																	</option><option value="Eritrea">
																	Eritrea
																	</option><option value="Estonia">
																	Estonia
																	</option><option value="Ethiopia">
																	Ethiopia
																	</option><option value="Federated States">
																	Federated States of Micronesia
																	</option><option value="Fiji">
																	Fiji
																	</option><option value="Finland">
																	Finland
																	</option><option value="France">
																	France
																	</option><option value="FYR Macedonia">
																	FYR Macedonia
																	</option><option value="Gabonese">
																	Gabonese Republic
																	</option><option value="Gambia">
																	Gambia
																	</option><option value="Georgia">
																	Georgia
																	</option><option value="Germany">
																	Germany
																	</option><option value="Ghana">
																	Ghana
																	</option><option value="Greece">
																	Greece
																	</option><option value="Grenada">
																	Grenada
																	</option><option value="Guatemala">
																	Guatemala
																	</option><option value="Haiti">
																	Haiti
																	</option><option value="Hong Kong SAR">
																	Hong Kong SAR
																	</option><option value="Hungary">
																	Hungary
																	</option><option value="Iceland">
																	Iceland
																	</option><option value="India">
																	India
																	</option><option value="Indonesia">
																	Indonesia, Republic of
																	</option><option value="Iran">
																	Iran
																	</option><option value="Iraq">
																	Iraq
																	</option><option value="Ireland">
																	Ireland, Republic Of
																	</option><option value="Israel">
																	Israel
																	</option><option value="Italy">
																	Italy
																	</option><option value="Jamaica">
																	Jamaica
																	</option><option value="Japan">
																	Japan
																	</option><option value="Jordan">
																	Jordan
																	</option><option value="Kenya">
																	Kenya
																	</option><option value="Korea">
																	Korea, Republic Of (South)
																	</option><option value="Kuwait">
																	Kuwait
																	</option><option value="Lebanon">
																	Lebanon
																	</option><option value="Lesotho">
																	Lesotho
																	</option><option value="Liberia">
																	Liberia
																	</option><option value="Libya">
																	Libya
																	</option><option value="Malaysia">
																	Malaysia
																	</option><option value="Mexico">
																	Mexico
																	</option><option value="Monaco">
																	Monaco
																	</option><option value="Mongolia">
																	Mongolia
																	</option><option value="Morocco">
																	Morocco
																	</option><option value="Mozambique">
																	Mozambique
																	</option><option value="Nepal">
																	Nepal
																	</option><option value="New Zealand">
																	New Zealand
																	</option><option value="Norway">
																	Norway
																	</option><option value="Oman">
																	Oman
																	</option><option value="Pakistan">
																	Pakistan
																	</option><option value="Palestinian">
																	Palestinian Autho.Gaza/W Bank
																	</option><option value="Panama">
																	Panama, Republic of
																	</option><option value="Philippines">
																	Philippines
																	</option><option value="Poland">
																	Poland
																	</option><option value="Qatar">
																	Qatar
																	</option><option value="Romania">
																	Romania
																	</option><option value="Russia">
																	Russia
																	</option><option value="Saint Lucia">
																	Saint Lucia
																	</option><option value="Samoa">
																	Samoa, American
																	</option><option value="Saudi Arabia">
																	Saudi Arabia
																	</option><option value="Singapore">
																	Singapore
																	</option><option value="South Sudan">
																	South Sudan, Republic of
																	</option><option value="Spain">
																	Spain
																	</option><option value="Sri Lanka">
																	Sri Lanka
																	</option><option value="Sudan">
																	Sudan, Republic of
																	</option><option value="Swaziland">
																	Swaziland
																	</option><option value="Sweden">
																	Sweden
																	</option><option value="Switzerland">
																	Switzerland
																	</option><option value="Syria">
																	Syria
																	</option><option value="Taiwan">
																	Taiwan
																	</option><option value="Tajikistan">
																	Tajikistan
																	</option><option value="Tanzania">
																	Tanzania, United Republic Of
																	</option><option value="Thailand">
																	Thailand
																	</option><option value="Togolese">
																	Togolese Republic
																	</option><option value="Tonga">
																	Tonga
																	</option><option value="Trinidad">
																	Trinidad &amp; Tobago, Republic of
																	</option><option value="Tunisia">
																	Tunisia
																	</option><option value="Turkey">
																	Turkey
																	</option><option value="Turkmenistan">
																	Turkmenistan
																	</option><option value="Tuvalu">
																	Tuvalu
																	</option><option value="United Arab Emirates">
																	United Arab Emirates
																	</option><option value="  United States of America">
																	United States of America
																	</option><option value="Uruguay">
																	Uruguay
																	</option><option value="Uzbekistan">
																	Uzbekistan
																	</option><option value="Vanuatu">
																	Vanuatu
																	</option><option value="Venezuela">
																	Venezuela
																	</option><option value="Western Sahara">
																	Western Sahara
																	</option><option value="Yemen">
																	Yemen, Republic of
																	</option><option value="Zambia">
																	Zambia
																	</option><option value="Zimbabwe">
																	Zimbabwe
																	</option>
																</select>
															</div>
														</div>
													</div>
													<div class="control-group form-field">
														<label class="control-label">
														  City/Town
														</label>
														<div class="controls">
															<div class="input-append">
																<input type="text" name="employmentCity" id="employmentCity" maxlength="120" >
															</div>
														</div>
													</div>
													<div class="control-group form-field">
														<label class="control-label">
															Start date
														</label>
														<div class="controls">
															<div class="input-append">
																<select name="employmentStartYear" id="employmentStartYear" >
																	<option value="---">Select</option>
																	<?php
																	
																		for($i = date("Y"); $i >=1945; $i--){
																		
																			?>
																			
																				<option value="<?= $i;?>"><?= $i;?></option>
																				
																			<?php
																		}
																	?>																	
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="contact-information">
												<h2>
													Contact details
												</h2>
												<div class="control-group form-field">
													<label class="control-label">
														Preferred language to contact you
													</label>
													<div class="controls">
														<div class="input-append">
															<select name="languageOfPreference" required="required">
																<option value="Not selected">Select</option>
																<option value="English">English</option>
																<option value="French">French</option>
															</select>
														</div>
													</div>
												</div>
												<div class="control-group form-field">
													<label class="control-label">
														Email address
													</label>
													<div class="controls">
														<div class="input-append">
															<input type="text" name="CemailAddress" maxlength="100" required="required">
														</div>
													</div>
												</div>
											</div>
											<div id="address-information">
												<h2>
													Residential address
												</h2>
												<div class="control-group form-field">
													<label class="control-label">
														Apartment number/unit
													</label>
													<div class="controls">
														<div class="input-append">
															<input type="text" name="aptUnit" maxlength="10" required="required">
														</div>
													</div>
												</div>
												<div class="control-group form-field">
													<label class="control-label">
														Residence/House/Street number
													</label>
													<div class="controls">
														<div class="input-append">
															<input type="text" id="streetNo" name="streetNo" maxlength="10" required="required">
														</div>
													</div>
												</div>
												<div class="control-group form-field">
													<label class="control-label">
														Street address/name
													</label>
													<div class="controls">
														<div class="input-append">
															<input type="text" name="streetAddress" maxlength="100" required="required">
														</div>
													</div>
												</div>
							 
												<div class="control-group form-field">
													<label class="control-label">
														City/town
													</label>
													<div class="controls">
														<div class="input-append">
															<input type="text" name="cityTown" maxlength="50" required="required">
														</div>
													</div>
												</div>
												<div class="control-group form-field">
													<label class="control-label" for="apply-country">
														Country/territory
													</label>
													<div class="controls">
													
														<div class="input-append">
														
															<select name="countryterri" required="required">
																<option value="Not Selected">
																	Select
																</option>
																<option value="Afghanistan">
																	Afghanistan
																</option><option value="Albania">
																	Albania
																</option><option value="Algeria">
																	Algeria
																</option><option value="Andorra">
																	Andorra
																</option><option value="Angola">
																	Angola
																</option><option value="Antigua">
																	Antigua And Barbuda
																</option><option value="Argentina">
																	Argentina
																</option><option value="Armenia">
																	Armenia
																</option><option value="Australia">
																	Australia
																</option><option value="Austria">
																	Austria
																</option><option value="Azerbaijan">
																	Azerbaijan
																</option><option value="Bahamas">
																	Bahamas, Commonwealth of the
																</option><option value="Bahrain">
																	Bahrain
																</option><option value="Bangladesh">
																	Bangladesh
																</option><option value="Barbados">
																	Barbados
																</option><option value="Belarus">
																	Belarus
																</option><option value="Belgium">
																	Belgium
																</option><option value="Belize">
																	Belize
																</option><option value="Benin">
																	Benin, Republic of
																</option><option value="Bhutan">
																	Bhutan
																</option><option value="Bolivia">
																	Bolivia
																</option><option value="Bosnia and Herzegovina">
																	Bosnia and Herzegovina
																</option><option value="Botswana">
																	Botswana, Republic Of
																</option><option value="Brazil">
																	Brazil
																</option><option value="British Citizen">
																	British Citizen
																</option><option value="British National Overseas">
																	British National Overseas
																</option><option value="British Overseas Citizen">
																	British Overseas Citizen
																</option><option value="Brunei">
																	Brunei
																</option><option value="Bulgaria">
																	Bulgaria
																</option><option value="Burkina Faso">
																	Burkina Faso
																</option><option value="Burundi">
																	Burundi
																</option><option value="Cambodia">
																	Cambodia
																</option><option value="Cameroon">
																	Cameroon, Republic of
																</option><option value="Canada">
																	Canada
																</option><option value="Cape Verde">
																	Cape Verde Islands
																</option><option value="Central African">
																	Central African Republic
																</option><option value="Chad, Republic Of">
																	Chad, Republic Of
																</option>
																<option value="China">
																	China, People's Republic of
																</option><option value="Colombia">
																	Colombia
																</option><option value="Comoros">
																	Comoros
																</option><option value="Costa Rica">
																	Costa Rica
																</option><option value="Cote d'Ivoire">
																	Cote d'Ivoire, Republic of
																</option><option value="Croatia">
																	Croatia
																</option><option value="Cuba">
																	Cuba
																</option><option value="Cyprus">
																	Cyprus
																</option><option value="Czech Republic">
																	Czech Republic
																</option><option value="Denmark">
																	Denmark
																</option><option value="Djibouti, Republic of">
																	Djibouti, Republic of
																</option><option value="Dominica">
																	Dominica, Commonwealth of
																</option><option value="Dominican">
																	Dominican Republic
																</option><option value="DPR Korea">
																	DPR Korea (North)
																</option><option value="East Timor">
																	East Timor
																</option><option value=" Ecuador">
																	Ecuador
																</option><option value="Egypt">
																	Egypt
																</option><option value="El Salvador">
																	El Salvador
																</option><option value="Eritrea">
																	Eritrea
																</option><option value="Estonia">
																	Estonia
																</option><option value="Ethiopia">
																	Ethiopia
																</option><option value="Federated States">
																	Federated States of Micronesia
																</option><option value="Fiji">
																	Fiji
																</option><option value="Finland">
																	Finland
																</option><option value="France">
																	France
																</option><option value="FYR Macedonia">
																	FYR Macedonia
																</option><option value="Gabonese">
																	Gabonese Republic
																</option><option value="Gambia">
																	Gambia
																</option><option value="Georgia">
																	Georgia
																</option><option value="Germany">
																	Germany
																</option><option value="Ghana">
																	Ghana
																</option><option value="Greece">
																	Greece
																</option><option value="Grenada">
																	Grenada
																</option><option value="Guatemala">
																	Guatemala
																</option><option value="Haiti">
																	Haiti
																</option><option value="Hong Kong SAR">
																	Hong Kong SAR
																</option><option value="Hungary">
																	Hungary
																</option><option value="Iceland">
																	Iceland
																</option><option value="India">
																	India
																</option><option value="Indonesia">
																	Indonesia, Republic of
																</option><option value="Iran">
																	Iran
																</option><option value="Iraq">
																	Iraq
																</option><option value="Ireland">
																	Ireland, Republic Of
																</option><option value="Israel">
																	Israel
																</option><option value="Italy">
																	Italy
																</option><option value="Jamaica">
																	Jamaica
																</option><option value="Japan">
																	Japan
																</option><option value="Jordan">
																	Jordan
																</option><option value="Kenya">
																	Kenya
																</option><option value="Korea">
																	Korea, Republic Of (South)
																</option><option value="Kuwait">
																	Kuwait
																</option><option value="Lebanon">
																	Lebanon
																</option><option value="Lesotho">
																	Lesotho
																</option><option value="Liberia">
																	Liberia
																</option><option value="Libya">
																	Libya
																</option><option value="Malaysia">
																	Malaysia
																</option><option value="Mexico">
																	Mexico
																</option><option value="Monaco">
																	Monaco
																</option><option value="Mongolia">
																	Mongolia
																</option><option value="Morocco">
																	Morocco
																</option><option value="Mozambique">
																	Mozambique
																</option><option value="Nepal">
																	Nepal
																</option><option value="New Zealand">
																	New Zealand
																</option><option value="Norway">
																	Norway
																</option><option value="Oman">
																	Oman
																</option><option value="Pakistan">
																	Pakistan
																</option><option value="Palestinian">
																	Palestinian Autho.Gaza/W Bank
																</option><option value="Panama">
																	Panama, Republic of
																</option><option value="Philippines">
																	Philippines
																</option><option value="Poland">
																	Poland
																</option><option value="Qatar">
																	Qatar
																</option><option value="Romania">
																	Romania
																</option><option value="Russia">
																	Russia
																</option><option value="Saint Lucia">
																	Saint Lucia
																</option><option value="Samoa">
																	Samoa, American
																</option><option value="Saudi Arabia">
																	Saudi Arabia
																</option><option value="Singapore">
																	Singapore
																</option><option value="South Sudan">
																	South Sudan, Republic of
																</option><option value="Spain">
																	Spain
																</option><option value="Sri Lanka">
																	Sri Lanka
																</option><option value="Sudan">
																	Sudan, Republic of
																</option><option value="Swaziland">
																	Swaziland
																</option><option value="Sweden">
																	Sweden
																</option><option value="Switzerland">
																	Switzerland
																</option><option value="Syria">
																	Syria
																</option><option value="Taiwan">
																	Taiwan
																</option><option value="Tajikistan">
																	Tajikistan
																</option><option value="Tanzania">
																	Tanzania, United Republic Of
																</option><option value="Thailand">
																	Thailand
																</option><option value="Togolese">
																	Togolese Republic
																</option><option value="Tonga">
																	Tonga
																</option><option value="Trinidad">
																	Trinidad &amp; Tobago, Republic of
																</option><option value="Tunisia">
																	Tunisia
																</option><option value="Turkey">
																	Turkey
																</option><option value="Turkmenistan">
																	Turkmenistan
																</option><option value="Tuvalu">
																	Tuvalu
																</option><option value="United Arab Emirates">
																	United Arab Emirates
																</option><option value="  United States of America">
																	United States of America
																</option><option value="Uruguay">
																	Uruguay
																</option><option value="Uzbekistan">
																	Uzbekistan
																</option><option value="Vanuatu">
																	Vanuatu
																</option><option value="Venezuela">
																	Venezuela
																</option><option value="Western Sahara">
																	Western Sahara
																</option><option value="Yemen">
																	Yemen, Republic of
																</option><option value="Zambia">
																	Zambia
																</option><option value="Zimbabwe">
																	Zimbabwe
																</option>
																
															</select>
															
														</div>
														
													</div>
													
												</div>				 
								   
											</div>
               
											<div id="consent-and-declaration-information">
												<h2>Consent and declaration</h2>
												<p>Information provided to CIC is collected under the authority of the <em>Immigration and Refugee Protection Act</em> (IRPA) to determine admissibility to Canada. Information provided may be shared with other Canadian government institutions such as, but not limited to, the Canada Border Services Agency (CBSA), the Royal Canadian Mounted Police (RCMP), the Canadian Security Intelligence Service (CSIS), the Department of Foreign Affairs, Trade and Development (DFATD), Employment and Social Development Canada (ESDC), the Canada Revenue Agency (CRA), provincial and territorial governments and foreign governments in accordance with subsection 8(2) of the Privacy Act. Information may be disclosed to foreign governments, law enforcement bodies and detaining authorities with respect to the administration and enforcement of immigration legislation where such sharing of information may not put the individual and or his/her family at risk. Information may also be systematically validated by other Canadian government institutions for the purposes of validating status and identity to administer their programs.</p>
												<p>Where biometrics are provided as part of an application, the fingerprints collected will be stored and shared with the RCMP. The fingerprint record may also be disclosed to law enforcement agencies in Canada in accordance with subsection 13.11(1) of the Immigration and Refugee Protection Regulations. The information may be used to establish or verify the identity of a person in order to prevent, investigate or prosecute an offence under any law of Canada or a province. This information may also be used to establish or verify the identity of an individual whose identity cannot reasonably be otherwise established or verified because of physical or mental condition. Canada may also share immigration information related to biometric records with foreign governments with whom Canada has an agreement or arrangement.</p>
												<p>Depending on the type of application made, the information you provided will be stored in one or more Personal Information Banks (PIB) pursuant to section 10(1) of Canada's <em>Privacy Act</em>. Individuals also have a right to protection and access to their personal information stored in each corresponding PIB under the <em>Access to Information Act</em>. Further details on the PIBs pertaining to CIC's line of business and services and the Government of Canada's access to information and privacy programs are available at the Infosource website (<a href="http://infosource.gc.ca/" target="_blank">http://infosource.gc.ca</a>) and through the CIC Call Centre. Infosource is also available at public libraries across Canada.</p>
												<p><strong> Declaration of Applicant </strong></p>
												<p>I have read and understand the above declaration.</p>
												<p>I declare that the information I have given in this application is truthful, complete and correct.</p>
												<p>I understand that misrepresentation is an offence under section 127 of the <em>Immigration and Refugee Protection Act</em> and may result in a finding of inadmissibility to Canada or removal from Canada.</p>
												<p>I agree that by typing my name and clicking sign, I am electronically signing my application.</p>
												<div class="control-group form-field">
													<div class="controls">
														<label class="checkbox">
															<input type="checkbox" required="required">
															I agree
														</label>
														
													</div>
													
												</div>
												
												<div class="control-group form-field">
												
													<label class="control-label">Signature</label>
													
													<div class="controls">
													
														<div class="input-append">											
															
															<input type="text" name="applysignature" maxlength="160" required="required">
															
														</div>
														
													</div>
													
												</div>
												
											</div>
							
											<div id="terms-and-conditions">
											
												<h2>Terms &amp; Conditions</h2>
												
												<div class="control-group form-field">
													
													<div class="controls remove-space">
														
														<label class="checkbox">
															<input type="checkbox" required="required">
															I accept the General Conditions for Use of the Service, Terms and Conditions of the site and the Waiver of Rights. I give authority to canada-etavisa.info as a third party agent to process my application for eTA. The fee for our professional service is $100 including the goverment processing fee.<a href="#cqTCFull" data-toggle="modal">View the full Terms and Conditions</a>
														</label>
														
													</div>
													
												</div>
												
											</div>
			   
											<div class="form-actions">
							
												<input type="submit" class="btn btn-success" id="submit" value="Review &amp; Confirm">
								
											</div>
			   
										</div>
										
									</div>
									
								</div>  
								
							</form>
							
						</div>

							<div class="span4">
					   
				 
								<h3>GETTING STARTED</h3>
								
								<ul>
									
									<li class="clearfix"><span>&#8226; Applications are processed within 15 minutes after submission</span></li>
									
									<li class="clearfix"><span>&#8226; Each application takes approximately 10 minutes to complete</span></li>
									
									<li class="clearfix"><span>&#8226; Support team is available 24/7 by email and telephone</span></li>
								
								</ul>				
								
								<h3>FREQUENTLY ASKED QUESTIONS</h3>
								
								<ul>
									
									<li class="clearfix"><span>&#8226; <b>Can I submit multiple applications?</b> Multiple applications can be submitted using a single payment</span></li>
									
									<li class="clearfix"><span>&#8226; <b>What happens after I submit my application?</b> Applicant data will be verified to ensure accuracy upon submission</span></li>
									
									<li class="clearfix"><span>&#8226; <b>What happens if my application is denied?</b> Processing fees will be refunded in the event of an eTA refusal</span></li><li class="clearfix"><span>&#8226; <b>What happens after my application is approved?</b> A unique eTA authorization number will be sent directly via e-mail as proof of a successful application</span></li>
								
								</ul>
								
								<h3>CREDIT/DEBIT CARD PAYMENTS</h3>
								
								<ul>
								
									<li class="image"><img src="<?= __BASE_URL; ?>/assets/images/payment/logos.png"/></li>
									
									<li>Debit and credit cards are accepted forms of payment. Please note that you will need to make an application for each member of your family/travel group.</li>
								
								</ul>
								
								<h3>INSTANT ETA PROCESSING</h3>
								
								<ul>
								   
									<li>canada-etavisa.info has implemented a Instant Payment Notification (IPN) system, which allows your eTA application to be processed immediately. The cost of each individual application is $100. Your eTA authorization is delivered electronically direct to your e-mail.</li>
								
								</ul>
								
								<h3>SECURE SSL TRANSACTION</h3>
								
								<ul>
								   
									<li>to canada-etavisa.info operates within full observance of the international regulations of the Standard Payment Card Industry – Data Security Standard (PCI-DSS) laid down by the main credit companies for protecting their clients' personal information.</li>
								
								</ul>
								
								<h3>HELP AND SUPPORT</h3>
								
								<ul>
								   
									<li>Our support team is available 24/7 to answer any questions about your application. If you are unsure about your visa situation or eligibility then please take the assessment questionnaire on the <a href="<?= __BASE_URL; ?>/index.html">homepage</a>.</li>
								
								</ul>				
								
							</div>
							
						</div>
		
						<div class="modal hide fade" id="cqTCFull">
						
							<div class="modal-header">
							
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								
								<h3>General Conditions for Use of the Service & Waiver of Rights</h3>
								
							</div>
							
							<div class="modal-body">
								
								<p>Please find below the terms and conditions set out by the company official-canada-eta.com, which are governed by the Laws of the United Kingdom. </p>
								
								<p>The company will process an application to the client's requirements and requests, and will not be responsible for any incorrect information provided. The company will make all efforts to obtain the correct visa in the specified period of time. However the company will not be responsible for the following occurring at the embassy; Refusal to issue the visa, Refusal to accept the application, Issuance of incorrect visa, Delay in processing the visa.</p>
								
								<p>Should the company have caused any of the above through error or omission, then the company's liability is strictly limited to the cost of a replacement visa or refund of all fees paid and the company cannot accept any responsibility for consequential loss, such as, but not limited to: lost profits/income, lost airfares.</p>
								
								<h2><strong>Cancellation rights</strong></h2>
								
								<p>Once you have submitted your application with us online or over the phone, it is assumed that you have agreed that we may instantly begin the processing of your application and provide our service, and by agreeing to these terms and conditions, you are therefore providing your express consent for this to happen. As a result you will not have any right to cancel under The Consumer Contracts (Information, Cancellation and Additional Charges) Regulations 2013. This is because, under Regulation 36(1)(a) and 37(1)(a), you lose your right to cancel if you agree that we can start providing the services within the cancellation period.</p>
								
								<h2><strong>Ownership</strong></h2>
								
								<p>This website official-canada-eta.com is owned and operated by Sat Pro Ltd. If you do not agree to be bound by and comply with these terms of use, please do not access or use this site.</p>
								
								<h2><strong>Limits on Use</strong></h2>
								
								<p>You may not use this site or the services offered on or through it for personal gain and you may not sell or provide to any third party, or otherwise profit from, any services or information (nor any modification, adaptation or analysis of them) available on or through this site.</p>
								
								<h2><strong>Security</strong></h2>
								
								<p>We reserve the right from time to time to: (a) alter and/or introduce new and/or additional security measures without notice; (b) temporarily withdraw and/or limit the availability of this site to any individual(s); and (c) do anything else that we believe necessary to preserve the security and integrity of this site and the information held in this site's databases.</p>
								
								<h2><strong>Accuracy and Site Content</strong></h2>
								
								<p>We use reasonable skill and care in compiling the information accessible on and through this site. However, certain information may have been compiled and/or provided to us by a third party who is not a member of our network. official-canada-eta.com does not accept responsibility for the accuracy of any information which is obtained from any such third party. Furthermore, errors and omissions in the information accessible on and through this site may occur because of a number of factors which are inherent in any internet-related system and which are not within our reasonable control. For example, information may be affected by machine, software or operator error, or malfunctions in connection with data transmission. In view of this, the information is provided "as is" and you should always attempt to verify the accuracy of any information obtained from this site before relying upon it.<br /> This is a dynamic site and as a result, the content and look and feel may change from time to time without prior notice.</p>
								
								<h2><strong>Limited Licence and Ownership</strong></h2>
								
								<p>You are granted a limited licence to download the materials contained on this site to a personal computer, and to print a hard copy of such materials, solely for your personal, non-commercial use, provided that all copyright, trade mark and other proprietary notices are left intact.<br /> Save as expressly and specifically permitted in these terms of use, all translation, re-transmission, distribution or other use of the materials contained on this site and in its databases on any other internet site or other media is strictly prohibited. You are also prohibited from: (a) framing this site or any part of it on any other site; or (b) mirroring this site on another server; or (c) using automated screen capture or screen scraping technologies to obtain information of any sort from this site.<br /> The grant of this limited licence is conditional upon your agreement to and compliance with all of these terms of use.<br /> Software (if any) made available to download from this site is either owned by or licensed to us. You may only use such software in accordance with the end user licence accompanying that software or, where there is no such licence; you are granted a non-exclusive, non-transferable licence to use the said software for using this site in accordance with these terms of use.<br /> All copyright and all other intellectual property and proprietary rights of any sort relating in any way to this site (including, but not limited to, those relating to its content, branding and the services, software and any other materials made available on and through it) which are not granted to you in accordance with these terms of use are hereby expressly reserved to official-canada-eta.com or, in the case of any other brands, names and logos featured on this site, their respective owners.</p>
								
								<h2><strong>Your Consent</strong></h2>
								
								<p>By using this site you consent to official-canada-eta.com, processing and transferring (both inside and outside the EEA) the User Data as necessary for us to provide you with this service and enable you to use the site and receive your eTA.</p>
								
								<h1><strong>Delivery Policy</strong></h1>
								
								<p>Our Delivery Policy is set out to explain to you, the customer, how we provide the Processing Service offered on our website. </p>
								
								<p>1- official-canada-eta.com is a private, third party eTA applications data processing agency and it is not affiliated in any way with the Government of Canada. <br /> <br /> 2- Services provided:</p>
								
								<ul>
								
									<li><strong>eTA Visa Waiver application</strong> data entry and processing.</li>
									
									<li><strong>Same day</strong> processing and <strong>status update</strong>.</li>
									
									<li><strong>Travel authorization confirmation</strong> delivery by email</li>
									
									<li>Application information updates and status check for<strong> 2 years from eTA authorisation being received</strong>.</li>
									
									<li><strong>24/7 eTA email and telephone customer support.</strong></li>
								
								</ul>
								
								<p>3- official-canada-eta.com does not guarantee that applications will be accepted, we only process the customer's application data and integrate into the Canada eTA system.</p>
								
								<p>4- The customer is responsible for providing valid and accurate application information, official-canada-eta.com is not liable for any rejected applications due to non valid or incorrect information submitted by the customer.</p>
								
								<p>5- Once the application data is submitted, official-canada-eta.com will have 24 hours to process the application and provide a status update to the customer. No service claims are accepted for non delivered travel authorization confirmation documents before 24 hours after information is submitted by the customer. Customer has the right to claim if they have not received a confirmation document or status update after 24 hours.</p>
								
								<p>6-  Applications can be putted on hold by the Canada eTA for multiple reason, in these cases a customer service representative will contact the customer to coordinate a possible solution. Same case if application is rejected.</p>
								
								<p>7- By purchasing our services the customer agree to pay a service fee for data entry and assistance service fee which includes a $14 fee paid by official-canada-eta.com on his/her behalf to the Canadian Government for the eTA system fee.</p>
								
								<p>8- Customer also provide explicit authorization to let official-canada-eta.com manage his/her application data and apply on his/her behalf to the Canada eTA system. According to our privacy policy and the Canadian eTA privacy statement at: http://www.cic.gc.ca/english/visit/eta.asp</p>
								
								<p>9- Customer certifies he/her is entitled and legally authorized to pay with the submitted credit or debit card. official-canada-eta.com will charge the submitted credit card one total fee and shall be not liable for any illegal use of credit information submitted by the customer.</p>
								
								<p>Once our same-day Processing Service is completed, which includes weekends and holidays, we will deliver the product to you by email only.</p>
								
								<p>We strongly recommend you to add our email address orders@official-canada-eta.com to your white list to ensure that our email is not rejected due to an overfilled inbox.</p>
								
								<p>PDF files can be read by utilizing <a href="http://get.adobe.com/reader/" target="_blank">Adobe reader</a> which is free to download</p>
								
								<p>If you have any questions regarding our delivery policy, please contact us by email (support@official-canada-eta.com). We will respond within 24 hours.</p>
								
								<p>Our Processing Service is considered delivered to you when submitted via email. We recommend that you take a printed copy of your travel authorization as some airlines may want to see a copy of it at check-in.</p>
								
								<h1><strong>Privacy Policy</strong></h1>
								
								<p><strong>This privacy policy discloses the privacy practices for official-canada-eta.com </strong></p>
								
								<p>This privacy notice applies solely to information collected by this web site. It will notify you of the following: What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared. What choices are available to you regarding the use of your data. The security procedures in place to protect the misuse of your information. How you can correct any inaccuracies in the information. </p>
								
								<h2><strong>Information Collection, Use, and Sharing </strong></h2>
								
								<p>We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone. We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship an order. Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy. </p>
								
								<h2><strong>Your Access to and Control Over Information </strong></h2>
								
								<p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address given on our website: See what data we have about you, if any. Change/correct any data we have about you. Have us delete any data we have about you. Express any concern you have about our use of your data. </p>
								
								<h2><strong>Security </strong></h2>
								
								<p>We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline. Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for “https” at the beginning of the address of the web page. While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment. </p>
								
								<h2><strong>Registration </strong></h2>
								
								<p>In order to use this website, a user must first complete the registration form. During registration a user is required to give certain information (such as name and email address). This information is used to contact you about the products/services on our site in which you have expressed interest. At your option, you may also provide demographic information (such as gender or age) about yourself, but it is not required. </p>
								
								<h2><strong>Orders </strong></h2>
								
								<p>We request information from you on our order form. To buy from us, you must provide contact information (like name and email address) and financial information (like credit card number, expiration date). This information is used for billing purposes and to fill your orders. If we have trouble processing an order, we’ll use this information to contact you. </p>
								
								<h2><strong>Cookies </strong></h2>
								
								<p>We use “cookies” on this site. A cookie is a piece of data stored on a site visitor’s hard drive to help us improve your access to our site and identify repeat visitors to our site. For instance, when we use a cookie to identify you, you would not have to log in a password more than once, thereby saving time while on our site. Cookies can also enable us to track and target the interests of our users to enhance the experience on our site. Usage of a cookie is in no way linked to any personally identifiable information on our site. Some of our business partners may use cookies on our site (for example, advertisers). However, we have no access to or control over these cookies. We use a credit card processing company to bill users for goods and services. These companies do not retain, share, store or use personally identifiable information for any secondary purposes beyond filling your order. This web site contains links to other sites. Please be aware that we are not responsible for the content or privacy practices of such other sites. We encourage our users to be aware when they leave our site and to read the privacy statements of any other site that collects personally identifiable information. If you feel that we are not abiding by this privacy policy, you should contact us immediately via email: support@official-canada-eta.com</p>
								
								<h2><strong>Links</strong></h2>
								
								<p>Where this site contains links to third party sites you should be aware that we may not control the sites reached through those links. We are not responsible for the content or privacy practices of sites which we do not control. The existence of a link on this site does not imply any endorsement or approval of any goods, services, opinions or other material(s) of any sort made available on or through sites which we do not control, nor do we take any responsibility for the opinions of third parties (if any) expressed on or through this site.</p>
								
								<h2><strong>Disclaimer and Limitation of Liability</strong></h2>
								
								<p>(a) Except as may be set out in these terms of use, this site, its content, and any use you choose to make of it, are provided and permitted without any representations or warranties of any kind, whether express or implied, and we disclaim all such representations and warranties so far as permitted by law. We do not warrant that information contained on or accessed through this site is adequate, complete, accurate or up-to-date, nor do we warrant that the site (or any part of it) will always be accessible, fully functional or free from errors and viruses. Accordingly, you agree that the only remedy available to you for breach of these terms of use shall be for our breach of contract under these terms of use.<br /> (b) Subject to paragraph (d) below, but otherwise so far as permitted by law, we exclude and are not liable for all loss, damage(s) and liability (whether or not caused by our negligence) for all wasted time, all loss/corruption of data, all loss of profits, opportunities, and goodwill, and all indirect, consequential and punitive loss or damage(s) arising from or in relation to use of this site and/or the information on it or any services provided through it, howsoever arising, whether in contract, tort (including negligence), statute or otherwise, and even if it was reasonably foreseeable or we have been made aware of the possibility of such loss/damage(s)/liability.<br /> (c) Subject to paragraph (d) below, but otherwise so far as permitted by law, our total aggregate liability hereunder in respect of direct loss and damage and other direct liability, howsoever arising, whether in contract, tort (including negligence), statute or otherwise shall be limited per claim or series of related claims, to ?100.<br /> (d) Nothing in these terms of use shall limit our liability for: <br /> (i) loss or damage for death or personal injury caused by our negligence; or <br /> (ii) for any fraudulent misrepresentation made by us or those under our control.<br /> (e) If you are using this site as a consumer then nothing in these terms of use shall in any way limit your statutory rights.</p>
								
								<h1><strong>Refund Policy</strong></h1>
								
								<p>Because the website has implemented the Instant Payment Notification (IPN) system, which allows the service to be processed immediately after paying the processing fee, we operate a <strong>NO REFUND policy.</strong> The cost of the eTA application is non-refundable and should a duplicate Canada eTA either exist or is found for the traveller(s), we are not able to issue a refund.</p>
								
								<p>We do take exceptional circumstances into consideration should something happen that is outside of your control and will consider refunds on a case-by-case basis. Please email us at <strong>support@official-canada-eta.com</strong>.</p>
								
								<h2><strong>Severability</strong></h2>
								
								<p>If one or more of the provisions of these terms of use are at any time found to be invalid by a court, tribunal or other forum of competent jurisdiction, or otherwise rendered unenforceable, that decision shall not invalidate or void the remainder of these terms of use. These terms of use shall be deemed amended by modifying or severing such provisions as necessary to render them valid, legal and enforceable while preserving their intent, or if that is not possible, by substituting another provision that is valid, legal and enforceable which materially gives effect to their intent. Any invalid or unenforceable provision or provisions shall be severable from these terms of use so that the validity or enforceability of their remaining provisions, or the validity of the provision(s) in question in any other jurisdiction shall not be affected.</p>
								
								<h2><strong>Entire Agreement</strong></h2>
								
								<p>These terms of use supersede all prior agreements, arrangements and statements (except for those for which liability is not excluded) between us with respect to your use of this site and constitute the entire agreement between us relating to the same.</p>
								
								<h2><strong>Change of Terms of Use</strong></h2>
								
								<p>We may alter, adapt or otherwise change these terms of use from time to time (for security, legal or regulatory reasons, or to reflect updates or changes to the services or functionality of the site) without prior notice. Your continued use of this site will constitute acceptance of those amended terms of use and you should review them before making any further use of this site.</p>
								
								<h2><strong>About Us</strong></h2>
								
								<p>This site is made available to you by Sat Pro Ltd and is ©official-canada-eta.com. All rights reserved.<br /> Our normal hours of business are 0900 to 1800 weekdays excluding Bank Holidays.<br /> You can contact us by writing to us at the above address or by using the 'contact us' facility on this site.</p>
								
								<h2><strong>Miscellaneous</strong></h2>
								
								<p>These terms of use shall not constitute or be deemed to constitute a partnership, joint venture or contract of employment between you and us.<br /> You may not assign, sub-license, sub-contract or otherwise transfer or deal in any of your rights or obligations under these terms of use without our prior written consent.<br /> Headings in these terms of use are for convenience only and are not to be taken into account when construing these terms of use.</p>
								
								<h2><strong>Termination</strong></h2>
								
								<p>We reserve the right to block your access to this site immediately and without notice if, in good faith, we believe that you have failed to comply with any of these terms of use.</p>
								
								<h2><strong>Rights of Third Parties</strong></h2>
								
								<p>No one other than you and us will have any right under the Contracts (Rights of Third Parties) Act 1999 to enforce any term of these terms of use, regardless of whether such person or entity has been identified by name, as a member of a class or as answering a particular description. For the avoidance of doubt, nothing in this clause shall affect the rights of any permitted assignee or transferee.</p>
								
								<h2><strong>Governing Law</strong></h2>
								
								<p>Use of this site and the Service is governed by English law, and you irrevocably agree to submit any claim or dispute arising in relation to, out of, or in connection with this site (and any use you make of it or the Service and/or opportunities offered through it) to the non-exclusive jurisdiction of the English courts.</p>

								<h2><strong>Passport and Visa</strong></h2>
								
								<p>You must consult the relevant Embassy or Consulate for this information. Requirements may change and you should check fro up-to-date position in good time before departure. We regret we can accept no liability if you are refused entry onto the flight or into any country due to failure on your part to carry the correct passport, visa or other documents required by any airline, authority or country. Health: Recommendations inoculations for travel may change at any time and you should consult your doctor on current recommendations before you depart. Health Requirements for your holiday destination are outlined in the department of health leaflet entitled "The Traveller's Guide to Health" (T4). It is your responsibility to ensure that you obtain all recommended medication and follow all medical advice in relation to your trip.<br /> The User's use of the Website and or the Offered Service is on the strict understanding that the Website and or the Offered Service is not engaged in rendering advice and should not be relied upon when making any related travel or other decision. The information contained within the Website and or the Offered Service is provided without warranties expressed or implied relating to the accuracy, fitness for purpose, compatibility or security of any components of the Website and or the Offered Service. The Company does not guarantee uninterrupted availability of the Website and or the Offered Service nor, that any representation or statement contained on the Website will be error free.</p>
							
							</div>
							
							<div class="modal-footer">
							
								<a href="#" class="btn" data-dismiss="modal">Close</a>
								
							</div>
							
						</div>
						
					</div>
	
	<?php get_the_footer(); ?>