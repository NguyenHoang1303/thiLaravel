@extends('master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Book Page</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Books</h2>
                    <form action="/book/search" method="get">
                        @csrf
                        <ul class="nav navbar-right panel_toolbox">
                            <div class="col-md-12 col-sm-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" placeholder="Search by title...">
                                    <span class="input-group-btn">
                      <button class="btn btn-default">Go!</button>
                    </span>
                                </div>
                            </div>
                        </ul>
                    </form>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>id </th>
                                        <th width="15%">author id</th>
                                        <th>title</th>
                                        <th>ISBN</th>
                                        <th>pub_year</th>
                                        <th>available</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($books as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->authorid}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->ISBN}}</td>
                                            <td>{{$item->pub_year}}</td>
                                            <td>{{$item->available}}</td>
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
@endsection
@section('page-script')
@endsection
