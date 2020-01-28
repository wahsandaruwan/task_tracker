//Load Data & refresh
function build(){
    $('#log').load('log.php?mode=build');
    tally();
}

//Tally & Total time
function tally(){
    $('#tally').load('log.php?mode=tally');
}

$(document).ready(function(){
    build(); 
    //When the form is submitted, then run bellow function to get data
    $('#form-add').submit(function(event){
        //Default action that belongs to the event will not occur
        event.preventDefault();
        //Get data from the form
        var form = $(this);
        // var task = $('#task').val();
        // console.log(task);
        var data = form.serialize(); //When selialize we need to have names of the elements in form

        //Create an ajax object
        $.ajax({
            url: 'log.php?mode=new',
            data: data,
            success: function(){
                build();
            }
        });
    });

});