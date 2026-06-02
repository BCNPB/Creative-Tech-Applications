<?php
// กำหนด URL ที่ต้องการ redirect
$target_url = "https://bcnpb.github.io/Creative-Tech-Applications/Creative%20Tech%20Applications.html";

// ใช้ header เพื่อทำการ redirect
header("Location: $target_url");

// อย่าลืมทำการ exit เพื่อหยุดการทำงานของสคริปต์หลังจากทำการ redirect
exit;
?>
