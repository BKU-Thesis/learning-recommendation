var Userdb = require('../model/user');
var Author = require('../../models/author')
const axios = require('axios');


// Display Author create form on GET.
exports.user_create_get = function (req, res, next) {
    res.render('data_collection/data/home_input_infor', { title: 'Create User' });
};

exports.user_create_get_2 = function (req, res, next) {
    res.render('data_collection/data/home_input_infor_nextpage', { title: 'Create User 2' });
};

// Handle Author create on POST.
exports.user_create_post = [
    (req, res, next) => {
        console.log('Author Create Post');
        // Create an Author object with escaped and trimmed data.
        var author = new Author(
            {
                teacher: req.body.teacher,
                faculty: req.body.faculty,
                subject: req.body.subject,
                classroom_section: req.body.classroom_section,
                semester: req.body.semester,
                school_year: req.body.school_year
            });

        // save user in the database
        author
            .save(author)
            .then(data => {
                res.send(req.body);
            })
            .catch(err => {
                console.log(err);
                res.status(500).send({
                    message: err.message || "Some error occurred while creating a create operation"
                });
            });
        console.log(author);
    }
];

exports.get_users = (req, res) => {
    // Make a get request to /api/authors
    axios.get('http://localhost:3000/api/users')
        .then(function (response) {
            res.render('data_collection/index', { users: response.data });
        })
        .catch(err => {
            res.send(err);
        })
}


// retrieve and return all users/ retrive and return a single user
exports.find_users = (req, res) => {

    if (req.query.id) {
        const id = req.query.id;

        Author.findById(id)
            .then(data => {
                if (!data) {
                    res.status(404).send({ message: "Not found user with id " + id })
                } else {
                    res.send(data)
                }
            })
            .catch(err => {
                res.status(500).send({ message: "Erro retrieving user with id " + id })
            })

    } else {
        Author.find()
            .then(user => {
                res.send(user)
            })
            .catch(err => {
                res.status(500).send({ message: err.message || "Error Occurred while retriving user information" })
            })
    }
}

// Update a new idetified user by user id
exports.update_user = (req, res) => {
    if (!req.body) {
        return res
            .status(400)
            .send({ message: "Data to update can not be empty" })
    }

    const id = req.params.id;
    console.log('Update author id = ' + id)
    Author.findByIdAndUpdate(id, req.body, { useFindAndModify: false })
        .then(data => {
            if (!data) {
                res.status(404).send({ message: `Cannot Update user with ${id}. Maybe user not found!` })
            } else {
                res.send(data)
            }
        })
        .catch(err => {
            res.status(500).send({ message: "Error Update user information" })
        })
}

// Delete a user with specified user id in the request
exports.delete_user = (req, res) => {
    const id = req.params.id;

    Author.findByIdAndDelete(id)
        .then(data => {
            if (!data) {
                res.status(404).send({ message: `Cannot Delete with id ${id}. Maybe id is wrong` })
            } else {
                res.send({
                    message: "User was deleted successfully!"
                })
            }
        })
        .catch(err => {
            res.status(500).send({
                message: "Could not delete User with id=" + id
            });
        });
}