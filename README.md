## Pazar Yeri Uygulaması

Proje hakkında kısa açıklama yazılacak.

### Kurulum

**1)** XAMPP kurulumu:

XAMPP yerel sunucu uygulamasıdır. Dahili olarak PHP, MySQL, phpMyAdmin kurulumlarını bulundurur.
[Buradan](https://laravel.com/docs/broadcasting) Windows için indirilebilir.



**1.1)** Proje için phpmyadmin üzerinden marketplace adında bir veritabanı oluşturduk.



**2)** Git repositorysi oluşturuldu.

[Buradan](https://github.com/samedbabacan/marketplace) oluşturulabilir.



**3** Laravel kurulumu:

[Buradan](https://laravel.com/docs/8.x#installation-via-composer)

Öncesinde composer kurmak gerekiyor.

[Buradan](https://getcomposer.org/) Windows için indirilebilir.

Sonrasında git-scm kurulumu yapıyoruz.

[Buradan](https://git-scm.com/download/win) Windows için indirilebilir.

Bulunduğumuz klasör içine laravel projesi oluşturuyor

```
C:\xampp\htdocs\marketplace> composer create-project laravel/laravel .
```

**4)**  Projeyi bir klasör içinde çalıştırıp, özel domain ile ulaşmak için;

[Buradan](https://divpusher.com/blog/how-to-run-laravel-on-windows-with-xampp/) Windows için indirilebilir.

```
marketplace.test
```


**5)** .env dosyasında proje ayarlamaları yapıldı.



**6)** Breeze Kurulumu yapıldı.

[Buradan](https://laravel.com/docs/8.x/starter-kits#laravel-breeze) 

```
composer require laravel/breeze --dev

php artisan breeze:install
```

**Nodejs yüklemesi**

npm install komutu çalışmadı.
Bu aşamada ön yüz kodlarının derlenmesi için gerekli olan nodejs paket yöneticisini yüklemek gerekiyor.

[Buradan](https://nodejs.org/en/download/) indirilebilir.

Breeze kurulumuna devam ediyoruz.
Tekrar çalıştırdık. Hata vermedi.

```
npm install
```

Geliştirme ortamı için js ve css dosyalarını hazırladık.

```
npm run dev
```

Böylece giriş-kayıt vb. işlemler için projeyi hazırlamış olduk.

**7)** Giriş

Kullanıcı adı `admin` ve şifre `1234567`

