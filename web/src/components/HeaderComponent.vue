<template>
  <div>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
      <div class="container d-flex justify-content-between align-items-center">
        <router-link class="navbar-brand text-success logo h1 align-self-center" to="/">
          <i class="bi bi-pc-display-horizontal" style="margin-right: 0.5rem"></i>PC Guide
        </router-link>  

        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#templatemo_main_nav"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
          id="templatemo_main_nav"
        >
          <div class="flex-fill">
            <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
              <li class="nav-item">
                <router-link to="/" class="nav-link">Início</router-link>
              </li>
              <li class="nav-item">
                <router-link to="/store" class="nav-link">Loja</router-link>
              </li>
              <li class="nav-item">
                <router-link to="/blog" class="nav-link">Blog</router-link>
              </li>
              <li class="nav-item">
                <router-link to="/contact" class="nav-link">Contato</router-link>
              </li>
              <li class="nav-item">
                <router-link to="/about" class="nav-link">Sobre Nós</router-link>
              </li>
            </ul>
          </div>
          <div class="navbar align-self-center d-flex">
            <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  id="inputMobileSearch"
                  placeholder="Search ..."
                />
                <div class="input-group-text">
                  <i class="fa fa-fw fa-search"></i>
                </div>
              </div>
            </div>
            <a
              class="nav-icon d-none d-lg-inline"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#templatemo_search"
            >
              <i class="fa fa-fw fa-search text-dark mr-2"></i>
            </a>
            <a class="nav-icon position-relative text-decoration-none" href="#">
              <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
              <span
                class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"
                >2</span
              >
            </a>
            <a class="nav-icon position-relative text-decoration-none" href="#">
              <i class="fa fa-fw fa-user text-dark mr-3"></i>
              <span
                class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"
              ></span>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Close Header -->
  </div>
</template>

<script>
export default {
  name: 'HeaderComponent'
}
</script>