# Api-Racer - Previsão Financeira

Este projeto baseado em [Docker](https://www.docker.com/) e, por isso, é necessário o ter instalado para execução do ambiente.

Utiliza o projeto:

- Ambientum (https://github.com/codecasts/ambientum)

A pasta `./bin` possui diversos scripts utilitários, para configuração, execução e manipulação do ambiente de desenvolvimento da aplicação.

Para configurar e acessar o projeto, execute:

## Configurando o projeto

```
./bin/config
```
Faz a cópia dos arquivos de configuração.
```

Obs: Logo após executar o comando, inserir dados de conexão em .env.
```

### Executando containers
```
./bin/run
```
Inicia os containers Docker.

```
./bin/composer install
```
Instala as dependências php.

```
./bin/artisan key:generate
```
Cria a chave da aplicação.

```
./bin/artisan migrate:fresh --seed
```
Instala as migrações e seeders.

