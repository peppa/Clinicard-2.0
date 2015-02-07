/* ------------------------------------------------*/
/*               prefill modCheck                  */
/* ------------------------------------------------*/

$(document).ready(function(){
        var EncCF=window.location.href.split('p=')[1].split('&')[0];
        var EncCH=window.location.href.split('ch=')[1];
        $.ajax({
            type: "POST",
            url: "index.php?control=ajaxCall&task=preFillCheck",
            dataType: "json",
            data: {"cf":EncCF,"ch":EncCH},
            success: function(array){
            $('#dateC').val(array["dateCh"]);
            $('#medH').val(array["medHistory"]);
            $('#medE').val(array["medExam"]);
            $('#conc').val(array["conclusions"]);
            $('#toDoE').val(array["toDoExam"]);
            $('#ter').val(array["terapy"]);
            $('#check').val(array["checkup"]);
        }
        });
});



