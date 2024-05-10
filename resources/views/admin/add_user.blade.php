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
            </div>
          </div>
        </div>
 
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Add New User</h1>
                <div class="modal-body">
                
                <form method="POST" action="{{ route('admin.create_user') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="newUserNameInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="newUserNameInput" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="newUserContactInput" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="newUserContactInput" name="contact" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="newUserEmailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="newUserEmailInput" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="newUserPasswordInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="newUserPasswordInput" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="newUserRepeatPasswordInput" class="form-label">Re-enter password</label>
                        <input type="password" class="form-control" id="newUserRepeatPasswordInput" name="password_confirmation" aria-describedby="emailHelp">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="isNewUserAdmin" name="isAdmin">
                        <label class="form-check-label" for="isNewUserAdmin">
                            Is user admin?
                        </label>
                    </div>
                    
                    <div class="modal-footer">
                        <a href="{{ URL::previous() }}" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</a>
                        <button id="createNewUserBtn" type="submit" class="btn btn-primary">Add User</button>
                    </div>
                </form>

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

</body>
</html>
