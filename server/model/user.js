const mongoose = require('mongoose');

var schema = new mongoose.Schema({
    teacher: { type: String, required: true, maxLength: 100 },
    faculty: { type: String, required: true, maxLength: 100 },
    subject: { type: String, required: true, maxLength: 100 },
    classroom_section: { type: String, required: true, maxLength: 100 },
    semester: { type: String, required: true, maxLength: 100 },
    school_year: { type: String, required: true, maxLength: 100 }
})

const User = mongoose.model('user', schema);

module.exports = User;