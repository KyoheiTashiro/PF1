<template>
  <div>
    <p class="p-6 xl:text-2xl flex justify-center">現在公開中の全てのイベント</p>
    <EventLists :events="events" />
    <ul class="pagination">
      <li
        class="inactive"
        :class="current_page == 1 ? 'disabled' : ''"
        @click="changePage(current_page - 1)"
      >
        «
      </li>
      <li
        v-for="page in frontPageRange"
        :key="page"
        @click="changePage(page)"
        :class="isCurrent(page) ? 'active' : 'inactive'"
      >
        {{ page }}
      </li>
      <li v-show="front_dot" class="inactive disabled">...</li>
      <li
        v-for="page in middlePageRange"
        :key="page"
        @click="changePage(page)"
        :class="isCurrent(page) ? 'active' : 'inactive'"
      >
        {{ page }}
      </li>
      <li v-show="end_dot" class="inactive disabled">...</li>
      <li
        v-for="page in endPageRange"
        :key="page"
        @click="changePage(page)"
        :class="isCurrent(page) ? 'active' : 'inactive'"
      >
        {{ page }}
      </li>
      <li
        class="inactive"
        :class="current_page >= last_page ? 'disabled' : ''"
        @click="changePage(current_page + 1)"
      >
        »
      </li>
    </ul>
    <!-- <ul class="pagination">
      <li
        v-for="page in frontPageRange"
        :key="page"
        @click="changePage(page)"
        :class="isCurrent(page) ? 'active' : 'inactive'"
      >
        {{ page }}
      </li>
      <li
        v-for="page in middlePageRange"
        :key="page"
        @click="changePage(page)"
        :class="isCurrent(page) ? 'active' : 'inactive'"
      >
        {{ page }}
      </li>
      <li
        v-for="page in endPageRange"
        :key="page"
        @click="changePage(page)"
        :class="isCurrent(page) ? 'active' : 'inactive'"
      >
        {{ page }}
      </li>
    </ul> -->

    <!-- {{events}} -->
    <!-- {{ frontPageRange }}
    {{ middlePageRange }}
    {{ endPageRange }} -->
  </div>
</template>

<script>
import EventLists from '../component/EventLists.vue';
import moment from 'moment';
export default {
  components: { EventLists },
  data() {
    return {
      // events: [],
      events: {},
      // users: [],
      current_page: 1,
      last_page: '',
      range: 5,
      front_dot: false,
      end_dot: false,
    };
  },
  created() {
    this.getEvent();
  },
  methods: {
    getEvent: function() {
      axios
        .get(`api/event?page=${this.current_page}`)
        // .get('api/event/'+this.page)
        .then(res => {
          console.log(res);
          this.events = res.data.events;
          this.current_page = this.events.current_page;
          this.last_page = this.events.last_page;
        })
        .catch(err => {
          console.log(err);
        });
    },

    calRange(start, end) {
      const range = [];
      for (let i = start; i <= end; i++) {
        range.push(i);
      }
      return range;
    },
    changePage(page) {
      if (page > 0 && page <= this.last_page) {
        this.current_page = page;
        this.getEvent();
        console.log('a');
      }
    },
    isCurrent(page) {
      return page === this.current_page;
    },
    moment(date, format) {
      return moment(date).format(format);
    },
  },
  computed: {
    frontPageRange() {
      if (!this.sizeCheck) {
        this.front_dot = false;
        this.end_dot = false;
        return this.calRange(1, this.last_page);
      }
      return this.calRange(1, 2);
    },
    middlePageRange() {
      if (!this.sizeCheck) return [];
      let start = '';
      let end = '';
      if (this.current_page <= this.range) {
        start = 3;
        end = this.range + 2;
        this.front_dot = false;
        this.end_dot = true;
      } else if (this.current_page > this.last_page - this.range) {
        start = this.last_page - this.range - 1;
        end = this.last_page - 2;
        this.front_dot = true;
        this.end_dot = false;
      } else {
        start = this.current_page - Math.floor(this.range / 2);
        end = this.current_page + Math.floor(this.range / 2);
        this.front_dot = true;
        this.end_dot = true;
      }
      return this.calRange(start, end);
    },

    // middlePageRange() {
    //   let start = '';
    //   let end = '';
    //   if (this.current_page <= this.range) {
    //     start = 3;
    //     end = this.range + 2;
    //   } else if (this.current_page > this.last_page - this.range) {
    //     start = this.last_page - this.range - 1;
    //     end = this.last_page - 2;
    //   } else {
    //     start = this.current_page - Math.floor(this.range / 2);
    //     end = this.current_page + Math.floor(this.range / 2);
    //   }
    //   return this.calRange(start, end);
    // },
    endPageRange() {
      if (!this.sizeCheck) return [];
      return this.calRange(this.last_page - 1, this.last_page);
    },
    sizeCheck() {
      if (this.last_page <= this.range + 3) {
        return false;
      }
      return true;
    },
  },
};
</script>

<style scoped>
.pagination {
  display: flex;
  list-style-type: none;
  margin: auto;
  width: 350px;
  cursor: pointer;
}
.pagination li {
  border: 1px solid #ddd;
  padding: 6px 12px;
  text-align: center;
}
.active {
  background-color: gray;
  color: white;
}
.inactive {
  color: gray;
}
.disabled {
  cursor: not-allowed;
}
@media screen and (max-width: 391px) {
  .pagination {
    display: flex;
    list-style-type: none;
    margin: auto;
    padding-top: 50px;
    width: 300px;
    cursor: pointer;
  }
}
</style>
