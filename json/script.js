// objek ke json
// let mahasiswa = {
//   nama: "Dimas",
//   nim: "18.11.0031",
//   email: "dimas@gmail.com"
// }

// // console.log(mahasiswa);
// console.log(JSON.stringify(mahasiswa));


// json ke objek (ajax)
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     let mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// }
// xhr.open('GET', 'coba.json', true); // true = asyncronus
// xhr.send();

// jquery
$.getJSON('coba.json', function (data) {
  console.log(data);
});