@extends('layouts.app')

@section('content')
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}<br><a href="{{ route('contact.create') }}">{{  __('Create Contact')  }}</a></div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <div class="card-body">
                    <div class="row">
                        <table>
                            <tr>
                                <th>title</th>
                                <th>Subtitle</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($contacts as $contact)         
                           <tr>
                                <td>{{ $contact->title }} </td>
                                <td>{{ $contact->subtitle }}</td>
                                <td><a href="{{ route('contact.edit',$contact->id) }}">Edit</a></td>
                                <td>
                                    <!-- destroy with post method in anchor tab-->
                                    <i class="icon-trash"></i>
                                    <a style="color:black" 
                                        href="{{ route('contact.destroy', ['contact' => $contact->id]) }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-form-{{ $contact->id }}').submit();">
                                        delete
                                    </a>

                                    <form id="delete-form-{{ $contact->id }}" action="{{ route('contact.destroy', ['contact' => $contact->id]) }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
