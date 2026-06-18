* Sistema de Cadastro de Usuários
Objetivo do Sistema

Este projeto tem como objetivo realizar o gerenciamento de usuários por meio das operações básicas de CRUD (Create, Read, Update e Delete). O sistema permite realizar login, cadastrar, listar, editar e excluir usuários cadastrados no banco de dados.

Tecnologias Utilizadas

PHP
MySQL
CSS
XAMPP
phpMyAdmin
Estrutura das Pastas

O projeto foi organizado em pastas para facilitar a manutenção do código. A pasta infra/db contém o arquivo responsável pela conexão com o banco de dados. A pasta public/component contém componentes reutilizáveis, como a barra de navegação e a tabela de usuários. A pasta public contém as páginas principais do sistema, como login, cadastro, edição e exclusão de usuários. A pasta style contém os arquivos de estilização da aplicação.

Funcionalidades
Login de Usuários

Permite que usuários cadastrados acessem o sistema através da autenticação.

Cadastro de Usuários

Permite cadastrar novos usuários informando nome de usuário, senha e confirmação de senha.

Listagem de Usuários

Exibe todos os usuários cadastrados em uma tabela organizada.

Edição de Usuários

Permite alterar informações de usuários já cadastrados.

Exclusão de Usuários

Permite remover usuários do sistema.

Encerramento de Sessão

Permite realizar logout do sistema.

Melhorias Implementadas
Validação de campos obrigatórios no cadastro;
Confirmação de senha antes do cadastro;
Mensagens de sucesso e erro mais amigáveis;
Máscara para ocultação de senhas na listagem.
Instruções para Execução do Sistema

Para executar o sistema, é necessário ter o XAMPP instalado e iniciar os serviços Apache e MySQL. Em seguida, deve-se criar o banco de dados utilizando o script SQL do projeto e configurar as informações de conexão no arquivo connect.php.

Após a configuração, copie a pasta do projeto para o diretório htdocs do XAMPP. Em seguida, acesse o sistema pelo navegador utilizando o endereço localhost. A partir disso, será possível realizar login, cadastrar usuários, visualizar registros, editar informações, excluir usuários e encerrar a sessão.
