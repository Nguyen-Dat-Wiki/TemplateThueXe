document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");
    const ForgetAccountForm = document.querySelector("#ForgerAccount");
    const changedPassAccountForm = document.querySelector("#ChangedPassForgerAccount");
    if (sessionStorage.getItem("login") == 0) {
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");

        $("#linkCreateAccount").click(e => {
            e.preventDefault();

            loginForm.classList.add("form--hidden");
            createAccountForm.classList.remove("form--hidden");
        })

        $("#linkLogin").click(e => {
            e.preventDefault();

            loginForm.classList.remove("form--hidden");
            createAccountForm.classList.add("form--hidden");
        });

        $("#forget").click(e => {
            e.preventDefault();

            ForgerAccount.classList.remove("form--hidden");
            loginForm.classList.add("form--hidden");
        });

        $("#linkLogin3").click(e => {
            e.preventDefault();

            loginForm.classList.remove("form--hidden");
            ForgetAccountForm.classList.add("form--hidden");
        });


    } else {
        $("#linkCreateAccount").click(e => {
            e.preventDefault();

            loginForm.classList.add("form--hidden");
            createAccountForm.classList.remove("form--hidden");
        });

        $("#linkLogin").click(e => {
            e.preventDefault();

            loginForm.classList.remove("form--hidden");
            createAccountForm.classList.add("form--hidden");
        });

        $("#forget").click(e => {
            e.preventDefault();

            ForgerAccount.classList.remove("form--hidden");
            loginForm.classList.add("form--hidden");
        });

        $("#linkLogin3").click(e => {
            e.preventDefault();

            loginForm.classList.remove("form--hidden");
            ForgetAccountForm.classList.add("form--hidden");
        });


    }
});