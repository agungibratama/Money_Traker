document.getElementById("tanggal").valueAsDate = new Date();

document.getElementById("jumlah").addEventListener("input", function (e) {
    let value = this.value.replace(/[^0-9]/g, "");
    let numericValue = parseInt(value || 0);

    // Simpan nilai numerik ke input hidden
    document.getElementById("jumlah_numeric").value = numericValue;

    // Format tampilan
    if (value.length > 0) {
        this.value = numericValue.toLocaleString("id-ID");
    } else {
        this.value = "";
    }
});
