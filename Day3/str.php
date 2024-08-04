<?php
$s='aya';
$s2='aya';
echo strcmp($s,$s2);
// -4,-3,-2-1
// $res=strtok($s,' ');
// var_dump($res);
echo $s[-1];
echo substr($s,-6,-3);
// $s = 'monkey';
// $t = 'many monkeys';

// printf("[%s]\n",        $s); // standard string output
// printf("[%10s]\n",      $s); // right-justification with spaces
// printf("[%-10s]\n",     $s); // left-justification with spaces
// printf("[%010s]\n",     $s); // zero-padding works on strings too
// // printf("[%'#10s]\n",    $s); // use the custom padding character '#'
// printf("[%'#*s]\n", 10, $s); // Provide the padding width as an additional argument
// printf("[%10.9s]\n",    $t); // right-justification but with a cutoff of 8 characters
// printf("[%-10.9s]\n",   $t); // left-justification but with a cutoff of 8 characters
// echo $s;