import { getLoggedinUser } from './patials/patials';

const user = getLoggedinUser();

export default {
    state: {
        currentUser: user,
        sellersData: {},
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
        reg_error: null,
        registeredUser: null,
    },
    getters: {
        sellersData(state) {
            return state.sellersData;
        },
        currentUserRole(state) {
            return state.currentUserRole;
        },
        isLoading(state) {
            return state.loading;
        },
        isLoggedin(state) {
            return state.isLoggedin;
        },
        currentUser(state) {
            return state.currentUser;
        },
        authError(state) {
            return state.auth_error;
        },
        regError(state) {
            return state.reg_error;
        },
        registeredUser(state) {
            return state.registeredUser;
        },
        getTokenData(state) {
            return state.tokenData;
        },
        getsellersData(state) {
            return state.sellersData;
        }
    },
    mutations: {
        login(state) {
            state.loading = true;
            state.auth_error = null;
        },
        loginSuccess(state, payload) {
            state.auth_error = null;
            state.isLoggedin = true;
            state.loading = false;
            state.currentUser = Object.assign({}, payload.user, { token: payload.access_token });

            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload) {
            console.log(payload);

            state.loading = false;
            state.auth_error = payload.error;
        },
        logout(state) {
            localStorage.removeItem("user");
            state.isLoggedin = false;
            state.currentUser = null;
            state.sellersData = null;
        },
        registerSuccess(state, payload) {
            state.reg_error = null;
            state.registeredUser = payload.user;
        },
        registerFailed(state, payload) {
            state.reg_error = payload.error;
        },
        storeToken(state, payload) {
            console.log(payload);

            state.tokenData = payload.access_token
        },
        storeSellersData(state, payload) {
            console.log(payload)
            state.sellersData = payload.data
        }
    },
    actions: {
        login(context) {
            context.commit("login");
        },
        // storeSellersData(context) {
        //     context.commit("storeSellersData");
        // }
    }
};