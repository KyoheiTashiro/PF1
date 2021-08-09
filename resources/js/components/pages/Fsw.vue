<template>
  <div>
    <HeaderAuth />
    <p class="title">富士スピードウェイ イベント一覧</p>
    <p class="main">スクレイピング結果表示</p>
    <FooterAuth />
  </div>
</template>

<script>
import HeaderAuth from "../components/HeaderAuth";
import FooterAuth from "../components/FooterAuth";
export default {
  components: {
    HeaderAuth,
    FooterAuth,
  },
};
</script>

<style scoped>


</style>