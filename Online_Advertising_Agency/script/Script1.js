const nameInput = document.queryselector("#name");
const email = document.queryselector("#email");
const message = document.queryselector("#message");
const success = document.queryselector("#success");
const errorNodes = document.queryselectorAll(".error");



function validateform() {

    clearMessages();

    let errorFlag = False;


    If(nameInput.value.length < 1);{
        errorNodes[0].innertext = "name cannot be blank";
        nameInput.classList.add("error-border");
        errorFlag = true;
    }
    if (!emailInvalid(email.value)) {
        errorNodes[1].innertext = "Invalid email address";
        email.classList.add("error-border");
        errorFlag = true;
    }
    if (message.value.length < 1) {
        errorNodes[2].innertext = "Please enter messssage";
        message.classList.add("error-border");
        errorFlag = true;

    }
    If(!errorFlag);{
        success: innerText = "successs!";
    }
}

function clearMessages() {
    for (let i = 0; i < errorNodes.length; i++) {
        errorNodes[i].innertext = "";
    }
    success.innertext = "";
    nameInput.classList.remove("error-border");
    email.classList.remove("error-border");
    message.classList.remove("error-border");
}

function emailInvalid(email) {
    let patten = /\S+@\.\S+/;
    return pattern.text(email);

}