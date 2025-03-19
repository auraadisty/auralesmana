document.addEventListener("DOMContentLoaded", function () {
    let dropdowns = document.querySelectorAll(".dropdown-toggle");
    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener("click", function () {
            let menu = this.nextElementSibling;
            if (menu.classList.contains("show")) {
                menu.classList.remove("show");
            } else {
                document.querySelectorAll(".dropdown-menu").forEach(function (el) {
                    el.classList.remove("show");
                });
                menu.classList.add("show");
            }
        });
    });

    // Tutup dropdown jika klik di luar
    document.addEventListener("click", function (e) {
        if (!e.target.matches(".dropdown-toggle")) {
            document.querySelectorAll(".dropdown-menu").forEach(function (el) {
                el.classList.remove("show");
            });
        }
    });
});
