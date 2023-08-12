<template>
  <div>
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li
          data-bs-target="#template-mo-zay-hero-carousel"
          data-bs-slide-to="0"
          class="active"
        ></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row p-5">
              <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img class="img-fluid" src="../assets/img/pckit.png" alt="" style="height: 35rem" />
              </div>
              <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left align-self-center">
                  <h1 class="h1 text-success"><b>PC Guide</b> eCommerce</h1>
                  <h3 class="h2">O melhor lugar para montar seu PC</h3>
                  <p>
                    Aqui temos uma grande variedade de hardware, gabinetes, perifericos, etc, para
                    que você monte o PC dos sonhos.
                    <a rel="sponsored" class="text-success" href="/store"
                      >Veja mais em nossa loja <i class="bi bi-arrow-right-circle-fill"></i
                    ></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row p-5">
              <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img class="img-fluid" src="../assets/img/blogtech.png" alt="" />
              </div>
              <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left">
                  <h1 class="h1">Blog PC Guide</h1>
                  <p>
                    Aqui estão as principais novidades do mundo tecnologico, lançamentos e novidades
                    para que você esteja sempre atualizado,
                    <a rel="sponsored" class="text-success" href="/blog"
                      >veja mais <i class="bi bi-arrow-right-circle-fill"></i
                    ></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row p-5">
              <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img class="img-fluid" src="../assets/img/pcbuild.png" alt="" />
              </div>
              <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left">
                  <h1 class="h1">Monte seu PC</h1>
                  <p>
                    Tenha total controle sobre hardware, perifericos, sistema operacinal para o seu
                    pc, monte-o do 0 conosco, clicando
                    <a rel="sponsored" class="text-success" href="/buildpc"
                      >aqui <i class="bi bi-arrow-right-circle-fill"></i
                    ></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev text-decoration-none w-auto ps-3"
        href="#template-mo-zay-hero-carousel"
        role="button"
        data-bs-slide="prev"
      >
        <i class="fas fa-chevron-left"></i>
      </a>
      <a
        class="carousel-control-next text-decoration-none w-auto pe-3"
        href="#template-mo-zay-hero-carousel"
        role="button"
        data-bs-slide="next"
      >
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>
    <!-- Start Categories of The Month -->
    <section class="container py-5">
      <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Principais Categorias</h1>
          <p>As principais categorias dos nossos produtos.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"
            ><img src="../assets/img/gpu.png" class="rounded-circle img-fluid border"
          /></a>
          <h5 class="text-center mt-3 mb-3">Placa de Video (VGA)</h5>
          <p class="text-center">
            <router-link class="btn btn-success" to="/store">Ver mais</router-link>
          </p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"
            ><img src="../assets/img/cpu.png" class="rounded-circle img-fluid border"
          /></a>
          <h2 class="h5 text-center mt-3 mb-3">Processadores</h2>
          <p class="text-center">
            <router-link class="btn btn-success" to="/store">Ver mais</router-link>
          </p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"
            ><img src="../assets/img/phone.png" class="rounded-circle img-fluid border"
          /></a>
          <h2 class="h5 text-center mt-3 mb-3">Smartphones/Iphone</h2>
          <p class="text-center">
            <router-link class="btn btn-success" to="/store">Ver mais</router-link>
          </p>
        </div>
      </div>
    </section>
    <!-- End Categories of The Month -->
    <!-- Start Featured Product -->
    <section class="bg-light">
      <div class="container py-5">
        <div class="row text-center py-3">
          <div class="col-lg-6 m-auto">
            <h1 class="h1">Produtos em Destaque</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
              <a href="/store">
                <img src="../assets/img/5600.jpg" class="card-img-top" alt="..." />
              </a>
              <div class="card-body">
                <ul class="list-unstyled d-flex justify-content-between">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                  </li>
                  <li class="text-muted text-right">R$ 1.119,99</li>
                </ul>
                <a href="/store" class="h2 text-decoration-none text-dark"
                  >Processador AMD Ryzen 5 5600X</a
                >
                <p class="card-text">
                  <strong>Detalhes</strong>: Processamento de 3.7GHz (4.6GHz Max Turbo), Cache 35MB,
                  6 Núcleos, 12 Threads, AM4 - 100-100000065BOX.
                </p>
                <p class="text-muted" id="paragrafoAvaliacao">Avaliações (24)</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
              <a href="/store">
                <img src="../assets/img/3060.jpg" class="card-img-top" alt="..." />
              </a>
              <div class="card-body">
                <ul class="list-unstyled d-flex justify-content-between">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                  <li class="text-muted text-right">R$ 1.999.99</li>
                </ul>
                <a href="/store" class="h2 text-decoration-none text-dark"
                  >Placa de Vídeo RTX 3060 Asus Dual O12G V2 NVIDIA GeForce</a
                >
                <p class="card-text">
                  <strong>Detalhes:</strong> Equipada com uma memória de 12GB GDDR6, Velocidade de
                  Memória de 15 Gbps, e Boost Clock de 1867 MHz em OC e de 1867 MHz no modo Jogo.
                </p>
                <p class="text-muted" id="paragrafoAvaliacao">Avaliações (48)</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
              <a href="/store">
                <img src="../assets/img/monitor.jpg" class="card-img-top" alt="..." />
              </a>
              <div class="card-body">
                <ul class="list-unstyled d-flex justify-content-between">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                  </li>
                  <li class="text-muted text-right">R$ 1.289,99</li>
                </ul>
                <a href="/store" class="h2 text-decoration-none text-dark"
                  >Monitor Gamer Samsung 24' IPS, 75 Hz, Full HD, FreeSync, HDMI - LF24T350FHLMZD</a
                >
                <p class="card-text">
                  Design minimalista concentração máxima. A tela com 3 lados sem borda traz uma
                  estética limpa e moderna para qualquer ambiente de trabalho. A taxa de atualização
                  de 75Hz oferece cenas mais fluidas.
                </p>
                <p class="text-muted" id="paragrafoAvaliacao">Avaliações (74)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Featured Product -->
  </div>
</template>

<script>
export default {
  name: 'IndexView'
}
</script>