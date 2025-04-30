const pswdfield = document.querySelector("#form input[type='password']"),
            toggleBtn = document.querySelector("#form i");

        toggleBtn.onclick = () => {
            if (pswdfield.type == "password") {
                pswdfield.type = "text";
                toggleBtn.classList.add("active");
            } else {
                pswdfield.type = "password";
                toggleBtn.classList.remove("active");
            }
        }