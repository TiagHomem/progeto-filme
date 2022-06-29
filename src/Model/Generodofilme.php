<?php
namespace APP\model;
enum Generodofilme{
    case COMÉDIA;

    public function tostring()
    {
        return $this->nome;
    }
}