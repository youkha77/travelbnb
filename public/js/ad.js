$('#add-image').click(function(){
    // je recupere le numero des futurs champs que je vais creer
    const index = +$('#widgets-counter').val();

    // je recupere le prototype des entrées
    const tmpl = $('#annonce_images').data('prototype').replace(/__name__/g, index);

   //J'injecte ce code au sin de la div
    $('#annonce_images').append(tmpl);

    $('#widgets-counter').val(index + 1);

    // Je gere le bouton supprimer
    handleDeleteButtons();
});

function handleDeleteButtons(){
    $('button[data-action="delete"]').click(function(){
        const target = this.dataset.target;
        $(target).remove();
    });
}

function updateCounter(){
    const count = +$('#annonce_images div.form-group').length;
    
    $('#widgets-counter').val(count);
}

updateCounter()
handleDeleteButtons();
