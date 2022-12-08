$(".circle").click(function () {
    for(let i=1; i<=5; i++){
        if($(this).attr('id') == 'circle' + i )
            $(this).hide();
        else $('#circle' + i).show();
    }
});