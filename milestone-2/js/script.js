Vue.config.devtools = true;

const app = new Vue ({
    el:'#root',
    data: {
        albums: []
    },
    methods: {
        getAlbums: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/server.php')
            .then((response) => {
                console.log(response);
                this.albums = response.data;
            });
        }
    },
    created: function() {
        this.getAlbums();
    }
});