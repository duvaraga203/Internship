function Check() {
    let age = document.getElementById('age');
    let mobileNo = document.getElementById('mobile').value;


    if(age.value < 18) {
        alert("Age must be above 18.");
        event.preventDefault(); 
    }

    if(mobileNo.length != 10 || mobileNo == ''){
        alert('Mobile number must be 10 digits.')
        // event.preventDefault();
        return false;
    }
}
