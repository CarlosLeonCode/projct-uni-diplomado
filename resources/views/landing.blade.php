@extends('layouts.landing')

@section('content')
  <!--Carrusel de imagenes-->
  <section id="inicio" class="d-flex align-items-center">
    <div class="container">
      <div class="section-title">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{URL::asset('img/carrusel1.jpg')}}" style="width: 360px; height: 650px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{URL::asset('img/carrusel2.jpg')}}" style="width: 360px; height: 650px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{URL::asset('img/carrusel3.jpg')}}"style="width: 360px; height: 650px;"  class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
      </div>
    </div>
  </section>

  <!--Servicios -->
  <section id="servicios" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Servicios</h2>
        <p>Somos expertos en la comercialización y distribución de medidores inteligentes de energía.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-truck"></i></div>
            <h4><a href="">Envios</a></h4>
            <p>Enviamos cilindros de gas a los hospitales y casas en Bogotá</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <h4><a href="">Mantenimiento</a></h4>
            <p>Instrumentos de cilindros de gas para todo tipo de sectores.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-headphones"></i></div>
            <h4><a href="">Soporte</a></h4>
            <p>Nuestro equipo de soporte técnico estará a su disposición siempre que lo necesite. </p>
          </div>
        </div>
    </div>
  </section>

  <!--Galeria -->
  <section id="galeria" class="gallery">
    <div class="container">

      <div class="section-title">
        <h2>Galería</h2>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../Estilos/img/gallery/gallery-1.jpg" class="galelry-lightbox">
              <img src="{{URL::asset('img/Galeria1.jpg')}}" style="width: 600px; height: 330px ;" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../Estilos/img/gallery/gallery-2.jpg" class="galelry-lightbox">
              <img src="{{URL::asset('img/Galeria2.jpg')}}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../Estilos/img/gallery/gallery-3.jpg" class="galelry-lightbox">
              <img src="{{URL::asset('img/Galeria3.jpg')}}" style="width: 600px; height: 330px ;" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../estilos/img/gallery/gallery-4.jpg" class="galelry-lightbox">
              <img src="{{URL::asset('img/Galeria4.jpg')}}" style="width: 600px; height: 330px ;" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../estilos/img/gallery/gallery-5.jpg" class="galelry-lightbox">
              <img src="{{URL::asset('img/Galeria5.jpg')}}" style="width: 600px; height: 330px ;" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../estilos/img/gallery/gallery-6.jpg" class="galelry-lightbox">
              <img src="{{URL::asset('img/Galeria6.jpg')}}" style="width: 600px; height: 330px ;" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../estilos/img/gallery/gallery-7.jpg" class="galelry-lightbox">
              <img src="{{URL::asset('img/Galeria7.jpg')}}" style="width: 600px; height: 330px ;" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../estilos/img/gallery/gallery-8.jpg" class="galelry-lightbox">
              <img src="{{URL::asset('img/Galeria8.jpg')}}" style="width: 600px; height: 330px ;" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mapa de contacto-->
  <section id="contacto" class="contacto section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Contacto</h2>
        <p>Nos pueden visitar en la siguiente ubicación</p>
      </div>
    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8624328658157!2d-74.13113028543113!3d4.618620143650318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9eadf032a39d%3A0x8e0fd6d7cc83ab82!2sCra.%2068f%20%234-26%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1675984525470!5m2!1ses!2sco" frameborder="0" allowfullscreen></iframe>
    </div>
  </section>

<!-- Pie de pagina -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>OMC</h3>
          <p>
            Cra 68 F $4 - 26 sur <br>
            Bogotá, Colombia<br>
            <b>Telefono:</b> 3108184158<br>
            <b>Correo:</b> sbernal5@ibero.edu.co<br>
            <b>Correo:</b> cleonpin@ibero.edu.co<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Servicios</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#inicio">Inicio</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#servicios">Servicios</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Servicios</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#galeria">Galeria</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#contacto">Contacto</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Datos del estudiante</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="https://github.com/shr7irley/ProyectoUniversidad">GitHub</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://aulavirtual.ibero.edu.co/login/index.php">Ibero</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>OMC</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        Diseñado por Shirley Bernal y Carlos Leon</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
      <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
      <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
      <a href="#" class="google-plus"><i class="fa-brands fa-skype"></i></a>
      <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
    </div>
  </div>
</footer>
@endsection
