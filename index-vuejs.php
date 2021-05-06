<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js" integrity="sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ==" crossorigin="anonymous"></script>
  <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <div id="app">
    <header>
      <div class="logo-wrapper">
        <img class="logo" src="img/download.png" alt="logo">
      </div>
      <div class="select-wrapper">
        <label for="select-genre">Seleziona un genere: </label>
        <select class="select-genre" v-model="genreSelected" name="select-genre">
          <option value="">All</option>
          <option v-for="item in genres" :value="item">{{item}}</option>
        </select>
      </div>
    </header>
    <main>
      <div class="container">
        <!-- album  -->
        <div class="cd-container" v-for="item in albums" v-if="item.genre == genreSelected || genreSelected ==''">
          <img :src="item.poster" :alt="item.title">
          <h3>{{item.title}}</h3>
          <span class="white">{{item.author}}</span>
          <span class="white">{{item.year}}</span>
        </div>
      </div>
    </main>
  </div>
  <script src="js/app.js" charset="utf-8"></script>
</body>

</html>