# Taufan
try out refactory back end

gagal migrate data yang ada di migrations folder
memasukkan data dari api.php
1. menampilkan data
aktifkan halaman dengan ketik 'php ./artisan serve' di command line
membuka postman masuk ke GET menu dan ketik http://localhost:8000/api/items lalu submit

2. menambah data :

buka api.php masukkan di dalam return kode tersebut 
Route::get('items', function (){
 Item::all();
 return ['nama : (diisi)', 'harga : (diisi)','deskripsi :(diisi)', 'stok : (diisi)'});
 
 3. menghapus data
 buka api.php hapuskan kode di dalam return kode tersebut 
 Route::get('items', function (){
 Item::all();
 return ['nama : (diisi)', 'harga : (diisi)','deskripsi :(diisi)', 'stok : (diisi)'});
