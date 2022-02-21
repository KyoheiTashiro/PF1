<template>
  <div>
    <p class="p-6 text-2xl">{{ this.$route.params.course_name }} イベント一覧</p>
    <EventLists :events="events" />
  </div>
</template>

<script>
import EventLists from '../component/EventLists.vue';
import moment from 'moment';
export default {
  components: { EventLists },
  data() {
    return {
      events: [], //FswControllerから帰ってきたeventsという名前のデータ
    };
  },
  created() {
    this.test();
  },
  beforeRouteUpdate(to, from, next) {
    // `this` を使用
    this.name = to.params.name;
    next();
  },
  methods: {
    test: function() {
      axios
        .get('/api/event/course/' + this.$route.params.course_name)
        .then(res => {
          console.log(res);
          this.events = res.data.events; //FswControllerから帰ってきたeventsという名前のデータ
        })
        .catch(err => {
          console.log(err);
        });
    },
    moment(date, format) {
      return moment(date).format(format);
    },
  },
};
</script>

<style scoped></style>
