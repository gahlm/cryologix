<style>
/* Copy from here on */
.docusign_form {
  max-width: 100%;
  box-shadow: 0 0 56px 0 rgb(0 0 0 / 20%);
  display: grid;
  grid-template-columns: 1fr;
  background-color: white;
  border-radius: 5px;
}
.docusign {
  border: none;
  padding: 20px 0 20px 0;
  max-width: 85%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
@media only screen and (min-width: 1000px) {
  .questionGroup:hover {
    background-color: #f4f4f4;
    border-color: #BFACE2 !important;
    border: 5px;
    border-left-style: inset;
  }
}
.docusignTitle {
  background-color: #A5BED0;
  color: #ffffff;
  padding: 15px;
  border-radius: 5px 5px 0 0;
}
#question {
  margin: 0 auto 10px 15px;
}
.question_long {
  display: grid;
  grid-template-columns: min-content 8fr;
  align-items: start;
  margin-bottom: 5px;
}
.question_long span {
  font-weight: 600;
}
.question_long span.underline {
  text-decoration: underline;
}
.questionGroup {
  background-color: #ffffff;
  padding: 10px 25px 0 20px;
}
.tissues {
  display: grid;
  width: 50%;
  grid-template-columns: 0.5fr 0.5fr;
  grid-auto-rows: auto;
}
.tissue_right {
  display: flex;
  grid-column: 2;
  flex-direction: column;
  gap: 0.5em;
}
.tissue_left {
  display: flex;
  grid-column: 1;
  flex-direction: column;
  gap: 0.5em;
}
.large-label {
  display: inline-block;
  font-weight: 600;
}

.small-label {
  vertical-align: middle;
  text-align: left;
  display: inline-block;
  
}
.tissue_left .small-label {
  display: block;
}
.tissue_right .small-label {
  display: block;
}
.client_names {
  width: 100%;
}
.client_names input[type='text'] {
  width: 50%;
  margin-left: 25px;
}
.client_names input[type='email'] {
  width: 50%;
  margin-left: 25px;
}
.docuHidden {
  display: none !important;
}
input[type='radio'] {
  margin: 0px 4px 0 19px;
  align-content: center;
}
input[type='text'] {
     margin: 0px 4px 0 19px;
    border-width: 1px;
    border-radius: 2px;
    border-style: solid;
    border-color: rgb(133, 133, 133);
    border-image: initial;
    align-content: center;
    line-height: normal;
}
select {
     margin: 0px 4px 0 19px;
    border-width: 1px;
    border-radius: 2px;
    border-style: solid;
    border-color: rgb(133, 133, 133);
    border-image: initial;
    align-content: center;
    line-height: normal;
}
.button_area {
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.button_area button {
  padding: 10px;
  min-width: 20%;
  background-color: #3E54AC;
  border: none;
  color: white;
  margin: 10px;
  cursor: pointer;
  border-radius: 3px;
  font-weight: 600;
}
.button_area button:hover {
  background-color: #BFACE2;
}
input:required:focus:valid {
  background: #b2d99b;
}
input:focus:invalid {
  background: lightsalmon;
  border: red;
  border: 1px;
}
option:focus {
  background-color: #BFACE2;
}
.docuBullets ul {
  list-style-type: disc !important;
}
.docuBullets li {
  font-weight: 600 !important;
}
.docuBullets li ul {
  list-style-type: circle !important;
  margin-left: 25px;
}
.docuBullets li ul li {
  font-weight: 500 !important;
}
.docuBullets span {
  font-weight: 600 !important;
}
/* Tabbed Instructions Begin */
.docusignList {
  padding: 25px;
}
.DSTabWrapper {
  max-width: 80%;
  height: max-content;
  align-self: center;
  justify-self: center;
  margin: 10px auto 20px auto;
  box-shadow: 0 0 16px 0 rgb(0 0 0 / 20%);
  /* margin: 20px; */
}
.docusignButtons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
}
.tab-button {
  border: none;
  padding: 10px;
  background-color: #2e618d;
  color: #ffffff;
  font-size: 1em sans-serif;
  font-weight: 600;
  text-transform: capitalize;
  cursor: pointer;
  transition: 0.5s;
}

