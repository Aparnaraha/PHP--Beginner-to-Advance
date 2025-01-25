<?php

// Single quote se string banate hain
echo 'Naam: ';
var_dump('Amit Kumar Singh');
echo "\n";

echo "Naam: ";
echo "Amit\t Kumar\t Singh\n";
// Escape sequence
// \t --> Tab
// \n --> Newline

// Heredoc example (variables will be parsed)
$age = 25;
echo <<<MYSTRING
Yeh ek lambi string ka example hai. 
Mera naam Amit Kumar Singh hai aur meri umra $age saal hai.
Yeh string heredoc ke tareeke se likhi gayi hai.
MYSTRING;

// Nowdoc example (variables will not be parsed)
echo <<<'MYSTRING'
Yeh ek lambi string ka example hai.
Mera naam Amit Kumar Singh hai aur meri umra $age saal hai.
Yeh string nowdoc ke tareeke se likhi gayi hai, aur yahan variables ko parse nahi kiya jaata.
MYSTRING;

?>
