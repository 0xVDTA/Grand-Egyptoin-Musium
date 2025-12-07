const gemSidebar = document.getElementById("gemSidebar");
const sidebarToggle = document.getElementById("sidebarToggle");
const navlinkmopile = document.getElementsByClassName("museum-menu-btn")[0];

sidebarToggle.addEventListener("click", () => {
  gemSidebar.classList.toggle("test");
  navlinkmopile.classList.toggle("opacity-0");
});

navlinkmopile.addEventListener("click", () => {
  gemSidebar.classList.toggle("test");
  navlinkmopile.classList.toggle("opacity-0");
});

document
  .getElementsByClassName("documentNotNavbar")[0]
  .addEventListener("click", () => {
    gemSidebar.classList.remove("test");
    navlinkmopile.classList.remove("opacity-0");
  });
