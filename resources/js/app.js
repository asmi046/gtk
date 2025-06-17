import './bootstrap';
import './burger';
import './swiper';

import fslightbox from 'fslightbox'

import {createApp} from 'vue/dist/vue.esm-bundler'
import CookiesWarning from "./components/CookiesWarning.vue"


    const modal_app = createApp({
        components:{
            CookiesWarning,
        },
        setup() {}
    })

modal_app.mount("#modal_app");
