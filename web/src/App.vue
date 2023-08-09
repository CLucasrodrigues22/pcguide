<template>
  <div>
    <HeaderComponent />
    <NavBarComponent />
    <router-view />
    <FooterComponent />
  </div>
</template>
<script>
import HeaderComponent from './components/HeaderComponent.vue'
import NavBarComponent from './components/NavBarComponent.vue'
import FooterComponent from './components/Footer.vue'
export default {
  components: {
    HeaderComponent,
    NavBarComponent,
    FooterComponent
  }
}
</script>