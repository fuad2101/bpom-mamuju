<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />

        <style>
            .gradient-custom {
                /* fallback for old browsers */
                background: #6a11cb;

                /* Chrome 10-25, Safari 5.1-6 */
                background: -webkit-linear-gradient(
                    to right,
                    rgba(106, 17, 203, 1),
                    rgba(37, 117, 252, 1)
                );

                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background: linear-gradient(
                    to right,
                    rgba(106, 17, 203, 1),
                    rgba(37, 117, 252, 1)
                );
            }
        </style>
        <title>Login Page | Sisatu</title>
    </head>
    <body>
        <section class=" gradient-custom">
            <div class="container py-5 h-100">
                <div
                    class="row d-flex justify-content-center align-items-center h-100"
                >
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div
                            class="card bg-dark text-white"
                            style="border-radius: 1rem"
                        >
                            <div class="card-body p-5 text-center">
                                <div class="mt-md-4 pb-5">
                                    <img src="/img/logo-contour@3x.png" alt="" style="max-height:150px">
                                    <h2 class="fw-bold mb-2 text-uppercase">
                                        Aplikasi SiSatu <br>BPOM Mamuju
                                    </h2>
                                    <p class="text-white-50 mb-5">
                                        Silahkan login untuk melanjutkan!
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </p>

                                    <form action="{{ route('login') }}" method="post">
                                        @csrf

                                        <div
                                            class="form-outline form-white mb-4"
                                        >
                                            <input
                                                type="email"
                                                id="typeEmailX"
                                                class="form-control form-control-lg"
                                                name="email"
                                            />
                                            <label
                                                class="form-label"
                                                for="typeEmailX"
                                                >Email</label
                                            >
                                        </div>

                                        <div
                                            class="form-outline form-white mb-4"
                                        >
                                            <input
                                                type="password"
                                                id="typePasswordX"
                                                class="form-control form-control-lg"
                                                name="password"
                                            />
                                            <label
                                                class="form-label"
                                                for="typePasswordX"
                                                >Password</label
                                            >
                                        </div>

                                        <p class="small mb-5 pb-lg-2">
                                            <a class="text-white-50" href="#!"
                                                >Forgot password?</a
                                            >
                                        </p>

                                        <button
                                            class="btn btn-outline-light btn-lg px-5"
                                            type="submit"
                                        >
                                            Login
                                        </button>
                                    </form>

                                    <div
                                        class="d-flex justify-content-center text-center mt-4 pt-1"
                                    >
                                        <a href="#!" class="text-white"
                                            ><i
                                                class="fab fa-facebook-f fa-lg"
                                            ></i
                                        ></a>
                                        <a href="#!" class="text-white"
                                            ><i
                                                class="fab fa-twitter fa-lg mx-4 px-2"
                                            ></i
                                        ></a>
                                        <a href="#!" class="text-white"
                                            ><i class="fab fa-google fa-lg"></i
                                        ></a>
                                    </div>
                                </div>

                                <div>
                                    <p class="mb-0">
                                        Belum punya akun?
                                        <a
                                            href="/sign-up"
                                            class="text-white-50 fw-bold"
                                            >Daftar disini</a
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
x
