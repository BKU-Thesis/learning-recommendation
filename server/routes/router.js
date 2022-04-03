const express = require('express');
const route = express.Router()

const services = require('../services/render');
const controller = require('../controller/controller');
const personal = require('../controller/personal');
const family = require('../controller/family');
const measurement = require('../controller/measurement');
const grade = require('../controller/grade');

route.get('/infor/personal', controller.infor_personal_get);
route.get('/infor/family', controller.infor_family_get)
route.get('/infor/measure', controller.infor_measure_get);
route.get('/infor/grade', controller.infor_grade_get);
route.get('/', controller.get_users);

route.post('/infor/personal', personal.createPersonal);
route.post('/infor/family', family.createFamily);
route.post('/infor/measure', measurement.createMeasurement);
route.post('/infor/grade', grade.createGrade);

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