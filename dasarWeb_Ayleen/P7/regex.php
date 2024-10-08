<?php 

$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo"<br><br>";

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
    
}

echo"<br><br>";

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: I like banana pie.

echo"<br><br>";

$pattern = '/go*d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo"<br><br>";

$pattern = '/appl?e/';
$text = 'I like apple pie. I like ape pie.';
$new_text = preg_replace($pattern, 'banana', $text);
echo $new_text; // Output: I like banana pie. I like banana pie.

echo"<br><br>";

$pattern = '/o{1,2}/'; // Mencocokkan karakter 'o' yang muncul 1 hingga 2 kali
$text = 'good food ghost box cool'; 
 
if (preg_match_all($pattern, $text, $matches)) { 
    echo "Cocokkan ditemukan: " . implode(', ', $matches[0]); 
} else { 
    echo "Tidak ada yang cocok!"; 
}

?>