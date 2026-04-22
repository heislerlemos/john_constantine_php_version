
# Constantine

![constantine](/public/img/2024-11-07_15-49.png)

Project developed for the school work of the 2nd semester Informatics Engineering Lusiada.

This app is used to search for information about the country's universities to avoid the inconvenience of the student having to stand in line so that he can receive information
## Installation

Install my-project with npm

```bash
cd john_constantine_php_version
php artisan serve --port=8080
```

Dependencias
Mariadb,Npm,Laravel,Composer,Bulma

Será necessario configurar conexão com a base de dados na pasta .env.

Dica*

Quando baixar o clone do repositorio terá que configurar o banco de dados 

Primeiro verifique os logs e adicione a configuração da base dados dentro do projecto raiz 

```bash
vim .env

# logs
APP_DEBUG=true       
APP_LOG=single  
APP_LOG_LEVEL=debug  
 
# database
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nome_da_base_de_dados
DB_USERNAME=user_da_base_dados
DB_PASSWORD=password_do_user

# app key gerado com o comandando
# php -r "echo 'base64:' . base64_encode(random_bytes(32)) . PHP_EOL;"

APP_KEY=base64:t7LE8iajT5xWkgQzlYRiztL50lLluOXtWweJk3BOyiU=

```

De seguida popuralize o website 

```bash
php artisan db:seed  --class=Centro_de_formacaoSeeder
php artisan db:seed  --class=CursoSeeder

```


## Reconhecimentos

- [Designer UI/UX](https://www.linkedin.com/in/euclides-cusso-767214214/)
- [Programador](https://www.linkedin.com/in/heisler-stlano-969624146/)
- [Marketing](https://www.linkedin.com/in/lissandro-cambiona-82957a2b4/)





## Autores

- [Universidade @ula](https://ula.co.ao/Home)
- [Professora @daniela](https://www.linkedin.com/in/daniela-guerreiro-de-lima-3641a44b)


