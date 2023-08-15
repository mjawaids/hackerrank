<?php



/*
 * Complete the 'palindromeIndex' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function palindromeIndex($s) {
    // Write your code here
    if (isPalindrome($s)) {
        return -1;
    }
    
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        $s1 = substr($s, 0, $i);
        $s2 = substr($s, $i+1);
        $s3 = $s1.$s2;
        if (isPalindrome($s3)) {
            return $i;
        }    
    }
    
    return -1;
}

function isPalindrome($s) {
    $len = strlen($s);
    $first = substr($s, 0, ceil($len/2));
    $last = strrev(substr($s, floor($len/2)));
    
    if ($first == $last) {
        return true;
    }
    
    return false;
}

print_r(palindromeIndex("aaa"));
print_r(palindromeIndex("aaab"));
print_r(palindromeIndex("bcbc"));

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");

// $q = intval(trim(fgets(STDIN)));

// for ($q_itr = 0; $q_itr < $q; $q_itr++) {
//     $s = rtrim(fgets(STDIN), "\r\n");

//     $result = palindromeIndex($s);

//     fwrite($fptr, $result . "\n");
// }

// fclose($fptr);
