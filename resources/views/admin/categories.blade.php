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
                <a type="button" class="btn btn-primary" href="{{route('admin.addCategoryForm')}}">
                    <i class="mdi mdi-account-plus"></i>
                    <span class="">Add New</span>

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
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Basic Datatable</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $categories)
                            
                        <tr>
                      <td>{{$categories->title}}</td>
                      <td>{{$categories->description}}</td>
                      
                      <td>
                       
                        <a href="{{route("admin.editCategoryForm",$categories->id)}}" type="button" class="btn btn-outline-primary" >
                            <i class="mdi mdi-lead-pencil"></i>
                        </a>
                        <a href="{{route("admin.deleteCategory",$categories->id)}}" type="button" class="btn btn-outline-danger">
                            <i class="mdi mdi-delete"></i>
                        </a>
                      </td>
                    </tr>
                        @endforeach
                       
                         
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Modal -->
              

        </div>
        
        <footer class="footer text-center">
            Driving Dreams, One Rental at a Time
        </footer>
    </div>
    </div>    

    @include('admin.template.scripts')

    <script src="./admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="./admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="./admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#zero_config").DataTable();

        })
    </script>
  
</body>
</html>
