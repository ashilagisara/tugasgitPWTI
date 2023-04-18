<?php
 function get_max() {
 return max(func_get_args());
 }
 echo get_max(10, 20)."<br>"; // Output: 20
 echo get_max(10, 20, 30)."<br>"; // Output: 30
 echo get_max(10, 20, 30, 40)."<br>"; // Output: 40
?>
