<!doctype html>

<html>
    <head>
        <meta charset="utf-8">

        <title>Demo Survey </title>

        <!-- Load external CSS styles -->
        <link rel="stylesheet" href="{{ asset('/css/style-chat.css') }}">

    </head>

    <body>
        <link src="/css/style-chat.css">
        <h1>ClinGen Demographic Survey</h1>
        
        <section>
            <h2>Background and Purpose</h2>
            <p>Why are we asking for this information? The Clinical Genome Resource values the diversity of our participants, and works to maintain a culture of acceptance, accessibility and diversity (see our Justice, Equity, Diversity and Inclusion JEDI Action Plan: (<a href="https://clinicalgenome.org/working-groups/jedi-advisory-board/" target="_blank">Visit site</a> ).  Providing this information will help us to better understand our ClinGen community, focus current efforts to enhance diversity, and identify areas for future outreach. We sincerely appreciate your time, attention, and willingness to help.</p>
            
            <p>Who can access my data? Only a small number of ClinGen staff members will have access to the demographic data.  We will not share any individual data. Data may be shared/presented in aggregate.</p>
            
            <p>What do we do with this data? This is entirely for internal and informational use to understand our participants. For example, we might use this information to focus efforts on engaging early or mid-career scientists, or to develop materials for enhanced learning accessibility based on participant feedback.</p>
            
            <p>Please note:  Please select 'Prefer not to answer' for any questions you do not wish to answer</p>

        </section>

        <form method="post" action="{{ route('survey.store') }}">  
            @csrf

            <fieldset>     
                <section>
                    <h2>Participant Information on Country, Race/Ethnicity, Age and Identity</h2>
                    <h3>Basic Demographics</h3>

                    <label for="country">In which country were you born?</label><span style="color: red !important; display: inline; float: none;"></span>      
        
            <select id="country" name="country" class="form-control">
                <option value="">Select country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>

                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas (The)</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia (Plurinational State of)</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select>

                    
                
                    
                    <label>Other</label>     
                    <input class="w3-input" type="text" name="other_country">
                    
                    <label>Prefer not to answer</label>
                    <input id="opt_out" class="w3-check" type="checkbox" name="prefer_not_to_answer">
              
                    </div>
  
  </br>
</br>

      <label for="country">In which country do you currently reside?</label><span style="color: red !important; display: inline; float: none;"></span>      
      
      <select id="country" name="country" class="form-control">
          <option value="">Select country</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Åland Islands">Åland Islands</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antarctica">Antarctica</option>
          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Aruba">Aruba</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Belize">Belize</option>
          <option value="Benin">Benin</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Bouvet Island">Bouvet Island</option>
          <option value="Brazil">Brazil</option>
          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
          <option value="Brunei Darussalam">Brunei Darussalam</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burkina Faso">Burkina Faso</option>
          <option value="Burundi">Burundi</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Cape Verde">Cape Verde</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Central African Republic">Central African Republic</option>
          <option value="Chad">Chad</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Christmas Island">Christmas Island</option>
          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
          <option value="Colombia">Colombia</option>
          <option value="Comoros">Comoros</option>
          <option value="Congo">Congo</option>
          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
          <option value="Cook Islands">Cook Islands</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Cote D'ivoire">Cote D'ivoire</option>
          <option value="Croatia">Croatia</option>
          <option value="Cuba">Cuba</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Equatorial Guinea">Equatorial Guinea</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
          <option value="Faroe Islands">Faroe Islands</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="French Guiana">French Guiana</option>
          <option value="French Polynesia">French Polynesia</option>
          <option value="French Southern Territories">French Southern Territories</option>
          <option value="Gabon">Gabon</option>
          <option value="Gambia">Gambia</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Gibraltar">Gibraltar</option>
          <option value="Greece">Greece</option>
          <option value="Greenland">Greenland</option>
          <option value="Grenada">Grenada</option>
          <option value="Guadeloupe">Guadeloupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guernsey">Guernsey</option>
          <option value="Guinea">Guinea</option>
          <option value="Guinea-bissau">Guinea-bissau</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland">Ireland</option>
          <option value="Isle of Man">Isle of Man</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Jersey">Jersey</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Kiribati">Kiribati</option>
          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
          <option value="Korea, Republic of">Korea, Republic of</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Lesotho">Lesotho</option>
          <option value="Liberia">Liberia</option>
          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macao">Macao</option>
          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Marshall Islands">Marshall Islands</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mayotte">Mayotte</option>
          <option value="Mexico">Mexico</option>
          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
          <option value="Moldova, Republic of">Moldova, Republic of</option>
          <option value="Monaco">Monaco</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montenegro">Montenegro</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Myanmar">Myanmar</option>
          <option value="Namibia">Namibia</option>
          <option value="Nauru">Nauru</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherlands">Netherlands</option>
          <option value="Netherlands Antilles">Netherlands Antilles</option>
          <option value="New Caledonia">New Caledonia</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Niue">Niue</option>
          <option value="Norfolk Island">Norfolk Island</option>
          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Palau">Palau</option>
          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Pitcairn">Pitcairn</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="Reunion">Reunion</option>
          <option value="Romania">Romania</option>
          <option value="Russian Federation">Russian Federation</option>
          <option value="Rwanda">Rwanda</option>
          <option value="Saint Helena">Saint Helena</option>
          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
          <option value="Saint Lucia">Saint Lucia</option>
          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
          <option value="Samoa">Samoa</option>
          <option value="San Marino">San Marino</option>
          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Senegal">Senegal</option>
          <option value="Serbia">Serbia</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Sierra Leone">Sierra Leone</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="Solomon Islands">Solomon Islands</option>
          <option value="Somalia">Somalia</option>
          <option value="South Africa">South Africa</option>
          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
          <option value="Spain">Spain</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sudan">Sudan</option>
          <option value="Suriname">Suriname</option>
          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
          <option value="Thailand">Thailand</option>
          <option value="Timor-leste">Timor-leste</option>
          <option value="Togo">Togo</option>
          <option value="Tokelau">Tokelau</option>
          <option value="Tonga">Tonga</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States">United States</option>
          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Viet Nam">Viet Nam</option>
          <option value="Virgin Islands, British">Virgin Islands, British</option>
          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
          <option value="Wallis and Futuna">Wallis and Futuna</option>
          <option value="Western Sahara">Western Sahara</option>
          <option value="Yemen">Yemen</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
      </select>
      <label>Other</label>     
      <input class="w3-input" type="text">

      <label>Prefer not to answer</label>
      <input id="opt_out" class="w3-check" type="checkbox">
      <p>The current list of countries comes from the international standard ISO 3166 country codes (<a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">Visit site</a>). We recognize that this list may not be complete or satisfy all, so please feel free to choose “other” and provide a free text response.</p>

  </br>

  <label for="state">If you currently live in the United States, what is your state/territory of residence?</label><span style="color: red !important; display: inline; float: none;"></span>
      <!--- United States states -->
<select id="country-state" name="country-state">
<option value="">Select state</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AS">American Samoa</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="UM-81">Baker Island</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="GU">Guam</option>
<option value="HI">Hawaii</option>
<option value="UM-84">Howland Island</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="UM-86">Jarvis Island</option>
<option value="UM-67">Johnston Atoll</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="UM-89">Kingman Reef</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="UM-71">Midway Atoll</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="UM-76">Navassa Island</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="MP">Northern Mariana Islands</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="UM-95">Palmyra Atoll</option>
<option value="PA">Pennsylvania</option>
<option value="PR">Puerto Rico</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="VI">United States Virgin Islands</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="UM-79">Wake Island</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select>
<label>Prefer not to answer</label>
<input id="opt_out" class="w3-check" type="checkbox">
</br> 
</br>   

<p>ClinGen Participant Diversity: We ask the following question for aggregate informational purposes to understand ClinGen participant diversity. The free-text response can be used in place or in addition to the listed categories. </p>

   <p> The options below come from updates by the U.S. 2020 Census (<a href="https://www.census.gov/" target="_blank">Visit site</a>), and the All Of Us Basic Survey Questions (<a href="https://www.researchallofus.org/data-tools/survey-explorer/the-basics-survey/" target="_blank">Visit site</a>).  We understand that these options do not capture the diversity of racial and ethnic identities in the US, let alone around the world. </p>
    

   <form method="post" action="/Tests/Post/">      
        

        <legend>Which categories describe you? Select all that apply. Note, you may select more than one group.</legend>      
        <input type="checkbox" name="ethnicity" value="American Indian">American Indian or Alaska Native (For example: Aztec, Blackfeet Tribe, Mayan, Navajo Nation, Native Village of Barrow (Utqiagvik) Inupiat Traditional Government, Nome Eskimo Community, etc.)<br>      
        <input type="checkbox" name= "ethnicity" value="Asian">Asian (For example: Asian Indian, Chinese, Filipino, Japanese, Korean, Vietnamese, etc.)<br>      
        <input type="checkbox" name="ethnicity" value="Black">Black, African American, or African (For example: African American, Ethiopian, Haitian, Jamaican, Nigerian, Somali, etc.)<br>      
        <input type="checkbox" name="ethnicity" value="Hispanic">Hispanic, Latino, or Spanish (For example: Colombian, Cuban, Dominican, Mexican or Mexican American, Puerto Rican, Salvadoran, etc.)<br>
        <input type="checkbox" name="ethnicity" value="Middle Eastern">Middle Eastern or North African (For example: Algerian, Egyptian, Iranian, Lebanese, Moroccan, Syrian, etc.)<br>   
        <input type="checkbox" name="ethnicity" value="Pacific">Native Hawaiian or other Pacific Islander (For example: Chamorro, Fijian, Marshallese, Native Hawaiian, Tongan, etc.)<br>  
        <input type="checkbox" name="ethnicity" value="White">White (For example: English, European, French, German, Irish, Italian, Polish, etc.)<br>  
        <input type="checkbox" name="birth" value="None">Prefer not to answer<br> 
       
        <br>   

        <div class="w3-section"> 
                <label>What year were you born?</label>     
            <input class="w3-input" type="text" required>
            <label>Prefer not to answer</label>
            <input id="opt_out" class="w3-check" type="checkbox">
        </div>

        <br> 
         <p>We ask the following questions about identity to understand participation across the ClinGen ecosystem. The framing of the questions around sex and gender reflects recommendations made by the National Academies of Sciences, Engineering, and Medicine in 2022. (<a href="https://nap.nationalacademies.org/read/26424/chapter/1#xi" target="_blank">Visit site</a>)   </p> 
        
        <div class="w3-section">
        <legend>Which categories describe you? Select all that apply. Note, you may select more than one group.</legend>      
        <input type="checkbox" name="birth" value="Female">Female<br>      
        <input type="checkbox" name="birth" value="Male">Male<br> 
        <input type="checkbox" name="birth" value="Unsure">Unsure<br> 
        <input type="checkbox" name="birth" value="None">Prefer not to answer<br> 
        <label>Other</label>     
            <input class="w3-input" type="text">
        </div>    
        
        <br> 
        <div class="w3-section">
        <legend><legend>What term best describes your gender identity? Select all that apply.</legend>      
        <input type="checkbox" name="gender" value="Man">Man<br>      
        <input type="checkbox" name="gender" value="Woman">Woman<br>
        <input type="checkbox" name="gender" value="Cis">Cisgender<br>      
        <input type="checkbox" name="gender" value="Nonbinary">Nonbinary<br>
        <input type="checkbox" name="gender" value="Transgender">Transgender<br>      
        <input type="checkbox" name="gender" value="Unsure">Unsure<br> 
        <input type="checkbox" name="gender" value="None">Prefer not to answer<br> 
        <label>My preferred term is</label>     
            <input class="w3-input" type="text">
        </div>
        <br>
        <h2>ClinGen Background and Experience</h2>
        
        <br> 
        <div class="w3-section">
        <legend><legend>How is your ClinGen work supported? Select all that apply.</legend>      
        <input type="checkbox" name="support" value="volunteer">Volunteer outside of work environment<br> 
        <input type="checkbox" name="support" value="grant">Grants (e.g. NIH, foundational)
        <label>Provide more details on source of funding</label>     
            <input class="w3-input" type="text">
        <br>
        <input type="checkbox" name="support" value="employer">Employer supports/allows participation<br>    
        <input type="checkbox" name="support" value="Unsure">Unsure<br> 
        <input type="checkbox" name="support" value="None">Prefer not to answer<br> 
        <label>Other</label>     
            <input class="w3-input" type="text">
        </div>
        <br>

        <h2>Under-Represented Groups and Disadvantaged Backgrounds</h2>
        
            <p>ClinGen is invested in expanding access to curated data and participation in Expert Panels/working groups to individuals who may be under-represented or experience disadvantage due to location or life events. We ask these questions to help understand the backgrounds of our participating members.</p>

            <p>The following text pertains to the disadvantaged background question below.  If you are not a US-based participant, please answer the question based on similar criteria in your own country:</p>
            </br>
            <p>An individual is considered to be from a disadvantaged background if meeting two or more of the following criteria:<br>
            Were or currently are homeless, as defined by the McKinney-Vento Homeless Assistance Act (<a href="https://nche.ed.gov/mckinney-vento/">Definition</a>);<br>
            Were or currently are in the foster care system, as defined by the Administration for Children and Families (<a href="https://www.acf.hhs.gov/cb/focus-areas/foster-care">Definition</a>);<br>
            Were eligible for the Federal Free and Reduced Lunch Program for two or more years  (<a href="https://www.fns.usda.gov/school-meals/income-eligibility-guidelines">Definition</a>); <br> 
            Have/had no parents or legal guardians who completed a bachelor’s degree (<a href="https://nces.ed.gov/pubs2018/2018009.pdf">See</a>);<br>
            Were or currently are eligible for Federal Pell grants (<a href="https://www2.ed.gov/programs/fpg/eligibility.html">Definition</a>);<br>   
            Received support from the Special Supplemental Nutrition Program for Women, Infants and Children (WIC) as a parent or child (<a href="https://www.fns.usda.gov/wic/wic-eligibility-requirements">Definition</a>);<br>    
            Grew up in one of the following areas: <br>
             a) a U.S. rural area, as designated by the Health Resources and Services Administration (HRSA) Rural Health Grants Eligibility Analyzer  (<a href="https://data.hrsa.gov/tools/rural-health">Definition</a>); or<br>   
             b) a Centers for Medicare and Medicaid Services-designated Low-Income and Health Professional Shortage Areas (qualifying zip codes are included in the file). (<a href="https://www.qhpcertification.cms.gov/s/LowIncomeandHPSAZipCodeListingPY2020.xlsx?v=1">View File</a>) Only one of these two possibilities can be used as a criterion for the disadvantaged background definition.

