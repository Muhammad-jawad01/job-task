<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>job task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 bg-primary-subtle">
                <h1 class="mt-3">Side Bar</h1>

            </div>

            <div class="col-md-9">
                <div class="body flex-grow-1 px-3">
                    <div class="container-lg">
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header"><strong>Create New Short Question</strong>
                                    </div>
                                    <div class="card-body">
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> There were some problems with your
                                                input.<br><br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ route('products.store') }}" method="POST">
                                            @csrf

                                            <div id="example1" class="mt-3">
                                                <div class="r-group">

                                                    <div class=" row">
                                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                                            <div class="form-group">
                                                                <label> Product</label>

                                                                <textarea id="test" rows="1" cols="50" type="text" name="product_name" id="vehicle_0_name"
                                                                    class="form-control" />.</textarea>

                                                            </div>

                                                        </div>
                                                        <div class="col-md-6  ">
                                                            <label> Select Category</label>

                                                            <select name="category_id" class="form-control">
                                                                <option value="">Select Category</option>
                                                                @foreach ($category as $value)
                                                                    <option value="{{ $value->id }}">
                                                                        {{ $value->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6  mt-2 ">
                                                            <label> Price</label>

                                                            <input type="text" class="form-control" name="price">
                                                        </div>

                                                    </div>



                                                </div>

                                            </div>



                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
