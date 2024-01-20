@extends('layouts.app')
@section('page-title')
    {{__('Reminder')}}
@endsection

@section('breadcrumb')
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}"><h1>{{__('Dashboard')}}</h1></a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#">{{__('Reminder')}}</a>
        </li>
    </ul>
@endsection
@section('card-action-btn')
    @if(Gate::check('create reminder'))
        <a class="btn btn-primary btn-sm ml-20 customModal" href="#" data-size="lg"
           data-url="{{ route('reminder.create') }}"
           data-title="{{__('Create Reminder')}}"> <i class="ti-plus mr-5"></i>{{__('Create Reminder')}}</a>
    @endif
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="display dataTable cell-border datatbl-advance">
                        <thead>
                        <tr>
                            <th>{{__('Date')}}</th>
                            <th>{{__('Time')}}</th>
                            <th>{{__('Subject')}}</th>
                            <th>{{__('Created By')}}</th>
                            <th>{{__('Assigned')}}</th>
                            @if(Gate::check('edit reminder') ||  Gate::check('delete reminder') || Gate::check('show reminder'))
                                <th class="text-right">{{__('Action')}}</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reminders as $reminder)
                            <tr role="row">
                                <td>{{\Auth::user()->dateFormat($reminder->date)}}</td>
                                <td>{{\Auth::user()->timeFormat($reminder->time)}}</td>
                                <td> {{ $reminder->subject }} </td>
                                <td> {{ !empty($reminder->createdBy)?$reminder->createdBy->name:'-' }} </td>
                                <td>
                                    @foreach($reminder->users() as $user)
                                        {{$user->name}} <br>
                                    @endforeach
                                </td>
                                @if(Gate::check('edit reminder') ||  Gate::check('delete reminder') || Gate::check('show reminder'))
                                    <td class="text-right">
                                        <div class="cart-action">
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['reminder.destroy', $reminder->id]]) !!}
                                            @if(Gate::check('show reminder'))
                                                <a class="text-warning customModal" data-size="lg" data-bs-toggle="tooltip"
                                                   data-bs-original-title="{{__('Show')}}" href="#"
                                                   data-url="{{ route('reminder.show',$reminder->id) }}"
                                                   data-title="{{__('Details')}}"> <i data-feather="eye"></i></a>
                                            @endcan
                                            @if(Gate::check('edit reminder'))
                                                <a class="text-success customModal" data-size="lg" data-bs-toggle="tooltip"
                                                   data-bs-original-title="{{__('Edit')}}" href="#"
                                                   data-url="{{ route('reminder.edit',$reminder->id) }}"
                                                   data-title="{{__('Edit Reminder')}}"> <i data-feather="edit"></i></a>
                                            @endcan
                                            @if( Gate::check('delete reminder'))
                                                <a class=" text-danger confirm_dialog" data-bs-toggle="tooltip"
                                                   data-bs-original-title="{{__('Detete')}}" href="#"> <i
                                                        data-feather="trash-2"></i></a>
                                            @endcan
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

