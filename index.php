<!DOCTYPE html>
<html lang="en" data-theme="dark">

<?php
include 'include/head.inc.php';
?>

<body>
  <!-- navigation -->
  <?php
  include 'include/navigation.inc.php';
  ?>
  <!-- hero -->
  <?php
  include 'include/hero.inc.php';
  ?>
  <!-- main -->
  <main class="container">
    <section id="about" class="target-section">
      <h1>My Portfolio</h1>
    </section>
    <section id="portfolio" class="target-section">
      <h3>My Work</h3>
      <section id="apps">
        <h4>
          <span><i class="fa-solid fa-mobile-screen"></i></span> Mobile
        </h4>
        <div class="grid">
          <div class="cards">
            <article class="custom-article hidden">
              <img src="./assets/images/testImg.webp" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 1</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i>
                  </button>
                </div>
              </div>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Illum excepturi eos libero.
              </p>
            </article>
          </div>
          <div class="cards">
            <article class="custom-article hidden">
              <img src="./assets/images/testImg.webp" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 2</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i>
                  </button>
                </div>
              </div>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Illum excepturi eos libero.
              </p>
            </article>
          </div>
          <div class="cards">
            <article class="custom-article hidden">
              <img src="./assets/images/testImg.webp" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 3</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i>
                  </button>
                </div>
              </div>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Illum excepturi eos libero.
              </p>
            </article>
          </div>
        </div>
      </section>
      <section id="web">
        <h4><i class="fa-solid fa-desktop"></i> Web</h4>
        <div class="grid">
          <div class="cards">
            <article class="custom-article hidden">
              <img src="./assets/images/testImg.webp" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 1</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i>
                  </button>
                </div>
              </div>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Illum excepturi eos libero.
              </p>
            </article>
          </div>
          <div class="cards">
            <article class="custom-article hidden">
              <img src="./assets/images/testImg.webp" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 2</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i>
                  </button>
                </div>
              </div>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Illum excepturi eos libero.
              </p>
            </article>
          </div>
          <div class="cards">
            <article class="custom-article hidden">
              <img src="./assets/images/testImg.webp" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 3</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i>
                  </button>
                </div>
              </div>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Illum excepturi eos libero.
              </p>
            </article>
          </div>
        </div>
      </section>
    </section>
    <section id="experience" class="target-section">
      <h3>Experience</h3>
      <?php
      include 'include/experience.inc.php';
      ?>
    </section>
    <section id="contact" class="target-section">
      <h3>Contact Me</h3>
      <?php
      include 'include/contact.inc.php';
      ?>
    </section>
    <!-- footer -->
    <footer>
      <?php
      include 'include/footer.inc.php';
      ?>
    </footer>
  </main>
  <!-- dialog-preview -->
  <?php
  include 'include/preview.inc.php';
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script src="./js/scripts.js"></script>
</body>

</html>