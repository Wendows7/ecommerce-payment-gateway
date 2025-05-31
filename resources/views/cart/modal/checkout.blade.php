<!-- Trigger Button -->
<!-- Popup Modal -->
<div id="popupForm" class="popup-modal hidden">
    <div class="popup-content animate__animated animate__zoomIn" style="max-width:600px;width:90%;padding:40px 32px;">
        <span class="close-btn" id="closePopupBtn" style="font-size:32px;top:18px;right:28px;">&times;</span>
        <h2 style="margin-bottom:10px;">Form Data Pembelian</h2>
        <p style="font-size:1.1em;color:#555;margin-bottom:24px;">
            Silakan isi form di bawah ini untuk melanjutkan proses pembelian.<br>
            <b>Pastikan semua informasi yang diberikan akurat dan lengkap.</b>
        </p>
        <form method="POST" action="{{route('cart.createOrderDetail')}}">
            @csrf
            <input type="hidden" name="orderCode" value="{{ session('orderCode') }}">
            <div class="form-group" style="margin-bottom:18px;">
                <label for="first_name" style="font-weight:600;">Nama Depan</label>
                <input type="text" name="first_name" class="form-control" placeholder="Masukkan nama depan anda" required>
            </div>
            <div class="form-group" style="margin-bottom:18px;">
                <label for="last_name" style="font-weight:600;">Nama Belakang</label>
                <input type="text" name="last_name" class="form-control" placeholder="Masukkan nama belakang Anda" required>
            </div>
            <div class="form-group" style="margin-bottom:18px;">
                <label for="address" style="font-weight:600;">Alamat Pengiriman</label>
                <textarea name="address" class="form-control" rows="4" placeholder="Masukkan alamat lengkap pengiriman" required></textarea>
            </div>
            <div class="form-group" style="margin-bottom:24px;">
                <label for="phone" style="font-weight:600;">Nomor Telepon</label>
                <input type="tel" name="phone_number" class="form-control" placeholder="Contoh: 081234567890" required>
            </div>
            <div class="alert alert-info" style="background:#e7f3fe;color:#31708f;padding:12px 18px;border-radius:6px;margin-bottom:24px;">
                <b>Catatan:</b> Data ini akan digunakan untuk pengiriman pesanan dan
                konfirmasi pembelian. Pastikan informasi yang diberikan akurat.
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;padding:12px 20px;font-size:1.1em;">Kirim Data</button>
        </form>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
