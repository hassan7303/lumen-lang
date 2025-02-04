[contributors-shield]: https://img.shields.io/github/contributors/hassan7303/lumen-lang.svg?style=for-the-badge
[contributors-url]: https://github.com/hassan7303/lumen-lang/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/hassan7303/lumen-lang.svg?style=for-the-badge&label=Fork
[forks-url]: https://github.com/hassan7303/lumen-lang/network/members
[stars-shield]: https://img.shields.io/github/stars/hassan7303/lumen-lang.svg?style=for-the-badge
[stars-url]: https://github.com/hassan7303/lumen-lang/stargazers
[license-shield]: https://img.shields.io/github/license/hassan7303/lumen-lang.svg?style=for-the-badge
[license-url]: https://github.com/hassan7303/lumen-lang/blob/master/LICENSE.md
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-blue.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/hassan-ali-askari-280bb530a/
[telegram-shield]: https://img.shields.io/badge/-Telegram-blue.svg?style=for-the-badge&logo=telegram&colorB=555
[telegram-url]: https://t.me/hassan7303
[instagram-shield]: https://img.shields.io/badge/-Instagram-red.svg?style=for-the-badge&logo=instagram&colorB=555
[instagram-url]: https://www.instagram.com/hasan_ali_askari
[github-shield]: https://img.shields.io/badge/-GitHub-black.svg?style=for-the-badge&logo=github&colorB=555
[github-url]: https://github.com/hassan7303
[email-shield]: https://img.shields.io/badge/-Email-orange.svg?style=for-the-badge&logo=gmail&colorB=555
[email-url]: mailto:hassanali7303@gmail.com
[website-shield]: https://img.shields.io/badge/-Website-blue.svg?style=for-the-badge&logo=laravel&colorB=555
[website-url]: https://hsnali.ir


[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Telegram][telegram-shield]][telegram-url]
[![Instagram][instagram-shield]][instagram-url]
[![GitHub][github-shield]][github-url]
[![Email][email-shield]][email-url]
[![Website][website-shield]][website-url]

# اضافه کردن زبان فارسی به لومن

## ۱. تنظیم مقدار پیش‌فرض زبان در `bootstrap/app.php`
فایل `bootstrap/app.php` را باز کنید و مقدار پیش‌فرض زبان را از `.env` دریافت کنید:

```php
$app->setLocale(env('APP_LOCALE', 'fa'));
```
## ۲.  مقداردهی متغیر زبان در `.env`
```
APP_LOCALE=en
```
## ۳. کپی کردن فایل‌های زبان فارسی

محتوای فایل‌های موجود در دایرکتوری fa را به مسیر resources/lang/fa انتقال دهید.

