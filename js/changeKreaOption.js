function changekrea() {
    var kre = $('#kreaturName').val();
    //console.log(kre);
    var color = $('#color').val();
    //console.log(color);
    $("#krea").attr('src','img/kreaturs/'+kre+color+'.png');
}

$(document).ready(function(){
$("input").change(changekrea);
$("select").change(changekrea);
changekrea();
    
});