.tab-button:hover {
  background-color: #3f7eb6;
}

.tab-button.DSactive {
  background-color: #b2d99b;
  color: black;
}

.DSactive {
  background-color: white;
}

.docusignTab {
  display: none;
  padding: 10px 20px;
  text-align: left;
}

.docusignTab.DSactive {
  display: block;
}
.docusignTab li {
  font: 0.9em sans-serif;
  margin-left: 10px;
  padding: 10px 0 5px 0;
}
.docusignTab li::marker {
  font-weight: 600;
}
/* Tabbed Instructions End */

@media only screen and (max-width: 1000px) {
  .tissues {
    grid-template-columns: 1fr;
    width: 100%;
    gap: 0.5em;
  }
  .tissue_right {
    grid-column: 1;
  }

  .client_names input[type='text'] {
    width: 100%;
    margin-left: 0px;
  }
  .client_names input[type='email'] {
    width: 100%;
    margin-left: 0px;
  }
  .large-label {
    padding-right: 25px;
    font-size: 0.9em;
  }
  .small-label {
    font-size: 0.8em;
  }
  .RTL_clinic_list {
    overflow: hidden !important;
    max-width: 200px;
  }
  .button_area {
    margin-top: 40px;
  }
  /* Begin Additions For Tabbed Instructions Mobile */
  .docusignButtons {
    grid-template-columns: 1fr !important;
  }
  /* Tabbed Instructions Mobile End */
}




</style>

