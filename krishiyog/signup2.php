<html>
<head>
  <title>Krishiyog | Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="signup.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCXFJ-lc7cHHcEklG2_oIhTnPKTWsLwHEU"></script>
  <!-- <meta name="google-signin-client_id" content="1047018957941-c99a4imf38mmr0cf6d6l3e53kojti2fs.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script> -->
</head>
<style media="screen">
body {
  font-family: 'Poppins';
  background: url(grass.JPG) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.form-control:focus {
  border-color: green;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(36, 109, 6, 0.6);
}
.Invalid{
  visibility: hidden;
  color: Red;
}
.check
{
    opacity:0.5;
	color:#996;
}
input[type="radio"]:checked{
    visibility:hidden;
}
input[type="radio"]{
    visibility:hidden;
}
.box{
    margin-bottom:2px;
}
.btnsize{
    width:100px;
    font-size:15px;

}
  .shadow {
box-shadow: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);    transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
}
.form-bod{
   width:80%;
    margin-top:10px;
    background-color: rgb(206,246,158)
}
@media screen and (max-width:768px){
  .form-bod{
    width:100%;
    margin-top:0px;

  }
}
.required{
  content:"*";
    color:red;
}
</style>

<body>

  <div class="card container shadow form-bod" >
    <div class="card-body">
        <h5 style="text-align:center" class="card-title"><b>Welcome to our Beta Programme</b></h5>
      <form style="width:100%" class="form" id="form" method="post" action="signupProcess.php">
        <b><div id="headingChange2"></div></b>
        <div  id="headingChange">
        <label for=""><b>Select your category:</b></label>
      <div class="row">


        <div class="col-md-4 col-sm">
          <div class="form-group">
            <div class="col box"><label class="" style="padding:0px;"><img src="producers.jpg" style="height:150px;width:200px;" alt="..." class="img-thumbnail img-check" height="150" width="150"><input type="radio" name="typeReg" value="2" id="typeReg" class="hidden" autocomplete="off"></label><label style="font-size:13px;margin-left:10px;">Farmer/Producer/Processor</label></div>
          </div>
        </div>
        <div class="col-md-4 col-sm">
          <div class="form-group">
            <div class="col box"><label class="" style="padding:0px;"><img src="consumers.jpg" style="height:150px;width:200px;" alt="..." class="img-thumbnail img-check" height="150" width="150"><input type="radio" name="typeReg" value="1" id="typeReg" class="hidden" autocomplete="off"></label><label style="font-size:13px;margin-left:44px;">Buyer/Consumer</label></div>
          </div>
        </div>
        <div class="col-md-4 col-sm">
          <div class="form-group">
            <div class="col box"><label class="" style="padding:0px;"><img src="aggregators.jpeg" style="height:150px;width:200px;" alt="aggregator" class="img-thumbnail img-check" height="170" width="170"><input type="radio" name="typeReg" value="5" id="typeReg" class="hidden" autocomplete="off"></label><br><label style="font-size:13px;margin-left:55px;">Aggregator</label></div>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-2"></div>
        <div class="col-md-4 col-sm">
          <div class="form-group">
            <div class="col box"><label class="" style="padding:0px;"><img src="community supporters.jpeg" style="height:150px;width:200px;" alt="..." class="img-thumbnail img-check" height="150" width="150"><input type="radio" name="typeReg" value="4" id="typeReg" class="hidden" autocomplete="off"></label><br><label style="font-size:13px;margin-left:55px;">Community</label></div>
          </div>
        </div>


        <div class="col-md-4 col-sm">
          <div class="form-group" >
            <div class="col box" style="float:center;"><label class=" " ><img src="wellness advisor.jpeg" style="height:150px;width:200px;" alt="..." class="img-thumbnail img-check" height="200" width="200" ><input type="radio" name="typeReg" value="3" id="typeReg" class="hidden" autocomplete="off"></label><br><label style="font-size:13px;margin-left:40px;">Wellness Advisor</label></div>
          </div>
        </div>
        </div>





    </div>
        <div id="parent">
          <div id="seller">
            <div id="step1">
              <div class="row">
                <div class="col form-group">
                  <label for="name">First Name <span class="required">*</span></label>
                  <input type="text" class="form-control form-control-sm" name="firstName" id="firstName" placeholder="First Name">
                  <div class="Invalid invalidFirstName">
                    Please enter your First Name
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="">Last Name<span class="required">*</span></label>
                    <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Last Name" id="lastName" value="" required>
                    <div class="Invalid invalidLastName">
                      Please enter your Last Name
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="sellMbNo">Contact Number<span class="required">*</span></label>
                    <input type="number" size="10" maxlength="10"  class="form-control form-control-sm" name="sellMbNo" id="contact" placeholder="Your number">
                    <div class="Invalid invalidContact" >
                      Please enter a valid contact number
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="sellMbNo">WhatsApp Number</label>
                    <input type="number" size="10" maxlength="10"  class="form-control form-control-sm" name="WhatsApp" id="contact1" placeholder="Your number">

                  </div>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1">Email address(optional)</label>
                  <input type="text" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  <div class="Invalid invalidEmail">
                    Please enter a valid Email address!
                  </div>
                </div>
              </div>

              <div id="passwordParent">
                <div  id="passwordDiv">
                  <div class="form-group">
                    <label for="password">Password<span class="required">*</span></label>
                    <input type="password"  name="password"  pattern=".{8,}"    title="Either 0 OR (8 chars minimum)"  class="form-control form-control-sm" id="password" placeholder="Password" >
                    <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                    <div class="Invalid invalidPassword">

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="confPassword">Confirm Password<span class="required">*</span></label>
                    <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" >
                    <small id="" class="form-text text-muted">Password should match.</small>
                    <div class="confPassword" style="color:red;">

                    </div>
                  </div>
                  <hr>

                </div>
              </div>
              <button type="button" class="btn btn-success btnsize" id="nextstep1" name="button" style="float:right;" onclick="return Validate()">Next</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn" name="button">Previous</button>
            </div>


            <div id="step2">

                    <label for="typeSeller">What type of Seller are you?<span class="required">*</span></label>
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="typeSeller">Options</label>
                      </div>
                      <select class="custom-select custom-select-sm" id="typeSeller" name="typeSeller">
                    <option selected value="0">Choose...</option>
                    <option value="ZBNF Farmers">ZBNF Farmers</option>
                    <option value="Natural Farmers">Natural Farmers</option>
                    <option value="Farmer Producer Organisation">Farmer Producer Organisation</option>
                    <option value="PSG Certified Producers">PSG Certified Producers</option>
                    <option value="Khadi Gram Udyog">Khadi Gram Udyog</option>
                    <option value="Self Help Group">Self Help Group</option>
                    <option value="Women Self Help Group">Women Self Help Group</option>
                    <option value="Certified Food Processor">Certified Food Processor</option>
                    <option value="Home Chef">Home Chef</option>
                    <option value="Home Gardner">Home Gardner</option>
                  </select>
                  <div class="Invalid invalidType">

                  </div>
                    </div>

                  <!-- <button type="button" class="btn btn-primary btn-sm" onclick="getLocation()" name="button">Get My Location</button> -->
                    <div class="form-group">
                      <label for="inputAddress">Your Address<span class="required">*</span></label>

                      <input type="text" class="form-control form-control-sm" ondragover=""id="ownPlaces" name="ownPlacesSell" placeholder="(Example-Shri Mahadev Mandir, Ambedkar Nagar, Sadashiv Nagar, Belgaum)">
                      <small id="ownPlaces" class="form-text text-muted">Your address should start with a street name.</small>
                      <div class="Invalid invalidAddress">

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputCitySell">City/Town/Panchayat/Village<span class="required">*</span></label>
                      <input type="text" class="form-control form-control-sm" name="ownCitySell" id="ownCity" placeholder="Bangalore" autocomplete="on">
                      <div class="Invalid invalidCity">

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputStateSell">State<span class="required">*</span></label>
                      <input type="text" class="form-control form-control-sm" name="ownStateSell" id="ownState" placeholder="Karnataka">
                      <div class="Invalid invalidState">

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDistrictSell">District</label>
                      <input type="text" class="form-control form-control-sm" name="ownDistrictSell" id="ownDistrict" placeholder="Bengalore">
                    </div>
                    <div class="form-group">
                      <label for="ownPinCodeSell">Pincode<span class="required">*</span></label>
                      <input type="number" maxlength="6" size="6" class="form-control form-control-sm" name="ownPinCodeSell" id="ownPinCode" placeholder="530068">
                      <div class="Invalid invalidPincode">

                      </div>
                    </div>
              <button type="button" class="btn btn-success btnsize" id="nextstep2" name="button" style="float:right;">Next</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevstep2" name="button">Previous</button>
            </div>
              <div id="step3">
                <!-- <div class="card" style="background-color: rgb(206,246,158)">
                  <div class="card-body"> -->
                    <div class="form-group">
                      <label for="sellOrgName">Organisation Name</label>
                      <input type="text" class="form-control form-control-sm" name="sellOrgName" id="sellOrgName" placeholder="Grocery Retailers Pvt Ltd">
                    </div>
                    <div class="form-group">
                      <label for="orgMobNoSell">Organisation Contact Number</label>
                      <input type="number" maxlength="10" size="10" class="form-control form-control-sm" name="orgMobNoSell" id="orgMobNoSell" placeholder="Organisation Contact Number">
                    </div>
                    <div class="form-group">
                      <label for="orgAddressSell">Organisation Address</label>
                      <input type="text" class="form-control form-control-sm" name="orgAddressSell" id="orgAddressSell" placeholder="Organisation Address">
                      <small class="form-text text-muted">Your address should start with a street name.</small>
                    </div>
                    <div class="form-group">
                      <label for="inputCity">City/Town/Panchayat/Village</label>
                      <input type="text" class="form-control form-control-sm" name="ownOrgCitySell" id="ownOrgCitySell" placeholder="Bangalore">
                    </div>
                    <div class="form-group">
                      <label for="inputState">State</label>
                      <input type="text" class="form-control form-control-sm" name="ownOrgStateSell" id="ownOrgStateSell" placeholder="Karnataka">
                    </div>
                    <div class="form-group">
                      <label for="inputDistrict">District</label>
                      <input type="text" class="form-control form-control-sm" name="ownOrgDistrictSell" id="ownOrgDistrictSell" placeholder="Bengalore">
                    </div>
                    <div class="form-group">
                      <label for="inputZip">Pincode</label>
                      <input type="number" maxlength="6" size="6" class="form-control form-control-sm" name="ownOrgPinCodeSell" id="ownOrgPinCodeSell" placeholder="530068">
                    </div>
                    <div class="form-group">
                      <label for="">Web Address</label>
                      <input type="text" class="form-control form-control-sm" name="webAddress" value="" id="webAddress" placeholder="www.example.com">
                    </div>

                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea type="text" class="form-control form-control-sm" name="desc" value="" placeholder="We sell vegetables, fruits etc."></textarea>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="GSTSell">GST Identification Number</label>
                        <input type="text" class="form-control form-control-sm" name="GST" placeholder="15 Digit GSTIN" maxlength="15" size="15">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="PAN">Personal Identification Number(PAN)</label>
                        <input type="text" class="form-control form-control-sm" name="pan" placeholder="10 Digit PAN Number" maxlength="10" size="10">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="TAN">Tax Deduction and Collection Number (TAN)</label>
                        <input type="text" class="form-control form-control-sm" name="tan" placeholder="10 Digit TAN Number" maxlength="10" size="10">
                      </div>
                    </div>
                  </div>



                  <button type="submit" class="btn btn-success btnsize" id="submitBtn" style="float:right;"  disabled>Continue</button>
                    <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevstep3" name="button">Previous</button>
                  </div>
                <!-- </div>
              </div> -->

            </div>



          <!-- </div> -->
          <div id="buyer">
            <div id="step1">
              <div class="row">
                <div class="col-sm">
                  <label for="bName">First Name<span class="required">*</span></label>
                  <input type="text" class="form-control form-control-sm" name="firstName" id="firstName" placeholder="Your Name">
                  <div class="Invalid invalidFirstName">
                    Please enter your First Name
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="">Last Name<span class="required">*</span></label>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control form-control-sm">
                    <div class="Invalid invalidLastName">
                      Please enter your Last Name
                    </div>
                  </div>


                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="BuyMbNo">Contact Number<span class="required">*</span></label>
                    <input type="number" maxlength="10" size="10" class="form-control form-control-sm" name="BuyMbNo" id="contact" placeholder="Your number">
                    <div class="Invalid invalidContact">

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="sellMbNo">WhatsApp Number</label>
                    <input type="number" size="10" maxlength="10"  class="form-control form-control-sm" name="WhatsApp" id="contact1" placeholder="Your number">

                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address(optional)</label>
                    <input type="text" class="form-control form-control-sm" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <div class="Invalid invalidEmail">

                    </div>
                  </div>
                </div>
              </div>


              <div id="passwordParent">
                <div  id="passwordDiv">
                  <div class="form-group">
                    <label for="password">Password<span class="required">*</span></label>
                    <input type="password"  name="password"      class="form-control form-control-sm" id="password" placeholder="Password" >

                    <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                    <div class="Invalid invalidPassword">

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="confPassword">Confirm Password<span class="required">*</span></label>
                    <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" >
                    <div class="confPassword" style="color:red;">

                    </div>
                    <small id="" class="form-text text-muted">Password should match.</small>
                  </div>
                </div>

              </div>
              <button type="button" class="btn btn-success btnsize" id="nextstep1" name="button" style="float:right;" onclick="return Validate()">Next</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn" name="button">Previous</button>
            </div>


            <div id="step2">
              <label for="typeBuyer">What type of Business you hold?<span class="required">*</span></label>
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="typeBuyer">Options</label>
                </div>
                <select class="custom-select custom-select-sm" id="typeBuyer" name="typeBuyer">
              <option selected value="0">Choose...</option>
              <optgroup label="Buyer/Consumer">
                <option value="Direct Consumer">Direct Consumer</option>
                <option value="Community Buying Group">Community Buying Group</option>

              </optgroup>

              <optgroup label="Food Provider/Processor">
                <option value="Food Processor">Food Processor</option>
                <option value="Canteen">Canteen</option>
                <option value="Mess">Mess</option>
                <option value="Hotel">Hotel</option>
                <option value="Lunch Home">Lunch Home</option>
                <option value="PG Boarding House">PG Boarding House</option>
                <option value="Restaurant">Restaurant</option>
                <option value="Coffee Shop/Cafe">Coffee Shop/Cafe</option>
                <option value="Caterer">Caterer</option>
                <option value="Food Trucks/Stalls">Food Trucks/Stalls</option>
                <option value="others">Others</option>
              </optgroup>

            </select>
            <div class="Invalid invalidType">

            </div>
              </div>
              <!-- <button type="button" class="btn btn-primary btn-sm" onclick="getLocation()" name="button">Get My Location</button> -->
              <div class="form-group">
                <label for="inputAddress">Your Address<span class="required">*</span></label>
                <input type="text" class="form-control form-control-sm" ondragover="" id="ownPlaces" name="ownPlacesBuy" placeholder="(Example-Shri Mahadev Mandir, Ambedkar Nagar, Sadashiv Nagar, Belgaum)">
                <small id="ownPlacesBuy" class="form-text text-muted">Your address should start with a street name.</small>
                <div class="Invalid invalidAddress">

                </div>
              </div>
              <div class="form-group">
                <label for="inputCityBuy">City/Town/Panchayat/Village<span class="required">*</span></label>
                <input type="text" class="form-control form-control-sm" name="ownCityBuy" id="ownCity" placeholder="Bangalore">
                <div class="Invalid invalidCity">

                </div>
              </div>
              <div class="form-group">
                <label for="inputStateBuy">State<span class="required">*</span></label>
                <input type="text" class="form-control form-control-sm" name="ownStateBuy" id="ownState" placeholder="Karnataka">
                <div class="Invalid invalidState">

                </div>
              </div>
              <div class="form-group">
                <label for="inputDistrictBuy">District</label>
                <input type="text" class="form-control form-control-sm" name="ownDistrictBuy" id="ownDistrict" placeholder="Bengalore">

              </div>
              <div class="form-group">
                <label for="ownPinCodeBuy">Pincode<span class="required">*</span></label>
                <input type="number" class="form-control form-control-sm" name="ownPinCodeBuy" id="ownPinCode" maxlength="6" size="6" placeholder="530068">
                <div class="Invalid invalidPincode">

                </div>
              </div>
              <button type="button" class="btn btn-success btnsize" id="nextstep2" name="button" style="float:right;">Next</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevstep2" name="button">Previous</button>
            </div>
            <div id="step3">
              <div class="form-group">

                <label for="buyOrgName">Organisation Name</label>
                <input type="text" class="form-control form-control-sm" name="buyOrgName" id="BuyOrgName" placeholder="Grocery Retailers Pvt Ltd">
              </div>
                      <div class="form-group">
                        <label for="orgMobNoBuy">Organisation Contact Number</label>
                        <input type="number" maxlength="10" size="10" class="form-control form-control-sm" name="orgMobNoBuy" id="orgMobNoBuy" maxlength="10" size="10" placeholder="Organisation Contact Number">
                      </div>
                      <div class="form-group">
                        <label for="orgAddressBuy">Organisation Address</label>
                        <input type="text" class="form-control form-control-sm" name="orgAddressBuy" id="orgAddressBuy" placeholder="Organisation Address">
                        <small class="form-text text-muted">Your address should start with a street name.</small>
                      </div>
                      <div class="form-group">
                        <label for="inputCity">City/Town/Panchayat/Village</label>
                        <input type="text" class="form-control form-control-sm" name="ownOrgCityBuy" id="ownOrgCityBuy" placeholder="Bangalore">
                      </div>
                      <div class="form-group">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control form-control-sm" name="ownOrgStateBuy" id="ownOrgStateBuy" placeholder="Karnataka">
                      </div>
                      <div class="form-group">
                        <label for="inputDistrict">District</label>
                        <input type="text" class="form-control form-control-sm" name="ownOrgDistrictBuy" id="ownOrgDistrictBuy" placeholder="Bengalore">
                      </div>
                      <div class="form-group">
                        <label for="inputZip">Pincode</label>
                        <input type="text" maxlength="6" size="6" class="form-control form-control-sm" name="ownOrgPinCodeBuy" id="ownOrgPinCodeBuy" placeholder="530068">
                      </div>
                      <div class="form-group">
                        <label for="">Web Address</label>
                        <input type="text" class="form-control form-control-sm" name="webAddress" value="" id="webAddress" placeholder="www.example.com">
                      </div>

                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea type="text" class="form-control form-control-sm" name="desc" value="" placeholder=""></textarea>
                    </div>
                    <div class="row">
                      <div class="col-sm">
                        <div class="form-group">
                          <label for="GSTSell">GST Identification Number</label>
                          <input type="text" class="form-control form-control-sm" name="GST" placeholder="15 Digit GSTIN" maxlength="15" size="15">
                        </div>
                      </div>
                      <div class="col-sm">
                        <div class="form-group">
                          <label for="PAN">Personal Identification Number(PAN)</label>
                          <input type="text" class="form-control form-control-sm" name="pan" placeholder="10 Digit PAN Number" maxlength="10" size="10">
                        </div>
                      </div>
                      <div class="col-sm">
                        <div class="form-group">
                          <label for="TAN">Tax Deduction and Collection Number (TAN)</label>
                          <input type="text" class="form-control form-control-sm" name="tan" placeholder="10 Digit TAN Number" maxlength="10" size="10">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-success btnsize" id="submitBtn" style="float:right;"  disabled>Continue</button>
                      <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevstep3" name="button">Previous</button>
            </div>


          </div>
          <div id="medicalExp">
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <label for="">First Name<span class="required">*</span></label>
                  <input type="text" name="firstName" class="form-control form-control-sm" placeholder="Your name" required />
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="">Last Name<span class="required">*</span></label>
                  <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Your name" required>
                </div>
              </div>
            </div>


            <div class="form-group">
              <label for="">Area of Specialization<span class="required">*</span></label>
              <input type="text" name="specialization" class="form-control form-control-sm" placeholder="Fitness Expert" value="" required>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="MbNo">Contact Number<span class="required">*</span></label>
                  <input type="tel" maxlength="10" size="10" pattern=".{10,}"    title="Invalid number entered" class="form-control form-control-sm" name="MbNo" id="contact" placeholder="Your number" required>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="MbNo">WhatsApp Number</label>
                  <input type="tel" maxlength="10" size="10" pattern=".{10,}"    title="Invalid number entered" class="form-control form-control-sm" name="WhatsApp" id="contact" placeholder="Your number" >
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control form-control-sm" placeholder="Email address" value="">
            </div>
            <div id="passwordParent">
              <div  id="passwordDiv">
                <div class="form-group">
                  <label for="password">Password<span class="required">*</span></label>
                  <input type="password"  name="password"  pattern=".{8,}"    title="Your password should be minimum characters"  class="form-control form-control-sm" id="password" placeholder="Password"  required>
                  <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                </div>

                <div class="form-group">
                  <label for="confPassword">Confirm Password<span class="required">*</span></label>
                  <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" required>
                  <div class="confPassword" style="color:red;">

                  </div>
                  <small id="" class="form-text text-muted">Password should match.</small>
                </div>
              </div>

            </div>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn"  name="button">Previous</button>
            <button type="submit" style="float:right;" class="btn btn-success btnsize" id="submitBtn" onclick="return Validate()" disabled>Continue</button>
          </div>
          <?php include 'aggregator.php'; ?>
          <div id="communOrg">
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <label for="">First Name<span class="required">*</span></label>
                  <input type="text" name="firstName" class="form-control form-control-sm" placeholder="Your name" required />
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="">Last Name<span class="required">*</span></label>
                  <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Your name" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="">Name of Community Organisation<span class="required">*</span></label>
              <input type="text" name="orgName" class="form-control form-control-sm" placeholder="Eg: Krishi Sampark Kendra" value="" required>
            </div>
            <label for="typeOrg">What type of Community Organisation is it?<span class="required">*</span></label>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="typeSeller">Options</label>
              </div>
              <select class="custom-select custom-select-sm" id="typeOrg" name="typeOrg" required>
            <option disabled selected value>Choose...</option>
            <option value="Krishi Sampark Kendra">Krishi Sampark Kendra</option>
            <option value="Gram Panchayats">Gram Panchayats</option>
            <option value="Agri Business Facilitators">Agri Business Facilitators</option>
            <option value="Agri Development Office">Agri Development Office</option>
            <option value="Local Mandi's">Local Mandi's</option>
            <option value="NGO">NGO</option>
            <option value="Government Agencies/Establishment">Government Agencies/Establishment</option>
            <option value="Private Organisation">Private Organisation</option>
            <option value="Welfare Organisation">Welfare Organisation</option>
            <option value="International Study Group">International Study Group</option>
            <option value="Media">Media</option>
            <option value="Artist or FilmMaker">Artist or FilmMaker</option>
            <option value="Others">Others</option>
          </select>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="MbNo">Contact Number<span class="required">*</span></label>
                  <input type="tel" maxlength="10" size="10" pattern=".{10,}"    title="Invalid number entered" class="form-control form-control-sm" name="MbNo" id="contact" placeholder="Your number" required>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="MbNo">WhatsApp Number</label>
                  <input type="tel" maxlength="10" size="10" pattern=".{10,}"    title="Invalid number entered" class="form-control form-control-sm" name="WhatsApp" id="contact" placeholder="Your number">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control form-control-sm" placeholder="Email address" value="">
            </div>
            <div id="passwordParent">
              <div  id="passwordDiv">
                <div class="form-group">
                  <label for="password">Password<span class="required">*</span></label>
                  <input type="password"  name="password"  pattern=".{8,}" required   title="Either 0 OR (8 chars minimum)"  class="form-control form-control-sm" id="password" placeholder="Password" >

                  <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                </div>

                <div class="form-group">
                  <label for="confPassword">Confirm Password<span class="required">*</span></label>
                  <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" required>
                  <div class="confPassword" style="color:red;">

                  </div>
                  <small id="" class="form-text text-muted">Password should match.</small>
                </div>
              </div>

                <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn"  name="button">Previous</button>
