<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ trans('task.title') }}</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md-9">{{ trans('task.task_list') }}</h4>
                            </div>
                        </div>
                    </div><br>
                    @yield('content') 
                </div>
            </div>
        </div>
    </body>
</html>
