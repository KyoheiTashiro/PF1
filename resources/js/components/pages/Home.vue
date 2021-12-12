<template>
  <div>
    <!-- <div class="acordion" @click="showContent">
      <div class="acordion-title"><p>アコーディオンメニュー</p></div>
      <div v-if="isContentActive" class="acordion-content">
        <p>vueでアコーディオンメニューを実装しました。</p>
      </div>
    </div> -->
    <div class="top-card">
      <p>以下やりたいこと</p>
      <p>
        横長の画像(本アプリのバナー的な,車,サーキットなど)を4~5枚をスライドショー表示(なんか古い)
      </p>
      <p>サービス機能の簡単な紹介ページ</p>
      <p>ログイン前と後でヘッダー切替</p>
      <p>
        イベントの詳細情報ページ→動的ルートマッチング使う(詳細ページは今回無し)・開催2週間以内の場合は当日の天気予報表示とか
      </p>
    </div>

    <div class="top-ivent">
      <li>
        <p>イベント開催日時が現在時刻から近い順に10件</p>
      </li>
    </div>
    <div class="search-date">
      <p>カレンダーの日付を選んで検索すると、「日程から探す」ページの日程検索結果に飛ぶ</p>
    </div>
    <div class="search-course">
      <p>コースの画像を選んで検索、コース別イベント一覧表示のページに飛ぶ</p>
    </div>
  </div>
</template>

<script>
// export default {
//   // name: 'accordionMenu',
//   data: function() {
//     return {
//       isContentActive: false,
//     };
//   },
//   methods: {
//     showContent: function() {
//       this.isContentActive = !this.isContentActive;
//     },
//   },
// };
</script>

<style scoped>
/* .acordion {
  margin-left: auto;
  margin-right: auto;
  width: 300px;
  cursor: pointer;
}

.acordion-title {
  padding: 5px;
}

.acordion-content {
  border-top: 0.5px solid gray;
} */
</style>
