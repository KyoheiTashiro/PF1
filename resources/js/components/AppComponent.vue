<template>
  <div>
    <HeaderAuth />
    <!-- //pagesに作って、router.jsで読み込んだファイルはrouter-viewの範囲で表示が切り替わる -->
    <router-view></router-view>
    <FooterAuth />
  </div>
</template>

<script>
import HeaderAuth from '@/component/HeaderAuth';
import FooterAuth from '@/component/FooterAuth';
export default {
  components: {
    HeaderAuth,
    FooterAuth,
  },
};
</script>
