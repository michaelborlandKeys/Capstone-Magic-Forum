<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title> Magic-Forum Registration magic_form </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include ("../resources/common_scripts_head.php");?>

</head>
<body>

<?php session_start(); 
if(isset($_SESSION['messages']))
 {
	$messages=$_SESSION['messages']; 
	$magic_form=$_SESSION['magic_form'];  
	unset($_SESSION['messages']); 
	unset($_SESSION['magic_form']); 
 }	

?>	
<div>	
<a  href="magic_home.php" class="btn-group btn-lg" id="backHome" role="button">Back Home</a><br /><br /><br />
</div>
<div id="magic_formHeader">
<h1>Registration Form </h1>

<!--<table id="Registration_Key" >
		<thead></thead>
				<tr>
				<th>Registration Form Key</th>
			</tr> 
		<tr>
		<td>&ast;</td>
		<td>  The feild is requied to complete the magic_form.</td>	
		</tr>
		<tr>
		<td>(optional)</td><td>The Feid doesn't have to be filled out to complete magic_form,</td>	
		</tr>
</table>--> 
</div>
<?php

 if(!empty($messages)) 
 {
      foreach ($messages as $message) 
      {
          echo "<p class=Errors>$message</p>" ; 

      }
  }
  
  ?>
 
		<!---This is where the magic_form goes after user presses go or submit--> 
