# Arquitetura Hexagonal

A **Arquitetura Hexagonal** tem o objetivo de construir sistemas que favorecem reusabilidade de código, alta coesão (códigos com menores responsabilidades), baixo acoplamento (menor dependência de outras classes), independência de tecnologia e que são mais fáceis de serem testados.

## Analogia com o mundo real
Imagine que desenvolvemos um sistema todo em cima do banco de dados MySQL e devido a mudanças de estratégia da empresa, foi decidido que o sistema não usará mais o MySQL e sim o MongoDB em seu lugar. O quão trabalho seria alterar em todos os possíveis lugares no sistema para atender essa alteração? Numa arquitetura hexagonal, isso seria tão simples como construir uma nova feature no mesmo sistema. 

## Aplicação
Não é muito raro encontrar casos de sistemas que começaram com uma determinada tecnologia e precisaram alterá-la no decorrer do projeto. Além de tecnologias de banco de dados, também e muito comum esses sistemas possuírem tecnologias de mensageria, utilizarem bibliotecas especificas para automatizar processos ou até mesmo validar regras. Para todos esses casos é bastante relevante a utilização da arquitetura hexagonal.

## Implementação
Em nosso algoritmo, dividimos o problema na pasta *original* e a solução na pasta *refactored*.
Em original, temos a representação de um modelo MVC, onde, apesar das poucas classes, se precisassemos mudar o banco de dados, por exemplo, seria necessário reescrever praticamente todo o código.
Já na restruturação, separamos todas as responsabilidades, além das regras de domínio e as tecnologias, assim, se precisarmos mudar o banco de dados, seria necessário apenas implementar o novo repositório e alterar sua instância na classe _Provider_.

## Fonte
- <a href="https://engsoftmoderna.info/artigos/arquitetura-hexagonal.html" target="_blank">Engenharia de Software Moderna</a>
- <a href="https://medium.com/tableless/desvendando-a-arquitetura-hexagonal-52c56f8824c" target="_blank">Medium</a>
