<template>
  <div>
    <p v-if="events == 0" class="px-4 text-lg">該当するイベントは見つかりませんでした</p>
    <table v-else class="table-auto">
      <thead class="py-3 text-lg border-b-2  border-blue-700">
        <tr>
          <th >開催日</th>
          <th >イベント名</th>
          <th >開催地</th>
          <th >備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="event in events" :key="event.id">
          <td class="px-4 py-3 text-lg">{{ moment(event.date, 'YYYY年M月D日') }}</td>
          <td class="px-4 py-3 text-lg">{{ event.name }}</td>
          <td class="px-4 py-3 text-lg">{{ event.course_location.location }}</td>
          <td class="px-6 py-3 text-lg">
            <a :href="event.source_url" target="_blank" rel="noopener">公式サイト</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import moment from 'moment';
export default {
  props: {
    events: Array,
  },
  methods: {
    moment(date, format) {
      return moment(date).format(format);
    },
  },
};
</script>

<style scoped></style>