<form action="registration_form_process.php"   id="form_register" autocomplete="off" method="post">
		
 	<table id="registration_form">
		 	<?php
		 	if(isset($magic_form['id'])){
		 	$id_safe=htmlentities($magic_form['id']); 
		 		echo "<input  type='hidden' name='id' value='$id_safe'>";


		 	}
		?>
		 	
				<tr>

					<td><label  for="firstname" > &ast;First Name</label></td>
				   </tr>
				   <tr>
					<td><input type="text" id="firstname" name="firstname" placeholder="First Name" value= "<?php if( isset($magic_form['firstname'])){ echo htmlentities($magic_form['firstname']); }?>" /></td>
					</tr>
					<tr>
					<td><label for="lastname"> &ast;Last Name</label></td>
				   </tr>
				   <tr>
					<td><input type="text" id="lastname" name="lastname" placeholder="Last Name" value= "<?php if( isset($magic_form['lastname'])){echo htmlentities($magic_form['lastname']);
}?>" /> </td>   

			
				</tr>
			
				<tr>
					<td><label for="birthday" > &ast;Birthday</label></td>
				</tr>
				<tr>
					<td><input type="date" id="birthday" name="birthday" min="1900-01-01" max="2019-01-01" value="<?php if( isset($magic_form['birthday'])){echo htmlentities($magic_form['birthday']);
}?>" /> 

				</td>
				</tr>

				<tr>
				<td><label for="email"> &ast;Email </label></td>
				</tr>
				<tr>
				<td><input type="text" id="email" name="email" placeholder="Email"  value="<?php if( isset($magic_form['email'])){echo htmlentities($magic_form['email']);
}?>"  /> </td>
				</tr>

				<tr>
				<td><label  for="confirmemail"> &ast;Confirm Email</label></td>
				</tr>
				<tr>
				<td><input type="text" id="confirmemail" name="confirmemail" placeholder="Confirm Email" value="<?php if( isset($magic_form['confirmemail'])){echo htmlentities($magic_form['confirmemail']);}?>"/>
		       </td>
				</tr>

				<tr>
				<td><label for="newpassword">  &ast;New Password: </label></td>
				</tr>
				<tr>
				<td><input type="password" id="newpassword" name="newpassword" placeholder=" New Password" value="<?php if( isset($magic_form['newpassword'])){echo htmlentities($magic_form['newpassword']);

}?>" /> 
				</td>

				</tr>

				<tr>
				<td><label for="confirmpassword"> &ast;Confirm Password: </label></td>
				</tr>
				<tr>
				<td><input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" value="<?php if( isset($magic_form['confirmpassword'])){echo htmlentities($magic_form['confirmpassword']);

}?>"  /> </td>
				</tr>
				<tr>
				<td><label for="username"> &ast;Username: </label></td>
				</tr>
				<tr>
				<td><input type="text" id="username" name="username" placeholder="Username" value="<?php if( isset($magic_form['username'])){echo htmlentities($magic_form['username']);

}?>" /></td>
			  </tr>

		<tr>
		<td><label for="city">  &ast;City: </label></td>
		</tr>
		<tr>
		<td><input type="text" id="city" name="city" placeholder="City" value="<?php if( isset($magic_form['city'])){echo htmlentities($magic_form['city']);
}?>"  /></td>
		</tr>

		<tr>
		<td><label for="zipcode"> &ast;Zip Code </label></td>
		</tr>
		<tr>
		<td><input type="text" id="zipcode" name="zipcode" placeholder="e.g. 50125" value=  "<?php if( isset($magic_form['zipcode'])){echo htmlentities($magic_form['zipcode']);
}?>"   /> </td>
		</tr>

		<tr>
		<td><label for="phonenumber" > &ast;Phone Number: </label></td>
		</tr>
		<tr>
		<td><input type="text" id="phonenumber" name="phonenumber" placeholder="e.g. 909-852-5657"  value="<?php if( isset($magic_form['phonenumber'])){echo htmlentities($magic_form['phonenumber']);
}?>" /></td> 
		</tr>

		  
		    
			<tr><td><label for="countries">Country:</label></td></tr>	      
			<tr><td><select id="countries" name="countries" >
			<!--  the List of  countries was found at  http://www.state.gov/misc/list/-->
		
					<option label= "Afghanistan" value="Afghanistan"></option>
					<option  label= "Albania" value="Albania"> </option>
					<option  label= "Algeria"  value="Algeria"></option>
					<option  label= "Andorra" value="Andorra"></option>
					<option  label= "Angola" value="Angola"></option>
					<option  label= "Antigua &amp; Barbuda" value="Antigua &amp; Barbuda"></option>	
					<option  label= "Argentina" value="Argentina"> </option>
					<option  label= "Armenia" value="Armenia"></option>
					<option  label= "Australia" value="Australia"></option>
					<option  label= "Austria" value="Austria"></option>
					<option  label= "Azerbaijan" value="Azerbaijan"></option>	
					<option  label= "Bahamas" value="Bahamas"> </option>
					<option  label= "Bahrain" value="Bahrain"></option>
					<option  label= "Bangladesh" value="Bangladesh"></option>
					<option  label= "Barbados" value="Barbados"></option>
					<option  label= "Belarus" value="Belarus"></option>	
					<option  label= "Belgium" value="Belgium"> </option>
					<option  label= "Belize" value="Belize"></option>
					<option  label= "Benin" value="Benin"></option>
					<option  label= "Bhutan" value="Bhutan"></option>
					<option  label= "Bolivia" value="Bolivia"></option>	
					<option  label= "Bosnia Herzegovina" value="Bosnia Herzegovina"></option>
					<option  label= "Botswana" value="Botswana"></option>
					<option  label= "Brazil" value="Brazil"></option>
					<option  label= "Brunei" value="Brunei"></option>
					<option  label= "Bulgaria" value="Bulgaria"></option>	
					<option  label= "Burkina Faso" value="Burkina Faso"> </option>
					<option  label= "Burma" value="Burma"></option>
					<option  label= "Burundi" value="Burundi"> </option>
					<option  label= "Burundi" value="Burundi"></option>
					<option  label= "Cambodia" value="Cambodia"></option>
					<option  label= "Cameroon" value="Cameroon"></option>
					<option  label= "Canada" value="Canada"></option>	
					<option  label= " Cape Verde" value="Cape Verde"></option>
					<option  label= "Central African Republic" value="Central African Republic"></option>
					<option  label= "Chad" value="Chad"></option>
					<option  label= "Chile" value="Chile"></option>
					<option  label= "China" value="China"></option>	
					<option  label= "Colombia" value="Colombia"> </option>
					<option  label= "Comoros" value="Comoros"></option>
					<option  label= "Democratic Republic of Congo" value="Democratic Republic of Congo"></option>
					<option  label= "Costa Rica" value="Costa Rica"></option>
					<option  label= "Cote d'ivoire" value="Cote d'ivoire"></option>	
					<option  label= "Croatia" value="Croatia"></option>
					<option  label= "Cuba" value="Cuba"></option>
					<option label="Curacao" value="Curacao"></option>
					<option  label= "Cyprus" value="Cyprus"></option>
					<option  label= "Czech Republic" value="Czech Republic"></option>
					<option  label= "Denmark" value="Denmark"></option>	
					<option  label= "Djibouti" value="Djibouti"> </option>
					<option  label= "Dominica" value="Dominica"></option>
					<option  label= "Dominican Republic" value="Dominican Republic"></option>
					<option  label= "East Timor" value="East Timor"></option>
					<option  label= "Ecuador" value="Ecuador"></option>	
					<option  label= "Egypt" value="Egypt"> </option>
					<option  label= "El Salvador"  value="El Salvador"></option>
					<option  label= "Equatorial Guinea"   value="Equatorial Guinea"></option>
					<option  label= "Eritrea"   value="Eritrea"></option>
					<option  label= "Estonia"   value="Estonia"></option>	
					<option  label= "Ethiopia"  value="Ethiopia"></option>
					<option  label= "Fiji"  value="Fiji"></option>
					<option  label= "France"   value="France"></option>
					<option  label= "Finland"  value="Finland"></option>
					<option  label= "Gabon"  value="Gabon"></option>	
					<option  label= "Gambia"  value="Gambia"> </option>
					<option  label= "Georgia"  value="Georgia"></option>
					<option  label="Germany" value="Germany"></option>
					<option  label= "Ghana"  value="Ghana"></option>
					<option  label= "Greece"  value="Greece"></option>
					<option  label= "Grenada"  value="Grenada"></option>	
					<option  label= "Guatemala"  value="Guatemala"> </option>
					<option  label= "Guinea"  value="Guinea"></option>
					<option  label= "Guinea-Bissau"   value="Guinea-Bissau"></option>
					<option  label= "Guyana"  value="Guyana"></option>
					<option  label= "Haiti"  value="Haiti"></option>
					<option label= "Honduras"  value="Honduras"></option>
					<option label= "Hungary"   value="Hungary"></option>
					<option label= "Iceland"  value="Iceland"></option>
					<option label= "India"  value="India"></option>
					<option label= "Indonesia"  value="Indonesia"></option>
					<option label= "Iran"  value="Iran"></option>
					<option label= "Iraq"  value="Iraq"></option>
					<option label= "Ireland"  value="Ireland">  </option>
					<option label= "Israel"  value="Israel"></option>
					<option label= "Italy"  value="Italy"></option>
					<option label= "Jamaica"  value="Jamaica"></option>
					<option label= "Japan"  value="Japan"></option>
					<option label= "Jordan"  value="Jordan"></option>
					<option label= "Kazakhstan"  value="Kazakhstan"></option>
					<option label= "Kenya"  value="Kenya"></option>
					<option label="Kiribati" value="Kiribati"></option>
					<option label="Kosovo" value="Kosovo"> </option>
					<option label="Kuwait" value="Kuwait"></option>
					<option label="Laos" value="Laos"></option>
					<option label="Latvia" value="Latvia"></option>
					<option label="Lebanon" value="Lebanon"></option>
					<option label="Lesotho" value="Lesotho"></option>
					<option label="Liberia" value="Liberia"></option>
					<option label="Liechtenstein" value="Liechtenstein"></option>
					<option label="Lithuania" value="Lithuania"></option>
					<option label="Luxembourg" value="Luxembourg"></option>
					<option label="Macau" value="Macau"></option>
					<option label="Macedonia" value="Macedonia"></option>
					<option label="Madagascar" value="Madagascar"></option>
					<option label="Malawi" value="Malawi"></option>
					<option label="Malaysia" value="Malaysia"></option>
					<option label="Maldives" value="Maldives"></option>
					<option label="Mali" value="Mali"></option>
					<option label="Malta" value="Malta"></option>
					<option label="Marshall Islands" value="Marshall Islands"></option>
					<option label="Mauritania" value="Mauritania"></option>
					<option label="Mauritius" value="Mauritius"></option>
					<option label="Mexico" value="Mexico"></option>
					<option label="Micronesia" value="Micronesia"></option>
					<option label="Moldova" value="Moldova"></option>
					<option label="Monaco" value="Monaco"></option>
					<option label="Mongolia" value="Mongolia"></option>
					<option label="Montenegro" value="Montenegro"></option>
					<option label="Morocco" value="Morocco"></option>
					<option label="Mozambique" value="Mozambique"></option>
					<option label="Myanmar" value="Myanmar"></option>
					<option label="Namibia" value="Namibia"></option>
					<option label="Nauru" value="Nauru"></option>
					<option label="Nepal" value="Nepal"></option>
					<option label="Netherlands" value="Netherlands"></option>
					<option label="New Zealand" value="New Zealand"></option>
					<option label="Nicaragua" value="Nicaragua"></option>
					<option label="Niger" value="Niger"></option>
					<option label="Nigeria" value="Nigeria"></option>
					<option label="Norway" value="Norway"></option>
					<option label="Oman" value="Oman"></option>
					<option label="Pakistan" value="Pakistan"></option>
					<option label="Palau" value="Palau"></option>
					<option label="Papua New Guinea " value="Papua New Guinea"></option>
					<option label="Paraguay" value=" Paraguay"></option>
					<option label="Peru" value="Peru"></option>
					<option label="Philippines" value="Philippines"></option>
					<option label="Poland" value="Poland"></option>
					<option label="Portugal" value="Portugal"></option>
					<option label="Qatar" value="Qatar"></option>
					<option label="Romania" value="Romania"></option>
					<option label="Russia" value="Russia"></option>
					<option label="Rwanda" value="Rwanda"></option>
					<option label="St Kitts &amp; Nevis" value="St Kitts &amp; Nevis"></option>
					<option label="St Lucia" value="St Lucia"></option>
					<option label="Sao Tome &amp;Principe" value="Sao Tome &amp; Principe"></option>
					<option label="Samoa" value="Samoa"></option>
					<option label="Saudi Arabia" value="Saudi Arabia"></option>
					<option label="Senegal" value="Senegal"></option>
					<option label="Serbia" value="Serbia"></option>
					<option label="Seychelles" value="Seychelles"></option>
					<option label="Sierra Leone" value="Sierra Leone"></option>
					<option label="Singapore" value="Singapore"></option>
					<option label="Slovakia" value="Slovakia"></option>
					<option label="Slovenia" value="Slovenia"></option>
					<option label="Solomon Islands" value="Solomon Islands"></option>
					<option label="Somalia" value="Somalia"></option>
					<option label="South Suden" value=" South Suden"></option>
					<option label="Suden" value="Suden"></option>
					<option label="South Africa" value="South Africa"></option>
					<option label="Spain" value="Spain"></option>
					<option label="South Korea" value="South Korea "></option>
					<option label="Sri Lanka" value="Sri Lanka"></option>
					<option label="Suriname" value="Suriname"></option>
					<option label="Sweden" value="Sweden"></option>
					<option label="Switzerland" value="Switzerland"></option>
					<option label="Syria" value="Syria"></option>
					<option label="Taiwan" value="Taiwan"></option>
					<option label="Tajikistan" value="Tajikistan"></option>
					<option label="Tanzania" value="Tanzania"></option>
					<option label="Thailand" value="Thailand"></option>
					<option label="Togo" value="Togo"></option>
					<option label="Tonga" value="Tonga"></option>
					<option label="Trinidad &amp; Tobago" value="Trinidad &amp; Tobago"></option>
					<option label="Tunisia" value="Tunisia"></option>
					<option label="Turkey" value="Turkey"></option>
					<option label="Turkmenistan" value="Turkmenistan"></option>
					<option label="Tuvalu" value="Tuvalu"></option>
					<option label="Uganda" value="Uganda"></option>
					<option label="Ukraine" value="Ukraine"></option>
					<option label="United Arab Emirates" value="United Arab Emirates"></option>
					<option label="United Kingdom" value="United Kingdom"></option>
					<option label="United States" value="United States"></option>
					<option label="Uruguay" value="Uruguay"></option>
					<option label="Uzbekistan" value="Uzbekistan"></option>
					<option label="Vanuatu" value="Vanuatu"></option>
					<option label="Vatican City" value="Vatican City"></option>
					<option label="Venezuela" value="Venezuela"></option>
					<option label="Vietnam" value="Vietnam"></option>
					<option label="Yemen" value="Yemen"></option>
					<option label="Zambia" value="Zambia"></option>
					<option label="Zimbabwe" value="Zimbabwe"></option>

		</select></td>

		</tr>
		

			
			<tr><td><label for="states">State:</label></td></tr>
			<tr>
			<td><select id="states" name="states">
			
					<option label= "Alabama" value="Alabama"></option>
					<option  label= "Alaska" value="Alaska "> </option>
					<option  label= "Arizona"  value="Arizona"></option>
					<option  label= "Arkansas" value="Arkansas"></option>
					<option  label="California"  value="California"></option>
					<option  label= "Colorado" value="Colorado"></option>	
					<option  label= "Connecticut" value="Connecticut"> </option>
					<option  label= "Delaware" value="Delaware"> </option>
					<option  label= "Florida" value="Florida"> </option>
					<option  label= "Georgia" value="Georgia"> </option>
					<option  label= "Hawaii" value="Hawaii"> </option>
					<option  label= "Idaho" value="Idaho"> </option>
					<option  label= "Illinois" value="Illinois"> </option>
					<option  label= "Indiana" value="Indiana"> </option>
					<option  label= "Iowa" value="Iowa"> </option>
					<option  label= "Kansas" value="Kansas"> </option>
					<option  label= "Kentucky" value="Kentucky"> </option>
					<option  label= "Louisiana" value="Louisiana"> </option>
					<option  label= "Maine" value="Maine"> </option>
					<option  label= "Maryland" value="Maryland"> </option>
					<option  label= "Massachusetts" value="Massachusetts"> </option>
					<option  label= "Michigan" value="Michigan"> </option>
					<option  label= "Minnesota" value="Minnesota"> </option>
					<option  label= "Mississippi" value="Mississippi"> </option>
					<option  label= "Missouri" value="Missouri"> </option>
					<option  label= "Montana" value="Montana"> </option>
					<option  label= "Nebraska" value="Nebraska"> </option>
					<option  label= "Nevada" value="Nevada"> </option>
					<option  label= "New Hampshire" value="New Hampshire"> </option>
					<option  label= "New Jersey" value="New Jersey"> </option>
					<option  label= "New Mexico" value="New Mexico"> </option>
					<option  label= "New York" value="New York"> </option>
					<option  label= "North Carolina" value="North Carolina"> </option>
					<option  label= "North Dakota" value="North Dakota"> </option>
					<option  label= "Ohio" value="Ohio"> </option>
					<option  label= "Oklahoma" value="Oklahoma"> </option>
					<option  label= "Oregon" value="Oregon"> </option>
					<option  label= "Pennsylvania" value="Pennsylvania"> </option>
					<option  label= "Rhode Island" value="Rhode Island"> </option>
					<option  label= "South Carolina" value="South Carolina"> </option>
					<option  label= "South Dakota" value="South Dakota"> </option>
					<option  label= "Tennessee" value="Tennessee"> </option>
					<option  label= "Texas" value="Texas"> </option>
					<option  label= "Utah" value="Utah"> </option>
					<option  label= "Vermont" value="Vermont"> </option>
					<option  label= "Virginia" value="Virginia"> </option>
					<option  label= "Washington" value="Washington"> </option>
					<option  label= "District of Columbia" value="District of Columbia"> </option>
					<option  label= "West Virginia" value="West Virginia"> </option>
					<option  label= "Wisconsin" value="Wisconsin"> </option>
					<option label="Wyoming" value="Wyoming"></option>
					<option class="divider" label= "US Territory or City" value="US Territory or City" disabled></option>	
					<option  label= "Puerto Rico" value="Puerto Rico"> </option>
					<option  label= "Guam" value="Guam"> </option>
					<option  label= "American Samoa" value="American Samoa"> </option>
					<option  label= "U.S. Virgin Islands" value="U.S. Virgin Islands"> </option>
					<option  label= "Northern Mariana Islands" value="Northern Mariana Islands"> </option>
				</select></td>
			</tr>	
   </table>