<button type="submit" class="btn btn-success btnsize" style="float:right;" id="submitBtn" onclick="return Validate()" disabled>Continue</button>
            </div>
          </div>
        </div>



        <!-- <button type="submit" class="btn btn-success" id="submitBtn" onclick="return Validate()" disabled>Continue</button> -->
      </form>

    </div>
</body>

</html>
<script type="text/javascript">
  seller = $("#seller").detach();
  buyer = $("#buyer").detach();
  aggregator = $("#aggregator").detach();

  medicalExp = $("#medicalExp").detach();
  communOrg = $("#communOrg").detach();
  passwordDiv = $("#passwordDiv").detach();
  $("input[type=radio][name=typeReg]").on("click", function() {
    if ($(this).val() == 0) {
      $("#seller").detach();
      $("#buyer").detach();
      $("#medicalExp").detach();
      $("#communOrg").detach();
      // $("#passwordDiv").detach();
      $("#submitBtn").attr("disabled", true);
    }
    if ($(this).val() == 1) {

      $("#headingChange").hide();
      $("#headingChange2").html("Buyer Details");
      $("#parent").html(buyer);
      $("#step2").hide();
      $("#step3").hide();
      $("#submitBtn").attr("disabled",true);
      $("#contact").on("change",function(){
        contact=$("#contact").val();
        $.post("duplicationCheck.php",
        {
        contact:contact
      },
      function(data, status){

        if (data!='') {
          alert("Account already exists");
          // $(".invalidContact").css('visibility', 'visible');
          // $(".invalidContact").html("Contact number already Exist");
          $("#submitBtn").attr("disabled",true);
          $("#nextstep1").attr("disabled",true);

        }else{
          // $(".invalidContact").html("");
          $("#submitBtn").attr("disabled",false);
          $("#nextstep1").attr("disabled",false);

        }

      });
      });
      $("#prevbtn").on("click",function(){
        window.location.replace("signup2.php");
      });
      $("#nextstep1").on("click",function () {

        if($("#firstName").val()==''){
          $(".invalidFirstName").css('visibility', 'visible');
        }else if ($("#contact").val()=='' || $("#contact").val().length<10 || $("#contact").val().length>10) {
          $(".invalidContact").css('visibility', 'visible');
          $(".invalidContact").html("Enter 10 Digit Contact number("+$("#contact").val().length+" provided)");

        }else if($("#lastName").val()==''){
          $(".invalidLastName").css('visibility', 'visible');
        }else if (!Validate()) {

        }else if($("#password").val()=='' || $("#password").val().length<8 ){
          $(".invalidPassword").css('visibility', 'visible');
          $(".invalidPassword").html("Enter a valid password using above rules");
        }
        else{
          $("#step1").hide();
          $("#step2").show();
        }
      });
      $("#prevbtn").on("click",function () {
        $("#step1").show();
        $("#step2").hide();
      });
      $("#nextstep2").on("click",function () {
        if ($("#typeBuyer").val()==0) {
          $(".invalidType").css('visibility', 'visible');
          $(".invalidType").html("Choose a seller type");
        }else if ($("#ownPlaces").val()=='') {
          $(".invalidAddress").css('visibility', 'visible');
          $(".invalidAddress").html("Please enter your address");
        }else if ($("#ownCity").val()=='') {
          $(".invalidCity").css('visibility', 'visible');
          $(".invalidCity").html("Your city is required");
        }else if ($("#ownState").val()=='') {
          $(".invalidState").css('visibility', 'visible');
          $(".invalidState").html("Your state is required");
        }else if ($("#ownPinCode").val()=='') {
          $(".invalidPincode").css('visibility', 'visible');
          $(".invalidPincode").html("Your Pincode is required");
        }else {
          $("#submitBtn").attr("disabled",false);

          $("#step2").hide();
          $("#step3").show();
        }
      });
      $("#prevstep2").on("click",function(){
        $("#step2").hide();
        $("#step1").show();
      });
      $("#prevstep3").on("click",function(){
        $("#step3").hide();
        $("#step2").show();
      });
      // $("#passwordParent").html(passwordDiv);
      $("#submitBtn").attr("disabled", false);
      $.getScript("signup.js",function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));


      });
      // $("#passwordParent").html(passwordDiv);
      $("#submitBtn").attr("disabled", false);
    }
    if ($(this).val() == 5) {

      $("#headingChange").hide();
      $("#headingChange2").html("Aggregator details");
      $("#parent").html(aggregator);
      $("#step2").hide();
      $("#step3").hide();
      $("#submitBtn").attr("disabled",true);

      $("#contact").on("change",function(){
        contact=$("#contact").val();
        $.post("duplicationCheck.php",
        {
        contact:contact
      },
      function(data, status){

        if (data!='') {
          alert("Account already exists");
          // $(".invalidContact").css('visibility', 'visible');
          // $(".invalidContact").html("Contact number already Exist");
          $("#submitBtn").attr("disabled",true);
          $("#nextstep1").attr("disabled",true);

        }else{
          // $(".invalidContact").html("");
          $("#submitBtn").attr("disabled",false);
          $("#nextstep1").attr("disabled",false);

        }

      });
      });
      $("#prevbtn").on("click",function(){
        window.location.replace("signup2.php");
      });
      $("#nextstep1").on("click",function () {
        if($("#firstName").val()==''){
          $(".invalidFirstName").css('visibility', 'visible');
        }else if ($("#contact").val()=='' || $("#contact").val().length<10 || $("#contact").val().length>10) {
          $(".invalidContact").css('visibility', 'visible');
          $(".invalidContact").html("Enter 10 Digit Contact number("+$("#contact").val().length+" provided)");

        }else if($("#lastName").val()==''){
          $(".invalidLastName").css('visibility', 'visible');
        }else if (!Validate()) {

        }else if($("#password").val()=='' || $("#password").val().length<8 ){
          $(".invalidPassword").css('visibility', 'visible');
          $(".invalidPassword").html("Enter a valid password using above rules");
        }
        else{
          $("#step1").hide();
          $("#step2").show();
        }
      });
      $("#prevbtn").on("click",function () {
        $("#step1").show();
        $("#step2").hide();
      });
      $("#nextstep2").on("click",function () {
        if ($("#typeBuyer").val()==0) {
          $(".invalidType").css('visibility', 'visible');
          $(".invalidType").html("Choose a Business type");
        }else if ($("#ownPlaces").val()=='') {
          $(".invalidAddress").css('visibility', 'visible');
          $(".invalidAddress").html("Please enter your address");
        }else if ($("#ownCity").val()=='') {
          $(".invalidCity").css('visibility', 'visible');
          $(".invalidCity").html("Your city is required");
        }else if ($("#ownState").val()=='') {
          $(".invalidState").css('visibility', 'visible');
          $(".invalidState").html("Your state is required");
        }else if ($("#ownPinCode").val()=='') {
          $(".invalidPincode").css('visibility', 'visible');
          $(".invalidPincode").html("Your Pincode is required");
        }else {
          $("#submitBtn").attr("disabled",false);

          $("#step2").hide();
          $("#step3").show();
        }
      });
      $("#prevstep2").on("click",function(){
        $("#step2").hide();
        $("#step1").show();
      });
      $("#prevstep3").on("click",function(){
        $("#step3").hide();
        $("#step2").show();
      });
      // $("#passwordParent").html(passwordDiv);
      $("#submitBtn").attr("disabled", false);
      $.getScript("signup.js",function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));

      });
      // $("#passwordParent").html(passwordDiv);
      $("#submitBtn").attr("disabled", false);
    }
    if ($(this).val() == 2) {

      $("#headingChange").hide();
      $("#headingChange2").html("Seller Details");
      $("#parent").html(seller);
      $("#step2").hide();
      $("#step3").hide();
      $("#submitBtn").attr("disabled",true);

      $("#contact").on("change",function(){
        contact=$("#contact").val();
        $.post("duplicationCheck.php",
        {
        contact:contact
      },
      function(data, status){
        if (data!='') {
          alert("Account already exists");
          // $(".invalidContact").css('visibility', 'visible');
          // $(".invalidContact").html("Contact number already Exist");
          $("#submitBtn").attr("disabled",true);
          $("#nextstep1").attr("disabled",true);

        }else{
          // $(".invalidContact").html("");
          $("#submitBtn").attr("disabled",false);
          $("#nextstep1").attr("disabled",false);

        }

      });
      });
      $("#prevbtn").on("click",function(){
        window.location.replace("signup2.php");
      });
      $("#nextstep1").on("click",function () {


        if($("#firstName").val()==''){
          $(".invalidFirstName").css('visibility', 'visible');
        }else if ($("#contact").val()=='' || $("#contact").val().length<10 || $("#contact").val().length>10) {
          $(".invalidContact").css('visibility', 'visible');
          $(".invalidContact").html("Enter 10 Digit Contact number("+$("#contact").val().length+" provided)");

        }else if($("#lastName").val()==''){
          $(".invalidLastName").css('visibility', 'visible');
        }else if (!Validate()) {

        }else if($("#password").val()=='' || $("#password").val().length<8 ){
          $(".invalidPassword").css('visibility', 'visible');
          $(".invalidPassword").html("Enter a valid password using above rules");
        }
        else{
          $("#step1").hide();
          $("#step2").show();
        }
      });

      $("#nextstep2").on("click",function () {
        if ($("#typeSeller").val()==0) {
          $(".invalidType").css('visibility', 'visible');
          $(".invalidType").html("Choose a seller type");
        }else if ($("#ownPlaces").val()=='') {
          $(".invalidAddress").css('visibility', 'visible');
          $(".invalidAddress").html("Please enter your address");
        }else if ($("#ownCity").val()=='') {
          $(".invalidCity").css('visibility', 'visible');
          $(".invalidCity").html("Your city is required");
        }else if ($("#ownState").val()=='') {
          $(".invalidState").css('visibility', 'visible');
          $(".invalidState").html("Your state is required");
        }else if ($("#ownPinCode").val()=='') {
          $(".invalidPincode").css('visibility', 'visible');
          $(".invalidPincode").html("Your Pincode is required");
        }else {
          $("#submitBtn").attr("disabled",false);

          $("#step2").hide();
          $("#step3").show();
        }
      });

      $("#prevbtn").on("click",function () {
        $("#step1").show();
        $("#step2").hide();
      });

      $("#prevstep2").on("click",function(){
        $("#step2").hide();
        $("#step1").show();
      });
      $("#prevstep3").on("click",function(){
        $("#step3").hide();
        $("#step2").show();
      });
      // $("#passwordParent").html(passwordDiv);
      $("#submitBtn").attr("disabled", false);
      $.getScript("signup.js",function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));

      });
    }
    if ($(this).val() == 3) {
      $("#headingChange").hide();
      $("#headingChange2").html("Wellness Advisor details");
      $("#parent").html(medicalExp);
      $("#prevbtn").on("click",function(){
        window.location.replace("signup2.php");
      });
      $("#contact").on("change",function(){
        contact=$("#contact").val();
        $.post("duplicationCheck.php",
        {
        contact:contact
      },
      function(data, status){
        if (data!='') {
          alert("Account already exists");
          // $(".invalidContact").css('visibility', 'visible');
          // $(".invalidContact").html("Contact number already Exist");
          $("#submitBtn").attr("disabled",true);
          $("#nextstep1").attr("disabled",true);

        }else{
          // $(".invalidContact").html("");
          $("#submitBtn").attr("disabled",false);
          $("#nextstep1").attr("disabled",false);

        }

      });
      });
      // $("#passwordParent").html(passwordDiv);
      $("#submitBtn").attr("disabled", false);

    }
    if ($(this).val() == 4) {
      $("#headingChange").hide();
      $("#headingChange2").html("Community Details");
      $("#parent").html(communOrg);
      $("#prevbtn").on("click",function(){
        window.location.replace("signup2.php");
      });
      $("#contact").on("change",function(){
        contact=$("#contact").val();
        $.post("duplicationCheck.php",
        {
        contact:contact
      },
      function(data, status){
        if (data!='') {
          alert("Account already exists");
          // $(".invalidContact").css('visibility', 'visible');
          // $(".invalidContact").html("Contact number already Exist");
          $("#submitBtn").attr("disabled",true);
          $("#nextstep1").attr("disabled",true);

        }else{
          // $(".invalidContact").html("");
          $("#submitBtn").attr("disabled",false);
          $("#nextstep1").attr("disabled",false);

        }

      });
      });
      // $("#passwordParent").html(passwordDiv);
      $("#submitBtn").attr("disabled", false);

    }
  });
