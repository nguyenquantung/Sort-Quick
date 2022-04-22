<?php 
// thuật toán quicksort
function quicksort($arr)
{
    if(count($arr) < 2){       
        return $arr;
    }
    else{
        $pivot = $arr[0];
        $left = array();
        $right = array();
        for($i = 1; $i < count($arr); $i++)
        {
            if($arr[$i] < $pivot){
                $left[] = $arr[$i];
            }
            else{
                $right[] = $arr[$i];
            }
        }
        //  array_merge() sử dụng để nối hai hay nhiều mảng lại thành một mảng
        return (array_merge(quickSort($left),array($pivot), quickSort($right)));
    }
}
    // sắp xếp nhanh
    $unsort = array(1,2,85,6,4,8,21);
    $a = quickSort($unsort);
    $str2 =implode(' , ',$unsort);
    $str = implode(" , ", $a);
    echo"<br>";
    echo "Các mảng chưa xếp: ". $str2;
    echo"<br>";
    echo"<br>";
    echo "Các mảng đã xếp: " . $str;

?>