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
              <h4 class="page-title">Users</h4>
              <div class="ms-auto text-end">
                <a href="{{ route('admin.add_user') }}" type="button" class="btn btn-primary">
                    <i class="mdi mdi-account-plus"></i>
                    <span class="">Add New</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">User List</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Role</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="userDataTable">
                        @foreach($users as $user)
                        <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->contact }}</td>
                          <td>{{ $user->isAdmin == 0 ? 'Customer' : 'Admin'}}</td>
                          <td>
                            <!-- <a id="viewUserBtn" type="button" class="btn btn-outline-primary">
                                <i class="mdi mdi-eye-outline"></i>
                            </a> -->
                            <a href="{{ route('admin.update_user', $user->id) }}" id="updateUserBtn" type="button" class="btn btn-outline-warning">
                                <i class="mdi mdi-lead-pencil"></i>
                            </a>
                            <a href="{{ route('admin.delete_user', $user->id) }}" id="deleteUserBtn" type="button" class="btn btn-outline-danger">
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
      $("#zero_config").DataTable();
    </script>
</body>
</html>
