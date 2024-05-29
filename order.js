function check_empty() {
    if (document.getElementById('name').value == "" || document.getElementById('number').value == "" ||  document.getElementById('msg').value == "")
    {
    alert("Fill the fields!");
    } 
    else {
    document.getElementsByClassName('btn');
    alert("Thank you for your order...");
    }
}