function formValidation() {
  var name = document.registration.name;
  var email = document.registration.email;
  var password = document.registration.password;
  var phoneNumber = document.registration.phoneNumber;
  var gender = document.registration.gender;
  var language = document.registration.language;
  var zipcode = document.registration.zipcode;
  var about = document.registration.about;

  if (name.value === "") {
      alert("Please enter your name");
      name.focus();
      return false;
  }
  if (email.value === "") {
      alert("Please enter your email");
      email.focus();
      return false;
  }
  if (password.value === "") {
      alert("Please enter your password");
      password.focus();
      return false;
  }
  if (phoneNumber.value === "") {
      alert("Please enter your phone number");
      phoneNumber.focus();
      return false;
  }
  if (!document.querySelector('input[name="gender"]:checked')) {
      alert("Please select your gender");
      return false;
  }
  if (language.value === "") {
      alert("Please select a language");
      language.focus();
      return false;
  }
  if (zipcode.value === "") {
      alert("Please enter your zip code");
      zipcode.focus();
      return false;
  }
  if (about.value === "") {
      alert("Please write something about yourself");
      about.focus();
      return false;
  }
  return true;
}
