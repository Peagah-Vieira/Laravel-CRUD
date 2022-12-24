<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h3 align="center">Breeze & Tailwind</h3>
  <p align="center">
    Simple CRUD using Breeze, Tailwind & mySQL
  </p>
</div>

<!-- ABOUT THE PROJECT -->
## About The Project

![Product Name Screen Shot][product-screenshot]

### Built With

* [![html.com]][html-url]
* [![php.net]][php-url]
* [![Laravel.com]][Laravel-url]
* [![Tailwind.com]][Tailwind-url]
* [![mysql.com]][mysql-url]


<!-- GETTING STARTED -->
## Getting Started

### Prerequisites
PHP v.8.1 or higher <br>
Composer v2.5.1 or higher <br>
NodeJS v18.12.0 or higher <br>

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/Peagah-Vieira/Breeze-Tailwind.git
   ```
2. Install NPM packages
   ```sh
   npm install
   ```
3. Install Composer packages
    ```sh
    composer install
    ```
4. Migrate database
    ```sh
    php artisan migrate:fresh --seed
    ```
5. Edit the `.env.example` file and enter the required values
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=mailhog
   MAIL_PORT=1025
   MAIL_USERNAME=null
   MAIL_PASSWORD=null
   MAIL_ENCRYPTION=null
   MAIL_FROM_ADDRESS="hello@example.com"
   MAIL_FROM_NAME="${APP_NAME}"
   ```
<!-- ACKNOWLEDGMENTS -->
## Contact

* [Instagram](https://www.instagram.com/pea_gah/)
* [Email](mailto:peagahvieira2003@gmail.com)
* [Linkedin](https://www.linkedin.com/in/pedro-henrique-vieira-073b62236/)


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[license-shield]: https://img.shields.io/github/license/Peagah-Vieira/Gasparzinho-Discord-BOT.svg?style=for-the-badge
[license-url]: https://github.com/github_username/repo_name/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/pedro-henrique-vieira-073b62236/
[product-screenshot]: github/img/LoginScreen.png
[html.com]: https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white
[html-url]: https://developer.mozilla.org/pt-BR/docs/Web/HTML
[php.net]: https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white
[php-url]: https://www.php.net
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Tailwind.com]: https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white
[Tailwind-url]: https://tailwindcss.com
[mysql.com]: https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white
[mysql-url]: https://www.mysql.com
