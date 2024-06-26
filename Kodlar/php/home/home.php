<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <?php include '../navbar/navbar.php'?>
    <div id="advert_banner_home">
        <img src="../png/banner1.png" alt="Adverts" id="banner_home">
    </div>

    <div id="products_home">
        
    </div>
    <!--Burada footer verilmiştir-->
    <footer>
    <?php require ("../footer/footer.php"); ?>
  </footer>
  <!--Burada script verilmiştir-->
    <script>
        document.getElementById('log_in').onclick = function() {
            window.location.href='../login/login.html';
        };
        var productsFromSeller = [
    { name: 'Ürün 1', price: 100, image: '../png/iphone15_128Gb_siyah.webp' },
    { name: 'Ürün 2', price: 150, image: 'product2.jpg' },
    { name: 'Ürün 3', price: 200, image: 'product3.jpg' },
    { name: 'Ürün 4', price: 150, image: 'product6.jpg' },
    { name: 'Ürün 5', price: 200, image: 'product7.jpg' },
    { name: 'Ürün 1', price: 100, image: 'product1.jpg' },
    { name: 'Ürün 2', price: 150, image: 'product2.jpg' },
    { name: 'Ürün 3', price: 200, image: 'product3.jpg' },
    { name: 'Ürün 4', price: 150, image: 'product6.jpg' },
    { name: 'Ürün 5', price: 200, image: 'product7.jpg' }
];

// Ürünleri products_home div'i içine ekleyelim
var productsHomeDiv = document.getElementById('products_home');

productsFromSeller.forEach(function(product, index) {
    // Her bir ürün için yeni bir div oluşturalım
    var productDiv = document.createElement('div');
    productDiv.className = 'product';
    productDiv.id = 'product_' + (index + 1);

    // Ürün bilgilerini içeren HTML'i oluşturalım
    var productHTML = `
        <img src="${product.image}" alt="${product.name}">
        <h3>${product.name}</h3>
        <p>Fiyat: ${product.price} TL</p>
    `;

    // Oluşturulan HTML'i div'e ekleyelim
    productDiv.innerHTML = productHTML;

    // products_home div'i içine oluşturulan ürün div'ini ekleyelim
    productsHomeDiv.appendChild(productDiv);
});
    </script>
</body>
</html>