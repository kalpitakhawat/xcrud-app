


<?php include("header.php"); ?>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="jumbotron-heading">Add Client Details</h1>

</div>

<div class="container" id="app">


  <form v-on:submit.prevent="submit">
<div class="row">
    <div class="form-group col-sm-12">
  <label for="client_matter">Client Matter</label>
  <input type="name" class="form-control" id="client_matter" aria-describedby="emailHelp" placeholder="Enter Client Matter" v-model="client_matter">
</div>
</div>
<div class="row">
    <div class="col">
    <div class="form-group">
    <label for="clientname">Client/Matter</label>
    <input type="name" class="form-control" id="clientname" aria-describedby="emailHelp" placeholder="Enter Client Name" v-model="clientname">
    <small id="emailHelp" class="form-text text-muted"></small>
    </div>
</div>
<div class="col">

 <div class="form-group">
  <label for="client_number">Client Number</label>
  <input type="name" class="form-control" id="client_number" aria-describedby="emailHelp" placeholder="Enter Client Number" v-model="client_number">
</div>

</div>
</div>



<div class="form-group">
  <label for="pepper_finance">Pepper Finance Team Members</label>
  <select class="form-control" id="pepper_finance" v-model="pepper_finance">
    <option value="team1">team1</option>
    <option value="team2">team2</option>
    <option value="team3">team3</option>
    <option value="team4">team4</option>
    <option value="team5">team5</option>
</select>
</div>

<div class="form-group">
  <label for="closing_date">Closing Date</label>
  <input type="text" class="form-control" id="closing_date" aria-describedby="emailHelp" placeholder="Select Closing Date">
</div>




<div class="form-group">
  <label for="exampleFormControlTextarea1">Summary Description TEXTAREA:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" value="" rows="3" v-model="description">“Represented [identify client by description or, if no confidentiality issues, by name] in connection with a $[amount of facility] [type of facility] [and a $[_____] [_______]] [to finance the acquisition of _____________] [to refinance existing indebtedness] [describe purpose/use of proceeds] [identify any other interesting features]”
  </textarea>
</div>



<!-- Role -->
<div class="form-group">
  <label for="exampleFormControlSelect1">Role</label>
  <select class="form-control" id="exampleFormControlSelect1" v-model="role">
    <option value="" selected="">Select Role</option>
    <option value="Lender side">Lender side</option>
    <option value="Borrower side">Borrower side</option>
</select>
</div>


<div class="form-group" v-if="role=='Lender side'">
  <label for="exampleFormControlSelect1">Lender side - yes</label>    
  <select class="form-control" id="exampleFormControlSelect1" v-model="lender_side ">
    <option value="Agent">Agent</option>
    <option value="Single Lender">Single Lender</option>
    <option value="Participant">Participant</option>
</select>
</div>
<!-- Role -->

<!-- Sponser -->
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="sponsor">Sponsor</label>
      <select class="form-control" name ="sponsor" id="sponsor" v-model="sponser">
        <option value="">Select Sponser</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
</div>
</div>
<div class="col-md-6" v-if="sponser=='yes'">
    <div class="form-group">
      <label for="name_of_sponsor">    if sponsor Yes -> Name of Sponsor</label>
      <input type="name" class="form-control" name="name_of_sponsor" id="name_of_sponsor" aria-describedby="emailHelp" placeholder="Name of Sponsor" v-model='sponser_name' >
  </div>
</div>
</div>

<!-- Sponser -->



<!-- Cross Border Deal -->

<div class="form-group">
  <label for="cross_border">Cross Border Deal</label>
  <select class="form-control" name ="cross_border" id="cross_border" v-model="cross_border_deal">
    <option value="">Select</option>
    <option value="yes">Yes</option>
    <option value="no">No</option>
</select>
</div>


