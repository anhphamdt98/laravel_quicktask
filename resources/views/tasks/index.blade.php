@extends('layouts.app')

@section('content')
    <div class="card">
        <h4 class="card-header">{{ trans('task.new_task') }}</h4>
        <form action="{{ route('tasks.index') }}" method="POST" class="form-horizontal card-body">
            @csrf
            <div class="form-group">
                <h5 for="task" class="col-sm-3 card-title">{{ trans('task.task') }}</h5>
                <div class="col-sm-12">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-btn fa-plus"></i>{{ trans('task.add_task') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
