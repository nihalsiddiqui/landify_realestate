@section('page_title', 'Add Post')

@extends('second-admin.layouts.master')
@section('quillStyle')
{{--    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/vendors/css/editors/quill/katex.min.css")}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/vendors/css/editors/quill/monokai-sublime.min.css")}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/vendors/css/editors/quill/quill.snow.css")}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/vendors/css/editors/quill/quill.bubble.css")}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset("second-admin/app-assets/css/plugins/forms/form-quill-editor.css")}}">--}}
{{--    <style>--}}
{{--        .ql-editor{--}}
{{--            height: 185px;--}}
{{--        }--}}
{{--    </style>--}}
    <!-- Select2 -->
<link rel="stylesheet" href="{{asset('admin')}}/bower_components/select2/dist/css/select2.min.css">

@endsection
@section('content')
    <!-- Include stylesheet -->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                               <div class="card">
                                   <div class="card-header">
                                       <h4 class="card-title">Add Post</h4>
                                   </div>
                                   <div class="card-body">
                                       <form role="form" method="post" action="{{route('post.store')}}" ENCTYPE="multipart/form-data" class="form form-horizontal" >
                                           @csrf
                                           <div class="row">
                                              <div class="col-md-6">
                                                  <div class="col-12">
                                                      <div class="form-group row">
                                                          <div class="col-sm-3 col-form-label">
                                                              <label for="first-name">Title <span class="text-danger">*</span></label>
                                                          </div>
                                                          <div class="col-sm-9">
                                                              <input type="text" id="first-name"  class="form-control"
                                                                     name="title" placeholder="title" />
                                                              @error("title")
                                                                <span class="text-danger">{{ $message }}</span>
                                                              @enderror
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group row">
                                                          <div class="col-sm-3 col-form-label">
                                                              <label for="email-id">Sub-Tilte</label>
                                                          </div>
                                                          <div class="col-sm-9">
                                                              <input type="text"  id="email-id" class="form-control"
                                                                     name="subtitle" placeholder="SubTitle" />
                                                              @error("subtitle")
                                                              <span class="text-danger">{{ $message }}</span>
                                                              @enderror
                                                          </div>

                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group row">
                                                          <div class="col-sm-3 col-form-label">
                                                              <label for="contact-info">Slug <span class="text-danger">*</span></label>
                                                          </div>
                                                          <div class="col-sm-9">
                                                              <input type="text"  id="contact-info" class="form-control"
                                                                     name="slug" placeholder="Slug" />
                                                              @error("slug")
                                                              <span class="text-danger">{{ $message }}</span>
                                                              @enderror
                                                          </div>

                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group row">
                                                          <div class="col-sm-3 col-form-label">
                                                              <label for="password">Image</label>
                                                          </div>
                                                          <div class="col-sm-9">
                                                              <input type="file" style="height:28px; width:175px;" accept="image/png, image/jpeg" id="image" name="image">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group row">
                                                          <div class="col-sm-3 col-form-label">
                                                              <label for="password">Category <span class="text-danger">*</span></label>
                                                          </div>
                                                          <div class="col-sm-9">
                                                              <select class="custom-select form-control select2" multiple="multiple" id="categories" name="categories[]">
                                                                  @foreach($categories as $category)
                                                                      <option value="{{ $category->id}}">{{ $category->name }}</option>
                                                                  @endforeach
                                                              </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group row">
                                                          <div class="col-sm-3 col-form-label">
                                                              <label for="password">Tag <span class="text-danger">*</span></label>
                                                          </div>
                                                          <div class="col-sm-9">
                                                              <select class="custom-select form-control  select2" multiple="multiple" id="tags" name="tags">
                                                                  @foreach($tags as $tag)
                                                                      <option value="{{ $tag->id}}">{{ $tag->name }}</option>
                                                                  @endforeach
                                                              </select>
                                                          </div>
                                                      </div>
                                                  </div>

                                              </div>

                                               <div class="col-6">
                                                   <div class="form-group row">

                                                       <div class="col-sm-12">
                                                           <div class="col-sm-3 col-form-label">
                                                               <label for="first-name">Description <span class="text-danger">*</span></label>
                                                           </div>
                                                           <div class="card-body">
                                                               <textarea class="ckeditor"  name="body"></textarea>
                                                               @error("body")
                                                               <span class="text-danger">{{ $message }}</span>
                                                               @enderror
                                                           </div>

                                                       </div>
                                                   </div>
                                               </div>

                                               <div class="col-sm-9 offset-sm-3" style="text-align: end">
                                                   <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                   <a href="{{ route('post.list') }}" class="btn btn-outline-secondary">Back</a>
                                               </div>
                                           </div>

                                       </form>
                                   </div>
                               </div>
                           </div>

                       </div>

                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('quillJs')


    <script src="{{asset('admin')}}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            CKEDITOR.replace('.ckeditor')
        })
    </script>
    <!-- Select2 -->
    <script src="{{asset('admin')}}/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
