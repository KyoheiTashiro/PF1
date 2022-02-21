<template>
  <div>
    <p class="p-6 text-2xl">全てのイベント</p>
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
      events: [], //EventControllerから帰ってきたeventsという名前のデータ
    };
  },
  created() {
    this.test();
  },
  methods: {
    test: function() {
      axios
        .get('api/event')
        .then(res => {
          //ajax/eventというURLでgetする
          console.log(res);
          this.events = res.data.events; //EventControllerから帰ってきたeventsという名前のデータ
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
