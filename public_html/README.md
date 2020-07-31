# Intrução de Uso

Repositório do projeto:
https://github.com/cristianawktec/widepay


Dados de Acesso:

- Admin
  Pode Inserir e visualizar usuários e visualizar todas as URLs
  login: admin@awk.com
  senha: 1234

 - Usuários
   Pode Inserir URL e visualizar apenas suas urls 
   login: cristianms.awk@gmail.com
   senha: 1234

 Hospedagem na AWS


 Mais sobre o projeto
 	Desenvolvido em PHP com framework CodeIgniter e banco MySql
 	frontend usando bootstrap, jquery, ajax

================================================================================

# Desafio WideSoft

Este é o teste que disponibilizamos para aqueles que têm interesse em fazer parte do nosso
time de desenvolvedores. Após ler as especificações do teste, responda a este e-mail
informando se você topou o desafio.
O teste é composto por duas etapas, sendo que em cada uma delas o candidato terá a
oportunidade de implementar um sistema completo e independente.

Etapa 1

O candidato deve implementar um sistema que permita um usuário autenticado cadastrar
URLs e visualizar se o conteúdo referente aquela URL já foi baixado pelo segundo sistema
(veja a etapa 2), com a possibilidade de visualizar esse conteúdo.

Orientações para o desenvolvimento:

● Somente usuários cadastrados e autenticados podem cadastrar URLs e visualizar o
resultado das URLs previamente cadastradas.

● O formulário de cadastro de URL deve ter uma validação simples, para que a string
informada no campo tenha o formato de uma URL.

● As informações podem ser persistidas da maneira que o candidato julgar necessário:
banco relacional, NoSQL, arquivos, etc.

● O painel de visualização das URLs deve ter um mecanismo de refresh (estilo ajax sem
recarregar a página toda) para acompanhar atualizações de status das URLs.

● Para as URLs que já tiverem uma resposta, o sistema deve possibilitar a exibição do
resultado (corpo da resposta HTTP).

Etapa 2

O candidato deve implementar um sistema que armazene a resposta das requisições HTTP
feitas para cada URL cadastrada pelo sistema da primeira etapa. Para cada requisição a
resposta deve ser armazenada de forma que o sistema 1 tenha acesso, bem como o 'status
code' da resposta.

Orientações para o desenvolvimento

● Esse sistema não é acessível pelo usuário final, não tendo qualquer tipo de painel de
gerenciamento.

● O candidato pode implementar da maneira que julgar necessário um sistema que leia
constantemente as URLs cadastradas pelo sistema da etapa 1, faça uma requisição
HTTP à URL e armazene a resposta e o status code onde fiquem acessíveis pelo
sistema da etapa 1.
Orientações gerais

● O sistema 2 pode ser implementado como um daemon, lançando dois processos
filhos para efetivamente executar o trabalho de acessar as URLs que estão na fila e
armazenar o resultado desse acesso.

● A implementação pode ser feita em qualquer plataforma, AWS, Azure, Linode, ...
quaisquer custos decorrentes da implementação desses sistemas, até o limite de R$
100,00, será reembolsado mediante comprovação de que o candidato realizou o
teste.

● É permitido ao usuário a utilização de qualquer framework ou tecnologia que facilite
ou mesmo implemente exatamente o que está sendo requisitado nas etapas 1 e 2. Por
exemplo, Laravel Queues (https://laravel.com/docs/5.5/queues).

● Não é requisito, mas um diferencial àqueles candidatos que implementarem o sistema
1 utilizando alguma tecnologia de frontend como Bootstrap, ExtJS, React, VueJS, etc.

● Todo o código deve ser versionado através do Git e exposto no GitHub.

● Ao final do prazo ou quando o candidato finalizar alguma das etapas ou ambas ele
deve entrar em contato conosco por e-mail, enviando a URL para o repositório criado
no GitHub, sendo que o repositório deve ser público.

● Será agendado uma data para que o candidato tenha a oportunidade de explicar
como foi realizada a implementação.