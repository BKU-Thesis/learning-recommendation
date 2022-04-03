const mongoose = require('mongoose');
const Personal =  require('../model/personal');
const MongoClient = require('mongodb').MongoClient;

// create new Personal record
exports.createPersonal = (req, res) => {
    const personal = Personal({
        _id: mongoose.Types.ObjectId(),
        name: req.body.name,
        school: req.body.school,
        gender: req.body.inlineRadioOptions,
        age: req.body.age,
    })

    return personal
    .save()
    .then((newPersonal) => {
      return res.status(201).json({
        success: true,
        message: 'New personal record created successfully',
        Personal: newPersonal,
      });
        // return res.render('data_collection/data/input_infor_family', {title: "Family Information"})
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