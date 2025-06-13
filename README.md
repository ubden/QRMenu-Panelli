# QRMenu-Panelli

Bu repoda basit bir **QR kodlu menü sistemi** bulunmaktadır. Her restoran için ayrı bir klasör oluşturulur ve bu klasör içindeki dosyalar menüyü görüntülemek ve düzenlemek için gerekli tüm yapıyı içerir.

## İçerik
- **`restoranadi/restoranadi.html`** – JSON dosyasından okuduğu verilerle menüyü kullanıcıya sunar.
- **`restoranadi/admin.html`** – Şifreli giriş ile menüdeki kategori ve ürünleri düzenleyebileceğiniz yönetim paneli.
- **`restoranadi/restoranadi.json`** – Varsayılan menü verilerinin saklandığı JSON dosyası.

## Kullanım
1. Her restoran klasörü içerisinde `<restoran>/<restoran>.html` dosyasını açarak menüyü görüntüleyebilirsiniz. Menü verilerini değiştirmek için aynı klasördeki `<restoran>.json` dosyasını düzenlemeniz yeterlidir.
2. Yönetim paneli için `<restoran>/admin.html` dosyasını açın. Giriş yaptıktan sonra kategorileri ve ürünleri düzenleyebilir, güncel verileri JSON olarak indirip sunucunuza yükleyebilirsiniz.
3. Proje yalnızca statik dosyalardan oluşur; bu nedenle herhangi bir sunucu kurulumu gerekmez. Dosyaları bir web sunucusuna kopyalamanız yeterlidir.

## Demo
Tüm restoran menülerini listeleyen tanıtım sayfası kök dizindeki `index.html` dosyasıdır. Sayfa, `restaurants.json` dosyasından aldığı bilgilere göre menüleri listeler.

## İletişim
Herhangi bir sorunuz olursa **0850 305 09 19** numarası üzerinden bize ulaşabilirsiniz.
