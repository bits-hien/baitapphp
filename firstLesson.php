<?php
    function sum( $a , $b , $c ){
        return $a + $b + $c;
    }

    $a = 5;
    $b = 6;
    $c = 8;
    $total = sum( $a , $b , $c );
    echo "Tổng của $a và $b và $c là: $total<br>";
    
    function test($a){
        return var_dump($a == 100);
    }

    $result = test($a);
    echo "Kết quả so sánh của $a = 100: $result<br>" ;

    function tes($b){
        return var_dump($b > 100);
    }

    $re = tes($b);
    echo "Kết quả so sánh của $b > 100: $re<br>" ;

    function te($c){
        return var_dump($c < 100);
    }

    $ref = te($c);
    echo "Kết quả so sánh của $c < 100: $ref<br>" ;   

    $x = 5;
    $y = 1;
    $z = 9;

    function tinhGiaithua($a) {
        $giai_thua = 1 ;
        if ($a == 0 || $a == 1){
            return $giai_thua;
        } else {
            for ($i = 2; $i <= $a; $i ++ ) {
                 $giai_thua *= $i;
            }
            return $giai_thua;
        }
    }

    echo "Tính thử giai thừa của các biến x,y,z:<br>";
    echo "Giai thừa của $x là:" . tinhGiaithua($x)."<br>";
    echo "Giai thừa của $y là:" . tinhGiaithua($y)."<br>";
    echo "Giai thừa của $z là:" . tinhGiaithua($z)."<br>";

    function testNguyenTo($n) 
    {
        for ($f = 2; $f < $n; $f ++) {
            if ( $n % $f ==0 ) {
                return 0;
            }
        }
        return 1;
    }
    $w = testNguyenTo(3);
    if ($w == 0 ) {
        echo "3 không phải số nguyên tố.<br>";
    } else {
        echo "3 là số nguyên tố.";
    }
