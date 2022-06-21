@extends('dev.admin.layouts.app')


@section('contenidoA', 'active')

@section('content2', 'Gestionar contenidos de información')

@section('content')

 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="card-header">
            <h3 class="card-title">
              Summernote
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <textarea id="summernote">
              Place <em>some</em> <u>text</u> <strong>here</strong>
            </textarea>
          </div>
          <div class="card-footer">
            Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
    
    <!-- ./row -->
  </section>

@endsection