<div class="docusign_form">
			<h1 class="large-label docusignTitle">Client Information</h1>
			<div class="questionGroup">
				<label for="" class="small-label" style="font-weight:600">NOTE:</label>
				<label for="" class="small-label">Plan up to 10 minutes to complete your form.</label><br>		
			</div>
			<div class="questionGroup ">
				<label for="" class="large-label">Required Information For Signing</label>
					<div class="docusignList">
						<ul class="docuBullets">
							<li>Email Address:
								<ul class="docuBullets">
									<li>Your email will be used for important account correspondence.</li>
									<li>Personal Health Information will be delivered to this address including a copy of your DocuSign contract(s).</li>
								</ul>
							</li>
						</ul>
						<ul class="docuBullets">
							<li>Payment Method:
								<ul class="docuBullets">
									<li><span>Your credit/debit card or E-Check information</span> for payment verification </li>
								</ul>
							</li>
						</ul>
					</div>
  		</div>
			<div class="questionGroup">
				<label for="" class="small-label">To change answers on this form, select the “Clear” option below.”</label><br>
			</div>
			<!-- Begin Form -->
			<form action="" method="GET" id="docusignForm" class="docusign-area">
				<div class="questionGroup" id="minorFieldset">
					<label for="" class="large-label">Are the specimens being stored for a minor* patient?  </label><br>
					<label for="" class="small-label" style="font-size: 0.8rem;">[*Minor is defined as younger than 18 for all US states except AL (19), NE (19) & MS (21)]</label>
					<fieldset class='docusign'>
						<input type="radio" value="Yes" name="MINOR_CLIENT_Y_N" required/><label for="MINOR_CLIENT_Y_N" class="small-label">Yes</label>

						<input type="radio" value="No" name="MINOR_CLIENT_Y_N"/><label for="MINOR_CLIENT_Y_N" class="small-label">No</label>
					</fieldset>
				</div>
				<div class="questionGroup docuHidden" id="tissueFieldset">
					<label for="Tissue_Type" class="large-label">Tissue type being stored:</label>
					<fieldset class='docusign tissues'>
						<div class="tissue_left">
							<label for="EMBRYO" class="small-label"><input type="radio" value="EMBRYO" name="TISSUE_TYPE" required/>Embryo</label>
							<label for="SEMEN" class="small-label"><input type="radio" value="SEMEN" name="TISSUE_TYPE"/>Semen</label>
							<label for="OOCYTE" class="small-label"><input type="radio" value="OOCYTE" name="TISSUE_TYPE"/>Oocyte</label>
							<label for="TESTICULAR" class="small-label"><input type="radio" value="TESTICULAR" name="TISSUE_TYPE"/>Testicular Tissue</label>
						</div>
						<div class="tissue_right">
							<label for="DONEMBRYO" class="small-label "><input type="radio" value="DONEMBRYO" name="TISSUE_TYPE"/>Donor Embryo</label>
							<label for="DONSEMEN" class="small-label "><input type="radio" value="DONSEMEN" name="TISSUE_TYPE"/>Donor Semen</label>
							<label for="DONOOCYTE" class="small-label "><input type="radio" value="DONOOCYTE" name="TISSUE_TYPE"/>Donor Oocyte</label>
							<label for="OVARIAN" class="small-label "><input type="radio" value="OVARIAN" name="TISSUE_TYPE"/>Ovarian Tissue</label>
						</div>
					</fieldset>
				</div>
				<div class="questionGroup docuHidden" id="currentClientFieldset">
					<label for="CURR_CL_Y_N" class="large-label">Do you have current or past storage at ReproTech, or have you previously completed ReproTech account paperwork?</label>
					<fieldset class='docusign'>
						<input type="radio" value="Yes" name="CURR_CL_Y_N" required/><label for="Yes" class="small-label" >Yes</label>
						<input type="radio" value="No" name="CURR_CL_Y_N"/><label for="No" class="small-label" >No</label>
					</fieldset>
				</div>
				<div class="questionGroup docuHidden" id="maritalFieldset">
					<label for="" class="large-label">Who owns this tissue?
					</label>
					<fieldset class='docusign'>
            <div class="question_long">
              <input type="radio" value="couple" name="MARITAL"/><label for="couple" class="small-label"><span>MYSELF AND ANOTHER PERSON </span>- I and my spouse, partner, ex-partner, etc. are <span class="underline">both</span> legal owners and would <span class="underline">both</span> be legal parents.</label>
            </div>
            <div class="question_long">
              <input type="radio" value="single" name="MARITAL"/><label for="single" class="small-label"><span>MYSELF </span>- I am the <span class="underline">only</span> legal owner and would be the <span class="underline">only</span> legal parent.</label>
            </div>
					</fieldset>
				</div>

				<div class="questionGroup docuHidden" id="clientAFieldset">
					<label for="" class="large-label">Client A</label>
					<fieldsetclass= class='docusign'>
						<div class="client_names">
							<div id="question">
								<label for="CD_A_First" class="small-label ">First Name</label>
								<input type="text" name="CD_A_First" id="CD_A_First" required/>
							</div>
							<div id="question">
								<label for="CD_A_MIDDLE" class="small-label ">Middle Name Or Preferred Name</label>
								<input type="text" name="CD_A_Middle" id="CD_A_Middle"/>
							</div>
							<div id="question">
								<label for="CD_A_Last" class="small-label ">Last Name</label>
								<input type="text" name="CD_A_Last" id="CD_A_Last" required/>
							</div>
							<div id="question">
								<label for="CD_A_Email" class="small-label">Email</label>
								<input type="email" name="CD_A_Email" id="CD_A_Email" required/>
							</div>
						</div>
					</fieldsetclass='docusign'>

				</div>
				<div class="questionGroup docuHidden" id="clientBFieldset">
					<div id="specialNote"></div>
					<fieldset class='docusign'>
						<div class="client_names">

							<div id="question">
								<label for="CD_B_First" class="small-label">First Name</label>
								<input type="text" name="CD_B_First" id="CD_B_First" value=""/>
							</div>
							<div id="question">
								<label for="CD_B_Middle" class="small-label">Middle Name</label>
								<input type="text" name="CD_B_Middle" id="CD_B_Middle" value=""/>
							</div>
							<div id="question">
								<label for="CD_B_Last" class="small-label">Last Name</label>
								<input type="text" name="CD_B_Last" id="CD_B_Last" value=""/>
							</div>
							<div id="question">
								<label for="CD_B_Email" class="small-label">Email</label>
								<input type="email" name="CD_B_Email" id="CD_B_Email" value=""/>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="questionGroup docuHidden" id="stateFieldset">
					<label for="STATE" class="large-label">State where your clinic is located</label>
					<fieldset class='docusign'>
						<select name="STATE" required>
							<option value="" selected>-- Select --</option>
							<option value="INT">International</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</fieldset>
				</div>
				<div class="questionGroup docuHidden" id="zipFieldset">
					<label for="zip" class="large-label">Clinic ZIP Code:</label>
					<fieldset class='docusign'>

						<input type="number" name="ZIP"/>
					</fieldset>
				</div>

				<div class="questionGroup docuHidden" id="clinicFieldset">
					<label for="clinic" class="large-label">Clinic:</label>
					<fieldset class='docusign'>

						<select name="CLINIC" required class="RTL_clinic_list"></select>

					</fieldset>
				</div>

				<!--  Progyny Carrot -->
				<div class="questionGroup docuHidden" id="progynyCarrotFieldset">
					<label for="" class="large-label">Are you a Progyny or Carrot Fertility member?</label>
					<fieldset class='docusign'>
						<input type="radio" value="Yes" name="PROG_CARROT_Y_N" required/><label for="PROG_CARROT_Y_N" class="small-label">Yes</label>
						<input type="radio" value="No" name="PROG_CARROT_Y_N"/><label for="PROG_CARROT_Y_N" class="small-label">No</label>
					</fieldset>
				</div>
				<div class="questionGroup docuHidden" id="progynyCarrotSubFieldset">
					<label for="PROGYNY_ID" class="large-label">Progyny ID#:</label>
					<fieldset class='docusign'>
						<input type="text" name="PROGYNY_ID" id="PROGYNY_ID"/>
					</fieldset>
					<label for="CARROT_ID" class="large-label">Carrot Fertility Code:</label>
					<fieldset class='docusign'>
						<input type="text" name="CARROT_ID" id="CARROT_ID" />
					</fieldset>
				</div>
				<div class="button_area">
					<button id="submit">Submit</button>
					<button id="clear" type='reset'>Clear</button>
				</div>
			</form>
		</div>
