const express = require('express');
const route = express.Router()

const services = require('../services/render');
const controller = require('../controller/controller');

/**
 *  @description Root Route
 *  @method GET /
 */
route.get('/', services.homeRoutes);

/**
 *  @description add users
 *  @method GET /add-user
 */
route.get('/add-user', services.add_user)

/**
 *  @description for update user
 *  @method GET /update-user
 */
route.get('/update-user', services.update_user);


route.get('/author/create', controller.author_create_get);
route.post('/author/create', controller.author_create_post);
route.get('/authors', controller.get_authors);
route.get('/author/update_author', services.update_author);


// API
route.get('/api/authors', controller.find_authors);
route.put('/api/authors/:id', controller.update_author);
route.delete('/api/authors/:id', controller.delete_author);


// API
route.post('/api/users', controller.create);
route.get('/api/users', controller.find);
route.put('/api/users/:id', controller.update);
route.delete('/api/users/:id', controller.delete);

module.exports = route