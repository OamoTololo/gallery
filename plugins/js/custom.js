$(document).ready(function () {
    // Add image
    $(document).on("submit", "#addImage", function (e) {
        e.preventDefault();
        // ajax
        $.ajax({
            url: "/gallery/ajax.php",
            type: "post",
            dataType: "json",
            data: new FormData(this),
            processData: "false",
            contentType: "false",
            beforeSend: function () {
                console.log("Wait...Data is loading!!!")
            },
            success: function (response) {
                console.log(response)
            },
            error: function (request, error) {
                console.log(arguments);
                console.log("Error: " + error)
            }
        });
    });
});