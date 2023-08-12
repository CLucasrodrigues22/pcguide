<template>
  <div>
    <HeaderComponent />
    <router-view />
    <SearchComponent />
    <FooterComponent />
  </div>
</template>
<script>
import HeaderComponent from './components/HeaderComponent.vue'
import SearchComponent from './components/SearchComponent.vue'
import FooterComponent from './components/FooterComponent.vue'
export default {
  components: {
    HeaderComponent,
    FooterComponent,
    SearchComponent
  }
}
</script>