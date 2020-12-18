<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>DISCHI</title>
    <!DOCTYPE html>
      </head>
    <body>
      <div class="app">
        <div class="selectContainer">
          <span>Filter by genre:</span>
          <select v-model="actualGenre" @change="filterByGenre(actualGenre)">
            <option value="all">all</option>
            <option value="pop">pop</option>
            <option value="rock">rock</option>
            <option value="jazz">jazz</option>
            <option value="metal">metal</option>
          </select>
        </div>
        <ul>
          <li v-for="cd in cds" >
            <img :src="cd" :alt="cd.title">
            <h4>{{ cd }}</h4>
            <h5>{{ cd }}</h5>
            <h6>{{ cd }}</h6>
            <h6>{{ cd  }}</h6>
          </li>
        </ul>
      </div>

      <!-- AXIOS -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
      <!-- production version, optimized for size and speed -->
      <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
      <!-- JAVASCRIPT -->
      <script type="text/javascript" src="src/js/main.js"></script>
    </body>
  </html>
