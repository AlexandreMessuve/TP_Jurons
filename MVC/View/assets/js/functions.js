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

function adminLoad(){
    $.ajax({
        type: 'GET',
        url: '../Controller/executeAdminLoad.php',
        success: function (response){
            let json = JSON.parse(response);
            let currentUser = json.currentUser;
            if(currentUser.id_roles === 1){
                document.getElementById('panelAdmin').style.display = 'block';
            }if (currentUser.id_roles === 2){
                document.getElementById('panelAdmin').remove();
            }
        }
    });
}

function viewTabBalance(action){
    $.ajax({
        type: 'POST',
        url: '../Controller/executeTabBalance.php',
        data: {
            action: action
        },
        success: function (response){
            let json = JSON.parse(response);
            let success = json.success;
            let newAction = json.action;
            if(success === 'ok'){
                $('#balance').empty();
                if (newAction === 'allTime'){
                    let balancesAllTime = json.allTime;
                    for(let i = 0; i < balancesAllTime.length; i++){
                        let nom = balancesAllTime[i].nom.toUpperCase();
                        let prenom = balancesAllTime[i].prenom.charAt(0).toUpperCase() + balancesAllTime[i].prenom.slice(1);
                        let place = i+1;
                        let total = balancesAllTime[i].total;
                        $("#balance").append(
                            '<tr>'+
                            '<td>'+ place + '</td>'+
                            '<td>'+ nom + '</td>'+
                            '<td>'+ prenom + '</td>' +
                            '<td>'+ total + '</td>'
                        );
                    }
                }
                if (newAction === 'week'){
                    let balancesWeek = json.week;
                    for(let i = 0; i < balancesWeek.length; i++){
                        let nom = balancesWeek[i].nom.toUpperCase();
                        let prenom = balancesWeek[i].prenom.charAt(0).toUpperCase() + balancesWeek[i].prenom.slice(1);
                        let place = i+1;
                        let total = balancesWeek[i].total;
                        $("#balance").append(
                            '<tr>'+
                            '<td>'+ place + '</td>'+
                            '<td>'+ nom + '</td>'+
                            '<td>'+ prenom + '</td>' +
                            '<td>'+ total + '</td>'
                        );
                    }
                }
            }if (success === 'erreur'){
                alert("Impossible d'afficher le tableau");
            }
        }
    });
}
function viewTabCommettre(){
    $.ajax({
        type: 'get',
        url: '../Controller/executeTabCommettre.php',
        success: function (response) {
            let json = JSON.parse(response);
            let success = json.success;
            let currentUser = json.currentUser;
            if (currentUser.id_roles === 2){
                location.href="https://www.youtube.com/watch?v=dQw4w9WgXcQ";
            }
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

