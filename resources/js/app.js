require('./bootstrap');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import simplebar from 'simplebar-vue';

//mixin
Vue.mixin({ methods: { route } });

Vue.mixin({
    methods:{
        removeCart(id){
            if(id){
                this.$inertia.delete('/cart/'+id,{
                    preServeState:true,
                    preserveScroll:true
                })
            }
        },
        addToCart(id,qty=1) {
            this.$inertia.post('/cart/add', {product: id, quantity: qty}, {
                preserveState: true,
                preserveScroll: true
            })
        }
    }
})

Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
