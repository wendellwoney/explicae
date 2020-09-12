# Objetivo
O objetivo deste repositório é a resolução das atividades propostas pelo explicaê para ingressar no time de desenvolvimento.

#Como rodar as aplicações
Todas as aplicações (leitura_api, leitura_arquivo e loteria) foram desenvolvidas em PHP 7. Não foi necessário utilização de 
banco de dados e não foi utilizado nenhum tipo de framawork para desenvolvimento do código.

Para executar de forma rápida recomendo a utilização do xampp em ambiente windows que pode ser encontrado no seguinte link
[XAMPP](https://www.apachefriends.org/pt_br/index.html).

Após a instalação basta executar o seguinte link:
```bash
http://localhost:[porta]/explicae/[aplicação]
[porta] => substituir caso o servidor php apache estiver em outra porta que não seja a 80
[aplicação] => escolher entre (leitura_api, leitura_arquivo e loteria)
```

#Aplicação loteria
Foi desenvolvida utilizando php 7, html e css. O funcionamento da aplicação se dá da seguinte forma:

1. Escolha a quantidade de apostas que deseja realizar.
2. Clique no botão Gerar Cartela(s).
3. Será exibido as cartelas com os números escolhidos pelo sistema na cor azul.
4. Clique em sortear números (essa ação irá sortear os 6 númeos vencedores).
5. O sistemas irá preencher todas as cartelas com os números sorteados na cor rosa.
    
    5.1 - Caso o número sorteado sejá o mesmo do número escolhido pelo sistema a marcação do mesmo será multicolorido tendo como coloração o rosa e o azul.
    
#Aplicação Leitura de arquivo
Foi desenvolvida utilizando php 7, html e css. O funcionamento da aplicação se dá da seguinte forma:
1. Escolha um arquivo no formato .txt.
       
      1.1 - O sistema aceita somente arquivos .txt
      
2. Clique no botão ler arquivo.

    2.1 - Na pasta da aplicação consta um arquivo .txt para teste.

3. Será exibido o conteúdo do arquivo em um box abaixo do botão ler arquivo.


#Aplicação Leitura da API
Foi desenvolvida utilizando javascript, html e css.