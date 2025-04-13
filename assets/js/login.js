document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("login-form");
    const loginButton = document.getElementById("login-button");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        formData.append("action", "login");

        loginButton.disabled = true;

        const email = form.email.value.trim();
        const password = form.password.value.trim();

        if (!email || !password) {
            alert("Please fill in all fields.");
            loginButton.disabled = false;
            return;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            loginButton.disabled = false;
            return;
        }


        fetch("", {
            method: "POST",
            body: formData
        })
            .then((res) => res.json())
            .then((data) => {
                if (data.status === "success") {
                    window.location.href = data.redirect; // ✅ redirect here
                } else {
                    alert(data.message); // Or show it in your custom UI
                }
            })
            .catch((err) => {
                console.error("Login failed:", err);
                alert("Something went wrong!");
            })
            .finally(() => {
                loginButton.disabled = false;
            });
    });
});
