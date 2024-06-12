</div>
</div>
</div>
</body>
<script src="<?= base_url('assets/') ?>js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/') ?>js/core/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/chartist/chartist.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/chart-circle/circles.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url('assets/') ?>js/ready.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Script untuk SweetAlert -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Menggunakan event delegation untuk menangani klik pada link dengan class delete-btn
        document.body.addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-btn')) {
                e.preventDefault();

                // Mengambil URL dari attribute href
                var url = e.target.getAttribute('href');

                // Mengambil pesan konfirmasi dari attribute data-confirm
                var confirmMessage = e.target.getAttribute('data-confirm');

                // Menampilkan SweetAlert untuk konfirmasi hapus
                Swal.fire({
                    title: 'Konfirmasi',
                    text: confirmMessage,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika dikonfirmasi, redirect ke URL hapus
                        window.location.href = url;
                    }
                });
            }
        });
    });
</script>

</html>