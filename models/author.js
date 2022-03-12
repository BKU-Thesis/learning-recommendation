var mongoose = require('mongoose');

var Schema = mongoose.Schema;

// teacher, faculty, subject, classroom_section, semester, school_year
var AuthorSchema = new Schema({
  teacher: { type: String, required: true, maxLength: 100 },
  faculty: { type: String, required: true, maxLength: 100 },
  subject: { type: String, required: true, maxLength: 100 },
  classroom_section: { type: String, required: true, maxLength: 100 },
  semester: { type: String, required: true, maxLength: 100 },
  school_year: { type: String, required: true, maxLength: 100 }
});

// Virtual for author "full" name.
AuthorSchema.virtual('name').get(function() {
  return this.teacher + ', ' + this.faculty;
});

// Virtual for this author instance URL.
AuthorSchema.virtual('url').get(function() {
  return '/catalog/author/' + this._id;
});

// AuthorSchema.virtual('lifespan').get(function() {
//   var lifetime_string = '';
//   if (this.date_of_birth) {
//     lifetime_string = DateTime.fromJSDate(this.date_of_birth).toLocaleString(DateTime.DATE_MED);
//   }
//   lifetime_string += ' - ';
//   if (this.date_of_death) {
//     lifetime_string += DateTime.fromJSDate(this.date_of_death).toLocaleString(DateTime.DATE_MED)
//   }
//   return lifetime_string;
// });

// AuthorSchema.virtual('date_of_birth_yyyy_mm_dd').get(function() {
//   return DateTime.fromJSDate(this.date_of_birth).toISODate(); //format 'YYYY-MM-DD'
// });

// AuthorSchema.virtual('date_of_death_yyyy_mm_dd').get(function() {
//   return DateTime.fromJSDate(this.date_of_death).toISODate(); //format 'YYYY-MM-DD'
// });

// Export model.
module.exports = mongoose.model('Author', AuthorSchema);
