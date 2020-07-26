
$(document).ready(function() {

    $('#form input').keyup(function(){
        // $(this).popover('hide');
        $(this).next('span .validation-field').remove();
    });

    $('#form select').on('change', function(){
        $(this).next('span .validation-field').remove();
        // $(this).popover('hide');
    });

    $('#form textarea').on('change', function(){
        $(this).next('span .validation-field').remove();
        // $(this).popover('hide');
    });
    
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    $('[data-toggle="popover"]').popover();

});


function ValidationPopover(theobject, message) {
    $(theobject).attr('data-content', message);
    $(theobject).popover({trigger:'manual', placement:'top'});
    $(theobject).popover('show');
}

function ValidationField(theobject, message) {
  if ($(theobject).is(".selectpicker")) {
    $(theobject).next('button').after("<span class='validation-field'>"+message+"</span>");
  }else{
    $(theobject).after("<span class='validation-field'>"+message+"</span>");
  }
}

function ValidationFieldClass(theobject, message) {
  if ($(theobject).is(".selectpicker")) {
    $(theobject).next('button').after("<span class='validation-field'>"+message+"</span>");
  }else{
    $(theobject).html("<span class='validation-field'>"+message+"</span>");
  }
}

function addAnimate(target) {
    target.addClass('animated fadeIn');
    target.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        target.removeClass('animated fadeIn');
    });   
}

function notify(type, message) {
  $.notify({
    // options
    message: message
  },{
    // settings
    type: type
  });
}

function ConvertStatusApproval($status, $badge=false){
    if ($status == "W") {
        return ($badge == true) ? '<span class="badge bg-primary">Waiting</span>' : 'Waiting';
    }else if ($status == "P") {
        return ($badge == true) ? '<span class="badge bg-info">Ready to be Approved</span>' : 'Ready to be Approved';
    }else if ($status == "A") {
        return ($badge == true) ? '<span class="badge bg-success">Approved</span>' : 'Approved';
    }else{
        return ($badge == true) ? '<span class="badge bg-danger">Reject</span>' : 'Reject';
    }
}

function Wait() {
    $.blockUI({ 
        message:'<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>',
        css: { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: '#000', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff' 
        }
    }); 
}

function Done() {
    $.unblockUI();    
}

function ConvertRp(angka)
{
    if (angka != '' && angka != null) {
        var rupiah = '';        
        var angkarev = angka.toString().split('').reverse().join('');
        for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+',';
        return rupiah.split('',rupiah.length-1).reverse().join('');
    }else{
        return '0';
    }
}

function ConvertNull(value) {
    if (value == null || value == 0 || value == "0000-00-00" || value == "0000-00-00 00:00:00") {
      return "";
    }else{
      return value;
    }
}

function ConvertNol(value) {
    if (value == 0) {
      return "";
    }else{
      return value;
    }
}

function CheckAuthError(kode){
    if (kode == 401) {
        window.location.href = "login";    
        return false;   
    }
}

$(document).ajaxError(function(jqxhr, xhr) {
  if (xhr.status == 401) {
    window.location.href = "login";
  }
  Done();
});

$(document).ajaxSuccess(function(jqxhr, xhr) {
  setTimeout(function(){
    Done();
  },0)    
});
