new Vue({
	el: '#app',
	data: {
		Albums: [],
	},
	created() {
		axios.get('http://localhost:8888/php-ajax-dischi/api.php')
			.then(response => this.Albums = response.data);
            
	},
})