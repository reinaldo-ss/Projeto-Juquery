
  /* ================ SCRIPT SOBE PARA TOPO =============== */
  /* ================== DA TELA AO CLICAR ================= */
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  /* ===================== FIM SCRIPT ===================== */


  /* ============= SCRIPT FIXAR TELA AO CLICAR ============ */
    var overflowFixed = document.getElementById('overflowFixed');
    var fixo = false;           // variavel de controle de clique no botao

    function action() {
      fixo = !fixo;            // nega o valor conforme o clique no botao

      if(fixo) overflowFixed.classList.toggle('fixando');
      else overflowFixed.classList.remove('fixando');
    }
  /* ===================== FIM SCRIPT ===================== */


  /* =========== SCRIPT FIXAR TELA AO CLICAR ADM ========== */
    var overflowFixedAdm = document.getElementById('overflowFixedAdm');
    var fixoAdm = false;           // variavel de controle de clique no botao

    function actionAdm() {
      fixoAdm = !fixoAdm;            // nega o valor conforme o clique no botao

      if(fixoAdm) overflowFixedAdm.classList.toggle('fixandoAdm');
      else overflowFixedAdm.classList.remove('fixandoAdm');
    }
  /* ===================== FIM SCRIPT ===================== */


  /* =========== SCRIPT FIXAR TELA AO CLICAR Art ========== */
    var overflowFixed = document.getElementById('overflowFixed');
    var fixoArts = false;           // variavel de controle de clique no botao

    function actionArts() {
      fixoArts = !fixoArts;            // nega o valor conforme o clique no botao

      if(fixoArts) overflowFixed.classList.toggle('fixandoAdm');
      else overflowFixed.classList.remove('fixandoAdm');
    }
  /* ===================== FIM SCRIPT ===================== */

    


  /* =================== MENU RESPONSIVO ================== */
    var ul = document.querySelector('header ul');
    var menuBtn = document.querySelector('.menu-btn i');

    function menuShow() {
        if (ul.classList.contains('open')) {
            ul.classList.remove('open');
        }else{
            ul.classList.add('open');
        }
    }
  /* ================= FIM MENU RESPONSIVO ================ */


  /* ================ CARROSSEL EVENTOS HOME =============== */
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" activeEventosHome", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " activeEventosHome";
    }
  /* ====================== FIM SCRIPT ===================== */
