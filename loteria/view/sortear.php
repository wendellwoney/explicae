<?php
require_once '../server/LoteriaModel.php';

echo json_encode((new LoteriaModel($_GET['totalNumeros']))->sortrear());