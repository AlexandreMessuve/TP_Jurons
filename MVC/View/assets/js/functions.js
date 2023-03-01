function insertPenal(){
    $('#insertPena').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: '../Controller/insertPenalite.php',
            data: $('form').serialize(),
            success: function (response) {
                if (response === 'ok') {
                    $('#connexion').trigger('reset');
                    $.ajax({
                        type: 'get',
                        url: '../Controller/executeTableau.php',
                        success: function (response) {
                            let rep = JSON.parse(response);
                            let success = rep.success;
                            if (success === 'ok') {
                                $('#viewJurons').empty();
                                let data = rep.data;
                                for (let i = 0; i < data.length; i++) {
                                    $('#viewJurons').append(
                                        '<tr>' +
                                        '<td>' + data[i].nom.toUpperCase() + '</td>' +
                                        '<td>' + data[i].prenom + '</td>' +
                                        '<td>' + data[i].petit + '</td>' +
                                        '<td>' + data[i].gros + '</td>' +
                                        '<td>' + data[i].rot + '</td>' +
                                        '<td>' + data[i].geste + '</td>' +
                                        '<td>' + data[i].retard + '</td>' +
                                        '<td>' + data[i].total + '</td>' +
                                        '</tr>'
                                    )
                                }
                            }else {
                                alert('Une erreur est survenue');
                            }


                        }
                    })
                }else if (response === 'erreur') {
                    alert('Une erreur est survenue');
                }
            }
        });
        return false;
    });
}
function logout(){
    location.href="../Controller/executeLogout.php";
}