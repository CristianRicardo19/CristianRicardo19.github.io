let prevScrollPos = window.pageYOffset;
const navbar = document.getElementById("navbar");
    window.onscroll = function () {
            const currentScrollPos = window.pageYOffset;
            if (prevScrollPos > currentScrollPos) {
                navbar.style.top = "0";
            } else {
                navbar.style.top = "-120px";
            }
            prevScrollPos = currentScrollPos;
        };

document.getElementById('menu-toggle').addEventListener('click', function() {
    const navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('active');
  });
  