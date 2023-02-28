
    // creation d'un call ajax a partir d'un formulaire.
    $('#connexion').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: '../Controller/executeInscription.php',
            data: $('form').serialize(),
            success: function (response) {
                if (response === 'ok') {
                    $('#connexion').trigger('reset');
                }else if (response === 'erreur') {
                    alert('Formulaire incomplet !');
                }
            }
        });
        return false;
    });
