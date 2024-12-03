// Function to check if the passwords match
document.write(Date());

function validatePassword() {
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirm_password").value;

  if (document.getElementById("password").value == document.getElementById("confirm_password").value) 
  {
    alert("submission success!");
  }

  else{
    alert("password is not matched!");
  }
}




// event listener to the form submission
var registrationForm = document.querySelector(".registration-form2");
registrationForm.addEventListener("submit", function (e) 
{
  e.preventDefault(); 
  submitForm(); // Call  form  function
})