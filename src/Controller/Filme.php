<?php
namespace APP\Controller;

require "../../vendor/autoload.php";

use APP\Model\Filme;
use APP\model\Diretor;
use APP\Model\record;
use APP\Model\Generodofilme;

$diretor_one = new Diretor("Roberto Santucci", 35,"888888-8888");
$record_one = new Record(
    nome:"Até que a Sorte Nos Separe",
    phone:"888888-8888"
);
$Filme_one = new Filme(
    anodelancamento:2012,
    generodofilme: Generodofilme::COMÉDIA,
    diretor: $diretor_one,
    record:$record_one,
    duracao:144,
    titulo: "Até que a Sorte Nos Separe"
);
echo "<pre>";
var_dump($Filme_one);
echo "</pres>";