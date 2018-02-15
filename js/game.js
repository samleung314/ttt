for(var i=1;i<=9;i++) {
    document.write("<div class='card card"+i+"' status=''></div>");
}
document.write("<h1 class='gameover'></h1>");
$game = true;
$('.card').click(function() {
    if(!$game || $(this).hasClass('mycard') || $(this).hasClass('comcard')) return;
    $(this).addClass('mycard');
    $(this).attr('status', 'X');
   
    for(i=0;i<9;i++) {
        if(!$('.card:eq('+i+')').hasClass('comcard') && !$('.card:eq('+i+')').hasClass('mycard')) {
            $('.card:eq('+i+')').addClass('comcard').attr('status', 'O');;
            break;
        }
    }
  
    $data = new Array();
    for(var i=1;i<=9;i++) {        
        $data.push($('.card:eq('+(i-1)+')').attr('status'));
    }
    $jsonData = JSON.parse(JSON.stringify($data));
    $.ajax({
        type : 'POST',
        url : './play/index.php',
        data : {
            'jsonData' : $jsonData
        },
        datatype : 'json',
        success : function ($response)
        {
            $data = JSON.parse($response);
            console.log($data);
            if($data.winner!='no') {
                if($data.winner=='d')
                    $('.gameover').html('Draw').show();
                else {
                    if($('.card:eq('+$data.winner+')').attr('status')=='X')
                        $('.gameover').html('Winner : You').show();
                    else
                        $('.gameover').html('Winner : Com').show();                        
                }
                $game = false;
            }
        }, false : function(e) {
            alert('failed');
        }
    });
});