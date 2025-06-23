$(document).ready(function () {
  // Validasi saat form di-submit
  $("#foodForm").on("submit", function (e) {
    e.preventDefault();
    clearErrors();

    let isValid = true;
    const warningBox = $("#warningBox");
    warningBox.hide();

    // Validasi Kode Makanan
    const kode = $("#kodeMakanan").val().trim();
    if (kode === "") {
      showError("kodeError", "Kode makanan harus diisi");
      isValid = false;
    }

    // Validasi Nama Makanan
    const makanan = $("#makanan").val().trim();
    if (makanan === "") {
      showError("makananError", "Nama makanan harus diisi");
      isValid = false;
    }

    // Validasi Harga
    const harga = $("#harga").val().trim();
    if (harga === "") {
      showError("hargaError", "Harga harus diisi");
      isValid = false;
    } else if (!/^\d+$/.test(harga)) {
      showError("hargaError", "Harga harus berupa angka");
      isValid = false;
    }

    // Validasi URL Foto
    const foto = $("#foto").val().trim();
    if (foto === "") {
      showError("fotoError", "URL foto harus diisi");
      isValid = false;
    } else if (!isValidUrl(foto)) {
      showError("fotoError", "URL foto tidak valid");
      isValid = false;
    }

    if (!isValid) {
      warningBox
        .text(
          "Terdapat kesalahan dalam pengisian form. Silakan perbaiki terlebih dahulu."
        )
        .show();
      return false;
    }

    // Konfirmasi sebelum submit
    if (confirm("Apakah Anda yakin ingin menyimpan data makanan ini?")) {
      this.submit();
    }
  });

  // Fungsi untuk menampilkan error
  function showError(elementId, message) {
    $("#" + elementId).text(message);
  }

  // Fungsi untuk menghapus semua error
  function clearErrors() {
    $(".error").text("");
  }

  // Fungsi validasi URL
  function isValidUrl(string) {
    try {
      new URL(string);
      return true;
    } catch (_) {
      return false;
    }
  }

  // Validasi real-time untuk harga (hanya angka)
  $("#harga").on("input", function () {
    const value = $(this).val();
    if (!/^\d*$/.test(value)) {
      showError("hargaError", "Hanya boleh mengandung angka");
    } else {
      showError("hargaError", "");
    }
  });
});
