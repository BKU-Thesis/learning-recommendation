const mongoose = require('mongoose');

const measurementSchema = new mongoose.Schema({
    _id: mongoose.Schema.Types.ObjectId,
    traveltime: {
        type: Number,
    },
    studytime: {
        type: Number,
    },
    failures: {
        type: Number,
    },
    schoolsup: {
        type: Boolean,
    },
    famsup: {
        type: Boolean,
    },
    activities: {
        type: Boolean,
    },
    higher: {
        type: Boolean,
    },
    internet: {
        type: Boolean,
    },
    romantic: {
        type: Boolean,
    },
    famrel: {
        type: Number,
    },
    freetime: {
        type: Number,
    },
    goout: {
        type: Number,
    },
    dalc: {
        type: Number,
    },
    walc: {
        type: Number,
    },
    health: {
        type: Number,
    },
    absences: {
        type: Number,
    },
})

const Measurement = mongoose.model('measurement', measurementSchema)

module.exports = Measurement