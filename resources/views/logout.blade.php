
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Logout - Gema Music School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card text-center" style="min-width:320px;">
        <div class="card-body">
            <div id="confirmBox">
                <p class="mb-4 mt-2">Apakah anda yakin keluar dari akun ini?</p>
                <button class="btn btn-yellow me-2" onclick="logoutNow()">Iya</button>
                <button class="btn btn-secondary" onclick="cancelLogout()">Tidak</button>
            </div>
            <div id="logoutMsg" style="display:none;">
                <p class="mb-4 mt-2">Terima Kasih<br>Anda telah logout 🎉</p>
                <a href="{{ url('/') }}" class="btn btn-yellow">OK</a>
            </div>
        </div>
    </div>
    <script>
        function logoutNow() {
            document.getElementById('confirmBox').style.display = 'none';
            document.getElementById('logoutMsg').style.display = 'block';
        }
        function cancelLogout() {
            window.location.href = "{{ url('/') }}";
        }
    </script>
</body>

</html>