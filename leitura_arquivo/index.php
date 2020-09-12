<?php
require_once 'server/ArquivoModel.php';

echo (new ArquivoModel('arquivo.txt'))->ler();