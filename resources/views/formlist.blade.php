@extends('layouts.app')

@section('content')<div class="container">
        <div class="row justify-content-center p-3 ">
            @empty($formList)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Form Name</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formList as $forms)

                            <tr>
                                <td>{{ $forms->form_name }}</td>
                                <td><a href="{{ url('edit/' . $forms->id) }}">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="bg-danger text-white p-1">no forms</p>
                <a href="{{ url('addform') }}">Add Form</a>
            @endempty
        </div>
    </div>
@endsection
