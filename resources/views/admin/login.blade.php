<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets_admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets_admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets_admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets_admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets_admin/build/css/custom.min.css') }}" rel="stylesheet">
     {{-- notif sipman data --}}
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('actionLogin') }}" method="POST">
                        @csrf
                        <h1>Login Loker</h1>
                        @if (session('error'))
                        <div class="alert alert-danger">
                            <b>Sorry</b> {{ session('error') }}
                        </div>
                        @elseif (session('success'))
                        <div class="alert alert-success">
                             {{ session('success') }}
                        </div>
                        @endif
                        <div>
                            <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" autofocus placeholder="Email"="" required/>
                            @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control @error('password') is-invalid
                            @enderror" placeholder="Password"
                                required="" />
                                @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div>
                            {{-- <a class="btn btn-default submit" href="index.html">Log in</a> --}}
                            {{-- <button type="submit" class="btn btn-default btn-block">Login</button> --}}
                            <button type="submit" class="btn btn-default btn-sm">Login</button>
                            {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                {{-- <a href="#signup" class="to_register"> Create Account </a> --}}
                                <a href="/registrasi" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Login</h1>
                                <p>©2022 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form action="{{ route('actionRegistrasi') }}" method="post" enctype="multipart/form-data">
                        <h1>Registrasi Account</h1>
                        @csrf
                        @if (session('succes'))
                        <div class="alert alert-success">
                            <b>Sorry</b> {{ session('success') }}
                        </div>
                        @endif
                        <div>
                            <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="name" required="" />
                               <!-- error message untuk title -->
                               @error('name')
                               <div class="alert alert-danger mt-2">
                                   {{ $message }}
                               </div>
                               @enderror
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control @error('email') is-invalid
                                @enderror" value="{{ old('email') }}" placeholder="Email" required="" />
                                <!-- error message untuk title -->
                                @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control @error('password') is-invalid
                                @enderror" value="{{ old('password') }}" placeholder="Password" required="" />
                                <!-- error message untuk title -->
                                @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div>
                            <select name="role"id="" class="form-control">
                                <option value="">-- mendaftar sebagai --</option>
                                <option value="hrd">hrd perusahaan</option>
                                <option value="user">calon pelamar kerja</option>
                            </select>
                            {{-- <input type="text" name="" placeholder="role"> --}}
                        </div>
                        <div>
                            {{-- <a class="btn btn-default submit">Submit</a> --}}
                            <br>
                            <button type="submit" class="btn btn-default btn-sm">Daftar</button>

                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i cla  ss="fa fa-paw"></i> Registrasi!</h1>
                                <p>©2022 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>


      {{-- notif simpan data --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    //message with toastr
    @if(session()->has('success'))

    toastr.success('{{ session(' success ') }}', '{{session('success')}}');

    @elseif(session()->has('error'))

    toastr.error('{{ session(' error ') }}', '{{session('error')}}');

    @endif
</script>
</body>

</html>
