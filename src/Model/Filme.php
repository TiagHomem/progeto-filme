<?php
namespace APP\Model;
class Filme{
    public string $titulo;
    public int $duracao;
    public Generodofilme $generodofilme;
    public int $anodelancamento;
    public diretor $diretor;
    public record $record;

    public function __construct(
        string $titulo,
        int $duracao,
        Generodofilme $generodofilme,
        int $anodelancamento,
        Diretor $diretor,
        Record $record
    )
    {
        $this->titulo = $titulo;
        $this->duracao = $duracao;
        $this->generodofilme = $generodofilme;
        $this->anodelancamento = $anodelancamento;
        $this->diretor = $diretor;
        $this->record = $record;
    }

}