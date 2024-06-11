const app = Vue.createApp({

    data() {

        return {

            TitleTabs: "Estadisticas"

        }

    },

    computed: {

    },

    mounted() {

        this.ClosePreloader();

    },

    methods: {

        // funciones basicas. 

        GetTitles(title) {
            
            this.TitleTabs = title

        },

        ClosePreloader() {
            const preloader = this.$refs.preloader;
            
            if (preloader) {
              preloader.style.opacity = '0';
              preloader.style.transition = 'opacity 0.5s ease-out';
      
              setTimeout(() => {
                this.loading = false;
              }, 500); // 500ms para sincronizar con la transición de opacidad
            } else {
              this.loading = false;
            }
          },
    
    },


});
app.mount('#app');