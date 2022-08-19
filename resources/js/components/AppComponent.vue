<template>
  <div>
    <router-view :key="$route.fullPath"></router-view>
  </div>
</template>
<!-- //pagesに作って、router.jsで読み込んだファイルはrouter-viewの範囲で表示が切り替わる -->

<script>
import { mapMutations } from 'vuex';
export default {
  props: {
    auth: String,
  },
  created() {
    if (this.auth) {
      this.stateLogin();
      // this.stateLoginId(this.auth);
    }
  },
  methods: {
    ...mapMutations('util', ['stateLogin']),
    // ...mapMutations('util', ['stateLoginId']),
  },
};
</script>
