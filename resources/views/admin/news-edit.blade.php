
 @extends('admin/main')
@section('main-section')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">News</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            @foreach($news as $news)
 <form action="" method="POST" enctype="multipart/form-data">
                   @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Heading</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="heading" value="{{$news->news_heading}}" placeholder="Enter blog heading">
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Uploaded By</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="uploaded_by" value="{{$news->uploaded_by}}" placeholder="Enter uoloaded by name">
                  </div>
                                     <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="description" value="{{$news->news_description}}" placeholder="Enter blog description">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">Blog Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="img" value="{{$news->news_image}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <!--<div class="input-group-append">-->
                      <!--  <span class="input-group-text">Upload</span>-->
                      <!--</div>-->
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endforeach
        </div>
    </div>
</div>
 
  </div>




  @endsection