<div class="form-group" v-if="cross_border_deal == 'yes'" >
  <label for="Country">Country</label>
  <select multiple class="form-control" name="Country" id="Country" v-model="deal_country">
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
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
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
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
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo, the Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="France Metropolitan">France, Metropolitan</option>
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
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
    <option value="Holy See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
    <option value="Korea">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon" selected>Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
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
    <option value="Micronesia">Micronesia, Federated States of</option>
    <option value="Moldova">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
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
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
    <option value="Saint LUCIA">Saint LUCIA</option>
    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia (Slovak Republic)</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
    <option value="Span">Spain</option>
    <option value="SriLanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos">Turks and Caicos Islands</option>
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
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Yugoslavia">Yugoslavia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
<!-- Deal -->

<div class="form-group">
  <label for="industry">Industry</label>
  <select class="form-control" name ="industry" id="industry" v-model="deal_industry">
    <option value="Consumer Finance">Consumer Finance</option>
    <option value="Energy">Energy</option>
    <option value="Retail">Retail</option>
    <option value="Commercial Real Estate">Commercial Real Estate</option>
    <option value="Technology">Technology</option>
    <option value="Funds">Funds</option>
    <option value="Other">Other</option>
</select>
</div>



<div class="form-group">
  <label for="type_of_deal">Type of Deal</label>
  <select multiple class="form-control" id="type_of_deal" v-model="type_of_deal">
    <option>Unsecured revolving credit facility</option>
    <option>Unsecured term loan</option>
    <option>Pari passu credit facility</option>
    <option>ABL</option>
    <option>Term Loan B</option>
    <option>First Lien/Second Lien</option>
    <option>Unitranche</option>
    <option>Commercial Real Estate</option>
    <option>Secured Notes</option>
    <option>Unsecured Notes</option>
    <option>Structured Finance/Securitization</option>

</select>
</div>




<div class="form-group">
  <label for="Collateral">Collateral</label>
  <select multiple class="form-control" name="Collateral" id="Collateral" v-model='collateral'>
    <option value="None">None</option>
    <option value="All assets (pari passu)">All assets (pari passu)</option>
    <option value="ABL collateral">ABL collateral</option>
    <option value="Split Collateral (crossing liens)">Split Collateral (crossing liens)</option>
    <option value="Split Collateral (w/out crossing liens)">Split Collateral (w/out crossing liens)</option>
    <option value="First Lien/Second Lien">First Lien/Second Lien</option>
    <option value="Commercial Real Estate">Commercial Real Estate</option>
    <option value="SPE">SPE</option>
</select>
</div>


<div class="form-group">
  <label for="Syndication">Syndication/Distribution</label>
  <select  class="form-control" name="Syndication" id="Syndication" v-model="distribution">
    <option value="Bilateral">Bilateral</option>
    <option value="Club Deal">Club Deal</option>
    <option value="Syndicated">Syndicated</option>
    <option value="Registered Securities">Registered Securities</option>
    <option value="144A">144A</option>
    <option value="Private Placement">Private Placement</option>

</select>
</div>
<!-- deal -->
<br>
<!-- aggent -->
<h4>Agent/Arranger:</h4>

<div class="form-group">
    <label for="agent_name">Name of Agent</label>
    <input type="name" class="form-control" name="agent_name" id="agent_name" aria-describedby="emailHelp" placeholder="Enter Agent Name" v-model="name_agent">
</div>

