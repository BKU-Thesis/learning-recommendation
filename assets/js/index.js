$("#create_user").submit(function(event){
    alert("Data Inserted Successfully!");
})


$("#btn-submit-update").on('click', function(event){
    var form = $("#update_user")
    event.preventDefault();

    var unindexed_array = form.serializeArray();
    var data = {}

    $.map(unindexed_array, function(n, i){
        data[n['name']] = n['value']
    })

    console.log(data);


    var request = {
        "url" : `http://localhost:3000/api/users/${data.id}`,
        "method" : "PUT",
        "data" : data
    }

    $.ajax(request).done(function(response){
        alert("Data Updated Successfully!");
        setTimeout(function() {
            window.location.reload();
        }, 1000);
       
    })
})


if(window.location.pathname == "/users"){
    $ondelete = $(".table tbody td a.delete");
    $ondelete.click(function(){
        var id = $(this).attr("data-id")

        var request = {
            "url" : `http://localhost:3000/api/users/${id}`,
            "method" : "DELETE"
        }

        if(confirm("Do you really want to delete this record?")){
            $.ajax(request).done(function(response){
                alert("Data Deleted Successfully!");
                location.reload();
            })
        }

    })
}


$("#btn-submit-signup-user").on('click', function(event){
    console.log('btn-submit-signup-user: ENTRY');
    console.log('teacher: ', $("#text-teacher-input").val());
    console.log('faculty: ', $("#text-faculty-input").val());
    console.log('subject: ', $("#text-subject-input").val());
    console.log('classroom-section: ', $("#text-classroom-section-input").val());
    console.log('semester: ', $("#text-semester-input").val());
    console.log('school-year: ', $("#text-school-year-input").val());
})