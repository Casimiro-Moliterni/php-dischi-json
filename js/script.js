const { createApp } = Vue;

createApp({
    data() {
        return {
          ciao:'test'
        };
    },
    methods: {
        
    },
    mounted() {
        console.log('test');
    }
}).mount('#app');