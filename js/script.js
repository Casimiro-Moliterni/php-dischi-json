const { createApp } = Vue;

createApp({
    data() {
        return {
          music:[]
        };
    },
    methods: {
        generateToMusicApi(){
          axios.get('../files/dischi.php')
          .then((response)=>{
            this.music=response.data;
          })
        }
    },
    mounted() {
        this.generateToMusicApi()
    }
}).mount('#app');