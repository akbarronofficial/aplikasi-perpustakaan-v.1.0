<?php
require_once 'config/config.php';
require_once 'functions.php';

date_default_timezone_set('Asia/Jakarta');
$hariwaktu = new DateTime();
if (isset($_POST["submit"])) {
    if (Pesan($_POST) > 0) {
        echo "
			<script>
				alert('Pesan berhasil terkirim!');
				document.location.href = 'index.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Pesan gagal terkirim!');
				document.location.href = 'index.php';
			</script>
		";
    }
}
