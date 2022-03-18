const express = require('express');
const route = express.Router()

const services = require('../services/render');
const controller = require('../controller/controller');


route.get('/user/create', controller.user_create_get);
route.post('/user/create', controller.user_create_post);
route.get('/user/create2', services.collect_data);
route.get('/', controller.get_users);

/**
 *  @description for update user
 *  @method GET /update-user
 */
route.get('/user/update-user', services.update_user);

// API
route.get('/api/users', controller.find_users);
route.put('/api/users/:id', controller.update_user);
route.delete('/api/users/:id', controller.delete_user);

module.exports = route