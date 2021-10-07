<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
    <body>
        <div id="app">
            <table></table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
        <script>

            new Vue({
                el: '#app'
                mounted() {
                  var url = '/ajax/event';
                  axios.get(url).then(function(response){
                    var events = response.data;
                    console.log(events);
                  });
                }
            });

        </script>
    </body>
</html>