<script>
/*========================VARIABLES======================*/
// Whole Form Object
const docuForm = document.getElementById('docusignForm')
// minor
const minor = document.getElementsByName('MINOR_CLIENT_Y_N')
// Tissue
const tissueType = document.getElementsByName('TISSUE_TYPE')
const tissueFieldset = document.getElementById('tissueFieldset')
// Current Client
const currentClientFieldset = document.getElementById('currentClientFieldset')
const currentClient = document.getElementsByName('CURR_CL_Y_N')
// Marital Status
const maritalFieldset = document.getElementById('maritalFieldset')
const marital = document.getElementsByName('MARITAL')
// Client A
const clientAFieldset = document.getElementById('clientAFieldset')
const clientAFirstName = document.getElementsByName('CD_A_First')
// Client B
const clientBFieldset = document.getElementById('clientBFieldset')
const clientBEmail = document.getElementsByName('CD_B_Email')
// Client B Fields
const cdBFirst = document.getElementById('CD_B_First')
const cdBLast = document.getElementById('CD_B_Last')
const cdBEmail = document.getElementById('CD_B_Email')
const specialNote = document.getElementById('specialNote')
// State
const stateFieldset = document.getElementById('stateFieldset')
const state = document.getElementsByName('STATE')
// Zip
const zipFieldset = document.getElementById('zipFieldset')
const zip = document.getElementsByName('ZIP')
// Clinic
const clinicFieldset = document.getElementById('clinicFieldset')
const clinic = document.getElementsByName('CLINIC')
// Progyny Carrot Y/N
const pcFieldset = document.getElementById('progynyCarrotFieldset')
// Progyny Carrot Fieldset
const pcSubFieldset = document.getElementById('progynyCarrotSubFieldset')
const progYN = document.getElementsByName('PROG_CARROT_Y_N')
// Progyny Carrot Fields
const progyny = document.getElementById('PROGYNY_ID')
const carrot = document.getElementById('CARROT_ID')
// Unused Tabs
const tabs = document.querySelectorAll('.tab-button')
const tabContent = document.querySelectorAll('.docusignTab')
const docusignBtns = document.querySelector('.docusignButtons')

