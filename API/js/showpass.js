const pass = document.querySelector("#pass");
const show = document.querySelector("#show");

show.onclick = function () {
    if (pass.type == 'password') {
        pass.type = 'text';
    } else {
        pass.type = 'password';
    }
}