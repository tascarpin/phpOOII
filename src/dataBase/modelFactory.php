<?php

function produtoFactory($gerador){
    return array(
        'nome'=>function() use($gerador){return $gerador->name();},
        'descricao'=>function() use($gerador){return $gerador->paragraph();},
        'precoCusto'=>function() use($gerador){return $gerador->randomfloat();},
        'precoVenda'=>function() use($gerador){return $gerador->randomfloat();},
        'fornecedor'=>function() use($gerador){return $gerador->name();},
        'tipo'=>function() use($gerador){return $gerador->randomElement(array('Salgado', 'Bebida'));},
        'status'=>function() use($gerador){return $gerador->randomElement(array('ATIVO', 'INATIVO'));}
    );
};