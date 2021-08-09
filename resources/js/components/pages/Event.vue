<template>
 <div>
   <HeaderAuth />
   <div class="event-info">
     <p>走行会・イベント情報の詳細を表示</p>
     <p>イベント名・日程・コース・費用・URL</p>
     <p>開催2週間以内なら天気予報表示する機能とか</p>
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