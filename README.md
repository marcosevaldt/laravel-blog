# Laravel Blog 
Para criação desta aplicação foi utilizado Laravel 5.4, para modelagem
do banco de dados foi utilizado o Eloquent, e para renderização das view o Blade.

## Instalação
Após clonar este repositório:
* Não esquecer de instalar os componentes executando o comando `composer install`
* Adicionar permissão de escrita para todo o diretório/subdiretório de `bootstrap/cache/` e `storage`
* Ajustar os dados de conexão com os banco de dados do arquivo `.env`
* Executar o comando `php artisan key:generate` dentro da aplicação
* Executar o comando de migration `sudo php artisan migrate`

## Informações gerais sobre o sistema
* Podem ser registrado novos usuários através da rota /register 
* Apenas o usuário que criou a postagem pode editar ou remover
* Não é necessário estar logado para poder ver os posts.

## Screenshots

# Postagens
![](https://lh6.googleusercontent.com/7djpTPjMk77AX-UURSNskgMCK7_7FC7-KyW6aFJleOKakm4VzNA0IZ3hzkcoNHvEAKeJNycdSqK1bCs=w1366-h637)

# Área Administrativa
![](https://lh5.googleusercontent.com/C7ZqYver0ueW4nGwPT0-P4_vfk1jOb3MgNjDmlQGnJHjjnMejl2FqQnyyOW1K7koBf5WFexDA-WmO44=w1366-h637)

# Criação do post
![](https://lh4.googleusercontent.com/cqaqsK9VwsGA9ubeo-28wKSan9ZCg8Bfg9jRxtN9gHI96DRA1HLyB5XFm15JEBUmvgu2hPSxw9AamH4=w1366-h637)

# Acesso ao post
![](https://lh5.googleusercontent.com/ONOgutMj8mfpIS2fZWRcPGbfOPa7Km6h4efVmQ6MA_9eTAv_9Lfha5lIZ8XRGZfBC7VzsC5bfOwySCE=w1366-h637)
