
<?php
    
    // if(empty($_POST)) {
    //     header('Content-Type: application/json');
    //     $data = '{"grid" : [" "," "," "," "," "," "," "," "," "], "winner" : " "}';
    // } else {
        $data = $_POST['jsonData'];
        $response['grid'] = $data;
        //var_dump($data);
        $game = false;
        for($i=0;$i<count($data);$i++) {
            if($data[$i]=='') $game=true;
        }
        $response['winner'] = 'no';
        if(same($data[0],$data[1],$data[2])) $response['winner'] = 0;
        if(same($data[3],$data[4],$data[5])) $response['winner'] = 3;
        if(same($data[6],$data[7],$data[8])) $response['winner'] = 6;
        if(same($data[3],$data[0],$data[6])) $response['winner'] = 6;
        if(same($data[1],$data[4],$data[7])) $response['winner'] = 1;
        if(same($data[2],$data[8],$data[5])) $response['winner'] = 2;
        if(same($data[0],$data[4],$data[8])) $response['winner'] = 0;
        if(same($data[2],$data[4],$data[6])) $response['winner'] = 2;
        if(!$game && $response['winner']=='no') $response['winner'] = 'd';        
        echo json_encode($response);
    // }
    function same($a,$b,$c) {
        if($a==$b && $a==$c && $a!='' && $b!='' && $c!='') return true; else return false;
    }
?>
