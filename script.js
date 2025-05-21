document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    menuToggle.addEventListener("click", function () {
        navLinks.classList.toggle("active");
    });
});

  function toggleMenu() {
    document.querySelector('.menu-links').classList.toggle('show');
  }

  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));

document.addEventListener('DOMContentLoaded', function () {
  const dropdownToggle = document.querySelector('.dropdown-toggle');
  if (dropdownToggle) {
    dropdownToggle.addEventListener('click', function (e) {
      e.preventDefault();
      const menu = this.nextElementSibling;
      menu.classList.toggle('show');
    });
  }
});

function toggleDropdown() {
  document.querySelector('.dropdown-menu').classList.toggle('show');
}

 const swiper = new Swiper('.mySwiper', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

// Fungsi bantuan cookie
function setCookie(name, value, days) {
  const d = new Date();
  d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
  document.cookie = `${name}=${value};expires=${d.toUTCString()};path=/`;
}

function getCookie(name) {
  const cname = name + "=";
  const ca = document.cookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i].trim();
    if (c.indexOf(cname) == 0) {
      return c.substring(cname.length, c.length);
    }
  }
  return "";
}

// Username handler
function setUserName() {
  const name = document.getElementById("username").value;
  setCookie("userName", name, 7);
  showWelcome();
}

function showWelcome() {
  const user = getCookie("userName");
  if (user) {
    document.getElementById("welcomeMessage").innerText = "Selamat datang kembali, " + user + "!";
  }
}

// Cookie consent handlers
function acceptAllCookies() {
  setCookie("cookie_consent", "all", 30);
  document.getElementById("cookie-banner").style.display = "none";
}

function openCookieSettings() {
  document.getElementById("cookie-settings-modal").style.display = "block";
}

function closeCookieSettings() {
  document.getElementById("cookie-settings-modal").style.display = "none";
}

function saveCookieSettings() {
  const analytics = document.querySelector('input[name="analytics"]').checked;
  const marketing = document.querySelector('input[name="marketing"]').checked;

  setCookie("cookie_analytics", analytics ? "true" : "false", 30);
  setCookie("cookie_marketing", marketing ? "true" : "false", 30);
  setCookie("cookie_consent", "custom", 30);

  closeCookieSettings();
  document.getElementById("cookie-banner").style.display = "none";
}

// Inisialisasi saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
  showWelcome();

  if (!getCookie("cookie_consent")) {
    document.getElementById("cookie-banner").style.display = "block";
  }
});
