
$("#create_user").submit(function (event) {
    alert("Data Inserted Successfully!");
})


$("#btn-submit-update").on('click', function (event) {
    var form = $("#update_user")
    event.preventDefault();

    console.log("clicked1")
    var unindexed_array = form.serializeArray();
    var data = {}

    $.map(unindexed_array, function (n, i) {
        data[n['name']] = n['value']
    })

    console.log(data);

    var request = {
        "url": `http://localhost:3000/api/users/${data.id}`,
        "method": "PUT",
        "data": data
    }

    $.ajax(request).done(function (response) {
        alert("Data Updated Successfully!");
        setTimeout(function () {
            window.location.reload();
        }, 1000);

    })
})


if (window.location.pathname == "/users") {
    $ondelete = $(".table tbody td a.delete");
    $ondelete.click(function () {
        var id = $(this).attr("data-id")

        var request = {
            "url": `http://localhost:3000/api/users/${id}`,
            "method": "DELETE"
        }

        if (confirm("Do you really want to delete this record?")) {
            $.ajax(request).done(function (response) {
                alert("Data Deleted Successfully!");
                location.reload();
            })
        }

    })
}

$("#btn-next-family").on('click', function (event) {
    // var form = $("#submit-personal-information")
    // event.preventDefault();

    //Get all data input in FORM
    // var unindexed_array = form.serializeArray();
    // var data = {}
    // $.map(unindexed_array, function (n, i) {
    //     data[n['name']] = n['value']
    // })

    // var res = $("#submit-personal-information").serialize()

    $.ajax({
        type: 'GET',
        url: 'family',
        success: function () {
            // $('#input_1').html(data);
            location.href = 'family'
        }
    });
})

$("#btn-next-mearsurement").on('click', function () {
    // event.preventDefault();

    $.ajax({
        type: 'GET',
        url: 'measure',
        success: function () {
            // $('#input_1').html(data);
            location.href = 'measure'
        }
    });
})