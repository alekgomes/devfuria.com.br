Estudos de lógica com respostas (6 ao 10)
========================================

Se você caiu nesta página de paraquedas, não deixe de ver as matérias introdutórias e principalmente a anterior a esta.


Inspirado nos <a href="http://fit.faccat.br/~fpereira/apostilas/exerc_resp_alg_mar2007.pdf">91 exercícios</a> de
Flávia Pereira de Carvalho.

Exercício 6
-----------

O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do distribuidor e dos impostos
(aplicados ao custo de fábrica). Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%, escrever um
algoritmo para ler o custo de fábrica de um carro, calcular e escrever o custo final ao consumidor.

O exercício acima está transcrito na sua forma original, e já vimos que “ler o custo de fábrica” não se enquadra no
nosso ambiente (aplicações web). Mais uma vez, para fazer o sistema “ler” o valor que o usuário digitar teríamos que
desenhar um formulário HTML o que ainda é muito cedo para fazermos. Então como custo de fábrica utilize um valor
arbitrário, por exemplo, 20.000.

#### Solução (comentada)

Se você entendeu que devemos calcular a porcentagem do distribuidor sobre o custo de fábrica e guardar esse valor, em
seguida calcular a porcentagem dos impostos ainda sobre o valor de fábrica e somar ao valor guardado, então é possível
que você tenha acertado a solução.

<div class="code menor">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// Inicializar variáveis
custo_fabrica = 20.000;
perc_distribuidor = 0.28 // equivalente aos 28%
perc_impostos = 0.45 // equivalente aos 45%

// Efetuar cálculos
custo_final = custo_fabrica * perc_distribuidor
custo_final = custo_final + (custo_fabrica * perc_impostos)

// Mostrar na tela
mostrar custo_final

<em>FIM</em></pre>
</div>

Para ilustrar que programar é uma atividade criativa, mostraremos uma outra forma de resolver o mesmo problema:

<div class="code menor">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

custo_fabrica = 20.000

valorDistribuidor = custo_fabrica * 0.28

valorImpostos = custo_fabrica * 0.45

custo_final = custo_fabrica + valorDistribuidor + valorImposto

mostrar custo final

<em>FIM</em></pre>
</div>



Exercício 7
-----------

Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês mais uma comissão também
fixa para cada carro vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de
carros por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule
e escreva o salário final do vendedor.

#### Solução (comentada)

A solução do exercício proposto é a mesma do exercício anterior, mudou-se apenas o “cenário” o problema e a solução são
os mesmos. Para encontrar a solução baseie-se no exercício anterior.

Apenas como nota, casos como este em que utilizamos o mesmo código para problemas similares é muito comum. Chama-se
reutilização ou reaproveitamento de código e baseia-se em produzir um código abstrato o suficiente para resolver
problemas afins. Abstrair um código significa aumentar seu nível de generalidade, ou seja, quanto mais genérico ele for
mais fácilmente será reaproveitá-lo.



Exercício 8
-----------

Calcular o juros simples produzido pelo empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.

J = C.i.n

J = juros,
C = capital,
i = taxa de empréstimo e
n = períodos.

J = 16.000 * 0.03 * 4

J = 1.920,00


#### Solução (comentada)

Seguindo o cálculo acima o pseudocódigo ficariam assim:

<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// incializar as variáveis
juros_simples = 0
capital       = 16.000
taxa          = 3/100
periodo       = 4 // meses


// Efetuar o cálculo
juros_simlpes = capital * taxa * periodo

// Mostrar na tela
mostrar juros simples

<em>FIM</em></pre>
</div>


Exercício 9
-----------

Sendo o número total de eleitores de um município = 25.639, o número de votos brancos = 1507, nulos = 2312 e
válidos = 21.820. Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.

#### Solução (comentada)

<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

perVotosBrancos = 1507 / total_eleitores * 100

perVotosNulos = 2312 / total_eleitores * 100

perVotosValidos = 21.820 / total_eleitores * 100

mostrar perVotosBrancos, perVotosNulos, perVotosValidos

</pre>
<p>Solução do exercício 9.</p>
</div>

Há um erro no algoritmo acima, qual é? ...Descobriu? A variável total\_eleitores deve ser inicializada com o valor 25.639.


Exercício 10
------------

Faça um algoritmo, sendo a data de nascimento um valor qualquer, que expresse a idade de uma pessoa em dias.

Para tal use a data de nascimento separadamente, dia em uma variável, mês em outra e ano em outra. Utilize uma data
qualquer e faça os cálculos considerando que os anos teriam 365 dias e o meses apenas 30 dias. <em>Dica:</em> será
preciso o uso da data atual também separada por variáveis.

#### Solução (comentada)


<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

data_nasc_dia = 27
data_nasc_mes = 9
data_nasc_ano = 1977

data_atual_dia = 22
data_atual_mes = 01
data_atual_ano = 2012

anos = data_atual_ano - data_nasc_ano
total_meses = anos * 12
total_meses = total_meses + anos

</pre>
</div>