<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>users</title>
</head>

<body>
    <div class="container">
        <form action="{{ route('storeuser') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">{{__('user.name')}}</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name"
                    aria-describedby="emailHelp" placeholder="{{__('user.name')}}">
                <code> {{ $errors->first('name') }} </code>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('user.email')}}</label>
                <input type="email" class="form-control" value="{{ old('mail_address') }}" name="mail_address"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{__('user.email')}}">
                <code> {{ $errors->first('mail_address') }} </code>
            </div>
            <div class="form-group">
                <label for="address">{{__('user.address')}}</label>
                <input type="text" class="form-control" value="{{ old('address') }}" name="address" id="address"
                    aria-describedby="emailHelp" placeholder="{{__('user.address')}}">
                <code> {{ $errors->first('address') }} </code>
            </div>
            <div class="form-group">
                <label for="phone">{{__('user.phone')}}</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone"
                    aria-describedby="emailHelp" placeholder="{{__('user.phone')}}">
                <code> {{ $errors->first('phone') }} </code>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">{{__('user.password')}}</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                    placeholder="{{__('user.password')}}">
                <code> {{ $errors->first('password') }} </code>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">{{__('user.password_confirmation')}}</label>
                <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1"
                    placeholder="{{__('user.password_confirmation')}}">
                <code> {{ $errors->first('password_confirmation') }} </code>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (Session::has('status'))
    <script>
        Swal.fire({
            icon: 'error',
            title: "Error!",
            text: "{{ Session::get('status') }}",
        })
    </script>
  @endif
</body>

</html>
