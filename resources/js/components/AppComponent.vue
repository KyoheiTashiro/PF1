<template>
    <div>
  <HeaderAuth/>
<!-- //pagesに作って、router.jsで読み込んだファイルはこのrouter-viewの範囲で表示が切り替わる -->
  <router-view></router-view>
  <FooterAuth/>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

