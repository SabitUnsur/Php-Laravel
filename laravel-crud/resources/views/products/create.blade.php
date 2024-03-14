<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Ekle</title>
</head>
<body>
    <h1>Ürün Ekle</h1>
    <form action="/urunler/ekle" method="POST">
        @csrf <!-- Blade üzerinden giden post işlemlerinde güvenlik için csrf tokena ihtiyac vardır-->
        <input type="text" name="name" placeholder="Ad"/>      <br/>
        <textarea name="description"  cols="30" rows="10" placeholder="Detay"></textarea>  <br/>
        <input type="number" name="price" placeholder="Fiyat"/>       <br/>
        <input type="number" name="stock" placeholder="Stok Adedi"/>      <br/>
        <input type="checkbox" name="is_published"> Satışta mı? 
        <br/>
        <button>Ekle</button>
    </form> 

</body>
</html>