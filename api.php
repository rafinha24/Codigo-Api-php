<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get(('receita'), function (Request $request) {
    Return ['message' => 'endpoint principal que serve para porra nenhuma'];
   });

   Route::get(('cenoura'), function (Request $request) {
    Return ['message' => '
    Ingredientes:
3 cenouras médias picadas
3 ovos
1 xícara de óleo
2 xícaras de açúcar
2 xícaras de farinha de trigo
1 colher de sopa de fermento em pó
1 pitada de sal
Para a cobertura, opcional:
1/2 xícara de leite
2 colheres de sopa de manteiga
5 colheres de sopa de açúcar
7 colheres de sopa de chocolate em pó
Modo de preparo:
bolo:
Pré-aqueça o forno a 180°C.
Bata no liquidificador as cenouras, os ovos e o óleo até obter uma mistura homogênea.
Em uma tigela, misture o açúcar, a farinha, o fermento e o sal.
Adicione a mistura do liquidificador à tigela e mexa bem.
Despeje a massa em uma forma untada e enfarinhada.
Asse por cerca de 40 minutos ou até que o palito saia limpo.
cobertura
Para a cobertura, misture todos os ingredientes em uma panela e leve ao fogo baixo, mexendo até engrossar.
Despeje a cobertura sobre o bolo ainda quente.

'];
   });

   Route::get(('limao'), function (Request $request) {
    Return ['message' => '
    Ingredientes:
Para a massa:
200 g de bolacha Maria triturada
100 g de manteiga derretida

Para o recheio:
1 lata de leite condensado
1/2 xícara de suco de limão
1 lata de creme de leite

Para o merengue:
2 claras de ovo
4 colheres de sopa de açúcar

Modo de preparo:

Massa: Misture a bolacha triturada com a manteiga até formar uma massa. Forre o fundo de uma forma de torta com a massa. Leve ao forno pré-aquecido a 180°C por 10 minutos. Retire e deixe esfriar.

Recheio: Misture o leite condensado com o suco de limão até engrossar. Adicione o creme de leite e misture bem. Despeje sobre a massa já fria.

Merengue: Bata as claras em neve, adicione o açúcar e continue batendo até formar picos firmes. Coloque o merengue sobre o recheio.
Leve ao forno alto (220°C) por cerca de 5 minutos ou até dourar o merengue. Deixe esfriar e leve à geladeira antes de servir.'];
   });

   Route::get(('pudimleitecondensado'), function (Request $request) {
    Return ['message' => '
    Ingredientes:
1 lata de leite condensado
2 latas de leite (use a lata do leite condensado como medida)
3 ovos
1 xícara de açúcar (para a calda)
Modo de preparo:
Calda: Derreta o açúcar em uma panela até formar um caramelo dourado. Despeje o caramelo em uma forma de pudim, espalhando por todo o fundo.
Pudim: No liquidificador, bata o leite condensado, o leite e os ovos até ficar homogêneo. Despeje na forma caramelizada.
Cubra a forma com papel-alumínio e asse em banho-maria no forno pré-aquecido a 180°C por cerca de 1 hora e 30 minutos.
Deixe esfriar, leve à geladeira e desenforme antes de servir.'];
   });

   Route::get(('brownie'), function (Request $request) {
    Return ['message' => '
ingredientes:
5 colheres de manteiga
3 ovos
3 xicara de achocolatado
6 colheres de açúcar
12 colheres de farinha de trigo

Modo de preparo:
Derreta a manteiga e reserve
Enquanto derrete a manteiga, misture os 3 ovos e a açúcar e misture bem
Acrescente a manteiga derretida no ovo e o açúcar
Agora é só misturar o achocolatado e o trigo
Unte uma forma com manteiga e achocolatado
Leve ao forno a 180° C por 30 minutos'];
   });

   Route::get(('tortamorango'), function (Request $request) {
    Return ['message' => '
    Ingredientes:
Massa:
1 pacote de biscoito maisena
1/2 xícara de margarina
Recheio:
700 ml de leite
1 lata de leite condensado
2 colheres de essência de baunilha
4 colheres de amido de milho
2 gemas peneiradas
Cobertura:
2 caixas de morangos
1 pacote de gelatina de morango


Modo de preparo:
MASSA:
Passe os biscoitos pelo processador até formar uma farofa fina.
Coloque em uma tigela e vá misturando margarina até formar uma massa lisa.
Forre uma forma de aro removível asse por mais ou menos 15 minutos.
Reserve.
RECHEIO:
Leve ao fogo o leite, leite condensado, essência de baunilha , amido de milho e as gemas peneiradas.
Misture bem, mexa até formar um creme deixe amornar e junte o creme de leite.
Coloque o creme na forma por cima da massa já assada.
COBERTURA:
Lave bem os morangos e pique em fatias no sentido do comprimento.
Arrume por cima do creme, reserve.
Faça a gelatina com 350 ml de água deixe gelar até que fique num aspecto grossa, que escorra ainda da colher e coloque devagar por cima dos morangos.
Leve à geladeira para acabar de endurecer.
Desenforme.
Sirva gelada.'];
   });

   Route::get(('brigadeiro'), function (Request $request) {
    Return ['message' => '
Ingredientes:
1 lata de leite condensado
2 colheres de sopa de chocolate em pó
1 colher de sopa de manteiga
Chocolate granulado para decorar

Modo de preparo:
Em uma panela, coloque o leite condensado, o chocolate em pó e a manteiga.
Cozinhe em fogo médio, mexendo sempre, até que a mistura comece a desgrudar do fundo da panela.
Retire do fogo e deixe esfriar.
Com as mãos untadas, faça bolinhas e passe no chocolate granulado.
Coloque em forminhas e sirva.
'];
   });

   Route::get(('pipoca'), function (Request $request) {
    Return ['message' => '
Ingredientes:
1/2 xícara de milho para pipoca
2 colheres de sopa de óleo
1/2 xícara de açúcar
2 colheres de sopa de água
1/2 xícara de Leite Ninho (ou outro leite em pó de sua preferência)

Modo de Preparo:
Preparação da pipoca:
Em uma panela grande, aqueça o óleo em fogo médio.
Adicione o milho para pipoca e tampe a panela.
Agite a panela ocasionalmente para garantir que todos os grãos estourem.
Quando o barulho dos estouros diminuir, retire a panela do fogo e reserve a pipoca em uma tigela grande.

Preparação da calda doce:
Na mesma panela, adicione o açúcar e a água.
Cozinhe em fogo médio, mexendo sempre, até que o açúcar derreta e forme uma calda clara. Isso deve levar alguns minutos.
Quando a calda estiver pronta, despeje-a sobre a pipoca e mexa bem para que todas as pipocas fiquem cobertas pela calda.
Polvilhe o leite ninho em toda a pipoca
'];
   });

   Route::get(('palhaitaliana'), function (Request $request) {
    Return ['message' => '
Ingredientes:
1 lata de leite condensado
3 colheres de sopa de chocolate em pó (ou achocolatado)
1 colher de sopa de manteiga
1 pacote de biscoito maisena (cerca de 200g)
Açúcar para polvilhar

Modo de Preparo:
Preparação do brigadeiro:
Em uma panela, coloque o leite condensado, o chocolate em pó e a manteiga.
Cozinhe em fogo médio, mexendo sempre, até que a mistura comece a desgrudar do fundo da panela, formando um brigadeiro (ponto de brigadeiro).
Desligue o fogo e reserve.

Quebrando os biscoitos:
Quebre os biscoitos maisena em pedaços pequenos, mas não esmigalhe completamente. Você pode fazer isso colocando os biscoitos em um saco plástico e amassando com as mãos ou usando um rolo de massa.

Misturando:
Adicione os pedaços de biscoito ao brigadeiro ainda quente e misture bem, garantindo que todos os pedaços de biscoito estejam bem envolvidos pelo brigadeiro.

Montagem:
Despeje a mistura em uma forma ou assadeira untada ou forrada com papel manteiga, espalhando bem para ficar uniforme.
Pressione com uma espátula para deixar a superfície nivelada.

Resfriamento:
Deixe esfriar em temperatura ambiente ou leve à geladeira por cerca de 1 a 2 horas, até que a palha italiana esteja firme.

Finalização:
Depois de firme, corte a palha italiana em quadradinhos.
Passe os quadradinhos no açúcar para polvilhar.
'];
   });

   Route::get(('cookie'), function (Request $request) {
    Return ['message' => ' Ingredientes:
½ xícara de chá de margarina 
½ xícara de chá de açúcar normal e de açúcar mascavo 
½ xícara de chá de chocolate em pó ou uma colher de cacau em pó
1 colher de sopa de leite 
1 ovo
1 colher de chá de bicarbonato de sódio 
1 colher de chá de baunilha
1 e ½ de farinha de trigo
gotas de chocolate, quantia pessoal
modo de preparo:
colocar todos os ingredientes em um bowl e misturar,
formar pequenas bolas e colocar em uma forma untada(recomendado forma de pizza)
levar para o forno pré aquecido em 180°c , por 15 a 25 min
rendimento: +15 unidades
'];
   });

   Route::get(('bolochocolate'), function (Request $request) {
    Return ['message' => '
   Ingredientes: 
   1 xícara de chá de chocolate em pó
   1 xícara de chá de açúcar
   2 xícaras de farinha de trigo
   1 xícara de óleo 
   1 xícara de chá de leite
   1 colher de sopa de fermento em pó  
   1 colher de sopa manteiga 
   3 colheres sopa de chocolate em pó 
   3 colheres de sopa de açúcar 
   1 xícara de chá de leite 
   
   Modo de preparo do bolo e da cauda:
   Bata no liquidificador os ovos, leite, óleo, chocolate e o açúcar
   coloque em um bowl e acrescente a farinha de trigo e o fermento
   misture delicadamente 
   coloque em uma forma untada e leve para assar em forno pré-aquecido a 180°c por 30min
   Cauda
   Misture todos os ingredientes em uma panela e leve para ferver. Assim que o bolo sair do forno faça furinhos com o garfo e regue com a cauda. '];
   });


   Route::get(('bombomdeuva'), function (Request $request) {
    Return ['message' => '
   Ingredientes:
   1 lata de leite condensado
   1 colher de sopa de manteiga
   1 caixa de uvas verdes sem sementes (ou uvas rubi)
   300g de chocolate ao leite ou meio amargo (para a cobertura)
   
   Modo de Preparo:
   Preparação do brigadeiro branco:
   Em uma panela, coloque o leite condensado e a manteiga.
   Cozinhe em fogo médio, mexendo sempre, até que a mistura desgrude do fundo da panela, formando um brigadeiro branco (ponto de enrolar).
   Retire do fogo e deixe esfriar completamente.
   Preparação das uvas:
   Lave e seque bem as uvas.
   Reserve.
   
   Montagem dos bombons:
   Com as mãos untadas, pegue uma pequena porção do brigadeiro branco já frio.
   Amasse e envolva cada uva com o brigadeiro, formando uma bolinha. Certifique-se de que a uva esteja completamente coberta.
   Coloque as bolinhas em um prato e leve à geladeira por cerca de 30 minutos para firmar.
   Cobertura de chocolate:
   Derreta o chocolate em banho-maria ou no micro-ondas (em intervalos de 30 segundos, mexendo a cada intervalo para não queimar).
   Deixe o chocolate esfriar um pouco antes de usar.
   
   Banho de chocolate:
   Retire as bolinhas de uva da geladeira.
   Mergulhe cada bolinha no chocolate derretido, usando um garfo para cobrir completamente.
   Coloque as bolinhas em uma assadeira forrada com papel manteiga ou papel alumínio para secar.
   Finalização:
   Leve os bombons à geladeira por cerca de 15-20 minutos, ou até que o chocolate esteja completamente firme.
   '];
   });

   Route::get(('bombomorangotravessa'), function (Request $request) {
    Return ['message' => '
Ingredientes:

Para o creme branco:
1 lata de leite condensado
1 colher de sopa de manteiga
1 caixa de creme de leite (200g)
1 colher de chá de essência de baunilha (opcional)
Para a camada de morangos:
2 caixas de morangos (lavados, secos e cortados ao meio)
Para a ganache de chocolate:
200g de chocolate ao leite ou meio amargo (picado)
1 caixa de creme de leite (200g)

Modo de Preparo:
Preparação do creme branco:
Em uma panela, coloque o leite condensado e a manteiga.
Cozinhe em fogo médio, mexendo sempre, até a mistura engrossar e começar a desgrudar do fundo da panela (como um brigadeiro branco).
Retire do fogo e misture o creme de leite e a essência de baunilha, se estiver usando.
Despeje o creme em uma travessa e espalhe bem.
Deixe esfriar enquanto prepara as outras camadas.

Camada de morangos:
Sobre o creme branco já frio, espalhe os morangos cortados ao meio, com a parte cortada voltada para baixo.
Cubra toda a superfície do creme com os morangos.
Preparação da ganache de chocolate:
Derreta o chocolate picado em banho-maria ou no micro-ondas (em intervalos de 30 segundos, mexendo a cada intervalo para não queimar).
Após derreter, misture o creme de leite até obter uma ganache lisa e brilhante.

Montagem:
Despeje a ganache de chocolate sobre os morangos na travessa, cobrindo-os completamente.
Espalhe com uma espátula para que a ganache cubra de forma uniforme.
Finalização:
Leve à geladeira por pelo menos 2 horas para que o bombom de morango de travessa fique firme e geladinho.
'];
   });

   Route::get(('pudimchocolate'), function (Request $request) {
    Return ['message' => '
Ingredientes:

Para a calda de chocolate:
1 xícara de açúcar
1/2 xícara de água
4 colheres de sopa de chocolate em pó
Para o creme branco:
1 lata de leite condensado
2 latas de leite (use a lata de leite condensado como medida)
3 gemas de ovo
1 colher de chá de essência de baunilha (opcional)
1 lata de creme de leite sem soro
Para o creme de claras:
3 claras de ovo
5 colheres de sopa de açúcar
1 lata de creme de leite sem soro

Modo de Preparo:
1. Preparação da Calda de Chocolate:
Em uma panela, misture o açúcar, a água e o chocolate em pó.
Leve ao fogo médio, mexendo sempre, até que o açúcar se dissolva e a mistura comece a engrossar, formando uma calda lisa.
Despeje a calda em uma forma de pudim, espalhando bem pelas laterais e fundo da forma.
Reserve a forma no freezer para que a calda endureça enquanto você prepara o pudim.
2. Preparação do Creme Branco:
Em uma panela, misture o leite condensado, o leite e as gemas.
Leve ao fogo médio, mexendo sempre, até engrossar (como um mingau).
Retire do fogo, adicione a essência de baunilha (se estiver usando), e deixe esfriar.
Após esfriar, acrescente o creme de leite e misture bem.
Despeje o creme na forma caramelizada e leve ao congelador enquanto prepara o creme de claras.
3. Preparação do Creme de Claras:
Bata as claras em neve até ficarem bem firmes.
Adicione o açúcar aos poucos, batendo até formar um merengue brilhante.
Incorpore delicadamente o creme de leite ao merengue.
4. Montagem do Pudim de Sorvete:
Retire a forma do congelador e espalhe o creme de claras por cima do creme branco.
Cubra a forma com papel alumínio ou plástico filme e leve ao congelador por pelo menos 6 horas, ou até que fique bem firme.
5. Desenformar e Servir:
Para desenformar, passe uma faca pelas bordas da forma e aqueça o fundo da forma ligeiramente (pode ser com um pano quente ou passando rapidamente sobre a chama do fogão).
Vire a forma sobre um prato de servir e deixe o pudim de sorvete desenformar naturalmente.
Sirva imediatamente, aproveitando a calda de chocolate que estará cobrindo o pudim.
'];
    });
   

   
   