// Handle Submission
const submitBtn = document.getElementById('submit')
const clearBtn = document.getElementById('clear')
/*========================END VARIABLES======================*/
/*========================REGEX ZIP RANGES=======================*/
// California (SoCal = 90000-92999), (NoCal = 93000-99999)
const northCal = /(9300\d|930[1-9]\d|93[1-9]\d{2}|9[4-9]\d{3})/
const southCal = /(9000\d|900[1-9]\d|90[1-9]\d{2}|9[12]\d{3})/
// Texas (EastTX = 75000-76999), (WestTX = 77000-88599)
const eastTx = /(7500\d|750[1-9]\d|75[1-9]\d{2}|76\d{3})/
const westTx =
  /(7700\d|770[1-9]\d|77[1-9]\d{2}|7[89]\d{3}|8[0-7]\d{3}|88[0-5]\d{2})/
// New York (NYC = 10000-11499),(Upstate = 11500-14699)
const NYC = /(1000\d|100[1-9]\d|10[1-9]\d{2}|11[0-4]\d{2})/
const upstateNY = /(1150\d|115[1-9]\d|11[6-9]\d{2}|1[23]\d{3}|14[0-6]\d{2})/
/*========================EVENT LISTENERS======================*/

// Question 1: Minor Type
for (let i = 0; i < minor.length; i++) {
  minor[i].addEventListener('change', handleMinorTypeChange)
}
// Question 1: Tissue Type
for (let i = 0; i < tissueType.length; i++) {
  tissueType[i].addEventListener('change', handleTissueTypeChange)
}

// Question 2: Current Client
for (let i = 0; i < currentClient.length; i++) {
  currentClient[i].addEventListener('change', handleCurrentClientChange)
}

// Question 3: Marital Status
for (let i = 0; i < marital.length; i++) {
  marital[i].addEventListener('change', handleMaritalStatusChange)
}

// Question 4: Client First Name
clientAFirstName[0].addEventListener('input', handleNameChange)

// Question 5: State
state[0].addEventListener('change', handleStateChange)

// Question 6: Zip
zip[0].addEventListener('change', handleZipChange)

// Question 7ish: Clinc
clinic[0].addEventListener('change', handleClinicChange)
// Question 8: Progyny Y/N
for (let i = 0; i < progYN.length; i++) {
  progYN[i].addEventListener('change', handleProgChange)
}

// Clear Button
clearBtn.addEventListener('click', handleClear)

// Submit Button
submitBtn.addEventListener('click', handleSubmit)

/*========================END EVENT LISTENERS======================*/

/*========================CONDITIONAL FUNCTIONS======================*/

// TISSUE TYPE
function handleTissueTypeChange(e) {
  currentClientFieldset.classList.remove('docuHidden')
  clientAFieldset.classList.remove('docuHidden')
  maritalFieldset.classList.remove('docuHidden')
  // If it's not an Embryo - martial status will always be single
  if (minor[0].checked) {
    marital[0].checked = true
    maritalFieldset.classList.add('docuHidden')
  } else if (
    (minor[1].checked && e.target.value === 'EMBRYO') ||
    (minor[1].checked && e.target.value === 'DONEMBRYO') ||
    (minor[1].checked && e.target.value === 'DONOOCYTE') ||
    (minor[1].checked && e.target.value === 'DONSEMEN')
  ) {
    maritalFieldset.classList.remove('docuHidden')
    marital[0].setAttribute('required', 'required')
    clientBFieldset.classList.add('docuHidden')
    clientBEmail[0].value = ''
  } else if (
    e.target.value === 'SEMEN' ||
    e.target.value === 'OOCYTE' ||
    e.target.value === 'OVARIAN' ||
    e.target.value === 'TESTICULAR'
  ) {
    marital[1].checked = true
    maritalFieldset.classList.add('docuHidden')
    clientAFieldset.classList.remove('docuHidden')
  }
  tissueType[0].disabled = true
  tissueType[1].disabled = true
  tissueType[2].disabled = true
  tissueType[3].disabled = true
  tissueType[4].disabled = true
  tissueType[5].disabled = true
  tissueType[6].disabled = true
  tissueType[7].disabled = true
}
function handleMinorTypeChange(e) {
  currentClientFieldset.classList.remove('docuHidden')
  clientAFieldset.classList.remove('docuHidden')
  tissueFieldset.classList.remove('docuHidden')

  // If they are a Minor - martial status will always be single
  if (e.target.value !== 'No') {
    marital[0].checked = true
    maritalFieldset.classList.add('docuHidden')
    clientAFieldset.classList.remove('docuHidden')
    clientBFieldset.classList.remove('docuHidden')
    cdBEmail.setAttribute('required', 'required')
    cdBLast.setAttribute('required', 'required')
    cdBFirst.setAttribute('required', 'required')
    specialNote.innerHTML = `<label for="" class="large-label">Parent Or Guardian <br> **NOTE: Parent or Guardian Information Is Required For Form Submission**</label>`
  } else {
    // marital[0].checked = false
    // marital[1].checked = false
    clientBFieldset.classList.add('docuHidden')
    clientBEmail[0].value = ''
    cdBEmail.removeAttribute('required')
    cdBLast.removeAttribute('required')
    cdBFirst.removeAttribute('required')
    specialNote.innerHTML = '<label for="" class="large-label">Client B</label>'
    // maritalFieldset.classList.remove('docuHidden')
  }
  minor[0].disabled = true
  minor[1].disabled = true
}