<div class="form-row" v-for="(agent_contact, index) in agent_contacts">
    <div class="form-group col-md-2">
      <label :for="agent_contact.name.id">Name</label>
      <input type="text" class="form-control" :id="agent_contact.name.id" placeholder="Name" :name="agent_contact.name.id" v-model = "agent_contact.name.value">
  </div>

  <div class="form-group col-md-2">
      <label :for="agent_contact.title.id">Title/Role:</label>
      <input type="text" :name="agent_contact.title.id" class="form-control" :id="agent_contact.title.id" v-model="agent_contact.title.value">
  </div>
  <div class="form-group col-md-2">
      <label :for="agent_contact.phone.id">Phone Number</label>
      <input type="text" :name="agent_contact.phone.id" class="form-control" :id="agent_contact.phone.id" placeholder="Phone" v-model="agent_contact.phone.value">
  </div>
  <div class="form-group col-md-2">
      <label :for="agent_contact.email.id">Email address</label>
      <input type="text" :name="agent_contact.email.id" class="form-control" :id="agent_contact.email.id" v-model="agent_contact.email.value">
  </div>
  <div class="form-group col-md-2">
      <label :for="agent_contact.address.id">Address</label>
      <input type="text" :name="agent_contact.address.id" class="form-control" :id="agent_contact.address.id" v-model="agent_contact.address.value">
  </div>
   <div class="col-md-1 button-col" v-if="index != 0 ">
      <button type="button" class="btn btn-danger"  v-on:click="removeAggentContact(index)"><i class="fas fa-minus"></i></button>
    </div>
  <div class="col-md-1 button-col" v-if="index == agent_contacts.length-1">
      <button type="button" class="btn btn-primary"  v-on:click="addAggentContact()"><i class="fas fa-plus"></i></button>
  </div>
   
</div>

<br>
<h4>Borrower: </h4>
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="borrower_name">Name of Borrower</label>
      <input type="name" class="form-control" name="borrower_name" id="borrower_name" aria-describedby="emailHelp" placeholder="Enter Borrower Name" v-model="borrower_name">
  </div>

</div>
<div class="col">
    <div class="form-group">
      <label for="public_company">Public Company</label>
      <select  class="form-control" name="public_company" id="public_company" v-model="borrower_is_public_company">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
</div>
</div>
</div>


<label>Principal business contacts:</label>

<div class="form-row" v-for="(borrower_contact, index) in borrower_contacts">
    <div class="form-group col-md-2">
      <label :for="borrower_contact.name.id">Name</label>
      <input type="text" class="form-control" :id="borrower_contact.name.id" placeholder="Name" :name="borrower_contact.name.id" v-model = "borrower_contact.name.value">
  </div>

  <div class="form-group col-md-2">
      <label :for="borrower_contact.title.id">Title/Role:</label>
      <input type="text" :name="borrower_contact.title.id" class="form-control" :id="borrower_contact.title.id"  v-model = "borrower_contact.title.value">
  </div>
  <div class="form-group col-md-2">
      <label :for="borrower_contact.phone.id">Phone Number</label>
      <input type="text" :name="borrower_contact.phone.id" class="form-control" :id="borrower_contact.phone.id" placeholder="Phone"  v-model = "borrower_contact.phone.value">
  </div>
  <div class="form-group col-md-2">
      <label :for="borrower_contact.email.id">Email address</label>
      <input type="text" :name="borrower_contact.email.id" class="form-control" :id="borrower_contact.email.id"  v-model = "borrower_contact.email.value">
  </div>
  <div class="form-group col-md-2">
      <label :for="borrower_contact.address.id">Address</label>
      <input type="text" :name="borrower_contact.address.id" class="form-control" :id="borrower_contact.address.id"  v-model = "borrower_contact.address.value">
  </div>
  <div class="col-md-1 button-col" v-if="index != 0 ">
      <button type="button" class="btn btn-danger"  v-on:click="removeBorrowerContact(index)"><i class="fas fa-minus"></i></button>
    </div>
  <div class="col-md-1 button-col" v-if="index == borrower_contacts.length-1">
      <button type="button" class="btn btn-primary"  v-on:click="addBorrowerContact()"><i class="fas fa-plus"></i></button>
  </div>
    
</div>

<br>

<h4>Opposing Counsel: </h4>

<div class="form-group">
  <label for="Firm">Firm Name:</label>
  <input type="name" class="form-control" name="Firm" id="Firm" aria-describedby="" placeholder="Enter Firm Name" v-model="lookup_firm_name">
