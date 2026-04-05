// ================= FORM SWITCH =================
const signUpBtn = document.getElementById("signUpButton");
const signInBtn = document.getElementById("signInButton");

const signup = document.getElementById("signup");
const signin = document.getElementById("signIn");

if (signUpBtn && signInBtn) {

    signUpBtn.addEventListener("click", () => {
        signin.style.display = "none";
        signup.style.display = "block";
    });

    signInBtn.addEventListener("click", () => {
        signin.style.display = "block";
        signup.style.display = "none";
    });

}


// ================= PASSWORD TOGGLE =================
document.querySelectorAll(".togglePassword").forEach(icon => {

    icon.addEventListener("click", () => {

        const input = icon.previousElementSibling;

        if (input.type === "password") {
            input.type = "text";
            icon.classList.replace("fa-eye", "fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.replace("fa-eye-slash", "fa-eye");
        }

    });

});