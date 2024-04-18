<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "fungsi/pesan_kilat.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
<script src="assets/js/color-modes.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="">
<meta name="author" content="Zefanya">
<meta name="generator" content="Hugo 0.118.2">
<title>Aplikasi Kantor Siapa</title>
<link rel="canonical" href=" https://getbootstrap.com/docs/5.3/examples/sign-in/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link rel="icon" href="assets/img/favicons/favicon.ico">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.bd-placeholder-img {
font-size: 1.125rem;
text-anchor: middle;
-webkit-user-select: none;
-moz-user-select: none;
user-select: none;
}
@media (min-width: 768px) {
.bd-placeholder-img-lg {
font-size: 3.5rem;
}
}
.b-example-divider {
    width: 100%; 
    height: 3rem;
    background-color: rgba(0, 0, 0, 1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0.5em 1.5em rgba(0, 0, 0, 1),inset 0.125em .5em rgba(0, 0, 0, 15);
}
.b-example-vr {
flex-shrink: 0;
width: 1.5rem; 
height: 100vh;
}
.bi {
vertical-align: -.125em;
fill: currentColor;
}
.nav-scroller {
position: relative;
z-index: 2;
height: 2.75rem;
overflow-y: hidden;
}
.nav-scroller .nav {
display: flex;
flex-wrap: nowrap;
padding-bottom: 1rem;
margin-top: -1px;
overflow-x: auto;
text-align: center;
white-space: nowrap;
-webkit-overflow-scrolling: touch;
}
.btn-bd-primary {
--bd-violet-bg: #712cf9;
--bd-violet-rgb: 112.520718, 44.062154, 249.437846;
--bs-btn-font-weight: 600;
--bs-btn-color: var(--bs-white);
--bs-btn-bg: var(--bd-violet-bg);
--bs-btn-border-color: var(--bd-violet-bg);
--bs-btn-hover-color: var(--bs-white);
--bs-btn-hover-bg: #652860;
--bs-btn-hover-border-color: #652800;
--bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
--bs-btn-active-color: var(--bs-btn-hover-color);
--bs-btn-active-bg: #5a23c8;
--bs-btn-active-border-color: #5a23c8;
}
.bd-mode-toggle {
    z-index: 1500;
}
.bd-mode-toggle .dropdown-menu .active .bi {
    display: black !important;
}
</style>
<link href="assets/custom/sign-in.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
<symbol id="check2" viewBox="0 0 16 16">
<path d= "M13.854 3.646a.5.5 0 0 1 0.768l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-708L6.5 
10.293l6.646-6.647a.5.5 0 0 1 .7 08 0z"
/>
</symbol>
<symbol id="circle-half" viewBox="0 0 16 16"> 
<path d= "M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 Ba8 8 0 0 1 0 16z"/>
</symbol>
<symbol id="moon-stars-fill" viewBox="0 0 16 16">
    <path d= "M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0
4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.
787 0 0 1.81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.
344 16C3.734 12 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.86
A.752.752 8 16.278Z"/>

    <path d= "M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.
924 1.097 1.097l1 162.387a.217.217 0 0 1 0 412l-1.162.387a1.
734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0
l-.387-1.162A1.734 1.734 0 0 8 9.31 6.593l-1.162-.387a.217.21
7 0 0 1 0-412l1.162-.387a1.734 1.734 0 8 0 1.897-1.897l.387-
1.162zM13.863.099a.145.145 0 0 1 0 .274l.774.258a1.156
1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.7
75a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.2
74l.744-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
</symbol>
<symbol id="sun-fill" viewBox="0 0 16 16">
    <path d= 
    M8 1234 4 8 100-8 4 4 0 0 8 0 8zM8 08.5.5 0 0 1.5.5v2a.5.
    5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0
    0 1-1 8V-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5.5h-2a.5.5 0 8 1
    8-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h
    2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 10.7671-1.414 1.415a.5.5 8 1 1-.707-.70811.414-1.414a.5.506 1.787 Ozm-9.1939.193a.5.5 8 0 16.707L3.05 13.657a.5.5 6 0 1-.707-.70711.414-1.4148.5.5 8 0 1.707 0zm9.193 2.121.5.50 8 1-.787 01-1.414-1.414.5.5 0 0 1.707-.70711.414 1.414.5.5 0 0 1 0.707zM4.464 4.465a.5.5 60 1-.707 0L2.343 3.058.5.5 6 11.707-.70711.414 1.4148.5.5 601 0.708z/>
</symbol>
</svg>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="len" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="len" height="1">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi m-auto d-none" width="le" height="1">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="ien" height="1">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    <svg class="bi s-auto d-none" width="le" height="1">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-58 theme-icon" width="iem" height="1e">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="le" height="1">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <main class="form-signin w-100 m-auto">
        <form action="cek_login.php" method="post">
            <img class="b-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Lakukan Login</h1>
            <?php
            if (isset($_SESSION['_flashdata'])) {
                echo "<br>";
                foreach ($_SESSION['_flashdata'] as $key => $val) {
                  echo get_flashdata($key);
                }
              }
            ?>
            <div class="form-floating">
                <input type="text" class="form-control" name="username" placeholder="username" required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017-2023</p>
        </form>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>