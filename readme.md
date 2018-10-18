# Projeto simples utilizando Laravel 5.4

Projeto simples acompanhado do tutorial em vídeo do canal do Youtube ``Traversy Media`` onde é ensinado a criação e personalização de um Blog básico utilizando Controle de Acesso (``Auth``) e Upload de Imagem.

## Iniciando
É necessário algumas condições para a execução do projeto. Utilizei também de forma básica o gerenciador de pacotes do nodejs o  ``npm``

### Pré requisitos
- Composer
- PHP 7.1
- Mysql 5.x
- Nodejs

### Exaecutando o Projeto
Para iniciar o projeto realize o clone do repositório. 
    ``git@github.com:phpricardo/lsapp.git``

Entre no diretório do projeto e execute os seguintes comandos em sequencia:
- composer install
- npm i

Logo após renomeie o arquivo ``.env.exampe`` para apenas ``.env`` e adicione as configurações de banco.

    DB_DATABASE=nome_do_seu_banco
    DB_USERNAME=seu_usuario_do_banco
    DB_PASSWORD=sua_senha_do_banco

Com a configuração de banco realizada corretamente, execute o comando:

    php artisan key:generate

E para completar o comando para migrar as tabelas para o banco:

    php artisan migrate

Finalizando execute o comando:

	php artisan serve 

Pronto o sistema já está rodando no link http://localhost:8000


#### Desenvolvedor

* **Ricardo Lima** - *Site Pessoal* - [BarbaDev](http://barbadev.com.br)