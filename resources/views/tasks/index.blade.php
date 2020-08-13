@extends('layouts.app')

@section('content')
    <div class="card">
        <h4 class="card-header">{{ trans('task.new_task') }}</h4>
        @include('common.errors')
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
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-plus"></i>{{ trans('task.add_task') }}
                    </button>
                </div>
            </div>
        </form>
    </div><br>
    @if (count($tasks) > 0)
        <div class="card">
            <h4 class="card-header">{{ trans('task.current_task') }}</h4>
            <div class="card-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>{{ trans('task.task') }}</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>
                                <td>
                                <form action=" {{ route('tasks.destroy', $task->id) }} " method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger float-right">
                                        <i class="fa fa-trash"></i> {{ trans('task.delete') }}
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
