# QRMenu-Panelli

Bu repoda basit bir **QR kodlu menü sistemi** bulunmaktadır. `nook` klasörü içerisindeki dosyalar menüyü görüntülemek ve düzenlemek için gerekli tüm yapıyı içerir.

## İçerik
- **`nook/nook.html`** – JSON dosyasından okuduğu verilerle menüyü kullanıcıya sunar.
- **`nook/admin.html`** – Şifreli giriş ile menüdeki kategori ve ürünleri düzenleyebileceğiniz yönetim paneli.
- **`nook/nook.json`** – Varsayılan menü verilerinin saklandığı JSON dosyası.

## Kullanım
1. Menü sayfasını görüntülemek için `nook/nook.html` dosyasını tarayıcınızda açın. Eğer menü verisini değiştirmek isterseniz aynı klasördeki `nook.json` dosyasını düzenleyebilirsiniz.
2. Yönetim paneli için `nook/admin.html` dosyasını açın. Kullanıcı adı ve kullanıcı adının ilk üç harfi + `123` şeklindeki şifre ile giriş yapılabilir. Düzenlemelerin ardından verileri JSON olarak indirip sunucunuza yükleyebilirsiniz.
3. Proje sadece statik dosyalardan oluştuğu için herhangi bir sunucu kurulumu gerektirmez; dosyaları bir web sunucusuna kopyalamanız yeterlidir.

## Demo
Tanıtım için hazırlanan açıklayıcı sayfaya kök dizindeki `index.html` dosyasından ulaşabilirsiniz.

## İletişim
Herhangi bir sorunuz olursa **0850 305 09 19** numarası üzerinden bize ulaşabilirsiniz.
