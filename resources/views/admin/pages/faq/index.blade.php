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
                            <!-- <div class="modal fade" id="deletePage" tabindex="-1" aria-labelledby="deletePageLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deletePageLabel">Delete Page</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form action="{{url('admin/iconbox/' . $row->id . '/delete')}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                      <input type="hidden" name="id">
                                      Are you sure you want to delete this page?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Delete</button>
                                    </div>
                                  </form>
                                  
                                </div>
                              </div>
                            </div> -->
                        @endforeach



                    </tbody>
                   
                </table>
                {{--<div>{{$page->links('pagination::bootstrap-5')}}</div> --}}
            </div>
        </div>
    </div>

@endsection

