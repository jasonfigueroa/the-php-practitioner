<?php

// Factory? - reference: The PHP Practitioner - PDO Refactoring and Collaborators (13:05)

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = require 'config.php';

return new QueryBuilder(Connection::make($config));
