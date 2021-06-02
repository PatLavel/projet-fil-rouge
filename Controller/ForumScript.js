var idTopic = console.log($("#button_footer_suj_jaime").val());

$("#button_footer_suj_jaime").click(function() {
    $.ajax({
        url: "TEST.php",
        data: idTopic,
        success: function(data) {
            add
        },
        error: function() {
            alert('Error Code');
            alert('Error Message');
        }
    });
})