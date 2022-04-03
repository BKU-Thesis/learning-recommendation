const mongoose = require('mongoose');

mongoose.Promise = global.Promise

const personalSchema = new mongoose.Schema({
    _id: mongoose.Schema.Types.ObjectId,
    name: {
        type: String,
        require: true,
    },
    school: {
        type: String,
        require: true,
    },
    gender: {
        type: Number,
        require: true,
    },
    age: {
        type: String,
        require: true,
    },
})

const Personal = mongoose.model('personal', personalSchema)

module.exports = Personal