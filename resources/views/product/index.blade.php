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
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-3 bg-primary-subtle">
                <h1 class="mt-3">Side Bar</h1>

            </div>

            <div class="col-md-9">
                <div class="body flex-grow-1 px-3">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header"><strong>Products Manageament</strong>
                                        <div class="float-right ">
                                            <a class="btn btn-success btn-sm text-white"
                                                href="{{ route('products.create') }}">
                                                Create</a>


                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">


                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif
                                            @php
                                                $i = 0;
                                            @endphp
                                            <table class="table tmp table-bordered row-border" id="Long">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>product</th>
                                                        <th>category</th>
                                                        <th>price</th>


                                                        <th width="280px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($model as $key => $data)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            <td>{{ $data->product_name }}</td>
                                                            <td>{{ $data->cat()->exists() ? $data->cat->name : '' }}
                                                            </td>
                                                            <td>{{ $data->price }}</td>


                                                            <td>


                                                                <a class="btn btn-success "
                                                                    href="{{ route('products.show', $data->id) }}">Show
                                                                </a>

                                                                <a class="btn btn-primary"
                                                                    href="{{ route('products.edit', $data->id) }}"><i <i
                                                                        data-feather="edit-2"
                                                                        class="mr-50"></i><span>Edit</span></a>

                                                                <form method="POST"
                                                                    action="{{ route('products.destroy', $data->id) }}"
                                                                    style="display:inline">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" class="btn btn-danger"><i
                                                                            data-feather="edit-2"
                                                                            class="font-medium-3"></i>
                                                                        <span>Delete</span></button>


                                                                    </button>

                                                                </form>


                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>


                                        </div>
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
