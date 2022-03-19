<?php

require './controllers/AutopistaController.php';

echo json_encode( \Controllers\AutopistaController::getAutopista($_GET['id']) );
