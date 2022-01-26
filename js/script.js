Vue.config.devtools = true;

const App = new Vue({
    el: '#root',
    data: {
        discs: [],
        filteredDiscs: [],
        selectGenre: ''
    },
    methods: {
        getDiscsApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((response) => {
                this.discs = response.data;
            });
        }
        // getDiscsFiltered: function() {
        //     axios.get('http://localhost:8888/php-ajax-dischi/server.php', {
        //         params: {
        //             genre = this.selectGenre
        //         }
        //     })
        //     .then((response) => {
        //         this.filteredDiscs = response.data;
        //     })
        // }
    },
    created: function() {
        this.getDiscsApi();
    }
});