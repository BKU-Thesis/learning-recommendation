const axios = require('axios');


exports.homeRoutes = (req, res) => {
    // Make a get request to /api/users
    axios.get('http://localhost:3000/api/users')
        .then(function (response) {
            res.render('user/index', { users: response.data });
        })
        .catch(err => {
            res.send(err);
        })
}

exports.add_user = (req, res) => {
    res.render('user/add_user');
}

exports.update_user = (req, res) => {
    axios.get('http://localhost:3000/api/users', { params: { id: req.query.id } })
        .then(function (userdata) {
            res.render("user/update_user", { user: userdata.data })
        })
        .catch(err => {
            res.send(err);
        })
}


exports.collect_data = (req, res) => {
    res.render("data_collection/data/home_input_infor_nextpage")
}


exports.index = (req, res) => {
    res.render("data_collection/data/home_input_infor")
}