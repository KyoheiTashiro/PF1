<template>
  <div>
    <HeaderAuthLogin />
    <p class="title">マイリスト イベント一覧</p>
    <p class="main">保存イベント一覧をCRUD処理できる</p>
    <FooterAuth />
  </div>
</template>

<script>
import HeaderAuthLogin from "../components/HeaderAuthLogin";
import FooterAuth from "../components/FooterAuth";
export default {
  components: {
    HeaderAuthLogin,
    FooterAuth,
  },
};
</script>

<style scoped>


</style>