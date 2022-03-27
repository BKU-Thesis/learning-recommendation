const mongoose = require('mongoose');
const Measurement =  require('../model/measurement');
const MongoClient = require('mongodb').MongoClient;

// create new Measurement record
exports.createMeasurement = (req, res) => {
    console.log(req.body)
    const measurement = Measurement({
        _id: mongoose.Types.ObjectId(),
        traveltime: req.body.traveltime,
        studytime: req.body.studytime,
        failures: req.body.failures,
        schoolsup: req.body.schoolsup,
        famsup: req.body.famsup,
        activities: req.body.activities,
        higher: req.body.higher,
        internet: req.body.internet,
        romantic: req.body.romantic,
        famrel: req.body.famrel,
        freetime: req.body.freetime,
        goout: req.body.goout,
        dalc: req.body.dalc,
        walc: req.body.walc,
        health: req.body.health,
        absences: req.body.absences,
    })

    return measurement
    .save()
    .then((newMeasurement) => {
      return res.status(201).json({
        success: true,
        message: 'New measurement record created successfully',
        Measurement: newMeasurement,
      });
    })
    .catch((error) => {
        console.log(error);
      res.status(500).json({
        success: false,
        message: 'Server error. Please try again.',
        error: error.message,
      });
    });
}