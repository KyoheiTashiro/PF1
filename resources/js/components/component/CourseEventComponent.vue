<template>
  <div>
    <!-- <p class="p-6 text-2xl">{{ this.$route.params.course_name }} イベント一覧</p> -->
    <p v-if="events[0]" class="p-6 text-2xl">{{ events[0].course_location.name }} 開催イベント一覧</p>
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
