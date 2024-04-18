<?php
function antiinjection($koneksi, $data) {

// Escape special characters in the data with mysqli_real_escape_string
$filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));

// Return the escaped data
return $filter_sql;
}
?>
