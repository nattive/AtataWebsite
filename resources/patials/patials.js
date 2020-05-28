export function registerUser(credentials) {
    return new Promise((res, rej) => {
        axios.post('/auth/register', credentials)
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej('An error occured.. try again later.')
            })
    })
}

export function login(credentials) {
    return new Promise((res, rej) => {
        axios.post('/auth/login', credentials)
            .then(response => {
                res(response.data);
            })
            .catch(err => {
                rej('Wrong Email/Password combination.')
            })
    })
}

export function getLoggedinUser() {
    const userStr = localStorage.getItem('user');

    if (!userStr) {
        return null
    }

    return JSON.parse(userStr);
}

export function logoutUser() {
    return localStorage.removeItem('user');
}

export function seller() {
    axios.get('/auth/login', credentials)
        .then(response => {
            res(response.data);
        })
        .catch(err => {
            rej('Wrong Email/Password combination.')
        })
}
export function sellersProfile() {
    const userStr = localStorage.getItem('user');

    axios.get('/seller/profile/' + userStr.id).then(response => {

        localStorage.setItem("storeSellersData", response.data).then(
            res => {
                return response
            }
        )
    });
}