// CURRENT CLIENT
function handleCurrentClientChange() {
  currentClient[0].disabled = true
  currentClient[1].disabled = true
}

// MARITAL STATUS
function handleMaritalStatusChange(e) {
  clientAFieldset.classList.remove('docuHidden')

  if (e.target.value === 'couple') {
    cdBEmail.setAttribute('required', 'required')
    cdBLast.setAttribute('required', 'required')
    cdBFirst.setAttribute('required', 'required')
    clientBFieldset.classList.remove('docuHidden')
  } else if (e.target.value === 'single') {
    cdBEmail.removeAttribute('required')
    cdBLast.removeAttribute('required')
    cdBFirst.removeAttribute('required')
    clientBFieldset.classList.add('docuHidden')

    clientBEmail[0].value = ''
  }
  marital[0].disabled = true
  marital[1].disabled = true
}

// CLIENT A & OPTIONAL CLIENT B
function handleNameChange(e) {
  if (e.target.value !== '') {
    stateFieldset.classList.remove('docuHidden')
  } else {
    stateFieldset.classList.add('docuHidden')
  }
}

// STATE
function handleStateChange(e) {
  zip[0].value = ''
  if (e.target.value !== '' && e.target.value !== 'INT') {
    zipFieldset.classList.remove('docuHidden')
  } else if (e.target.value === 'INT') {
    zipFieldset.classList.add('docuHidden')
    clinicFieldset.classList.remove('docuHidden')
    loadClinics()
  } else {
    zipFieldset.classList.add('docuHidden')
  }
}

