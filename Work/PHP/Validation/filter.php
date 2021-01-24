<?php

// print_r(filter_list());


echo filter_var( $_POST['check_str'], FILTER_SANITIZE_STRING);






?>