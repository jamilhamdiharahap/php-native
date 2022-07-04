const pengirim = document.querySelector('#pengirim');
const tujuan = document.querySelector('#penerima');
const dari = document.querySelector('#nama1');
const ke = document.querySelector('#nama2');
const layanan1 = document.getElementById('1');
const layanan2 = document.getElementById('2');
const layanan3 = document.getElementById('3');
const layanan4 = document.getElementById('4');
const berat = document.querySelector('#kg');
const button = document.querySelector('#button');
const tabel = document.querySelector("#tabelBayar");
const thead = document.createElement('thead');
const tbody = document.createElement('tbody');
thead.classList.add('table-success');
thead.style.color = 'Black';
const th = ["Layanan", "Tarif", "pengirim", "penerima", "Estimasi"];



button.onclick = function pengiriman() {
    thead.innerHTML = "";
    for (let i = 0; i < th.length; i++) {
        const element = document.createElement('th');
        element.textContent = th[i];

        thead.appendChild(element);
    }
    tabel.appendChild(thead);
    tbody.innerHTML = "";
    let pelayanan = '';
    if (layanan1.checked == true) {
        pelayanan += layanan1.value;
        layanan1.checked = true;
    }
    else if (layanan2.checked == true) {
        pelayanan += layanan2.value;
        layanan2.checked = true;
    }
    else if (layanan3.checked == true) {
        pelayanan += layanan3.value;
        layanan3.checked = true;
    }
    else if (layanan4.checked == true) {
        pelayanan += layanan4.value;
        layanan4.checked = true;
    } else {
        pelayanan += layanan4.value;
    }
    fetch('http://localhost:8080/PROJEKANPHP/API/PengirimanApi.php?nama=' + pelayanan + '&asal=' + pengirim.value + '&tujuan=' + tujuan.value + '&berat=' + berat.value)
        .then(function (response) {
            return response.json();
        }).then(function (json) {
            console.log(json.nama);
            console.log(json.tarif);
            console.log(json.hari);
            const tr = document.createElement('tr');

            const tdLayanan = document.createElement('td');
            const tdTarif = document.createElement('td');
            const pengirim = document.createElement('td');
            const penerima = document.createElement('td');
            const tdEstimasi = document.createElement('td');
            pengirim.textContent = dari.value;
            penerima.textContent = ke.value;
            tdLayanan.textContent = json.nama;
            let number = json.tarif;
            let nf = new Intl.NumberFormat('id-ID');
            tdTarif.textContent = "Rp." + nf.format(number);
            tdEstimasi.textContent = json.hari + ' ' + "Hari";



            tr.appendChild(tdLayanan);
            tr.appendChild(tdTarif);
            tr.appendChild(pengirim);
            tr.appendChild(penerima);
            tr.appendChild(tdEstimasi);
            tbody.appendChild(tr);


            tabel.appendChild(tbody);

        });
    layanan1.checked = false;
    layanan2.checked = false;
    layanan3.checked = false;
    layanan4.checked = false;
}

