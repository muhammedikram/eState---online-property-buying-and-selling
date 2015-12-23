
$('span[name=text]').hide();
$('iframe[name=iframe]').hide();
$('span[name=moniter]').hide();
$('span[name=f1]').hide();
$('span[name=step2]').hide();
$('span[name=step3]').hide();


$('#deneme').change(function(){
    if($(this).val()=="keyboard"){
        $('span[name=text]').hide();
        $('span[name=moniter]').hide();
        $('span[name=step2]').hide();
        $('iframe[name=iframe]').hide();
        $('span[name=step3]').hide();
        alert(23)
    }
    else if($(this).val()=="mouse"){
        $('iframe[name=iframe]').hide();
        $('span[name=moniter]').hide();
        $('span[name=text]').show();
        $('span[name=step2]').hide();
        $('span[name=step3]').hide();


    }
      else if($(this).val()=="moniter"){
        $('iframe[name=iframe]').hide();
        $('span[name=text]').hide();
        $('span[name=moniter]').show();
        $('span[name=step2]').hide();
        $('span[name=step3]').hide();

    }

    else {
        $('span[name=text]').hide();
        $('span[name=moniter]').hide();
        $('iframe[name=iframe]').show();
        $('span[name=step2]').hide();
        $('span[name=step3]').hide();

    }


})

var submit = document.getElementById('button');
submit.onclick = function() {
$('span[name=step2]').show();
$('span[name=moniter]').hide();
}

var submit2 = document.getElementById('step2button');
submit2.onclick = function() {
$('span[name=step2]').hide();
$('span[name=step3]').show();
}















$('#yes').change(function(){
    if($(this).val()=="keyboard"){
        $('span[name=text]').hide();
        $('span[name=moniter]').hide();

        $('iframe[name=iframe]').hide();
        alert(23)
    }
    else if($(this).val()=="mouse"){
        $('iframe[name=iframe]').hide();
        $('span[name=moniter]').hide();
        $('span[name=text]').show();

    }
      else if($(this).val()=="moniter"){
        $('iframe[name=iframe]').hide();
        $('span[name=text]').hide();
        $('span[name=moniter]').show();
    }

   else if($(this).val()=="yes"){

         $('span[name=f1]').show();
    }




    else {
        $('span[name=text]').hide();
        $('span[name=moniter]').hide();
        $('iframe[name=iframe]').show();
    }


})

