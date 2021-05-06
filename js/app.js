const app = new Vue({
  el: '#app',
  data: {
    albums: [],
    genres: [],
    genreSelected: ''
  },
  mounted: function () {
    axios.get("http://localhost/php-ajax-dischi/api.php")
      .then((risposta) => {
        const albumsOrdered = risposta.data.sort(function (a, b) {
          return a.year - b.year;
        });
        this.albums = albumsOrdered;
        this.albums.forEach((item, i) => {
          if (this.genres.includes(item.genre) == false) {
            this.genres.push(item.genre);
          }
        });
      });
  },
});
