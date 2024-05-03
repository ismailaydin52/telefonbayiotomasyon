<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../../css/master_admin.css">
</head>

<body>
  <div id="admin_body_div">
    <div class="admin_container" id="admin_left_container">
    <?php include("../left_bar.php"); ?>
    </div>
    <!--Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir.-->
    <?php include ("../../../contact/take_all_data.php");
    ?>
    <div id="admin_right_container" class="admin_container">
      <div class="admin_right_products_container">
        
        <!--Buraya Ürün Bulmak için kodlar eklendi-->
        <div id="products_search">
          <h1>ÜRÜN İŞLEMLERİ</h1>
          <form id="search_info_form" method="POST">
            <input type="text" name="search_id" id="search_id" placeholder="Ürün ID">
            <input type="text" name="search_name" id="search_name" placeholder="Ürün Adı">
            <button type="submit" id="search_info_button">Ürünü Ara</button>
          </form>
        </div>
        <!--Ürün özellikleri görüntüleme ve id isim ile bulma-->
        <div id="products_info_divs">
          <h2>ÜRÜN BİLGİLERİNİ GÖRÜNTÜLE</h2>
          <?php
          $search_id = isset($_POST['search_id']) ? $_POST['search_id'] : '';
          $search_name = isset($_POST['search_name']) ? $_POST['search_name'] : '';

          foreach ($all_data as $data) {
            $i = $data["id"];
            $display_style = 'none'; // Başlangıçta tüm divler gizlenecek
            if (empty($search_id) && empty($search_name)) {
              $display_style = 'block'; // Eğer inputlardan gelen değerler yoksa, tüm divler görünür olacak
            } else {
              if ($search_id == $data["id"] || $search_name == $data["isim"]) {
                $display_style = 'block'; // Aranan ID ile eşleşen divler görünür hale gelecek
              }
            }

            echo '<div id="search_info_cards_' . $i . '"  class="search_info_cards" style="display: ' . $display_style . '">';
            echo "Telefon ID: " . $data["id"] . "<br>";
            echo "Telefon Adı: " . $data["isim"] . "<br>";
            echo "RAM: " . $data["ram"] . " GB" . "<br>";
            echo "Ekran Boyutu: " . $data["ekran_boyutu"] . " inç" . "<br>";
            echo "Hafıza: " . $data["hafiza"] . " GB" . "<br>";
            echo "İşlemci: " . $data["islemci"] . "<br>";
            echo "<button type='submit' onclick='go_products(this)' id='go_store_button_" . $i . "' class='go_store_button'><b>Mağazada Gör</b></button>";
            echo "</div>";
            $i++;
          }

          
          ?>
        </div>
          
        <!--Ürün silme-->
        <div id="products_delete_divs">
          <h4> Ürünü Silmek İstiyor musunuz?</h4>
          <button onclick="silmeOnayi()">Evet</button>
          <button onclick="iptal()">Hayır</button>
        </div>

      </div>
      <script src="../../js/master_admin.js"></script>


</body>

</html>