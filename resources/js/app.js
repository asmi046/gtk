import './bootstrap';
import './burger';
import './swiper';

import fslightbox from 'fslightbox'

import {createApp} from 'vue/dist/vue.esm-bundler'
import CookiesWarning from "./components/CookiesWarning.vue"
import ModalWindow from "./components/ModalWindow.vue"

import { VMaskDirective } from 'v-slim-mask'


    import axios from 'axios'
    import VueAxios from 'vue-axios'

    const modal_app = createApp({
        components:{
            CookiesWarning,
            ModalWindow
        },
        setup() {}
    })

modal_app.use(VueAxios, axios)
modal_app.directive('mask', VMaskDirective)
modal_app.mount("#modal_app");
