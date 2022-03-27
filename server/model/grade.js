const mongoose = require('mongoose');

mongoose.Promise = global.Promise

const gradeSchema = new mongoose.Schema({
    _id: mongoose.Schema.Types.ObjectId,
    g1: {
        type: Number,
        require: true,
    },
    g2: {
        type: Number,
        require: true,
    },
})

const Grade = mongoose.model('grade', gradeSchema)

module.exports = Grade