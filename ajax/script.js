$(document).ready(function(){
    var $supprimer = $('.sup');
    var $validSup = $('#validSup');
    var $reponseModal = $('#reponse-modal');
    var id;

    $supprimer.click(function(){
        $('#scrap-modal').modal();
        id=$(this).data('id');
    });

    $validSup.click(function(){
        $.post("ajax/supprimer.php", {data:id}, verifSuppression);
    });

    function verifSuppression(response) {
        console.log('reponse');
        console.log(response);
        location.reload();
    }

    //$('#contenu').wysihtml5({locale: "fr-FR"});

    if($reponseModal.data('result')=="oui")
        $reponseModal.modal();

    $('#contenu').summernote({width:600, height:200});

});
