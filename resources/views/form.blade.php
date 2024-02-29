<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       <!-- <div class="container">
            <h1 class="text-center">Registration</h1>

            <form action="{{url('/')}}/register" method="post">
                @csrf
                <pre>
                @php
                    print_r($errors->all());
                @endphp
                </pre>
            <div>
                <input name="name" type="text" placeholder="Name" class="form-control" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror</span>
            </div>
            <div>
                <input name="email" type="text" placeholder="Email" class="form-control">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <input name="password" type="text" placeholder="Password" class="form-control">
                <span class="text-danger">
                @error('password')
                {{$message}}
                @enderror
                </span>
            </div>
            <div>
                <input name="password_confirmation" type="text" placeholder="Confirm Password" class="form-control">
                <span class="text-danger">
                @error('password_confirmation')
                {{$message}}
                @enderror
                </span>
            </div>
            <div>
                <button class="btn btn-primary">Submit</button>
            </div>
            </form>
       </div> -->

       <div class="container">
            <h1 class="text-center">Registration</h1>

            <form action="{{url('/')}}/register" method="post">
                @csrf
                @php
                    $demo = 1;
                @endphp
                <x-input type="text" name="name" placeholder="Enter Your Name" :demo="$demo"/>
                <x-input type="email" name="email" placeholder="Enter Your Email"/>
                <x-input type="password" name="password" placeholder="Enter Your Password"/>
                <x-input type="password" name="password_confirmation" placeholder="Enter Confirm Password"/>
                <button class="btn btn-primary">Submit</button>
            </div>
            </form>
       </div>




        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
