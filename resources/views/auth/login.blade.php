<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nursense</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="_token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="./img/favicon.ico" rel="icon">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/plugins/lts/css/bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

</head>

<body>

    <section>
        <div class="container px-0 mx-0">
            <div class="row">
                <div class="left-side bg-color-3 item-flex-align-center">
                    <div class="">
                        <img src="{{ asset('storage/public/images/adminlogo/adminSiteLogo.png') }}" class="">
                    </div>
                </div>
                <div class="right-side item-flex-align-center">
                    <div class="login-box">
                        <div class="item-flex-center">
                            <img src="{{ asset('assets/img/logo-title.png') }}">
                        </div>
                        <div class="login-sub-ttl text-center py-4">
                            <span>해당 페이지는 관리자 계정만 접속 가능합니다.</span>
                        </div>
                        <div class="login-form-box">
                            <form method="post" id="loginForm" class="login-form" action="{{ route('admin.login') }}">
                                @csrf
                                <div class="mb-4 position-rel">
                                    <label for="uName" class="form-label login-lbl">아이디</label>
                                    <input type="text" class="form-control height-52" name="email" id="email" placeholder="아이디를 입력하세요." onkeyup="checkPassword()">
                                    <button type="button" class="btn clear-field1" onclick="">
                                        <!-- For clear field -->
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </div>
                                <div class="mb-4 position-rel">
                                    <label for="password" class="form-label login-lbl">비밀번호</label>
                                    <input type="password" class="form-control height-52" name="password" id="password" placeholder="비밀번호를 입력하세요." onkeyup="checkPassword()">
                                    <button type="button" class="btn clear-field2" onclick="">
                                        <!-- For clear field -->
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                    <button type="button" id='togglePasswordBtn' class="btn show-hide-inputs" onclick="togglePassword()">
                                        <!-- For show -->
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" id="loginBtn" class="btn login-btn mt-2" disabled>로그인</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/plugins/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lts/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lts/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lts/js/bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        var email = document.getElementById('email');
        var password = document.getElementById("password");
        var passwordToggleBtn = document.getElementById("togglePasswordBtn");

        function checkPassword() {
            if (email.value.length > 0 && password.value.length > 0) {
                document.getElementById('loginBtn').disabled = false;
            } else {
                document.getElementById('loginBtn').disabled = true;
            }
        };

        function togglePassword() {
            if (password.type === "password") {
                password.type = "text";
                passwordToggleBtn.innerHTML = "<i class='fas fa-eye-slash'></i>";
            } else {
                password.type = "password";
                passwordToggleBtn.innerHTML = "<i class='fas fa-eye'></i>";
            }
        }
    </script>

</body>

</html>