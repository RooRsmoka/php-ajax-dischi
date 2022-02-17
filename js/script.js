new Vue({
    el: "#app",
    data: {
        discsList: []
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi/api/discs.php").then((response) => {
            this.discsList = response.data;
        });
    }
})