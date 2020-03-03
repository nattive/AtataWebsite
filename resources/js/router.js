import VueRouter from 'vue-router'
// Pages
import SellerNav from './components/SellerNav'
import Register from './components/Register'
import Login from './components/Login'
import Logout from './components/logout'
import index from './components/index'
import RegisterSupplier from './components/RegisterSupplier'
import SupplierDashboard from './components/SupplierDashboard'
import productUploadWizard from './components/productUploadWizard'
import productsList from './components/productsList'
// import Dashboard from './pages/user/Dashboard'
// import AdminDashboard from './pages/admin/Dashboard'
// Routes
const routes = [{
        path: '/logout',
        name: 'Logout',
        component: Logout,
    },
    {
        path: '/login',
        name: 'Login',
        component: Login,
        meta: {
            // auth: { roles: 'user', redirect: { name: 'login' }, forbiddenRedirect: '/403' }
        }
    },
    {
        path: '/index',
        component: index,
        children: [{
                    path: '/dashboard',
                    components: {
                        default: 'SupplierDashboard',
                        main: SupplierDashboard
                    },
                },

                {
                    path: '/Seller/product/create',
                    name: 'productUploadWizard',
                    components: {
                        default: index,
                        main: productUploadWizard
                    },
                    meta: {
                        // auth: { roles: 2, redirect: { name: 'login' }, forbiddenRedirect: '/403' }
                    }
                },
                {
                    path: '/Seller/product/list',
                    name: 'productsList',
                    component: productsList,
                    meta: {
                        // auth: { roles: 2, redirect: { name: 'login' }, forbiddenRedirect: '/403' }
                    }
                },
            ]
            // meta: {
            //     auth: { roles: 'user', redirect: { name: 'seller' }, forbiddenRedirect: '/403' }
            // }
    },

    {
        path: '/Register',
        name: 'Register',
        component: Register,
        meta: {
            // auth: { roles: 2, redirect: { name: 'login' }, forbiddenRedirect: '/403' }
        }
    },
    {
        path: '/Seller/register',
        name: 'RegisterSupplier',
        component: RegisterSupplier,
        meta: {
            // auth: { roles: 'user', redirect: { name: 'Register' }, forbiddenRedirect: '/403' }
        }
    },

]
const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
})
export default router