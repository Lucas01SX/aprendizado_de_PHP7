<?php

$pasta = "arquivos";
$permissao = "0775";


if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretório criado com sucesso!!!";


/*

Função chmode, mudar as permissões de uma pasta;

Plugins = analisar a vulnerabilidade deles e caso não tenha algo comprovado quanto a sua confiança ou o mesmo
for desconhecido, desinstale imediatamente;

Níveis de permissão:

Criando criado uma pasta via mkdir podemos definir o nível de autorização/permissão que aquela pasta terá;

as permissões vão de 0 a 7, segue suas respectivas correspondências;

0 === Sem permissão nenhuma à pasta;

1 === Permissão de executação/executar algo, chamar algo que tem na pasta para executar;

2 === Permissão de gravação, podemos gravar algo nesta pasta;

3 === Junção do 1 e 2, é possível executar e gravar;

4 === Somente leitura, não pode gravar ou execucar algo;

5 === Leitura e execução;

6 === Leitura e gravação;

7 === Leitura, execução e gravação, ou seja tudo permitido;


=====================================================================================================================

Conjunto de Permissões no Iunix

Seguem uma regra de 3 números, segue exemplos

775 === o primeiro número, ou seja, o número "7", ou "700", se refere ao dono, ou Owner, que criou aquele diretório
o que acompanha, no caso o "75", informa que ele tem permissão de Leitura, Gravação e Execução;




*/
?>