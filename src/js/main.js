const app = new Vue({
  el: ".app",
  data:{
    cds:[],
    actualGenre: "all"
  },
  created(){
    axios.get('<?php include "partials/database.php" ?>')
    .then( result => {
      this.cds =  result;
      console.log(this.cds);
      return result;
    })
    .catch( error => {
      console.log(error)
      this.errored = true
    } );
  },
  methods:{
    filterByGenre(actualGenre){
      axios.get('<?php include "partials/database.php" ?>')
      .then( result => {
        if ( actualGenre === "all" ) {
            this.cds =  result.data.response;
            return result.data.response;
        }
        else {
            this.cds = result.data.response.filter( (cd) => {
              return cd.genre.toLowerCase() === actualGenre.toLowerCase();
            })
          }
      })
      .catch( error => {
        console.log(error)
        this.errored = true
      } )
    }
  }
});
