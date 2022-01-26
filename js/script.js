Vue.config.devtools = true;

const App = new Vue({
    el: '#root',
    data: {
        discs: []
    },
    methods: {
        getDiscsApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((response) => {
                this.discs = response.data;
            });
        }
    },
    created: function() {
        this.getDiscsApi();
    }
});