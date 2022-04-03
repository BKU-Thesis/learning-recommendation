const mongoose = require('mongoose');
const Family =  require('../model/family');
const MongoClient = require('mongodb').MongoClient;

// create new Family record
exports.createFamily = (req, res) => {
    console.log(req.body)
    const family = Family({
        _id: mongoose.Types.ObjectId(),
        famsize: req.body.famsize,
        pstatus: req.body.pstatus,
        medu: req.body.medu,
        fedu: req.body.fedu,
        mjob: req.body.mjob,
        fjob: req.body.fjob,
        guardian: req.body.guardian,
    })

    return family
    .save()
    .then((newFamily) => {
      return res.status(201).json({
        success: true,
        message: 'New family record created successfully',
        Family: newFamily,
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