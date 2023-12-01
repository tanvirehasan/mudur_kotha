$(document).ready(function(){

    //Zilla Find
    $('#Vibag_address').on('change',function(){
        var VibagID = $(this).val();
        if(VibagID){
            $.ajax({
                type:'POST',
                url:'config/ajax.php',
                data:'Vibag_id='+VibagID,
                success:function(html){
                    $('#zilla_address').html(html);
                    $('#upzilla_address').html('<option value="">সিলেক্ট উপজেলা</option>'); 
                }
            }); 
        }else{
            $('#zilla_address').html('<option value="">প্রথমে বিভাগ করুন</option>');
            $('#upzilla_address').html('<option value="">সিলেক্ট উপজেলা</option>'); 
        }
    });



    // Upzilla find 
    $('#zilla_address').on('change',function(){
        var ZillaID = $(this).val();
        if(ZillaID){
            $.ajax({
                type:'POST',
                url:'config/ajax.php',
                data:'Zill_id='+ZillaID,
                success:function(html){
                    $('#upzilla_address').html(html);
                }
            }); 
        }else{
            $('#upzilla_address').html('<option value="">সিলেক্ট উপজেলা</option>');

        }
    });



    // from updated 
    $("#profile").on('keyup',(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'config/ajax.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data) {
                $("#mess").html(data);
            }
        });
    }));



});