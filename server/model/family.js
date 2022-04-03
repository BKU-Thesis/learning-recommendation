const mongoose = require('mongoose');

mongoose.Promise = global.Promise

const familySchema = new mongoose.Schema({
    _id: mongoose.Schema.Types.ObjectId,
    famsize: {
        type: String,
        require: true,
    },
    pstatus: {
        type: String,
        require: true,
    },
    medu: {
        type: String,
        require: true,
    },
    fedu: {
        type: String,
        require: true,
    },
    mjob: {
        type: String,
        require: true,
    },
    fjob: {
        type: String,
        require: true,
    },
    guardian: {
        type: String,
        require: true,
    },
})

const Family = mongoose.model('family', familySchema)

module.exports = Family