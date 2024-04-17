<?php

$loremIpsum = "Lorem ipsum dolor sit amet constereasipsing elit.
Vloptae nrepreheit nobis veiase commoi fugiat moletstias
impedit unde ipsum volutersi corrupt minus sit mosretenuf
quisa? hdwiwhsins eum nilia optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter:".strlen($loremIpsum). "<br>";
echo "Panjang kata: ".str_word_count($loremIpsum)."<br>";
echo "<p>".strtoupper($loremIpsum)."</p>";
echo "<p>". strtolower($loremIpsum)."</p>";
?>