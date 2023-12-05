document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("cadastroForm");
    var invalid = document.querySelector("#invalid");
    var redirect = document.querySelector("#redirect");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "back/cadastra.php", true);
        xhr.addEventListener("load", function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                if (xhr.responseText != "T") {
                    redirect.style.display = "none";
                    invalid.style.display = "block";
                } else {
                    invalid.style.display = "none";
                    redirect.style.display = "block";

                    alert("Seu usuário foi cadastrado com sucesso!");

                    window.location = "login.php";
                }
            }
        });

        xhr.send(formData);
    });
});