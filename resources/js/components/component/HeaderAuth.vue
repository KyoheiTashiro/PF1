<template>
  <div class="header flex">
    <div class="left">
      <p class="title">Circuit Junction</p>
      <div class="search-category flex">
        <p @click="$router.push('/home')">HOME</p>
        <!-- <div @click="showMonth">
          <p>日程から探す▼</p>
          <div v-if="isMonthContentActive" class="absolute bg-gray-300">
            <p>今月</p>
            <p>来月</p>
            <p>それ以降</p>
            <p>上記pタグをリンクにする、条件でフィルターしたページに飛ぶ</p>
          </div>
        </div> -->
        <!-- <div @click="showCourse">
          <p>コースから探す▼</p>
          <div v-if="isCourseContentActive" class="absolute bg-gray-300">
            <p @click="$router.push('/Fsw')">富士スピードウェイ</p>
            <p @click="$router.push('/Tc')">筑波サーキット</p>
            <p @click="$router.push('/Mtg')">ツインリンクもてぎ</p>
          </div>
        </div> -->

        <div @click="showSchedule">
          <p>日程から探す▼</p>
          <div v-if="isOpenSchedule" class="absolute bg-gray-300">
            <p>今月</p>
            <p>来月</p>
            <p>それ以降</p>
          </div>
        </div>
        <div @click="showCourse">
          <p>コースから探す▼</p>
          <div v-if="isOpenCourse" class="absolute bg-gray-300">
            <p @click="$router.push('/Fsw')">富士スピードウェイ</p>
            <p @click="$router.push('/Tc')">筑波サーキット</p>
            <p @click="$router.push('/Mtg')">ツインリンクもてぎ</p>
          </div>
        </div>

        <input placeholder="キーワード" type="text" />
        <button @click="$router.push('/search-results')">検索</button>
      </div>
    </div>
    <div class="right flex">
      <p @click="$router.push('/signup')">新規登録</p>
      <p @click="$router.push('/login')">ログイン</p>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      isOpenSchedule: false,
      isOpenCourse: false,
    };
  },
  created() {
    this.initClickEvent();
  },
  methods: {
    showSchedule: function() {
      this.isOpenSchedule = !this.isOpenSchedule;
    },
    showCourse: function() {
      this.isOpenCourse = !this.isOpenCourse;
    },
    //bodyをクリックしたら関数を動かしますという定義
    initClickEvent: function() {
      document.querySelector('body').addEventListener('click', this.bodyClickCloseEvent);
    },
    //bodyをクリックしたら動く関数⇨日程メニュー：コースメニュー
    bodyClickCloseEvent() {
      this.closeSchedule();
      this.closeCourse();
    },
    //日程メニューが閉じるイベント
    closeSchedule() {
      if (this.isOpenSchedule) {
        this.isOpenSchedule = false;
      }
    },
    //コースメニューが閉じるイベント
    closeCourse() {
      if (this.isOpenCourse) {
        this.isOpenCourse = false;
      }
    },
  },
};
</script>

<style scoped>
.right {
  align-items: center;
}
.right p {
  margin-right: 20px;
  cursor: pointer;
}
.left {
  display: flex;
}
.title {
  font-size: 30px;
  font-weight: bold;
}
.search-category {
  align-items: center;
}
.search-category p {
  margin-left: 30px;
  cursor: pointer;
}
.search-category input {
  margin-left: 30px;
  width: 130px;
  border: solid 1px black;
  border-radius: 4px;
}
.search-category button {
  cursor: pointer;
  margin-left: 3px;
  padding-right: 15px;
  padding-left: 15px;
}
.header {
  margin: 20px;
}
.flex {
  display: flex;
}
</style>
