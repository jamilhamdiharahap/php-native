window.onload = function () {
    document.querySelector('#print').
        addEventListener("click", () => {
            const cetak = this.document.querySelector('#');
            html2pdf().from(cetak).save();
        });
}