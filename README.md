# yii2-takim-modul
Takım Modülü

# Hakkında
Bu modül aracılığıyla takıma futbolcu eklenebilir.

# Kurulum

Modül kurulumu vagrant ve yii2-advanced template'i üzerinden anlatılacaktır. Modül kurulumu için öncelikle vagrant üzerinde çalışan yii2-advanced kurulumunu gerçekleştiriniz.

ssh veya vagrant ssh ile vagrant üzerinde yii projenizin ana dizinine gidiniz.(Örneğin /var/www/advanced)

```
 composer require --prefer-dist mustafaaktas0/yii2-takim-modul "dev-main"
 ```

 komutu ile packagist üzerinden modül kurulumunu gerçekleştiriniz.
    
Daha sonrasında yii projenizin ana dizininde backend\config\main.php dosyasını düzenlemek için açınız. Aşağıda gösterildiği şekilde düzenlemeyi yapınız.

```
    'modules' => [
        'futbolcu' => [
            'class' => 'frontend\modules\futbolcu\Futbolcu',
        ],
    ],

 ```

Modülün çalışabilmesi için son olarak migration işleminin gerçekleştirilmesi gereklidir.

ssh bağlantısı ile vagrant üzerinde proje ana dizinindeyken alttaki komut çalıştırılmalıdır.

```
    php yii migrate/up --migrationPath=@vendor/mustafaaktas0/yii2-takim-modul/src/migrations
 ```

 Artık migration işlemimiz gerçekleştirilmiştir. Modülümüz çalışır hale gelmiştir.

 Modülü test etmek için tarayıcınızda 

```
    siteAdresi/frontend/web/index.php?r=futbolcu/oyuncu
```
 adresine gidiniz. Modül anasayfasını karşınızda göreceksiniz.



## Migrations

Modül içerisindeki migration dosyasında modül içerisinde kullanılacak 2 adet tablo oluşturulmuştur. Tablolar arasında foreign key ile ilişki kurulmuştur ve anahtar değerler için indekslemeler yapılmıştır. Takım ve futbolcular için 2 adet tablo bulunmaktadır.  1 adet foreign key kullanılmıştır.


