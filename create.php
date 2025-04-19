<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST['nama'], $_POST['npm'], $_POST['email']) &&
        !empty(trim($_POST['nama'])) &&
        !empty(trim($_POST['npm'])) &&
        !empty(trim($_POST['email']))
    ) {
        echo "<h2>Hasil dari Other Page</h2>";
        echo "<ul>";
        echo "<li><b>Nama:</b> " . htmlspecialchars($_POST['nama']) . "</li>";
        echo "<li><b>NPM:</b> " . htmlspecialchars($_POST['npm']) . "</li>";
        echo "<li><b>Email:</b> " . htmlspecialchars($_POST['email']) . "</li>";
        echo "</ul>";
    } else {
        echo "Semua field harus diisi!";
    }
} else {
    echo "Akses halaman ini lewat form!";
}
?>
