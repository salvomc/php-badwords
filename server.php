<?php

$wordToCensor = $_GET['word-to-censor'];

$paragraph = $_GET['paragraph'];

echo "Paragraph / Paragraph Lenght"."<br>".$paragraph." / ".strlen($paragraph)."<br><br>";

$censoredParagraph = str_replace($wordToCensor, '***', $paragraph);

echo "Censored Paragraph / Censored Paragraph Lenght"."<br>".$censoredParagraph." / ".strlen($censoredParagraph);

?>
