$(function () {
    $.ajax({
        type: 'get',
        url: '../Controller/executeTableau.php',
        success: function (response) {
            let json = JSON.parse(response);
            let success = json.success;
            let currentUser = json.currentUser;
            let users = json.users;
            if (success === 'ok') {
                let data = json.data;

                for (let i = 0; i < data.length; i++) {
                    //envoie les données reçu par le controller dans le tableau.
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


            }
            //Récupère les données de tout les utilisateur pour les mettre dans le formulaire d'infraction.
            for (let i = 0; i < users.length; i++) {
                let nom = users[i].nom.toUpperCase();
                let prenom = users[i].prenom.charAt(0).toUpperCase() + users[i].prenom.slice(1);
                //envoie les données reçu par le controller dans le tableau.
                $('#select').append(
                    '<option value="' + users[i].login_utilisateur + '">' + nom +
                    ' ' + prenom + '</option>');
            }
            if (success === 'erreur') {
                alert('Impossible de proceder aux changements');
            }
            if (success === 'no users found'){
                alert("Il ni a actuellement pas d'infraction");
            }

        }
    });
});