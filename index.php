<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="color-scheme" content="light dark" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="icon" type="image/x-icon" href="./assets/favicons/0.5x/Asset 1@0.5x.png" />
  <title>Raysthetics | Portfolio</title>
</head>

<body>
  <header class="container-fluid">
    <button id="burger-menu" class="burger-menu" aria-expanded="false">
      <i class="fa-solid fa-bars" id="menu-icon"></i>
    </button>
    <div class="brand-logo">
      <img src="./assets/brand/raysthetics-brand-2.svg" alt="raysthetics-brand" id="branding" />
      <span>Raysthetics</span>
    </div>
    <nav>
      <ul>
        <li>
          <a href="#hero">
            <lord-icon src="https://cdn.lordicon.com/dznelzdk.json" trigger="hover"
              colors="primary:#029ae8,secondary:#029ae8,tertiary:#029ae8,quaternary:#029ae8,quinary:#029ae8,senary:#e4e4e4"
              style="width: 32px; height: 32px">
            </lord-icon>
            <span>Home</span>
          </a>
        </li>
        <li>
          <a href="#about">
            <lord-icon src="https://cdn.lordicon.com/daeumrty.json" trigger="hover"
              colors="primary:#ffffff,secondary:#ffffff,tertiary:#029ae8,quaternary:#029ae8"
              style="width: 32px; height: 32px"></lord-icon>
            <span>About</span>
          </a>
        </li>
        <li>
          <a href="#portfolio">
            <lord-icon src="https://cdn.lordicon.com/yrtftktn.json" trigger="hover"
              colors="primary:#029ae8,secondary:#e4e4e4" style="width: 32px; height: 32px"></lord-icon>
            <span>Portfolio</span>
          </a>
        </li>
        <li>
          <a href="#experience">
            <lord-icon src="https://cdn.lordicon.com/hnqamtrw.json" trigger="hover"
              colors="primary:#029ae8,secondary:#e4e4e4" style="width: 26px; height: 26px"></lord-icon>
            <span>Experience</span>
          </a>
        </li>
        <li>
          <a href="#contact">
            <lord-icon src="https://cdn.lordicon.com/dpggoewm.json" trigger="hover"
              colors="primary:#029ae8,secondary:#e4e4e4,tertiary:#029ae8" style="width: 42px; height: 42px"></lord-icon>
            <span>Contact</span>
          </a>
        </li>
      </ul>
      <div class="nav-right">
        <button class="outline" data-tooltip="Download Resume" data-placement="bottom" aria>
          <i class="fa-solid fa-download"></i><span>Resume</span>
        </button>
        <button class="theme-toggle">
          <i class="fa-solid fa-moon" id="theme-icon"></i>
        </button>
      </div>
    </nav>
  </header>
  <section id="hero" class="hero-img">
    <div class="hero-container">
      <h1><span class="hero-work"></span></h1>
    </div>
    <div class="scroll-down">
      <a href="#about">
        <p>Scroll Down</p>
        <p><i class="fa-solid fa-angles-down" style="color: #ffffff;"></i></p>
      </a>
    </div>
    <img src="./assets/images/backgroundImg00.jpg" alt="backgroundImg00" id="backgroundImg" />
    <div id="word-container">
      <div id="controls">
        <span id="color" value="#029ae8"></span>
        <span id="opacity"></span>
      </div>
  </section>
  <main class="container">
    <section id="about">
      <h1></h1>
      <h2>My Portfolio</h2>
    </section>
    <section id="portfolio">
      <h3>My Work</h3>
      <section id="apps">
        <h4>
          <span><i class="fa-solid fa-mobile-screen"></i></span> Mobile
        </h4>
        <div class="grid">
          <div class="cards">
            <article class="custom-article hidden">
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 1</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 2</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 3</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 1</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 2</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 3</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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
      <section id="designs">
        <h4><i class="fa-solid fa-pen-nib"></i> Designs</h4>
        <div class="grid">
          <div class="cards">
            <article class="custom-article hidden">
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 1</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 2</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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
              <img src="./assets/images/testImg.png" alt="testImg" />
              <div class="hdr-btn-align">
                <h5>Project 3</h5>
                <div class="button-container">
                  <button class="preview" data-tooltip="Preview" data-placement="bottom">
                    <i class="fa-solid fa-eye fa-xs"></i>
                  </button>
                  <button class="outline" data-tooltip="View on Penpot" data-placement="bottom">
                    <i class="fa-solid fa-link fa-xs"></i><a href="#"></a>
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

    <section id="experience">
      <h3>Experience</h3>
      <div>
        <ul>
          <li>[Job Title] at [Company] - [Year]</li>
          <li>[Job Title] at [Company] - [Year]</li>
        </ul>
      </div>
    </section>

    <section id="contact">
      <h3>Contact Me</h3>
      <form action="send_email.php" method="POST"></form>>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Send</button>
      </form>
    </section>
    <footer>
      <p>&copy; Raysthetics 2024</p>
      <p>Made with <i class="fa-solid fa-heart" style="color: #029ae8;"></i> using
        <a href="https://picocss.com/">Pico CSS</a>
        <a href="https://mattboldt.com/demos/typed-js/">Typed.js</a>,
        <a href="https://fontawesome.com/">Font Awesome</a>, and
        <a href="https://lordicon.com/">Lordicon</a>.
      </p>
    </footer>
  </main>

  <dialog id="preview">
    <article>
      <header class="dialog-header">
        <button id="closeDialog" aria-label="Close" rel="prev"></button>
        <p>
          <strong>Swap Smart</strong>
        </p>
      </header>
      <img src="./assets/images/testImg.png" alt="" />
      <img src="./assets/images/testImg.png" alt="" />
      <img src="./assets/images/testImg.png" alt="" />
      <img src="./assets/images/testImg.png" alt="" />
    </article>
  </dialog>

  <script src="https://cdnjs .cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <script src="./js/scripts.js"></script>
</body>

</html>