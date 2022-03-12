const axios = require('axios');


exports.homeRoutes = (req, res) => {
    // Make a get request to /api/users
    axios.get('http://localhost:3000/api/users')
        .then(function(response){
            res.render('user/index', { users : response.data });
        })
        .catch(err =>{
            res.send(err);
        })
}

exports.add_user = (req, res) =>{
    res.render('user/add_user');
}

exports.update_user = (req, res) =>{
    axios.get('http://localhost:3000/api/users', { params : { id : req.query.id }})
        .then(function(userdata){
            res.render("user/update_user", { user : userdata.data})
        })
        .catch(err =>{
            res.send(err);
        })
}

exports.update_author = (req, res) =>{
    axios.get('http://localhost:3000/api/authors', { params : { id : req.query.id }})
        .then(function(userdata){
            console.log(userdata)
            res.render("data_collection/update_author", { author : userdata.data})
        })
        .catch(err =>{
            res.send(err);
        })
}