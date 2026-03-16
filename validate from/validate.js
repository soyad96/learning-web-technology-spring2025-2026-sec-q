function validateForm(){

let name = document.getElementById("name").value;
let email = document.getElementById("email").value;
let day = document.getElementById("day").value;
let month = document.getElementById("month").value;
let year = document.getElementById("year").value;
let blood = document.getElementById("blood").value;
let photo = document.getElementById("photo").value;

let gender = document.getElementsByName("gender");
let degree = document.getElementsByName("degree");


/* Name validation */
if(name == ""){
alert("Name cannot be empty");
return false;
}


/* Email validation */
if(email == ""){
alert("Email cannot be empty");
return false;
}

if(email.indexOf("@") == -1 || email.indexOf(".") == -1){
alert("Invalid Email");
return false;
}


/* Gender validation */
let genderSelected = false;

for(let i=0; i<gender.length; i++){
if(gender[i].checked){
genderSelected = true;
}
}

if(!genderSelected){
alert("Please select gender");
return false;
}


/* Date of Birth validation */
if(day=="" || month=="" || year==""){
alert("Enter your Date of Birth");
return false;
}


/* Blood group validation */
if(blood == "Select"){
alert("Select blood group");
return false;
}


/* Degree validation */
let degreeSelected = false;

for(let i=0; i<degree.length; i++){
if(degree[i].checked){
degreeSelected = true;
}
}

if(!degreeSelected){
alert("Select at least one degree");
return false;
}


/* Photo validation */
if(photo == ""){
alert("Upload your photo");
return false;
}

alert("Form submitted successfully");

return true;

}