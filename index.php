<?php

$db = require 'bootstrap.php';

require 'Artist.php';

$artists = $db->selectAll('artist');

$albums = $db->selectAll('album');

require 'index.view.php';