<!--<div id=" form_second_part">-->
		<fieldset  id="gender" style="width:275px">
		<label for="sex">&ast;Gender:</label><br />
	<input type="radio" id="sex" name="sex" value="Male" <?php if( isset($magic_form['sex']) and $magic_form['sex']=="Male" ) {echo "checked ";} ?> />Male <br />
	<input type="radio"  id="sex02" name="sex" value="Female"  <?php if( isset($magic_form['sex']) and $magic_form['sex']=="Female" ) {echo "checked ";} ?> />Female <br />
	<input type="radio" id="sex03" name="sex" value="Other"  <?php if( isset($magic_form['sex']) and $magic_form['sex']=="Other" ) {echo "checked ";} ?> /> Other <br />
	<input type="radio"  id="sex04" name="sex" value="Undecided"  <?php if( isset($magic_form['sex']) and $magic_form['sex']=="Undecided" ) {echo "checked ";} ?> />Undecided<br />

		</fieldset>
		 <br />


 <fieldset id="acceptDecline" style="width:275px">
 	<label for="termsofservice">&ast;Terms of Service</label>
<br /> 


			<input type="checkbox" id="termsofservice"  name="termsofservice" value="I Agree"  <?php if( isset($magic_form['termsofservice']) and $magic_form['termsofservice']=="I Agree" ) {echo "checked ";} ?> /> I Agree with the Terms of Service<br />
			<input type="checkbox" id="termsofservice02" name="termsofservice" value="I Disagree" <?php if( isset($magic_form['termsofservice']) and $magic_form['termsofservice']=="I Disagree" )  {echo "checked ";} ?>/> I Disagree with the Terms of Service<br />
			<a href="magic_terms_of_service.php"> Terms of Service</a>

 <br />
</fieldset >

<fieldset id="goodForm" style="width:275px">
	<label for="yes">&ast;Was this form easy to complete?</label>
<br />
	<input type="radio" id="yes"  name="yes" value="Yes"  <?php if( isset($magic_form['yes']) and $magic_form['yes']=="Yes" )  {echo "checked ";} ?>/>Yes <br />
	<input type="radio" id="no"  name="yes" value="No" <?php if( isset($magic_form['yes']) and $magic_form['yes']=="No" )  {echo "checked ";} ?> />No <br />


</fieldset>
<p>Comment below, if you think there is any way to improve the registration process</p>
<br />
	<label for="commentsorcomplaints">Comments: &lpar;optional&rpar;</label>
	<br />
    <textarea  name="commentsorcomplaints" id="commentsorcomplaints" rows="6" cols="40" placeholder="Comments"  ><?php if( isset($magic_form['commentsorcomplaints'])){echo htmlentities($magic_form['commentsorcomplaints']);
}	?></textarea>
    <br />



		<input type="submit" id="form_submit"  name="submit_form"  value="Submit">
</form>

<?php include("../resources/magic_footer.php");?>
<?php include("../resources/load_scripts.php");?>

	</body>
		</html>