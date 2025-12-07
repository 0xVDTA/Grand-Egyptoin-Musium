<nav class="custom-navbar position-fixed start-0 end-0 top-0 d-flex align-items-center justify-content-between px-5">
  <div class="d-flex h-100 align-items-center gap-3">
    <img class="logo" src="<?= ASSETS ?>image/logo.png" alt="GEM Logo">
  </div>
  <div>
    <a href="#"><button class="lang-btn" id="langBtn">ع</button></a>

    <?php if (empty($hideLogin)): ?>
      <a href="<?= BASE_URL ?>login" class="login-btn">Log In</a>
    <?php endif; ?>
  </div>
</nav>
<aside id="gemSidebar">
  <button id="sidebarToggle" class="btn btnSidebar btn-outline-light position-absolute top-0 m-3">
    <i class="fa-solid fa-x"></i>
  </button>
  <div class="sidebar-logo">
    <img src="<?= ASSETS ?>image/logo.png" alt="GEM Logo">
  </div>
  <nav class="sidebar-links d-flex flex-column gap-2 justify-content-between">
    <a href="<?= BASE_URL ?>#header_1">Home</a>
    <a href="<?= BASE_URL ?>plans">Visit</a>
    <a href="<?= BASE_URL ?>#events">Events</a>
    <a href="<?= BASE_URL ?>collections">Collection</a>
    <a href="<?= BASE_URL ?>#learn-section">Learn</a>
    <a href="<?= BASE_URL ?>donate">Donate</a>
    <a href="<?= BASE_URL ?>kids-zone">Kids Zone</a>
    <a href="<?= BASE_URL ?>#about-section">About</a>
  </nav>
</aside>
<button class="museum-menu-btn">
  <i id="icon_navbar_false_true" class="fa-solid fa-bars"></i>
</button>
<!-- end navbar & sidbar -->