</script>

<script type="text/javascript">


</script>
<script type="text/javascript">
$(document).ready(function(e){

    $('.img-check').click(function(e) {
      $('.img-check').not(this).removeClass('check')
      .siblings('input').prop('checked',false);
    $(this).addClass('check')
          .siblings('input').prop('checked',true);
  });

});
</script>
<script type="text/javascript">

// function getLocation() {
//   if (navigator.geolocation) {
//       navigator.geolocation.getCurrentPosition(showPosition);
//   } else {
//       alert("Geolocation is not supported by this browser.");
//   }
// }

// function showPosition(position) {
//
//   $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng="+ position.coords.latitude+","+position.coords.longitude+"&key=AIzaSyBlwmaqHiQlX-HRA-U0-4jPgAhaRkHzTq8",function(data){
//     $("#ownPlaces").val(data.results[0].formatted_address);
//       // alert(data.results[0].formatted_address);
//       $("#ownCity").val(data.results[0].address_components[4].short_name);
//       $("#ownState").val(data.results[0].address_components[5].long_name);
//       $("#ownPinCode").val(data.results[0].address_components[7].long_name);
//       alert(data.results[0].address_components[7].long_name)
//       for(var i in data.results[0].address_components){
//     console.log(data.results[0].address_components[i].short_name);
// }

//   });
//
// }

</script>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confPassword").value;
        if (password != confirmPassword) {
            $(".confPassword").html("Passwords do not match.");
            return false;
        }
        $(".confPassword").html("");
        return true;
    }
// function contact(){
//   contact=$("#contact").val();
//   $.post("duplicationCheck.php",
//   {
//   contact:contact
// },
// function(data, status){
//   if (data!='') {
//     alert("Account already exists");
//     // $(".invalidContact").css('visibility', 'visible');
//     // $(".invalidContact").html("Contact number already Exist");
//     $("#submitBtn").attr("disabled",true);
//     $("#nextstep1").attr("disabled",true);
//
//   }else{
//     // $(".invalidContact").html("");
//     $("#submitBtn").attr("disabled",false);
//     $("#nextstep1").attr("disabled",false);
//
//   }
//
// });
// }

</script>
