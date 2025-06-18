document.addEventListener("DOMContentLoaded", () => {
    const tombolKirim = document.getElementById("submitPaymentCode");
    const inputKodePembayaran = document.getElementById("paymentCode");

    tombolKirim.addEventListener("click", () => {
        const kode = inputKodePembayaran.value.trim(); // Ambil nilai dan hapus spasi di awal/akhir

        if (kode) {
            // Dalam aplikasi nyata, Anda akan mengirimkan kode ini ke server untuk verifikasi.
            // Untuk contoh ini, kita hanya akan menampilkan alert.
            alert(
                "Kode Pembayaran Anda: " +
                    kode +
                    "\n(Fitur verifikasi belum diimplementasikan)"
            );
            // Anda juga bisa mengosongkan bidang input:
            // inputKodePembayaran.value = '';
        } else {
            alert("Mohon masukkan kode pembayaran Anda.");
        }
    });

    // Opsional: Tambahkan fungsionalitas dasar untuk dropdown (hanya placeholder)
    const dropdowns = document.querySelectorAll(".dropdown");
    dropdowns.forEach((dropdown) => {
        dropdown.addEventListener("click", (event) => {
            // Mencegah navigasi jika itu dropdown, kecuali jika itu tautan tertentu
            // event.preventDefault();
            // Dalam skenario nyata, Anda akan mengubah kelas untuk menampilkan/menyembunyikan konten dropdown
            console.log(
                `Dropdown diklik: ${dropdown.querySelector("a").textContent}`
            );
            // alert('Fungsionalitas dropdown belum sepenuhnya diimplementasikan. Ini akan menampilkan sub-menu.');
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach((dropdown) => {
        // Mendapatkan tautan utama di dalam dropdown (contoh: "Produk")
        const mainLink = dropdown.querySelector("a");

        // Mendapatkan sub-menu yang bersangkutan
        const submenu = dropdown.querySelector(".submenu");

        if (mainLink && submenu) {
            mainLink.addEventListener("click", function (event) {
                // Mencegah navigasi langsung jika sub-menu akan ditampilkan
                event.preventDefault();

                // Toggle kelas 'show-submenu' untuk menampilkan/menyembunyikan
                submenu.classList.toggle("show-submenu");

                // Menutup sub-menu lain saat satu dibuka (opsional)
                dropdowns.forEach((otherDropdown) => {
                    if (otherDropdown !== dropdown) {
                        const otherSubmenu =
                            otherDropdown.querySelector(".submenu");
                        if (otherSubmenu) {
                            otherSubmenu.classList.remove("show-submenu");
                        }
                    }
                });
            });
        }
    });

    // Menutup sub-menu saat mengklik di luar menu (sangat disarankan)
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".main-nav")) {
            // Jika klik di luar area .main-nav
            dropdowns.forEach((dropdown) => {
                const submenu = dropdown.querySelector(".submenu");
                if (submenu) {
                    submenu.classList.remove("show-submenu");
                }
            });
        }
    });
});