// ZIP
function handleZipChange(e) {
  if (e.target.value !== '') {
    loadClinics()
    clinicFieldset.classList.remove('docuHidden')
  } else {
    clinicFieldset.classList.add('docuHidden')
  }
}
async function getClinics() {
  // Live: /wp-content/themes/reprotech/assets/js/Clinic_List.json
  let url = '/wp-content/themes/cryologix/assets/scripts/Clinic_List.json'
  try {
    let res = await fetch(url)
    return await res.json()
  } catch (error) {
    console.log(error)
  }
}
// LOAD CLINICS
async function loadClinics() {
  let clinics = await getClinics()
  clinics = clinics.Data

  let options = '<option value="" selected>-- Select --</option>'

  clinics = clinics.filter((clinicData) => {
    let stateMatch = clinicData.Billing_Address_State === state[0].value
    // REGEX Ranges defined above just below variables
    if (
      stateMatch &&
      southCal.test(clinicData.Billing_Address_Zip) &&
      southCal.test(zip[0].value)
    ) {
      return clinicData
    } else if (
      stateMatch &&
      northCal.test(clinicData.Billing_Address_Zip) &&
      northCal.test(zip[0].value)
    ) {
      return clinicData
    } else if (
      stateMatch &&
      eastTx.test(clinicData.Billing_Address_Zip) &&
      eastTx.test(zip[0].value)
    ) {
      return clinicData
    } else if (
      stateMatch &&
      westTx.test(clinicData.Billing_Address_Zip) &&
      westTx.test(zip[0].value)
    ) {
      return clinicData
    } else if (
      stateMatch &&
      NYC.test(clinicData.Billing_Address_Zip) &&
      NYC.test(zip[0].value)
    ) {
      return clinicData
    } else if (
      stateMatch &&
      upstateNY.test(clinicData.Billing_Address_Zip) &&
      upstateNY.test(zip[0].value)
    ) {
      return clinicData
    } else if (
      stateMatch &&
      state[0].value != 'CA' &&
      state[0].value != 'NY' &&
      state[0].value != 'TX'
    ) {
      return clinicData
    } else {
      return false
    }
  })
  function SortArray(x, y) {
    return x.Customer_Name.localeCompare(y.Customer_Name)
  }
  clinics = clinics.sort(SortArray)

  for (var clinicData of clinics) {
    options += `<option value='${JSON.stringify(clinicData).replace(
      "'",
      '&rsquo;'
    )}'>${clinicData.Customer_Name}</option>`
  }
  clinic[0].innerHTML = options
}
function handleClinicChange() {
  pcFieldset.classList.remove('docuHidden')
}
function handleProgChange() {
  progYN[0].disabled = true
  progYN[1].disabled = true
  if (progYN[0].checked) {
    pcSubFieldset.classList.remove('docuHidden')
  }
}

// CLEAR BUTTON
function handleClear() {
  tissueFieldset.classList.add('docuHidden')
  currentClientFieldset.classList.add('docuHidden')
  maritalFieldset.classList.add('docuHidden')
  clientAFieldset.classList.add('docuHidden')
  clientBFieldset.classList.add('docuHidden')
  stateFieldset.classList.add('docuHidden')
  zipFieldset.classList.add('docuHidden')
  clinicFieldset.classList.add('docuHidden')
  pcFieldset.classList.add('docuHidden')
  pcSubFieldset.classList.add('docuHidden')
  minor[0].disabled = false
  minor[1].disabled = false
  tissueType[0].disabled = false
  tissueType[1].disabled = false
  tissueType[2].disabled = false
  tissueType[3].disabled = false
  tissueType[4].disabled = false
  tissueType[5].disabled = false
  tissueType[6].disabled = false
  tissueType[7].disabled = false
  marital[0].disabled = false
  marital[1].disabled = false
  currentClient[0].disabled = false
  currentClient[1].disabled = false
  progYN[0].disabled = false
  progYN[1].disabled = false
  // nfrpYN[0].disabled = false
  // nfrpYN[1].disabled = false
  cdBEmail.removeAttribute('required')
  cdBLast.removeAttribute('required')
  cdBFirst.removeAttribute('required')
  marital[0].removeAttribute('required')
}

/*===================END OF CONDITIONAL FUNCTIONS==================*/

/*========================PREPARE LINK======================*/

