document.addEventListener("DOMContentLoaded", function () {
    const tabButtons = document.querySelectorAll(".tab-button");
    const tabContents = document.querySelectorAll(".tab-content");

    function activateTab(target) {
        // Nonaktifkan semua tab
        tabButtons.forEach((b) => {
            b.classList.remove(
                "text-blue-600",
                "border-blue-600",
                "border-b-2"
            );
            b.classList.add("text-gray-500", "hover:text-blue-600");
        });

        // Aktifkan tab yang dipilih
        const btn = document.querySelector(`[data-tab-target="${target}"]`);
        if (btn) {
            btn.classList.remove("text-gray-500", "hover:text-blue-600");
            btn.classList.add("text-blue-600", "border-b-2", "border-blue-600");
        }

        // Sembunyikan semua konten
        tabContents.forEach((content) => {
            content.classList.add("hidden");
            content.classList.remove("block");
        });

        // Tampilkan konten yang sesuai
        const selectedContent = document.getElementById(`tab-${target}`);
        if (selectedContent) {
            selectedContent.classList.remove("hidden");
            selectedContent.classList.add("block");
        }
    }

    tabButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const target = btn.getAttribute("data-tab-target");
            window.location.hash = target; // Simpan tab di hash URL
            activateTab(target);
        });
    });

    tabButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const target = btn.getAttribute("data-tab-target");
            activateTab(target);
            location.hash = target;
        });
    });
    // Saat halaman dimuat, cek apakah ada hash di URL
    // Saat load halaman, cek fragment URL dan aktifkan tab sesuai
    const hash = window.location.hash.replace("#", "");
    if (hash === "masuk" || hash === "keluar") {
        activateTab(hash);
    } else {
        // default aktif tab masuk
        activateTab("semua");
    }
});