</div>

<label>Principal lawyers: </label>
<div class="form-row" v-for="(lookup_contact, index) in lookup_contacts">
    <div class="form-group col-md-3">
      <label :for="lookup_contact.name.id">Name</label>
      <input type="text" class="form-control" :id="lookup_contact.name.id" placeholder="Name" :name="lookup_contact.name.id"  v-model = "lookup_contact.name.value">
  </div>

  <div class="form-group col-md-3">
      <label :for="lookup_contact.phone.id">Phone Number</label>
      <input type="text" :name="lookup_contact.phone.id" class="form-control" :id="lookup_contact.phone.id" placeholder="Phone" v-model = "lookup_contact.phone.value">
  </div>
  <div class="form-group col-md-3">
      <label :for="lookup_contact.email.id">Email address</label>
      <input type="text" :name="lookup_contact.email.id" class="form-control" :id="lookup_contact.email.id" v-model = "lookup_contact.email.value">
  </div>
  <div class="col-md-1 button-col" v-if="index != 0 ">
      <button type="button" class="btn btn-danger"  v-on:click="removeLookupContact(index)"><i class="fas fa-minus"></i></button>
    </div>
  <div class="col-md-1 button-col" v-if="index == lookup_contacts.length-1">
      <button type="button" class="btn btn-primary"  v-on:click="addLookupContact()"><i class="fas fa-plus"></i></button>
  </div>
    
</div>

<br>

<h4>Client Local counsel (U.S. domestic): </h4>

<div class="row">
  <div class="col">
      <div class="form-group">
          <label for="public_company">State</label>
          <select  class="form-control" name="public_company" id="public_company" v-model='client_us_state'>
            <option value="state1">state1</option>
            <option value="state2">state2</option>
        </select>
    </div>
</div>
<div class="col">
 <div class="form-group">
  <label for="inputCity">Name of Firm</label>
  <input type="text" class="form-control" id="inputCity" placeholder="Name of Firm" v-model='client_us_firm_name'>
</div>
</div>
</div>

<label for="p_title">Principal lawyers::</label>
<div class="form-row" v-for="(clientus_contact, index) in clientus_contacts">
    <div class="form-group col-md-3">
      <label :for="clientus_contact.name.id">Name</label>
      <input type="text" class="form-control" :id="clientus_contact.name.id" placeholder="Name" :name="clientus_contact.name.id" v-model="clientus_contact.name.value">
  </div>

  <div class="form-group col-md-3">
      <label :for="clientus_contact.phone.id">Phone Number</label>
      <input type="text" :name="clientus_contact.phone.id" class="form-control" :id="clientus_contact.phone.id" placeholder="Phone" v-model="clientus_contact.phone.value">
  </div>
  <div class="form-group col-md-3">
      <label :for="clientus_contact.email.id">Email address</label>
      <input type="text" :name="clientus_contact.email.id" class="form-control" :id="clientus_contact.email.id" v-model="clientus_contact.email.value">
  </div>
  <div class="col-md-1 button-col" v-if="index != 0 ">
      <button type="button" class="btn btn-danger"  v-on:click="removeClientusContact(index)"><i class="fas fa-minus"></i></button>
    </div>
  <div class="col-md-1 button-col" v-if="index == clientus_contacts.length-1">
      <button type="button" class="btn btn-primary"  v-on:click="addClientusContact()"><i class="fas fa-plus"></i></button>
  </div>
    
</div>

<br>

<h4>Client Local counsel (foreign) </h4>

<div class="row">
  <div class="col">
      <div class="form-group">
          <label for="public_company">Country</label>
          <select  class="form-control" name="public_company" id="public_company" v-model="client_foriegn_country">
            <option value="country1">Country1</option>
            <option value="country2">Country2</option>
        </select>
    </div>
