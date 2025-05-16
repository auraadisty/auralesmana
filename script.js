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

// Fungsi untuk menyetel cookie
function setCookie(name, value, days) {
  const date = new Date();
  date.setTime(date.getTime() + (days*24*60*60*1000));
  const expires = "expires=" + date.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Fungsi untuk membaca cookie
function getCookie(name) {
  const cname = name + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1);
    if (c.indexOf(cname) == 0) return c.substring(cname.length, c.length);
  }
  return "";
}

// Fungsi menyimpan nama pengguna ke cookie
function setUserName() {
  const name = document.getElementById("username").value;
  setCookie("userName", name, 7);
  showWelcome();
}

// Fungsi menampilkan pesan sambutan
function showWelcome() {
  const user = getCookie("userName");
  if (user) {
    document.getElementById("welcomeMessage").innerText = "Selamat datang kembali, " + user + "!";
  }
}

// Panggil saat halaman dimuat
document.addEventListener("DOMContentLoaded", showWelcome);
