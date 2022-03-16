@extends('layouts.main')
@section('content')

<!-- ===== Hero section ===== -->
<section id="home" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-in">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
                <h1>Bem-vindo ao site da Tchiowa Corp</h1>
                <h2> Temos diversificados serviços que irão melhorar a sua visibilidade no mercado, aumentar o seu conhecimento e muito mais.</h2>
            </div>
        </div>
    </div>
</section>
  <!-- End of Section -->

<!-- ===== About section ===== -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
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
              <div class="modal-dialog modal-dialog-scrollable" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
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
  <h1>Contactos</h1>
</section>
<!-- End of Section -->

@endsection