<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/Account.css">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<title>Tài Khoản</title>
</head>

<body>

<nav>
    <div class="logo">Đảo Tò Mò</div>
    <ul>
        <li><a href="../index.html">Trang chủ</a></li>
        <li><a href="../html/Server.html">Server</a></li>
        <li><a href="../html/Map.html">Map</a></li>
        <li><a href="../html/discord.html">Discord</a></li>
        <li><a href="../html/store.html">Store</a></li>
        <li><a href="../html/account.php">Tài khoản</a></li>
    </ul>
</nav>

<section class="account-page">
    <h1>Quản Lý Tài Khoản</h1>

    <div class="account-box">

        <div class="tabs">
            <button class="tab-btn active" onclick="showTab('login')">Đăng nhập</button>
            <button class="tab-btn" onclick="showTab('register')">Đăng ký</button>
        </div>

        <!-- LOGIN -->
        <form id="login" class="tab-content active" action="../php/login.php" method="POST">

            <input type="text" name="username" placeholder="Tên tài khoản" required>

            <input type="password" name="password" placeholder="Mật khẩu" required>

            <button class="account-btn">Đăng nhập</button>

        </form>

        <!-- REGISTER -->
        <form id="register" class="tab-content" action="../php/register.php" method="POST">

            <input type="text" name="username" placeholder="Tên tài khoản" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Mật khẩu" required>

            <button class="account-btn">Tạo tài khoản</button>

        </form>

    </div>
</section>

<footer>
    <div class="footer-wave"></div>
    <div class="footer-container">
        <div class="footer-col">
            <h3>Đảo Tò Mò</h3>
            <p>Cộng đồng game thủ nơi mọi người cùng khám phá, sinh tồn và giải trí.</p>
        </div>

        <div class="footer-col">
            <h3>Liên kết</h3>
            <a href="#">Trang chủ</a>
            <a href="#">Server</a>
            <a href="#">Map</a>
            <a href="#">Wiki</a>
        </div>

        <div class="footer-col">
            <h3>Cộng đồng</h3>
            <div class="socials">
                <a href="#">Discord</a>
                <a href="#">Facebook</a>
            </div>
        </div>

        <div class="footer-col">
            <h3>Thông tin</h3>
            <p>Server Minecraft sinh tồn dành cho cộng đồng Việt.</p>
        </div>
    </div>

    <div class="footer-line"></div>

    <div class="footer-bottom">
        © 2026 Đảo Tò Mò
    </div>
</footer>

<script>
function showTab(tab){
    document.querySelectorAll(".tab-content").forEach(e => e.classList.remove("active"));
    document.querySelectorAll(".tab-btn").forEach(e => e.classList.remove("active"));
    document.getElementById(tab).classList.add("active");
    event.target.classList.add("active");
}
</script>

</body>
</html>
