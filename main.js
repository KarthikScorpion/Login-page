function fun1c() {
    if(mail.value!==pas.value){
    alert("You are succesfully logged in!")
    }

    if(mail.value==pas.value){
        alert("The email and the password at the same or")
    }

    if(mail.value.length + pas.value.length == 0){
        alert("One or more of the inputs have not been filled")
    }


}

