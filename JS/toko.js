let frm = document.getElementById('online');
let produkPilihan = ["TV", "AC", "KULKAS"];
let pilihanProduk = `<option value=""> Pilihan Produk ---<option>`;
for(let p in produkPilihan){
    pilihanProduk += `<option value="${produkPilihan[p]}">${produkPilihan[p]}</option>`;
}
frm.produk.innerHTML = pilihanProduk;
function transaksi(){
    let nama = frm.nama.value;
    let produk = frm.produk.value;
    let jumlah = frm.jumlah.value;

    let harga_satuan;

    switch (produk) {
        case "TV":
          harga_satuan = 2000000;
          break;
        case "AC":
          harga_satuan = 3000000;
          break;
        case "KULKAS":
          harga_satuan = 4000000;
          break;
        default:
          harga_satuan = 0;
      }

      //harga kotor 
      let hargaKotor = harga_satuan* jumlah;
      //diskon
      let diskon;
      if(produk == 'KULKAS' && jumlah >= 3) diskon = 0.3 * hargaKotor;
      else if (produk == 'AC' && jumlah >= 3) diskon = 0.2 * hargaKotor;
      else diskon = 0.1 * hargaKotor;

      let ppn = 0.1; 
      let total_ppn = ppn * (hargaKotor - diskon);
      let total_bayar = (hargaKotor - diskon) + total_ppn;

      swal(`Nama Pelanggan : ${nama}
      Produk yang dibeli : ${produk}
      Jumlah Produk yang dibeli : ${jumlah}
      Harga Produk : ${harga_satuan}
      Diskon Produk : ${diskon}
      PPN Produk : ${total_ppn}
      Total Harga Keseluruhan : ${total_bayar}
      `);
}