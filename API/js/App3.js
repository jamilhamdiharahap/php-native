
const profil = document.querySelector('#profil');
fetch('http://localhost:8080/PROJEKANPHP/Api/Api3.php')
    .then(function (response) {
        return response.json();
    }).then(function (json) {
        console.log(json)
        for (let kabupaten of json) {
            const option = document.createElement('option');
            option.textContent = kabupaten.kabupatenNama;
            option.value = kabupaten.id;
            profil.appendChild(option);
        }

    });