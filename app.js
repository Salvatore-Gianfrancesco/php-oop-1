const { createApp } = Vue;

createApp({
    data() {
        return {
            movies: [],
        }
    },
    methods: {
        getMovies(url) {
            axios.get(url)
                .then(response => {
                    console.log(response);
                    this.movies = response.data;
                })
                .catch(err => {
                    console.log(err.message);
                })
        }
    },
    mounted() {
        this.getMovies('./Functions/get_movies.php');
    }
}).mount('#app');