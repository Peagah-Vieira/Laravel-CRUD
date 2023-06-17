# BreezeCrud

Realizando um Crud utilizando Breeze e TailwindCSS.

## Funcionalidades

- CRUD
- Multiplataforma
- Lista com Paginação
- Barra lateral e Breadcrumb

## Demonstração

![LoginScreen](https://github.com/Peagah-Vieira/Breeze-Tailwind/assets/105545343/01ca6d4c-4948-45c6-b588-a8921c91c3c9)

![Dashboard-Home](https://github.com/Peagah-Vieira/Breeze-Tailwind/assets/105545343/d1149510-80da-4176-839e-74aa9927a44c)

## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/Peagah-Vieira/BreezeCrud
```

Instale as dependências

```bash
  npm install 
  composer install
```

Inicie o servidor

```bash
  npm run dev
```

Migrar o banco de dados

```bash
  php artisan migrate:fresh --seed
```

## Variáveis de Ambiente

Para rodar esse projeto, você vai precisar adicionar as seguintes variáveis de ambiente no seu .env

```env
APP_NAME=
APP_ENV=
APP_KEY=
APP_DEBUG=
APP_URL=

DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

## Stack utilizada

**Front-end:** TailwindCSS

**Back-end:** PHP(Laravel - Breeze)

## Documentação

[TailwindCSS](https://tailwindcss.com)

[Laravel](https://laravel.com/docs/10.x/starter-kits)
