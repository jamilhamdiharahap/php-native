

const awal = document.querySelector('#awal');
const tujuan = document.querySelector("#tujuan");
const dari = document.querySelector("#dari");
const ke = document.querySelector("#ke");
const berat = document.querySelector('#kg');
const tabel = document.querySelector("#tampil");
const button = document.querySelector("#button");
const thead = document.createElement('thead');
const tbody = document.createElement('tbody');

const th = ["Layanan", "Tarif", "Estimasi"];

awal.oninput = function () {
    fetch('http://localhost:8080/PROJEKANPHP/API/Api.php?q=' + awal.value)
        .then(function (response) {
            return response.json();
        }).then(function (json) {
            dari.innerHTML = '';
            console.log(json)
            for (let kabupaten of json) {
                const option = document.createElement('option');
                option.textContent = kabupaten.kabupatenNama;
                option.value = kabupaten.id;
                dari.appendChild(option);
            }

        });


}
tujuan.addEventListener('input', updateValue);

function updateValue(e) {
    fetch('http://localhost:8080/PROJEKANPHP/API/Api.php?q=' + tujuan.value)
        .then(function (response) {
            return response.json();
        }).then(function (json) {
            ke.innerHTML = '';
            console.log(json)
            for (let kabupaten of json) {
                const option = document.createElement('option');
                option.textContent = kabupaten.kabupatenNama;
                option.value = kabupaten.id;
                ke.appendChild(option);
            }

        });
}



button.onclick = function () {
    thead.innerHTML = "";
    for (let i = 0; i < th.length; i++) {
        const element = document.createElement('th');
        element.textContent = th[i];

        thead.appendChild(element);
    }
    tabel.appendChild(thead);
    tbody.innerHTML = "";
    fetch('http://localhost:8080/PROJEKANPHP/API/Api2.php?asal=' + dari.value + '&tujuan=' + ke.value + '&berat=' + berat.value + '')
        .then(function (response) {
            return response.json();
        }).then(function (json) {
            for (let tarif of json) {
                let tr = document.createElement('tr');
                const tdLayanan = document.createElement('td');
                const tdTarif = document.createElement('td');
                const tdEstimasi = document.createElement('td');
                tdLayanan.textContent = tarif.nama;
                let number = tarif.tarif;
                let nf = new Intl.NumberFormat('id-ID');
                tdTarif.textContent = "Rp." + nf.format(number);
                tdEstimasi.textContent = tarif.hari + ' ' + "Hari";


                tr.appendChild(tdLayanan);
                tr.appendChild(tdTarif);
                tr.appendChild(tdEstimasi);
                tbody.appendChild(tr);
            }
            tabel.appendChild(tbody);

        });
}


