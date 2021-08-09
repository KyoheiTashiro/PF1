<template>
 <div>
   <HeaderAuth />
   <p>日程から探す</p>
   <div class="search-calendar">
     <p>カレンダーの日付を選んで検索</p>
     <p>日付を範囲指定して検索</p>
     <p>検索結果を下部に表示</p>
   </div>
   <FooterAuth />
 </div>
</template>

<script>
import HeaderAuth from "../components/HeaderAuth";
import FooterAuth from "../components/FooterAuth";
export default {
 components: {
   HeaderAuth,
   FooterAuth
 }
};

</script>

<style scoped>

</style>