// SUBMIT BUTTON
async function handleSubmit(e) {
  // Form validation
  if (!docuForm.reportValidity()) {
    return false
  }
  e.preventDefault()
  minor[0].disabled = false
  minor[1].disabled = false
  tissueType[0].disabled = false
  tissueType[1].disabled = false
  tissueType[2].disabled = false
  tissueType[3].disabled = false
  tissueType[4].disabled = false
  tissueType[5].disabled = false
  tissueType[6].disabled = false
  tissueType[7].disabled = false
  marital[0].disabled = false
  marital[1].disabled = false
  currentClient[0].disabled = false
  currentClient[1].disabled = false

  const formData = new FormData(docuForm)
  console.log(formData)
  const formValues = Object.fromEntries(formData)
  console.log(formValues)

  formValues.CD_A_UserName = [formValues.CD_A_First, formValues.CD_A_Last].join(
    ' '
  )

  // Tissue Type Power Form IDs
  if (formValues.MINOR_CLIENT_Y_N !== 'Yes') {
    // Not A Minor Check Tissue
    if (
      formValues.TISSUE_TYPE === 'EMBRYO' ||
      formValues.TISSUE_TYPE === 'DONEMBRYO'
    ) {
      // Was an Embryo
      if (formValues.MARITAL !== 'couple') {
        // Not a couple so it is a EMBRYO TISSUE SINGLE
        formValues.PowerFormId = '4d6e0c87-16f9-4806-ad0c-45aaf871c9c5'
      } else {
        // is a couple so it is a EMBRYO TISSUE COUPLE
        formValues.PowerFormId = '259998c5-d0b7-4c86-800b-b9df3c3a4a7f'
      }
    } else if (
      formValues.TISSUE_TYPE !== 'EMBRYO' ||
      formValues.TISSUE_TYPE !== 'DONEMBRYO'
    ) {
      // Not Embryos Check Marital
      if (formValues.MARITAL !== 'couple') {
        // Not a couple so it is a REPRODUCTIVE TISSUE SINGLE
        formValues.PowerFormId = '30b602ac-8d27-4ae8-8857-2e1041771ca1'
      } else {
        // is a couple so it is a REPRODUCTIVE TISSUE COUPLE
        formValues.PowerFormId = '32122bd8-7da0-497d-b8c4-9e18b047f905'
      }
    }
  } else {
    // Minor Check For Nothing Else
    formValues.PowerFormId = 'f3d6d185-5f33-4d41-9794-1732b97cd866'
    formValues.CD_A_MINOR = [formValues.CD_A_First, formValues.CD_A_Last].join(' ')
    formValues.CD_B_UserName = [
      formValues.CD_B_First,
      formValues.CD_B_Last,
    ].join(' ')
  }

  if (formValues.MARITAL !== 'couple') {
    ;['CD_B_FIRST', 'CD_B_MIDDLE', 'CD_B_LAST', 'CD_B_EMAIL'].forEach(
      (key) => (formValues[key] = ' ')
    )
  } else {
    formValues.CD_B_UserName = [
      formValues.CD_B_First,
      formValues.CD_B_Last,
    ].join(' ')
  }
  if (formValues.MINOR_CLIENT_Y_N === 'Yes') {
    formValues.B_MINOR_CLIENT_Y_N = 'Yes'
  } else {
    formValues.B_MINOR_CLIENT_Y_N = 'No'
  }

  // delete formValues.marital
  delete formValues.PROGYN

  // Unpack clinic data
  const clinicData = JSON.parse(formValues.CLINIC)

  formValues.CLINIC_ACCT = clinicData.Customer_ID
  formValues.CLINIC_NAME = clinicData.Customer_Name
  formValues.CLINIC_PHONE = clinicData.Phone_1
  formValues.CLINIC_ADD_1 = clinicData.Billing_Address_Line_1
  formValues.CLINIC_ADD_2 = clinicData.Billing_Address_Line_2
  formValues.CLINIC_CITY = clinicData.Billing_City
  formValues.CLINIC_STATE = clinicData.Billing_Address_State
  formValues.CLINIC_ZIP = clinicData.Billing_Address_Zip
  formValues.CLINIC_CNTRY = clinicData.Billing_Address_Country

  // RTL Site Corresponding To Clinic Served
  formValues.SITE_ID = clinicData.Site_ID
  formValues.OPTIONS_Y_N = 'No'
  formValues.ONM = 'No'
  formValues.PREF_Y_N = 'No'
  
  
 

  delete formValues.CLINIC
  delete formValues.STATE
  delete formValues.ZIP

  // PowerForm paramaters
  formValues.env = 'na1'
  formValues.acct = 'f9c89cf5-4262-488b-8d38-dd563f206873'
  formValues.v = '2'

  // Auto-populate the PowerForm
  let queryParams = new URLSearchParams(formValues).toString()

  queryParams = queryParams.replaceAll('+', '%20')

 
  window.location.href =
    'https://www.docusign.net/Member/PowerFormSigning.aspx?' + queryParams
}

/*========================END PREPARE LINK======================*/





</script>