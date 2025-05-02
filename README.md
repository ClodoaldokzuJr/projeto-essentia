# Sistema de Cadastro de Clientes (Laravel)

##  Funcionalidades

- Cadastro de clientes com Nome, E-mail, Telefone e Foto
- Visualização de detalhes com foto em destaque
- Edição com imagem ampliada
- Exclusão de clientes com botão estilizado

##  Requisitos

- PHP 8.1 ou superior
- Composer
- MySQL
- Laravel 10

##  Instalação

1. Clone o repositório.

2. Baixe composer e instale.
    - no terminal dentro da pasta que foi criada a aplicação execute: composer install

3. Crie o arquivo .env.

4. Gere a key da aplicação .
    - no terminal dentro da pasta que foi criada a aplicação execute: php artisan key:generate

5. No arquivo .env configure o Banco de dados.
    - DB_CONNECTION=mysql
      DB_HOST=SEUHOST
      DB_PORT=SUAPORT
      DB_DATABASE=SEUDATABASE
      DB_USERNAME=SEUUSERNAME
      DB_PASSWORD=SUASENHA

6. Rode as migraçoes:
    - no terminal dentro da pasta que foi criada a aplicação execute: php artisan migrate

7. Inicie o servidor:
    - no terminal dentro da pasta que foi criada a aplicação execute: php artisan serve
