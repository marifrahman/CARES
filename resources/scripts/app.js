/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    // fix sub nav on scroll
    var $win = $(window)
    , $nav = $('.subnav')
    , navTop = $('.subnav').length && $('.subnav').offset().top - 40
    , isFixed = 0

    processScroll()

    $win.on('scroll', processScroll)

    function processScroll() {
        var i, scrollTop = $win.scrollTop()
        if (scrollTop >= navTop && !isFixed) {
            isFixed = 1
            $nav.addClass('subnav-fixed')
        } else if (scrollTop <= navTop && isFixed) {
            isFixed = 0
            $nav.removeClass('subnav-fixed')
        }
    }
    
    
    //Define the datetime picker
    $('.datetime').datetimepicker({
        ampm: true
    }); 
    
    $('.date').datepicker(); 
    
    $('.nofuturedate').datepicker({
        maxDate: "+0D",
        onClose: function(dateText, inst) { 
            $(this).trigger("blur")
                    
        }
    } ); 
    //$('#aaao').datepicker({maxDate: "+0D" } ); 
    
    //Initialize tooltips
    $(document).tooltip({
        selector: "a[rel=tooltip]"
    })
    
    
    
    
    
    /* $('#rsd').datepicker({
        minDate: '+0',
        onSelect: function(dateStr) {
            var min = $(this).datepicker('getDate') || new Date(); // Selected date or today if none
            var max = new Date(min.getTime());
            max.setMonth(max.getMonth() + 1); // Add one month
            $('#aaao').datepicker('option', {minDate: min, maxDate: max});
        }
    });
    $('#aaao').datepicker({
        minDate: '+0',
        maxDate: '+0',
        onSelect: function(dateStr) {
            var max = $(this).datepicker('getDate'); // Selected date or null if none
            $('#rsd').datepicker('option', {maxDate: max});
        }
    });*/
    
    
    //jQuery fileupload initialization
    
    // Initialize jQuery File Upload (Extended User Interface Version):
    /*$('#file_upload').fileUploadUIX();
    
    // Load existing files:
    $.getJSON($('#file_upload').fileUploadUIX('option', 'url'), function (files) {
        var options = $('#file_upload').fileUploadUIX('option');
        options.adjustMaxNumberOfFiles(-files.length);
        $.each(files, function (index, file) {
            options.buildDownloadRow(file, options)
                .appendTo(options.downloadTable).fadeIn();
        });
    });*/
    /*
    $('#rsdfile').fileupload({
        add: function (e, data) {
            $.each(data.files, function (index, file) {
                //alert('Added file: ' + file.name);
                $('<li/>').text(file.name).append('<i class="icon-remove"></i>').appendTo('#fileList');
            });
                
            //data.formData = result; // e.g. {id: 123}
            $.blueimpUI.fileupload.prototype
            .options.add.call(this, e, data);
                
        }
    });*/  

    //Tweaking for submenu on the Dropdown menu   
    jQuery('.submenu').hover(function() {
        jQuery(this).children('ul').removeClass('submenu-hide').addClass('submenu-show');
    }, function() {
        jQuery(this).children('ul').removeClass('.submenu-show').addClass('submenu-hide');
    }).find("a:first").append(" &raquo; ")
    
});//End of document ready
//Function to show the notification msg on growl like
function showNoty(msg)
{
    noty({
        "text":msg,
        "theme":"noty_theme_twitter",
        "layout":"topRight",
        "type":"error",
        "animateOpen":{
            "height":"toggle"
        },
        "animateClose":{
            "height":"toggle"
        },
        "speed":500,
        "timeout":5000,
        "closeButton":false,
        "closeOnSelfClick":true,
        "closeOnSelfOver":false,
        "modal":false
    });
}
$(function(){
    var dates = $( "#dateFrom, #dateTo" ).datepicker({
        changeMonth: true,
        onSelect: function( selectedDate ) {
            var option = this.id == "dateFrom" ? "minDate" : "maxDate",
            instance = $( this ).data( "datepicker" ),
            date = $.datepicker.parseDate(
                instance.settings.dateFormat ||
                $.datepicker._defaults.dateFormat,
                selectedDate, instance.settings );
            dates.not( this ).datepicker( "option", option, date );
        }
    });
})   


