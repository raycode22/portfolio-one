<!DOCTYPE html>
<html lang="en" data-theme="dark"
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
  <div class="sec-divider hidden">
    <section id="about">
      <h1>About</h1>
      <p>Hello! I'm an entry-level designer with a passion for merging technology and creativity to build intuitive, user-friendly solutions across web, mobile, and desktop platforms. I thrive on learning new techniques and collaborating with other creative minds to bring innovative projects to life.</p>
      <p>Every design challenge is an opportunity to explore fresh ideas, refine my skills, and craft experiences that truly resonate with users. Thank you for stopping by my portfolio—I look forward to connecting and creating something exceptional together.</p>
    </section>
  </div>
  <div class="sec-divider">
    <section id="portfolio">
      <?php
      include 'include/portfolio.inc.php'
      ?>
    </section>
  </div>
  <div class="sec-divider">
    <section id="experience">
      <h1>Experience</h1>
      <?php
      include 'include/experience.inc.php';
      ?>
    </section>
  </div>
  <div class="sec-divider">
    <section id="contact">
      <h1>Contact Me</h1>
      <?php
      include 'include/contact.inc.php';
      ?>
    </section>
  </div>
  <!-- footer -->
</main>
<footer>
  <?php
  include 'include/footer.inc.php';
  ?>
</footer>
<!-- dialog-preview -->
<?php
include 'include/preview.inc.php';
?>
<script src="https://www.google.com/recaptcha/api.js?render=6LfSdcgqAAAAACgjdQ0CwVrXDD5qPV7VPFFFYW5G"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/3.2.3/purify.min.js" integrity="sha512-Ll+TuDvrWDNNRnFFIM8dOiw7Go7dsHyxRp4RutiIFW/wm3DgDmCnRZow6AqbXnCbpWu93yM1O34q+4ggzGeXVA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/scripts.js"></script>
</body>

</html>