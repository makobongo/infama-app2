
<?php
function movieFlight($movieDuration, $arr_size,
                                        $sum)
{
    $l; $r;

    sort($movieDuration);

    $l = 0;
    $r = $arr_size - 1;
    while ($l < $r)
    {
        if($movieDuration[$l] + $movieDuration[$r] == $sum)
            return 1;
        else if($movieDuration[$l] + $movieDuration[$r] < $sum)
            $l++;
        else // movieDuration[i] + movieDuration[j] > sum
            $r--;
    }
    return 0;
}
 
$movieDuration = array (1, 4, 45, 6, 10, -8);
$lengthofFlight = 16;
$arr_size = sizeof($movieDuration);
 
// Function calling
if(movieFlight($movieDuration, $arr_size, $lengthofFlight))
    echo "Flight has movies " .
                   "with given sum";
else
    echo "Flight does not have movies" .
          "with given sum";
?>