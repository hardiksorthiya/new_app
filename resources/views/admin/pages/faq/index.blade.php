@extends('layouts.admin.admin')
@section('title', 'Faq')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-with-btn">
                <h3 class="content-title">@yield('title')</h3><a href="{{ url('admin/create-faq') }}"
                    class="hp-border-btn">Add New Faq</a>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="col-lg-12">
            <div class="table-responsive py-4">
                <table class="table table-hover hp-table-style">
                    <thead class="thead-dark">
                        <tr class="table-heading-text">
                            <th scope="col">Sr. No</th>
                            <th scope="col">Solution Page Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-body-hp">
                        <?php
                        $n = 1;
                        ?>
                        @foreach ($solutionpages as $row)
                            <tr>

                                <th scope="row">{{ $n }}
                                    <?php
                                    $n++;
                                    ?>
                                </th>
                                <td>{{ $row->name }}</td>
                                <td><a href="{{ url('admin/edit-faq/' .$row->name.'/'. $row->id) }}" class="hp-border-btn">Edit</a>
                            </tr>
                        @endforeach
                    </tbody>
                   
                </table>
                {{--<div>{{$page->links('pagination::bootstrap-5')}}</div> --}}
            </div>
        </div>
    </div>

@endsection