</div>
<div class="col">
 <div class="form-group">
  <label for="inputCity">Name of Firm</label>
  <input type="text" class="form-control" id="inputCity" placeholder="Name of Firm" v-model="client_foriegn_firm_name">
</div>
</div>
</div>

<label for="p_title">Principal lawyers::</label>
<div class="form-row" v-for="(clientforeign_contact, index) in clientforeign_contacts">
    <div class="form-group col-md-3">
      <label :for="clientforeign_contact.name.id">Name</label>
      <input type="text" class="form-control" :id="clientforeign_contact.name.id" placeholder="Name" :name="clientforeign_contact.name.id" v-model="clientforeign_contact.name.value">
  </div>

  <div class="form-group col-md-3">
      <label :for="clientforeign_contact.phone.id">Phone Number</label>
      <input type="text" :name="clientforeign_contact.phone.id" class="form-control" :id="clientforeign_contact.phone.id" placeholder="Phone" v-model="clientforeign_contact.phone.value">
  </div>
  <div class="form-group col-md-3">
      <label :for="clientforeign_contact.email.id">Email address</label>
      <input type="text" :name="clientforeign_contact.email.id" class="form-control" :id="clientforeign_contact.email.id" v-model="clientforeign_contact.email.value">
  </div>
  <div class="col-md-1 button-col" v-if="index != 0 ">
      <button type="button" class="btn btn-danger"  v-on:click="removeClientforeignContact(index)"><i class="fas fa-minus"></i></button>
    </div>
  <div class="col-md-1 button-col" v-if="index == clientforeign_contacts.length-1">
      <button type="button" class="btn btn-primary"  v-on:click="addClientforeignContact()"><i class="fas fa-plus"></i></button>
  </div>
    
</div>



<br>

<h4>Opposing Local counsel (U.S. domestic): </h4>

<div class="row">
  <div class="col">
      <div class="form-group">
          <label for="public_company">State</label>
          <select  class="form-control" name="public_company" id="public_company" v-model="opposing_us_state">
            <option value="state1">state1</option>
            <option value="state2">state2</option>
        </select>
    </div>
</div>
<div class="col">
 <div class="form-group">
  <label for="inputCity">Name of Firm</label>
  <input type="text" class="form-control" id="inputCity" placeholder="Name of Firm" v-model="opposing_us_firm_name">
</div>
</div>
</div>

<label for="p_title">Principal lawyers::</label>
<div class="form-row" v-for="(opposingus_contact, index) in opposingus_contacts">
    <div class="form-group col-md-3">
      <label :for="opposingus_contact.name.id">Name</label>
      <input type="text" class="form-control" :id="opposingus_contact.name.id" placeholder="Name" :name="opposingus_contact.name.id" v-model="opposingus_contact.name.value">
  </div>

  <div class="form-group col-md-3">
      <label :for="opposingus_contact.phone.id">Phone Number</label>
      <input type="text" :name="opposingus_contact.phone.id" class="form-control" :id="opposingus_contact.phone.id" placeholder="Phone" v-model="opposingus_contact.phone.value">
  </div>
  <div class="form-group col-md-3">
      <label :for="opposingus_contact.email.id">Email address</label>
      <input type="text" :name="opposingus_contact.email.id" class="form-control" :id="opposingus_contact.email.id" v-model="opposingus_contact.email.value">
  </div>
  <div class="col-md-1 button-col" v-if="index != 0 ">
      <button type="button" class="btn btn-danger"  v-on:click="removeOpposingusContact(index)"><i class="fas fa-minus"></i></button>
    </div>
  <div class="col-md-1 button-col" v-if="index == opposingus_contacts.length-1">
      <button type="button" class="btn btn-primary"  v-on:click="addOpposingusContact()"><i class="fas fa-plus"></i></button>
  </div>
    
</div>

<br>

<h4>Opposing Local counsel(foreign) </h4>

