---
layout:      materia-fork-sql
title:       Experimentando a instrução "select"
description: Seus primeiros passos com a instrução 'select'
---


O MySQL possue algumas funções que nos auxiliam. Uma delas é a `version()`. Ela retorna a versão do MySQL. 

Mas não podemos digitar apenas `version()`, pois isso gerará um [erro 1064](/sql/mysql-erro-1064), precisamos utilizar 
o comando `SELECT` junto, dessa forma:

    SELECT version();

A instrução acima exibirá:

    +------------------+
    | version()        |
    +------------------+
    | 5.5.38-0+wheezy1 |
    +------------------+

Dica: Mantenha sempre seu sistema atualizado com a última versão. Faça disso um hábito. 
Depois eu mostrarei como atualizar o MySQL (para Linux, é óbvio).

Também é posssível utilizar o `SELECT` dessa forma:

    SELECT 5 * 2;

A instrução acima exibirá:

    +-------+
    | 5 * 2 |
    +-------+
    |    10 |
    +-------+

Repare que ele traz o cálculo como sendo o nome do campo. Agora, tente dessa forma:

    SELECT 5 * 2 AS foo;

O `AS` é um "alias" (apelido). Em português, "as" siginifica "como". Se "traduzirmos" o statement para a língua portuguêsa,
teremos:

    SELCIONE o resultado de 5 * 2 com o apelido de "foo";


Experimente mais...
---

"Experimentar" faz parte do aprendizado, então o que será que os statement abaixo produzem?

    SELECT VERSION();
    SELECT CURRENT_DATE();
    SELECT NOW();
    SELECT USER();



Case INsensitive
---

O MySql não faz distinção entra caixa alta ou baixa.

Isso significa que `SELECT now();` é igual a `select NOW();` que é igual a `SeLeCt NoW();`.