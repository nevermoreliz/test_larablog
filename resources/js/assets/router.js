window.Vue = require('vue').default;
import VueRouter from 'vue-router';
import PostList from '../components/PostListComponent.vue';
import PostDetail from '../components/PostDetailComponent.vue';
import PostCategory from '../components/PostCategoryComponent.vue';
// componentes de seccion de contacto
import Contact from '../components/ContactComponent.vue';
// lista de categorias
import CategoryListDefault from '../components/CategoryListDefaultComponent.vue';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            component: PostList
        },
        {
            path: '/detail/:id',
            name: 'detail',
            component: PostDetail
        },
        {
            path: '/post-category/:category_id',
            name: 'post-category',
            component: PostCategory
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
        {
            path: '/categories',
            name: 'list-category',
            component: CategoryListDefault
        },
    ]
});
