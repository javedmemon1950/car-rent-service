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
              <h4 class="page-title">Companys</h4>
            </div>
          </div>
        </div>
 
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Add New Company</h1>
                <div class="modal-body">
                
                <form method="POST" action="{{ route('admin.create_company') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="newCompanyNameInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="newCompanyNameInput" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="newCompanyContactInput" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="newCompanyContactInput" name="contact" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="newCompanyEmailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="newCompanyEmailInput" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="newCompanyAddressInput" class="form-label">Address</label>
                        <input type="text" class="form-control" id="newCompanyAddressInput" name="address" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="newCompanyDescriptionInput" class="form-label">Description (Optional)</label>
                        <textarea rows="5" class="form-control" id="newCompanyDescriptionInput" name="description" aria-describedby="emailHelp"></textarea>
                    </div>
                    
                    <div class="modal-footer">
                        <a href="{{ URL::previous() }}" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</a>
                        <button id="createNewCompanyBtn" type="submit" class="btn btn-primary">Add Company</button>
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
