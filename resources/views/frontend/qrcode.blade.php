{{-- <img src="{{asset('storage/some.svg')}}" alt="">

<a href="{{asset('storage/some.svg')}}" download="w3logo"> some</a> --}}

{{-- <img src="{!! QrCode::size(100)->generate(Request::url()); !!}" download="w3logo"> --}}
{{-- <a href="{{asset('storage/'.$id.'svg')}}" download="ontest">Download</a> --}}



{{-- <a href="{{asset('storage/some.svg')}}" download="ontest">Download</a> --}}

{{-- <a href="{{asset('storage/'.$id.'.svg')}}" download="{{$id}}">Download</a> --}}


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
              <div class="col-md-6 offset-3">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">QR Code</h4>
                  </div>
                  <div class="card-body">
                    <img src="{{asset('storage/'.$id.'.png')}}" alt="">
                    <br>

                    <a href="{{asset('storage/'.$id.'.png')}}" class="btn btn-primary my-2" download="{{$id}}">Download</a>
                  </div>
                </div>
              </div>
            </div>
          </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
