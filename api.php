<?php

use App\Item;
use Illuminate\Http\Request;

Route::get('items', function (){
 Item::all();
 return ['nama : apel', 'harga : 1000','deskripsi : buah ini mengandung vitamin A', 'stok : 10 buah',' ', 'nama : jeruk', 'harga : 2000','deskripsi : buah ini mengandung vitamin C', 'stok : 11 buah',' ','nama : mangga', 'harga : 3000','deskripsi : buah ini mengandung vitamin C', 'stok : 12 buah'];
});