<div class="row">
  <div class="col">
      <div class="form-group">
          <label for="public_company">Country</label>
          <select  class="form-control" name="public_company" id="public_company" v-model="opposing_foriegn_country">
            <option value="country1">Country1</option>
            <option value="country2">Country2</option>
        </select>
    </div>
</div>
<div class="col">
 <div class="form-group">
  <label for="inputCity">Name of Firm</label>
  <input type="text" class="form-control" id="inputCity" placeholder="Name of Firm" v-model="opposing_foriegn_firm_name">
</div>
</div>
</div>

<label for="p_title">Principal lawyers::</label>
<div class="form-row" v-for="(opposingforeign_contact, index) in opposingforeign_contacts">
    <div class="form-group col-md-3">
      <label :for="opposingforeign_contact.name.id">Name</label>
      <input type="text" class="form-control" :id="opposingforeign_contact.name.id" placeholder="Name" :name="opposingforeign_contact.name.id" v-model="opposingforeign_contact.name.value">
  </div>

  <div class="form-group col-md-3">
      <label :for="opposingforeign_contact.phone.id">Phone Number</label>
      <input type="text" :name="opposingforeign_contact.phone.id" class="form-control" :id="opposingforeign_contact.phone.id" placeholder="Phone" v-model="opposingforeign_contact.phone.value">
  </div>
  <div class="form-group col-md-3">
      <label :for="opposingforeign_contact.email.id">Email address</label>
      <input type="text" :name="opposingforeign_contact.email.id" class="form-control" :id="opposingforeign_contact.email.id" v-model="opposingforeign_contact.email.value">
  </div>
  <div class="col-md-1 button-col" v-if="index != 0 ">
      <button type="button" class="btn btn-danger"  v-on:click="removeOpposingforeignContact(index)"><i class="fas fa-minus"></i></button>
    </div>
  <div class="col-md-1 button-col" v-if="index == opposingforeign_contacts.length-1">
      <button type="button" class="btn btn-primary"  v-on:click="addOpposingforeignContact()"><i class="fas fa-plus"></i></button>
  </div>
    
</div>

<button type="submit" class="btn btn-primary btn-lg">Submit</button>
<a href="index.php" class="btn btn-secondary btn-lg">Cancle</a>

</form>


<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <div class="row">
    <div class="col-12 col-md">
      <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
      <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
  </div>
  <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Cool stuff</a></li>
        <li><a class="text-muted" href="#">Random feature</a></li>
        <li><a class="text-muted" href="#">Team feature</a></li>
        <li><a class="text-muted" href="#">Stuff for developers</a></li>
    </ul>
</div>
<div class="col-6 col-md">
  <h5>Resources</h5>
  <ul class="list-unstyled text-small">
    <li><a class="text-muted" href="#">Resource</a></li>
    <li><a class="text-muted" href="#">Resource name</a></li>
    <li><a class="text-muted" href="#">Another resource</a></li>
    <li><a class="text-muted" href="#">Final resource</a></li>
</ul>
</div>
<div class="col-6 col-md">
  <h5>About</h5>
  <ul class="list-unstyled text-small">
    <li><a class="text-muted" href="#">Team</a></li>
    <li><a class="text-muted" href="#">Locations</a></li>
    <li><a class="text-muted" href="#">Privacy</a></li>
    <li><a class="text-muted" href="#">Terms</a></li>
</ul>
</div>
</div>
</footer>
</div>


    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../xcrud_app/dist/jquery-1.11.1.min.js"></script>
      <script src="../xcrud_app/dist/bootstrap4.min.js"></script>
      <script src="../xcrud_app/dist/jquery.bootgrid.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
      <script src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


      <script>

        $('#closing_date').datepicker({
        });

        /*Holder.addTheme('thumb', {
          bg: '#55595c',
          fg: '#eceeef',
          text: 'Thumbnail'
        });
        */
    </script>
</body>
</html>
