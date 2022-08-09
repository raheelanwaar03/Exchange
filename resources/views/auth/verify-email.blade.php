<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body class="bg-warning">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-title">
                        <h1 class="text-center text-warning">Verify Email</h1>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                        </div>
                        <hr>
                        <div class="text-center" style="font-size:26px">
                            Hello User, Pleas click on the link we just emailed to you to verify your email address. If you
                            didn't receive the email, we will gladly send you another.
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div>
                                    <x-button class="btn-dark">
                                        {{ __('Resend Verification Email') }}
                                    </x-button>
                                </div>
                            </form>

                            <form method="POST" action="{{ route('logout') }}" class="m-3">
                                @csrf

                                <button class="btn-danger" type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
