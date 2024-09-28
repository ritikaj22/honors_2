<?php

require 'vendor/autoload.php';

// Fetch all contacts
$rows = selectAll('contacts');

// Include the main view to display the contacts
include 'views/index.view.php';
