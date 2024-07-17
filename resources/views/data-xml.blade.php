<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
    @foreach($registros as $item)
    <lutador>
        <nome>{{ $item->nome }}</nome>
        <nascimento>{{ $item->nascimento }}</nascimento>
        <nacionalidade>{{ $item->nacionalidade }}</nacionalidade>
        <peso>{{ $item->peso }}</peso>
        <arte_marcial>{{ $item->arte_marcial }}</arte_marcial>
</lutador>
    @endforeach
</data>
