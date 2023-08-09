# TESTE - BACKEND

## Especificações do Projeto
- [PHP 8.1](https://www.php.net/releases/8.1/en.php)
- [Laravel 9](https://laravel.com/docs/9.x/releases) 
- [L5](https://github.com/andersao/l5-repository)

## Dependencias:
-   Docker e docker-compose
-   Instalaçao do Make (Opcional)
-   Clone do frontend (https://github.com/EnzoGamaDS/test-frontend) (Opcional)

### OBJS: Caso não queria usar o front comentar seu container no docker-compose.

## Instalação

### Instale o MAKE
Para simplificar a ultilizaçao do docker recomendo baixar o make e assim seguir os proximos passos.
Caso nao queria instalar o make, pode realizar os comandos docker diretos manualmente. Para isso vc deve seguir a ordem dos comandos descristas no arquivo makefile.


### criei o .env
```bash
Copiar o arquivo .env.exemplo para .env
```

### Instale a aplicaçao
Execute o comando abaixo
```bash
make install
```

## Outros Comandos

### Para levantar os containers
Execute o comando abaixo
```bash
make up
```

### Para derrubar container
Execute o comando abaixo
```bash
make down
```

### Para executar migrate e seed
Execute o comando abaixo
```bash
make migrate
```

### Para limpar o cache
Execute o comando abaixo
```bash
make clear
```

### Para iniciar o bash e executar comandos especificos
Execute o comando abaixo
```bash
make bash
```

### Para criar uma entidade execute dentro do bash
Execute o comando abaixo
```
php artisan make:entity NomeDaEntidade
```

#### outros comandos veja o makefile.





