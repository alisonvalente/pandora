# PANDORA
=========

Manual de instalação para ambiente de desenvolvimento
----------------------------------------------------

Clone o projeto no root do servidor web
`git clone https://github.com/alisonvalente/Teste.git`

Instalar dependências
`composer install`

Criar VirtualHost(ex: pandora.dev)

Duplicar arquivo `.env.example`, renomear para `.env` e alterar configurações do banco. Exemplo:
```php
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3307
DB_DATABASE=pandora
DB_USERNAME=root
DB_PASSWORD=
```

Em seguida, rodar:
`php artisan migrate`

Criar chave de aplicação
`php artisan key:generate`