 <header class="container-fluid">
   <button id="burger-menu" class="burger-menu" aria-expanded="false">
     <i class="fa-solid fa-bars" id="menu-icon"></i>
   </button>
   <div class="brand-logo">
     <a href="#" onclick="location.reload(); return false;">
       <img src="./assets/brand/raysthetics-brand-2.svg" alt="raysthetics-brand" id="branding" />
       <span>Raysthetics</span>
     </a>
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
       <form action="resume.php" class="resume">
         <button class="outline" data-tooltip="Download Resume" data-placement="bottom" aria-label="Download Resume">
           <i class="fa-solid fa-download"></i><span>Resume</span>
         </button>
       </form>
       <button class="theme-toggle">
         <i class="fa-solid fa-moon" id="theme-icon"></i>
       </button>
     </div>
   </nav>
 </header>