const mongoose = require('mongoose');
const Grade =  require('../model/grade');
const MongoClient = require('mongodb').MongoClient;

// create new Personal record
exports.createGrade = (req, res) => {
    const grade = Grade({
        _id: mongoose.Types.ObjectId(),
        g1: req.body.g1,
        g2: req.body.g2,
    })

    return grade
    .save()
    .then((newGrade) => {
      return res.status(201).json({
        success: true,
        message: 'New grade record created successfully',
        Grade: newGrade,
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