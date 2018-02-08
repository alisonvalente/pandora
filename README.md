# PANDORA
=========

Manual de instalação para ambiente de desenvolvimento
----------------------------------------------------

## Instalação

Clone o projeto no root do servidor web

``` bash
git clone https://github.com/alisonvalente/Pandora.git
```

Instalar dependências

``` bash
composer install
```

## Configuração

Criar um VirtualHost apontando para o public do projeto(ex: `\var\www\pandora\public`)

Duplicar arquivo `.env.example`, renomear para `.env` e alterar configurações do banco. Exemplo:

```php
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3307
DB_DATABASE=pandora
DB_USERNAME=root
DB_PASSWORD=
```

Rodar as migrations e popular o banco:
``` bash
php artisan migrate
php artisan db:seed
```

Criar chave de aplicação

``` bash
php artisan key:generate
```