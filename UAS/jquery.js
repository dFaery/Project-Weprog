$(document).ready(function () {
  let total = 0;
  const selectedItems = [];

  $(".btn-pilih").click(function () {
    const button = $(this);
    const card = button.closest(".card");
    const index = card.data("index");
    const makanan = button.data("makanan");
    const harga = parseInt(button.data("harga"));

    // Nonaktifkan tombol
    button.prop("disabled", true).text("Dipilih");

    // Tambahkan ke sidebar
    selectedItems.push({ makanan, harga });
    updateSidebar();

    // Update total
    total += harga;
    $("#total-harga").text(total.toLocaleString("id-ID"));
  });

  function updateSidebar() {
    const container = $("#selected-items");
    container.empty();

    selectedItems.forEach((item) => {
      container.append(`
         <div class="selected-item">
            <strong>${item.makanan}</strong><br>
            Rp ${item.harga.toLocaleString("id-ID")}
          </div>
          `);
    });
  }
});
