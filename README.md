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
# Área Administrativa
![](http://image.ibb.co/ecdJow/dashboard.png)
# Criação do post
![](http://image.ibb.co/hOQngG/criar_post.png)
# Criação do post
![](http://image.ibb.co/iSg4Tw/blogs.png)
