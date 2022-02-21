<template>
  <div>
    <p class="p-6 text-2xl">{{ this.$route.params.month }}月 イベント一覧</p>
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
      events: [], //MonthEventControllerから帰ってきたeventsという名前のデータ
    };
  },
  created() {
    this.test();
  },
  methods: {
    test: function() {
      axios
        .get('/api/event/month/' + this.$route.params.month) 
        .then(res => {
          console.log(res);
          this.events = res.data.events; //MonthEventControllerから帰ってきたeventsという名前のデータ
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
