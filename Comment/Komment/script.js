$(document).ready(function() {
    $('#KommForm').submit(function(e) {
        e.preventDefault();
        var Mes = document.getElementById('Komment').value;
        var NeUse = document.getElementById('User').value;
        $.ajax({
            type: "POST",
            url: 'insert.php',
            data: {
                text1: Mes,
                text2: NeUse
            },
            success: function() {
                console.log("Данные добавлены");
                document.getElementById('MessageSMS').innerHTML += "<p>" + Mes + " " + NeUse + "</p></br>";
                /*block.scrollTop = 9999;
                document.getElementById('sms').value = '';*/

            }
        });

    });
});

function Output() {
    $.ajax({
        url: 'select.php',
        method: 'get',
        cache: false,
        dataType: 'html',
        data: {},
        success: function(data) {
            document.getElementById('MessageSMS').innerHTML = "<p>" + data + "</p></br>";
            Times();
        }
    });
}

function Times() {
    for (var i = 0; i < 100; i++) {
        setTimeout(Output, 6000 * (i + 1));
    }
}