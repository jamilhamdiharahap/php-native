
const provinces = document.querySelector('#provinsi');


fetch('http://localhost:8080/PROJEKANPHP/Api/Api4.php')
    .then(function (response) {
        return response.json();
    }).then(function (json) {
        console.log(json)
        for (let provinsi of json) {
            const option = document.createElement('option');
            option.textContent = provinsi.provinsiNama;
            option.value = provinsi.id;
            provinces.appendChild(option);
        }

    });