Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        albums: [],
        selectedGenre: ''
    },
    methods: {
        getAlbumApi: function() {
            // Api call
            axios.get('http://localhost:8888/php-ajax-dischi/bonus/server.php',
            {
                params: {
                    genre: this.selectedGenre
                }
            })
            .then((response) => {
                this.albums = response.data;
            });
        }
    },
    created: function() {
        this.getalbumApi();
    }
});