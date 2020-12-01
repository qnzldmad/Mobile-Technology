// Check Username Overlap
//Used by register.php
function checkid(){
	var userName = document.getElementById("userNameRe").value; // Apply input under name id from register.php
	if(userName)
	{
		url = "./checkOverlap/checkUsername.php?usernameRegister="+userName; // location of check overlap php file
			window.open(url,"chkUsername","width=300,height=100"); // using window.open(file location, target, extra option) 
		}else{
			alert("Please Enter Your Username"); // if nothing input show the alert
		}
	}
// Check Email Overlap
//Used by register.php
function checkEm(){
	var email = document.getElementById("emailRe").value; // Apply input email from register.php
	if(email)
	{
		url = "./checkOverlap/checkEmail.php?emailRegister="+email; // location of check overlap php file
			window.open(url,"chkEmail","width=300,height=100"); // using window.open(file location, target, extra option) 
		}else{
			alert("Please Enter Your Email"); // if nothing input show the alert
		}
}

	//Checking Password and Confirm Password are Same or not
	//Used by register
function checkPass(){
	var pw = document.getElementById('pass1').value; //refer value of id under name pass1
	var SC = ["!","@","#","$","%"]; //set special letter in Password
	var check_SC = 0; // insert when special letter found number will 1, not found number will 0
	if(pw.length < 6 || pw.length>16){ //if statement for password length
	window.alert('Password must be between 6 to 16');
	document.getElementById('pass1').value='';
	}
	for(var i=0;i<SC.length;i++){ // compare all of SC letter with pass1 value
		if(pw.indexOf(SC[i]) != -1){
			check_SC = 1;
		}
	}
	if(check_SC == 0){ // not found so number is 0
		window.alert('Password Must include !,@,#,$,% one of this')
		document.getElementById('pass1').value='';
	}
	if(document.getElementById('pass1').value !='' && document.getElementById('pass2').value!=''){
		if(document.getElementById('pass1').value==document.getElementById('pass2').value){
			document.getElementById('check').innerHTML='Password and Confirm Password are Same!'
			document.getElementById('check').style.color='blue';
		}
		else{
			document.getElementById('check').innerHTML='Password and Confirm Password are Different! Please insert Again!';
			document.getElementById('check').style.color='red';
			document.getElementById('pass1').value='';
			document.getElementById('pass2').value='';
		}
	}
}

// Use google map with API
// Used by location.php
	function myMap() {
		var company = { lat: 3.164065, lng: 101.656996 };
		var kuala = { lat: 3.157828, lng: 101.712182 };

		var map = new google.maps.Map(document.getElementById("company"), {
		  zoom: 16,
		  center: company,
		});
		new google.maps.Marker({
		  position: company,
		  map,
		  title: "UHDB",
		});
		
		var map = new google.maps.Map(document.getElementById("installed"), {
			zoom: 16,
			center: kuala,
		  });
		  new google.maps.Marker({
			position: { lat: 3.158865, lng: 101.714552 },
			map,
			title: "7-Eleven Wisma Central",
		  });
		  new google.maps.Marker({
			position: { lat: 3.159224, lng: 101.709062 },
			map,
			title: "British Council",
		  });
		  new google.maps.Marker({
			position: { lat: 1.461751, lng: 103.763568 },
			map,
			title: "City Squre",
		  });
		  new google.maps.Marker({
			position: { lat: 5.978618, lng: 116.071555 },
			map,
			title: "Center Point",
		  });
		  new google.maps.Marker({
			position: { lat: 1.557317, lng: 110.352966 },
			map,
			title: "Mc Kuching",
		  });
		
		var button = document.getElementById('btnKl');
		button.addEventListener('click', changeKl);
  
		function changeKl(){
			var kl = { lat: 3.157828, lng: 101.712182 };
			map.panTo(kl);
			map.setZoom(16);
		}

		var button = document.getElementById('btnJohor');
		button.addEventListener('click', changeJohor);

		function changeJohor(){
			var johor = { lat: 1.462702, lng: 103.763794 };
			map.panTo(johor);
			map.setZoom(16);
		}

		var button = document.getElementById('btnSabah');
		button.addEventListener('click', changeSabah);

		function changeSabah(){
			var sabah = { lat: 5.978232, lng: 116.071766 };
			map.panTo(sabah);
			map.setZoom(16);
		}

		var button = document.getElementById('btnSarawak');
		button.addEventListener('click', changeSarawak);

		function changeSarawak(){
			var sarawak = { lat: 1.556697, lng: 110.356845 };
			map.panTo(sarawak);
			map.setZoom(16);
		}
	  }

// Hide and show button
// Used by location.php
function showCom(){
	installed.style.display = "none";
	company.style.display = "";
	addCom.style.display = "";
	stateMenu.style.display = "none";
}

function showKl(){
	company.style.display = "none";
	addCom.style.display = "none";
	installed.style.display = "";
	stateMenu.style.display = "";
}
