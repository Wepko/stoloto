<<<<<<< HEAD

    var time = document.getElementById('datetime').value


    time = time.replace(/-/g, '/').replace(/T/g, " ")
    time = time + ":00"
    
    $('#clock').countdown(time)
    .on('update.countdown', function(event) {
    var format = '%H:%M:%S';
    if(event.offset.totalDays > 0) {
        format = '%-d дней%!d ' + format;
    }
    if(event.offset.weeks > 0) {
        format = '%-w недель%!w ' + format;
    }
    $(this).html(event.strftime(format));
    })
    .on('finish.countdown', function(event) {
    $(this).html('This offer has expired!')
        .parent().addClass('disabled');
    });

 
=======
>>>>>>> 0e1d73546f5498f66e0e1dc52812b1cd918741bc
