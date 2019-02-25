$(function () {
    var team_id = $("#team_id").val();
    $.ajax({
        url: "upload_synopsis.php",
        method: 'POST',
        data: {
            team_id: team_id
        },
        success: function (data) {
            //$("#signup_submit").removeAttr('disabled');
            $("#uploaded_synopsis_link").html(data);
            $("#uploaded_synopsis_link").attr('href', data);

        }
    });

    $.ajax({
        url: "upload_optional_task.php",
        method: 'POST',
        data: {
            team_id: team_id
        },
        success: function (data) {
            //$("#signup_submit").removeAttr('disabled');
            data_json = JSON.parse(data);
            //console.log(data_json);
            for (x = 0; x < data_json.length; x++) {
                if ((data_json[x].task_code) == "INI011") {
                    $("#1").html(data_json[x].link)
                } else if ((data_json[x].task_code) == "INI012") {
                    $("#2").html(data_json[x].link)
                } else if ((data_json[x].task_code) == "INI013") {
                    $("#3").html(data_json[x].link)
                } else if ((data_json[x].task_code) == "INI014") {
                    $("#4").html(data_json[x].link)
                }
            }

        }
    });


    $(document).on('submit', '#upload_synopsis_form', function (event) {
        //  console.log("vhgvgh");
        event.preventDefault();
        var value = $('.synposis__input').val();
        if (value == "") {
            alert('Link cannot be Empty');
        } else {
            $('.loader').css('display', 'block');






            //$("#signup_submit").attr('disabled','disabled');
            $.ajax({
                url: "upload_synopsis.php",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    //$("#signup_submit").removeAttr('disabled');
                    $("#uploaded_synopsis_link").html(data);
                    $("#uploaded_synopsis_link").attr('href', data);
                    $('#upload_synopsis_form')[0].reset();
                    $('.loader').css('display', 'none');

                }
            });

        }


    });

    $(document).on('submit', '#task_form', function (event) {
        //console.log("vhgvgh");

        var value = $('#task_link').val();
        var svalue = $('#task_code').val();
        event.preventDefault();
        
        if (value == '' || svalue == "null") {
           alert('Link or Task Code cannot be Empty');

        } else {

            $('.loader').css('display', 'block');

            //$("#signup_submit").attr('disabled','disabled');
            $.ajax({
                url: "upload_optional_task.php",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    //$("#signup_submit").removeAttr('disabled');
                    // $("#optional_task_link").html(data);
                    // $("#optional_task_link").attr('href',data);
                    //console.log(data);
                    data_json = JSON.parse(data);
                    //console.log(data_json);
                    for (x = 0; x < data_json.length; x++) {
                        if ((data_json[x].task_code) == "INI011") {
                            $("#1").html(data_json[x].link)
                        } else if ((data_json[x].task_code) == "INI012") {
                            $("#2").html(data_json[x].link)
                        } else if ((data_json[x].task_code) == "INI013") {
                            $("#3").html(data_json[x].link)
                        } else if ((data_json[x].task_code) == "INI014") {
                            $("#4").html(data_json[x].link)
                        }
                    }
                    $('#task_form')[0].reset();
                    $('.loader').css('display', 'none');

                }
            });
        }


    });


});
