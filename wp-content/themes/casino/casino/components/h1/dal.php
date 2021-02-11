<?php
$data = [];
$data['title'] = get_the_title();
if(!empty($data['title'])) include 'view.php';