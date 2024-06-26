<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefon Ekleme Formu</title>
    <link rel="stylesheet" href="../../css/admin.css">
</head>

<body>
    <div id="body_div">
        <!--Sol taraftaki div burada kodlanmıştır.-->
        <div class="container" id="left_container">
            <div class="addPhoneButton" onclick="showAddPhone()">
                <h3>Ürün Ekleme</h3>
            </div>
            <div class="delPhoneButton" onclick="showDelPhone()">
                <h3>Ürün Silme</h3>
            </div>
            <div class="changePhoneButton" onclick="showFixPhone()">
                <h3>Ürün Düzenleme</h3>
            </div>
            <div class="delAcountButton" onclick="showDelAcount()">
                <h3>Hesap Silme</h3>
            </div>
            <div class="settingsAcountButton" onclick="settingAcount()">
                <h3>Hesap Ayarları</h3>
            </div>
            <div class="helpButton" onclick="help()">
                <h3>Destek</h3>
            </div>
            <div class="logOutButton" onclick="logOut()">
                <h3>Çıkış Yap</h3>
            </div>
        </div>

        <!--Sağ taraftaki div burada kodlanmıştır.-->
        <div class="container" id="right_container">
            <!--İlk Girişte Bu sayfa görüntülenir....-->
            <div id="firstStep" class="right_container">
                <h2>Admin Sayfanıza Hoş Geldiniz Düzenlemeler İçin Sol Taraftaki Menüyü kullanın</h2>
                <p>Hesap bilgileri burada yazılacak</p>
            </div>
            <!--Telefon Ekleme Kodları Burada Yer alır-->
            <div id="addPhone" class="rightDivinto">
                <form id="phoneForm" action="#">
                    <h2>Telefon Ekleme Formu</h2>
                    <div class="form-group">
                        <label for="phoneName">Telefon Adı:</label>
                        <input type="text" id="phoneName" name="phoneName" required>
                    </div>
                    <div class="form-group">
                        <label for="storage">Hafıza (GB):</label>
                        <input type="number" id="storage" name="storage" required>
                    </div>
                    <div class="form-group">
                        <label for="ram">RAM (GB):</label>
                        <input type="number" id="ram" name="ram" required>
                    </div>
                    <div class="form-group">
                        <label for="rearCameraCount">Arka Kamera Sayısı:</label>
                        <input type="number" id="rearCameraCount" name="rearCameraCount" min="1" max="4" required>
                    </div>
                    <div id="rearCameraDetails">
                        <!-- Arka kamera detayları buraya eklenecek -->
                    </div>
                    <div class="form-group">
                        <label for="frontCamera">Ön Kamera:</label>
                        <input type="text" id="frontCamera" name="frontCamera" required>
                    </div>
                    <div class="form-group">
                        <label for="batteryCapacity">Batarya Kapasitesi (mAh):</label>
                        <input type="number" id="batteryCapacity" name="batteryCapacity" required>
                    </div>
                    <div class="form-group">
                        <label for="screenSize">Ekran Boyutu (inç):</label>
                        <input type="number" id="screenSize" name="screenSize" step="0.1" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Renk:</label>
                        <input type="text" id="color" name="color" required>
                    </div>
                    <button type="submit">Telefonu Ekle</button>
                </form>
            </div>
            <!--Telefon Silme Kodları Burada Bulunmaktadır-->
            <div id="delPhone" class="rightDivinto">
                <form id="delPhoneForm">
                    <h2>Ürün Silme</h2>
                    <div class="form-group">
                        <label for="phoneCode">Telefon Kodu:</label>
                        <input type="text" name="phoneCode" id="phoneCode" required>
                    </div>
                    Telefon Bilgileri burada görüntülenecek
                    <button type="submit">Telefonu Sil</button>
                </form>
            </div>
            <!--Telefon Düzenleme Kodları Burada Bulunmaktadır-->
            <div id="fixPhone" class="rightDivinto">
                <form id="phoneForm">
                    <h2>Ürün Düzenleme</h2>
                    <div class="form-group">
                        <label for="phoneCode">Telefon Kodu</label>
                        <input type="text" id="phoneCode" name="phoneCode" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneName">Telefon Adı:</label>
                        <input type="text" id="phoneName" name="phoneName" required>
                    </div>
                    <div class="form-group">
                        <label for="storage">Hafıza (GB):</label>
                        <input type="number" id="storage" name="storage" required>
                    </div>
                    <div class="form-group">
                        <label for="ram">RAM (GB):</label>
                        <input type="number" id="ram" name="ram" required>
                    </div>
                    <div class="form-group">
                        <label for="rearCameraCount">Arka Kamera Sayısı:</label>
                        <input type="number" id="rearCameraCount" name="rearCameraCount" min="1" max="4" required>
                    </div>
                    <div id="rearCameraDetails">
                        <!-- Arka kamera detayları buraya eklenecek -->
                    </div>
                    <div class="form-group">
                        <label for="frontCamera">Ön Kamera:</label>
                        <input type="text" id="frontCamera" name="frontCamera" required>
                    </div>
                    <div class="form-group">
                        <label for="batteryCapacity">Batarya Kapasitesi (mAh):</label>
                        <input type="number" id="batteryCapacity" name="batteryCapacity" required>
                    </div>
                    <div class="form-group">
                        <label for="screenSize">Ekran Boyutu (inç):</label>
                        <input type="number" id="screenSize" name="screenSize" step="0.1" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Renk:</label>
                        <input type="text" id="color" name="color" required>
                    </div>
                    Özellikleri Düzenlenmek istenen telefonun bilgileri burada gösterilecektir.
                    <button type="submit">Telefonu Düzenle</button>
                </form>
            </div>
            <!--Hesap Silme Kodları Burada Bulunmaktadır-->
            <div id="delAcount" class="rightDivinto">
                <form id="delAcountForm">
                    <h2>Hesap Silme</h2>
                    <div id="acountIdDiv">
                        <label for="acountId">Hesap ID:</label>
                        <input type="text" name="acountId" id="acountId">
                    </div>
                    Burada kodu girilen hesabın bilgileri gözükecek.
                    <button type="submit">Hesabı Sil</button>
                </form>
            </div>
            <!--Hesap Ayarları Buradan Görüntülenecek-->
            <div id="settingsAcount" class="rightDivinto">
                <form id="setAcount">
                    <h2>Hesap Ayarları</h2>
                    <label for="name">İsim</label><br>
                    <input type="text" id="name" name="name"><br><br>

                    <label for="surname">Soyisim</label><br>
                    <input type="text" id="surname" name="surname"><br><br>

                    <label for="email">E-mail</label><br>
                    <input type="email" id="email" name="email"><br><br>

                    <label for="phone">Telefon Numarası</label><br>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        placeholder="Örn:555-555-5555"><br><br>

                    <label for="password">Şifre</label><br>
                    <input type="password" id="password" name="password"><br><br>

                    <label for="birthday">Doğum Günü</label><br>
                    <input type="date" id="birthday" name="birthday"><br><br>

                    <label for="gender">Cinsiyet</label> <br><br>
                    <input type="radio" name="man" id="man"> Erkek
                    <input type="radio" name="woman" id="woman"> Kadın <br><br>

                    <input type="submit" value="Kaydet">
                </form>
            </div>
            <!--Yardım bölümü burada yer alır-->
            <div id="help" class="rightDivinto">
                <h2>Destek</h2>
                <form id="helpForm">
                    <div class="form-group">
                        <label for="firstName">İsim:</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Soyisim:</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-posta Adresi:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefon Numarası:</label>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Açıklama:</label>
                        <textarea id="message" name="message" rows="5"></textarea>
                    </div>
                    <button type="submit">Gönder</button>
                </form>
                <div id="helpInfo">
                    <h3>İletişim Bilgileri</h3>
                    <pre>
Telefon Numarası: 555 555 55 55 
Adres: Gazi Süleyman Paşa Erkek Öğrenci Yurdu No:518 Kat: -3 Daire: -314 
Mail Adresi: kiralidogukan@gmail.com
          </pre>
                </div>
            </div>
            <!--Çıkış Yapma Kodları Buarada Yer Alır
      <div id="outAcount" class="rightDivinto">
          <h3>Çıkış Yap</h3>
        </div>-->
        </div>
    </div>

    
    <!--Burada footer verilmiştir-->
    <footer>
        <?php require ("../footer/footer.php"); ?>
    </footer>
    <!--Burada script verilmiştir-->

    <script src="../../js/admin.js"></script>
</body>

</html>