function tower_builder(int $n) {
  // Build your tower here
    $array = [];
    $i = 0;
    while($i < $n ){
        $x = $i + $i + 1;
        $z = $n - $i - 1;
        $blank = str_repeat(" ", $z);
        $string = str_repeat("*", $x);
        $lines = $blank . $string . $blank;
        array_push($array, $lines); 
        $i++;
    }
    return $array;
}

