@extends('admin.layout.template')
@section('content')


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data PT (Perusahaan)</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        {{-- <a href="{{ route('createBlog') }}" class="btn btn-primary fa fa-plus"> Tambah Berita/blog</a> --}}


                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>nama perusahaan</th>
                                    <th>email perusahaan</th>
                                    <th>alamat perusahaan</th>
                                    <th>loker</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse($dataPt as $value )

                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                    <td>
                                        <form onsubmit="return confirm('yakin akan hapus ?');"
                                            action="" method="POST">
                                            <a href="" class="btn btn-warning fa fa-edit"></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger fa fa-trash"></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty


                                <div class="alert alert-danger">
                            Data User belum Tersedia.
                        </div>
                                {{-- @endforeach --}}
                                {{-- @empty --}}

                                @endforelse


                            </tbody>
                        </table>
                        <div class="text-center">
                            {!! $dataPt->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection
