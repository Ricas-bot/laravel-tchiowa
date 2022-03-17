@extends('layouts.main')
@section('content')

<!-- ===== Hero section ===== -->
<section id="home" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Bem-vindo ao site da Tchiowa Corp</h1>
        <h5> Temos diversificados serviços que irão melhorar a sua visibilidade no mercado, aumentar o seu conhecimento e muito mais.</h5>
    </div>
</section>
  <!-- End of Section -->

<!-- ===== About section ===== -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="/img/IMG-20201228-WA0013.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Sobre nós</h1>
            <p class="lead">Somos a Tchiowa Corp, uma empresa composta por uma equipa de profissionais formados nas áreas de tecnologia de informação, Telecomunicação com mais de 3 anos de experiências profissionais atuando no sector público e privado.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Mais detalhes
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Sobre nós</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p>Somos a Tchiowa Corp, uma empresa composta por uma equipa de profissionais formados nas áreas de tecnologia de informação, Telecomunicação com mais de 3 anos de experiências profissionais atuando no sector público e privado. Tchiowa Corp Soluções Tecnologias TI, surge no intuito de promover a disseminação da prática em Tecnologia de informação, uma metodologia inovadora, sustentável de administrar projetos, produtos e serviços em TIC. Em meio a esta filosofia de mantermos o compromisso de agregar valor no sector de tecnologia de informação dos nossos estimados clientes de forma duradora, o nosso segredo é de sempre atuarmos com ética, qualidade, responsabilidade e reavalição constante da nossa equipe. Com isso, garantimos uma melhoria contínua doss nossos processos, nos quais todos os benefícios são voltados de facto aos nossos clientes.</p>
                    <h5>Missão</h5>
                    <p>É nossa missão entender o negócio dos nossos clientes, prestar consultoria, de modo a alcançar soluções inovadoras com foco na melhoria e qualidade contínua.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#service" class="scrollto"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Serviços</button></a>
            </div>
          </div>
        </div>
    </div>
  </div>
    </section>
<!-- End of Section -->

<!-- ===== Service section ===== -->
<section id="service" class="service">
  <h1>Serviços</h1>
</section>
<!-- End of Section -->

<!-- ===== Portfolio section ===== -->
<section id="portfolio" class="portfolio">
  <h1>Portfólio</h1>
</section>
<!-- End of Section -->

<!-- ===== Contact section ===== -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
<!-- End of Section -->

@endsection