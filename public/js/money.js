document.addEventListener("DOMContentLoaded", function () {
    const tabButtons = document.querySelectorAll(".tab-button");
    const tabContents = document.querySelectorAll(".tab-content");

    tabButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const target = btn.getAttribute("data-tab-target");

            // Hapus kelas aktif
            tabButtons.forEach((b) => {
                b.classList.remove(
                    "text-blue-600",
                    "border-blue-600",
                    "border-b-2"
                );
                b.classList.add("text-gray-500", "hover:text-blue-600");
            });
            btn.classList.remove("text-gray-500", "hover:text-blue-600");

            btn.classList.add("text-blue-600", "border-b-2", "border-blue-600");

            // Sembunyikan semua konten
            tabContents.forEach((content) => content.classList.add("hidden"));
            tabContents.forEach((content) => content.classList.remove("block"));
            // Tampilkan konten yang sesuai
            const selectedContent = document.getElementById(`tab-${target}`);
            if (selectedContent) {
                selectedContent.classList.remove("hidden");
                selectedContent.classList.add("block");
            }
        });
    });
});
