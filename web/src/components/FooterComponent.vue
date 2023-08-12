<template>
  <div>
    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 pt-5">
            <h2 class="h2 text-success border-bottom pb-3 border-light logo">
              <i class="bi bi-pc-display-horizontal" style="margin-right: 0.5rem"></i>PC Guide
            </h2>
            <ul class="list-unstyled text-light footer-link-list">
              <li>
                <i class="fas fa-map-marker-alt fa-fw"></i>
                123 Consectetur at ligula 10660
              </li>
              <li>
                <i class="fa fa-phone fa-fw"></i>
                <a class="text-decoration-none" href="tel:61-3333-3333"> 61-3333-3333</a>
              </li>
              <li>
                <i class="fa fa-envelope fa-fw"></i>
                <a class="text-decoration-none" href="mailto:pcguide@contato.com">
                  pcguide@contato.com</a
                >
              </li>
            </ul>
          </div>

          <div class="col-md-4 pt-5">
            <h2 class="h2 text-light border-bottom pb-3 border-light">Categorias</h2>
            <ul class="list-unstyled text-light footer-link-list">
              <li><router-link to="/" class="text-decoration-none">Hardware</router-link></li>
              <li><router-link to="/" class="text-decoration-none">Softwares</router-link></li>
              <li><router-link to="/" class="text-decoration-none">Perifericos</router-link></li>
              <li><router-link to="/" class="text-decoration-none">Monitor</router-link></li>
              <li><router-link to="/" class="text-decoration-none">Gabinetes</router-link></li>
              <li><router-link to="/" class="text-decoration-none">Consoles</router-link></li>
              <li>
                <router-link to="/" class="text-decoration-none">Smartphones/Iphone</router-link>
              </li>
            </ul>
          </div>

          <div class="col-md-4 pt-5">
            <h2 class="h2 text-light border-bottom pb-3 border-light">Links</h2>
            <ul class="list-unstyled text-light footer-link-list">
              <li><router-link to="/" class="text-decoration-none">Início</router-link></li>
              <li><router-link to="/store" class="text-decoration-none">Loja</router-link></li>
              <li><router-link to="/blog" class="text-decoration-none">Blog</router-link></li>
              <li><router-link to="/contact" class="text-decoration-none">Contato</router-link></li>
              <li><router-link to="/about" class="text-decoration-none">Sobre Nós</router-link></li>
            </ul>
          </div>
        </div>

        <div class="row text-light mb-4">
          <div class="col-12 mb-3">
            <div class="w-100 my-3 border-top border-light"></div>
          </div>
          <div class="col-auto me-auto">
            <ul class="list-inline text-left footer-icons">
              <li class="list-inline-item border border-light rounded-circle text-center">
                <a
                  class="text-light text-decoration-none"
                  target="_blank"
                  href="http://facebook.com/"
                  ><i class="fab fa-facebook-f fa-lg fa-fw"></i
                ></a>
              </li>
              <li class="list-inline-item border border-light rounded-circle text-center">
                <a
                  class="text-light text-decoration-none"
                  target="_blank"
                  href="https://www.instagram.com/"
                  ><i class="fab fa-instagram fa-lg fa-fw"></i
                ></a>
              </li>
              <li class="list-inline-item border border-light rounded-circle text-center">
                <a
                  class="text-light text-decoration-none"
                  target="_blank"
                  href="https://twitter.com/"
                  ><i class="fab fa-twitter fa-lg fa-fw"></i
                ></a>
              </li>
              <li class="list-inline-item border border-light rounded-circle text-center">
                <a
                  class="text-light text-decoration-none"
                  target="_blank"
                  href="https://www.linkedin.com/"
                  ><i class="fab fa-linkedin fa-lg fa-fw"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="col-auto">
            <div class="input-group mb-2">
              <input
                type="text"
                class="form-control bg-dark border-light"
                id="subscribeEmail"
                placeholder="Endereço de E-mail"
              />
              <div class="input-group-text btn-success text-light">Inscrever-se</div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-100 bg-black py-3">
        <div class="container">
          <div class="row pt-2">
            <div class="col-12">
              <p class="text-left text-light">
                Copyright &copy; 2023 - PC Guide | Designed by
                <a rel="sponsored" href="https://lrcdev.com.br/" target="_blank">LRC DEV</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  </div>
</template>

<script>
export default {
  name: 'FooterComponent'
}
</script>