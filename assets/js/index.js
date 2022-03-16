$("#create_user").submit(function(event){
    alert("Data Inserted Successfully!");
})


$("#btn-submit").on('click', function(event){
    console.log('Update Author: Entry')
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