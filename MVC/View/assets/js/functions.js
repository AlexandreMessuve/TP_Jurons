function insertPenal(){
    $('#insertPena').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: '../Controller/insertPenalite.php',
            data: $('form').serialize(),
            success: function (response) {
                if (response === 'ok') {
                    $('#insertPena').trigger('reset');
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

function viewTabCommettre(){
    $.ajax({
        type: 'get',
        url: '../Controller/executeTabCommettre.php',
        success: function (response) {
            let json = JSON.parse(response);
            let success = json.success;

            if (success === 'ok'){

                let infraction;
                let penalitys = json.penalitys;
                $('#viewCommettre').empty();
                for (let i = 0; i < penalitys.length; i++) {
                    let id = penalitys[i].id_commettre;
                    let login = penalitys[i].login_utilisateur;
                    let balance = penalitys[i].login_balance;
                    let date = penalitys[i].date_infraction;
                    if (penalitys[i].code_infraction === 'code_1'){
                        infraction = 'Retard';
                    }
                    if (penalitys[i].code_infraction === 'code_2'){
                        infraction = 'Petit juron'
                    }
                    if (penalitys[i].code_infraction === 'code_3'){
                        infraction = 'Gros juron'
                    }
                    if (penalitys[i].code_infraction === 'code_4'){
                        infraction = 'Rot'
                    }
                    if (penalitys[i].code_infraction === 'code_5'){
                        infraction = 'Geste'
                    }

                    $('#viewCommettre').append(
                        '<tr id="'+ id +'">'+
                        '<td>'+ infraction +'</td>' +
                        '<td>'+ login +'</td>' +
                        '<td>'+ balance +'</td>' +
                        '<td>'+ date +'</td>' +
                        '<td><button class="btn btn-danger" onclick="deleteCommettre('+ id +')" >Supprimer</button></td>' +
                        '</tr>'
                    )
                }

            }else if (success === 'erreur'){
                alert("Error");
            }
        }
    });

}

function deleteCommettre(id){
    $.ajax({
        method: 'post',
        url: '../Controller/executeDeleteCommettre.php',
        data:{
            id: id,
        },
        success: function (response){
            if (response === 'ok'){
                document.getElementById(id).remove();
            }if (response === 'erreur'){
                alert("Une erreur est survenue");
            }
        }
    })
}