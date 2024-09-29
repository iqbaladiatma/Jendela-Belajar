// Mendapatkan elemen dengan ID "animateBox"
const box = document.getElementById('animateBox');
let position = 0; 
let direction = 1; 

// Fungsi untuk menjalankan animasi
function animate() {
    // Jika elemen mencapai batas kanan layar
    if (position >= window.innerWidth - 50) {
        direction = -1; 
    } else if (position <= 0) {
        direction = 1; 
    }

    // Mengubah posisi elemen berdasarkan arah
    position += 5 * direction; 
    box.style.left = position + 'px'; 

    // Meminta frame berikutnya untuk animasi agar halus
    requestAnimationFrame(animate);
};



