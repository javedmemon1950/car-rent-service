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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">
                    <i class="mdi mdi-account-plus"></i>
                    <span class="">Add New</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="addUserLabel">Add new user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                <form>
                  <div class="mb-3">
                    <label for="newUserNameInput" class="form-label">Name</label>
                    <input type="email" class="form-control" id="newUserNameInput" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="newUserContactInput" class="form-label">Contact</label>
                    <input type="email" class="form-control" id="newUserContactInput" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="newUserEmailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="newUserEmailInput" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="newUserPasswordInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="newUserPasswordInput">
                  </div>
                  <div class="mb-3">
                    <label for="newUserRepeatPasswordInput" class="form-label">Re-enter password</label>
                    <input type="email" class="form-control" id="newUserRepeatPasswordInput" aria-describedby="emailHelp">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="isNewUserAdmin">
                    <label class="form-check-label" for="isNewUserAdmin">
                      Is user admin?
                    </label>
                  </div>
                  
                </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="createNewUserBtn" type="button" class="btn btn-primary">Add User</button>
              </div>
            </div>
          </div>
        </div>

        
        <div class="container-fluid">
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Role</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="userDataTable">
                        <!-- <tr>
                          <td>Tiger Nixon</td>
                          <td>tiger@email.com</td>
                          <td>+1-418-543-8090</td>
                          <td>Customer</td>
                          <td>
                            <button id="viewUserBtn" type="button" class="btn btn-outline-primary">
                                <i class="mdi mdi-eye-outline"></i>
                            </button>
                            <button id="updateUserBtn" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#updateUser">
                                <i class="mdi mdi-lead-pencil"></i>
                            </button>
                            <button id="deleteUserBtn" type="button" class="btn btn-outline-danger">
                                <i class="mdi mdi-delete"></i>
                            </button>
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="updateUser" tabindex="-1" aria-labelledby="updateUserLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="updateUserLabel">Update user</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                      <form>
                        <input hidden type="text" class="form-control" id="updateUserIdInput" aria-describedby="emailHelp">
                        <div class="mb-3">
                          <label for="updateUserNameInput" class="form-label">Name</label>
                          <input type="email" class="form-control" id="updateUserNameInput" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="updateUserContactInput" class="form-label">Contact</label>
                          <input type="email" class="form-control" id="updateUserContactInput" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="updateUserEmailInput" class="form-label">Email</label>
                          <input type="email" class="form-control" id="updateUserEmailInput" aria-describedby="emailHelp">
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="isUpdateUserAdminInput">
                          <label class="form-check-label" for="isUpdateUserAdminInput">
                            Is user admin?
                          </label>
                        </div>
                        
                      </form>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button onclick="updateUser()" type="button" class="btn btn-primary">Update User</button>
                    </div>
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

          function fetchUserData(){
            var userData = "";
              $.ajax({    
              type: "GET",
              url: "http://127.0.0.1:8000/all_users",
              contentType: "application/json",
              dataType: "json",
              success: function(response) {
                for (let i = 0; i < response.length; i++) {
                  userData += `
                          <tr>
                            <td>${response[i].name}</td>
                            <td>${response[i].email}</td>
                            <td>${response[i].contact}</td>
                            <td>${response[i].isAdmin == 1 ? "Admin" : "Customer"}</td>
                            <td>
                              <button id="viewUserBtn" type="button" class="btn btn-outline-primary">
                                  <i class="mdi mdi-eye-outline"></i>
                              </button>
                              <button onclick="updateUserModal(${response[i].id} , '${response[i].name}' , '${response[i].contact}' , '${response[i].email}' , '${response[i].isAdmin}')" id="updateUserBtn" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#updateUser">
                                  <i class="mdi mdi-lead-pencil"></i>
                              </button>
                              <button onclick="deleteData(${response[i].id})" id="deleteUserBtn" type="button" class="btn btn-outline-danger">
                                  <i class="mdi mdi-delete"></i>
                              </button>
                            </td>
                          </tr>
                  `;
                  
                  $('#userDataTable').html(userData);

                }
              },    
              error: function(){}
            });
          }

          fetchUserData();

          function createNewUser(){
            let userModel = {
              name: $('#newUserNameInput').val(),
              contact: $('#newUserContactInput').val(),
              email: $('#newUserEmailInput').val(),
              password: $('#newUserPasswordInput').val(),
              password_confirmation: $('#newUserRepeatPasswordInput').val(),
              isAdmin: $('#isNewUserAdmin').val(),
            };

              $.ajax({    
              type: "POST",
              url: "http://127.0.0.1:8000/create_user",
              headers: {
                "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content')
              },
              data: userModel,
              dataType: "json",
              success: function(response){
                
                fetchUserData();

                console.log(response.success)

              },    
              error: function(error){
                console.log(error)
              }
            });
          }

          function deleteData(id){
              $.ajax({    
              type: "GET",
              url: `http://127.0.0.1:8000/delete_user/${id}`,
              contentType: "application/json",
              dataType: "json",
              success: function(response) {
                fetchUserData()

                console.log('User Deleted')
              },    
              error: function(){}
            });
          }

          
          function updateUserModal(id,name,contact,email,isAdmin){

            $('#updateUserIdInput').val(id);
            $('#updateUserNameInput').val(name);
            $('#updateUserContactInput').val(contact);
            $('#updateUserEmailInput').val(email);
            $('#updateUserAdminInput').val(isAdmin);

          }

          function updateUser(){
            let userUpdateModel = {
              id: $('#updateUserIdInput').val(),
              name: $('#updateUserNameInput').val(),
              contact: $('#updateUserContactInput').val(),
              email: $('#updateUserEmailInput').val(),
              isAdmin: $('#updateUserAdminInput').val(),
            };

            $.ajax({    
              type: "POST",
              url: "http://127.0.0.1:8000/edit_user",
              headers: {
                "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content')
              },
              data: userUpdateModel,
              dataType: "json",
              success: function(response){
                
                fetchUserData();

                console.log(response.success)

              },    
              error: function(error){
                console.log(error)
              }
            });
          }

          $('#createNewUserBtn').click(function (){
            createNewUser()
          })

          $('#createNewUserBtn').click(function (){
            deleteUser()
          })
    </script>
  
</body>
</html>
