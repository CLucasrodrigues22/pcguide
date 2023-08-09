<template>
  <div>
    <ul>
      <li>
        <router-link to="/">Início</router-link>
      </li>
      <li>
        <router-link to="/sobre">Sobre Nós</router-link>
      </li>
      <li>
        <router-link to="/loja">Loja</router-link>
      </li>
      <li>
        <router-link to="/blog">Blog</router-link>
      </li>
      <li>
        <router-link to="/contato">Contato</router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'NavBarComponent'
}
</script>