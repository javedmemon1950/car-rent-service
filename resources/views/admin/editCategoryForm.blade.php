<!DOCTYPE html>
<html dir="ltr" lang="en">
  @include('admin.template.head')

  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      
        @include('admin.template.header')
        
        @include('admin.template.sidebar')
        
        <div class="page-wrapper content-margin">
        
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Categories</h4>
              <div class="ms-auto text-end">
                <a type="button" class="btn btn-primary" href="#">
                    <span class="">Back</span>
                    <i class="fas fa-angle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
       

        
        <div class="container-fluid">
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}

            </div>
                
            @endif
            <form action="{{route('admin.editCategory',$category->id)}}" method="POST">
                @csrf
                <label class="form-label">Title</label>
                <input class="form-control" type="text" name="title" value="{{$category->title}}">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description">{{$category->description}}</textarea>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
        
        <footer class="footer text-center">
            Driving Dreams, One Rental at a Time
        </footer>
    </div>
    </div>    

    @include('admin.template.scripts')

    {{-- <script src="./admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="./admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="./admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#zero_config").DataTable();

        })
    </script> --}}
  
</body>
</html>
