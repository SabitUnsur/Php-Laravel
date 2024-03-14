<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Düzenleme Ekranı</title>
</head>
<body>
    <h1>Ürün Düzenle</h1>
    <form action="/urunler/duzenle/{{$product->id}}" method="POST">
        @csrf <!-- Blade üzerinden giden post işlemlerinde güvenlik için csrf tokena ihtiyac vardır-->
        <input type="text" name="name" value={{$product->name}} placeholder="Ad"/>      <br/>
        <textarea name="description"  cols="30" rows="10" placeholder="Detay">{{$product->description}}</textarea>  <br/>
        <input type="number" name="price" value="{{$product->price}}" placeholder="Fiyat"/>       <br/>
        <input type="number" name="stock" value="{{$product->stock}}" placeholder="Stok Adedi"/>      <br/>
        <input type="checkbox" name="is_published" {{ $product->is_published ? 'checked' : '' }}> Satışta mı?
        <br/>
        <button>Güncelle</button>
    </form>
</body>
</html>