</p>

<p>
        Based on the NIH definition above, do you consider yourself currently in or having come from a disadvantaged background? Note: If you are not a US-based participant, please answer based on similar criteria in your own country.<br>
            <input type="checkbox" name="disadvantaged" value="yes">Yes<br> 
            <input type="checkbox" name="disadvantaged" value="no">No<br> 
            <input type="checkbox" name="disadvantaged" value="Unsure">Unsure<br> 
            <input type="checkbox" name="disadvantaged" value="None">Prefer not to answer<br> 
            <label>Optional: Use this free text box to provide any additional detail.</label>     
            <input class="w3-input" type="text">
        
            
           </p>

</br>
        <h2>Employment</h2>

        <p>
            Please choose the option that most accurately describes your role or occupation [select all that apply].<br>
            <input type="checkbox" name="occupation" value="genetics physician">Medical genetics physician<br> 
            <input type="checkbox" name="occupation" value="non genetics physician">Medical non-genetics physician<br>
            
            
            
            <input type="checkbox" name="occupation" value="pathologist">Molecular pathologist<br> 
            <input type="checkbox" name="occupation" value="clinical geneticist">Clinical laboratory geneticist<br> 
            
            <input type="checkbox" name="occupation" value="Genetic counselor">Genetic counselor<br> 
            <input type="checkbox" name="occupation" value="resident">Clinical resident or fellow <br> 
            <input type="checkbox" name="occupation" value="Basic researcher">Basic researcher<br> 
            <input type="checkbox" name="occupation" value="Clinical researcher">Clinical researcher<br> 

            <input type="checkbox" name="occupation" value="Variant Analyst">Variant Analyst<br> 
            <input type="checkbox" name="occupation" value="Staff Scientist">Staff Scientist<br> 
            <input type="checkbox" name="occupation" value="Bioinformatician">Bioinformatician<br> 
            <input type="checkbox" name="occupation" value="Biocurator">Biocurator<br> 
            
            <input type="checkbox" name="occupation" value="Graduate Student">Graduate Student<br> 
            <input type="checkbox" name="occupation" value="Software Engineer/Developer">Software Engineer/Developer<br> 
            <input type="checkbox" name="occupation" value="Educator">Educator<br> 
            <input type="checkbox" name="occupation" value="General Geneticist">General Geneticist<br> 
            <input type="checkbox" name="occupation" value="Science Policy">Health Care Policy or Science Policy<br> 
            <input type="checkbox" name="disadvantaged" value="None">Prefer not to answer<br> 
            <label>Other: Use this free text box to provide any additional detail.</label>     
            <input class="w3-input" type="text"><br> 


             
            
            <br>

            <label for="specialty">If you indicated “Non-geneticist physician”, please select your specialty.</label><span style="color: red !important; display: inline; float: none;"></span>
            <select id="speciality" name="specialty"><br>
            <option value="">Select specialty</option>
            
            <option value="Allergy & Immunology">Allergy & Immunology</option>
            <option value="Anesthesiology">Anesthesiology</option>
            <option value="Cardiology/Cardiovascular Disease">Cardiology/Cardiovascular Disease</option>
            <option value="Child and Adolescent Psychiatry">Child and Adolescent Psychiatry</option>
            <option value="Colon & Rectal Surgery">Colon & Rectal Surgery</option>
            <option value="Critical Care Medicine">Critical Care Medicine</option>

            <option value="Cytopathology">Cytopathology</option>
            <option value="Dermatology">Dermatology</option>
            <option value="Emergency Medicine">Emergency Medicine</option>
            <option value="Endocrinology, Diabetes and Metabolism">Endocrinology, Diabetes and Metabolism</option>
            <option value="Family Medicine">Family Medicine</option>
            <option value="Gastroenterology">Gastroenterology</option>

            <option value="General Preventive Medicine and Public Health">General Preventive Medicine and Public Health</option>
            <option value="Geriatric Medicine">Geriatric Medicine</option>
            <option value="Hematology">Hematology</option>
            <option value="Hospice and Palliative Medicine">Hospice and Palliative Medicine</option>
            <option value="Infectious Diseases">Infectious Diseases</option>
            <option value="Internal Medicine">Internal Medicine</option>

            <option value="Interventional Cardiology">Interventional Cardiology</option>
            <option value="Medical Genetics and Genomics">Medical Genetics and Genomics</option>
            <option value="Nephrology">Nephrology</option>
            <option value="Ophthalmology">Ophthalmology</option>
            <option value="Neurological Surgery">Neurological Surgery</option>
            <option value="Neurology">Neurology</option>
            
            <option value="Nuclear Medicine">Nuclear Medicine</option>
            <option value="Obstetrics & Gynecology">Obstetrics & Gynecology</option>
            <option value="Occupational Medicine">Occupational Medicine</option>
            <option value="Oncology">Oncology</option>
            <option value="Orthopaedic Sports Medicine">Orthopaedic Sports Medicine</option>
            <option value="Orthopaedic Surgery">Orthopaedic Surgery</option>

            <option value="Otolaryngology">Otolaryngology</option>
            <option value="Pain Medicine">Pain Medicine</option>
            <option value="Pathology">Pathology</option>
            <option value="Pediatric Surgery">Pediatric Surgery</option>
            <option value="Pediatrics">Pediatrics</option>
            <option value="Physical Medicine & Rehabilitation">Physical Medicine & Rehabilitation</option>

            <option value="Plastic Surgery">Plastic Surgery</option>
            <option value="Preventive Medicine">Preventive Medicine</option>
            <option value="Psychiatry">Psychiatry</option>
            <option value="Pulmonary Disease and Critical Care Medicine">Pulmonary Disease and Critical Care Medicine</option>
            <option value="Radiation Oncology">Radiation Oncology</option>
            <option value="Radiology">Radiology</option>

            <option value="Rheumatology">Rheumatology</option>
            <option value="Sleep Medicine">Sleep Medicine</option>
            <option value="Surgery - General">Surgery - General</option>
            <option value="Thoracic Surgery">Thoracic Surgery</option>
            <option value="Urology">Urology</option>
            <option value="Vascular Surgery">Vascular Surgery</option>
            <br>

            <br>
        </p>


</section>
        <br>
        
        <input type="submit" value="Submit now" />      
    </fieldset>

  <!-- Load external JavaScript -->
        <script src="scripts.js"></script>

                </section>
            </fieldset>
        </form>
        </form>

    </body>
</html>
