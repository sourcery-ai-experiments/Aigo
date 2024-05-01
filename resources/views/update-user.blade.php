<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="shortcut icon" href="{{ asset('/asset/svg/logo.svg') }}" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
      <link href="{{ asset('/asset/main.css') }}" rel="stylesheet" />
      <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <style>
         .menu{
         margin : 20px;
         }
         .content{
         padding-left: 250px;
         }
         .nav-link.active {
         background-color: #6FFFE9 !important; 
         color: #0B132B !important; 
         }
         .nav-link{
         color: #0B132B !important;
         }
         .containerContent a {
         text-decoration: none;
         color: #8296C5; 
         }
         .containeritem {
         background-color: #ffffff; 
         border-radius: 6px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
         margin-left: 30px;
         padding: 10px;
         display: inline-flex;
         align-items: center; 
         width: calc(100% - 120px); 
         }
         .tab.active {
         display: block; 
         }
         .nav-pills .nav-link {
         cursor: pointer;
         }
         .item {
         padding-left: 265px;
         padding-bottom:50px;
         }
         .nav-item {
         margin-right: 150px;
         }
         .nav-item:last-child {
         margin-right: 0; 
         }
         .form-control {
         width: 100%; 
         }
      </style>
      <title>Update User</title>
   </head>
   <body>
      <div class="container-flex">
        @include('admin-sidebar')
         <div class="item justify-content-center">
            <div class="row">
               <div class="container d-flex justify-content-center" style="padding:50px;">
                  <h2>Update User Data</h2>
               </div>
            </div>
            <div class="event-form p-5 me-5 ms-5 mt-4">
               <form action="{{ route('update-user', $data->id) }}" method="POST">
                  @csrf
                  {{-- ROW 1 --}}
                  <div class="row">
                     {{-- Nama --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="name" class="form-label">Nama</label>
                           <input value="{{old('name', $data->name ?? '')}}" type="text" class="form-control" name="name" id="name" aria-describedby="weightHelp" style="border-radius: 20px">
                        </div>
                     </div>
                     {{-- User Role --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="user_role" class="form-label">User Role</label>
                           <input value="{{old('user_role', $data->user_role ?? '')}}" type="text" class="form-control" name="user_role" id="user_role" aria-describedby="user_roleHelp" style="border-radius: 20px">
                        </div>
                     </div>
                  </div>
                  {{-- ROW 2 --}}
                  <div class="row">
                     {{-- Telepon --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="telepon" class="form-label">Telepon</label>
                           <input value="{{old('telepon', $data->telepon ?? '')}}" type="text" class="form-control" id="telepon" name="telepon" aria-describedby="teleponHelp" style="border-radius: 20px">
                        </div>
                     </div>
                     {{-- Email --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input value="{{old('email', $data->email ?? '')}}" type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" style="border-radius: 20px">
                        </div>
                     </div>
                  </div>
                  {{-- ROW 3 --}}
                  <div class="row">
                     {{-- Alamat --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="alamat" class="form-label">Alamat</label>
                           <input value="{{old('alamat', $data->alamat ?? '')}}" type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamatHelp" style="border-radius: 20px">
                        </div>
                     </div>
                     {{-- Gender --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="gender" class="form-label">Gender</label>
                           <input value="{{old('gender', $data->gender ?? '')}}" type="text" class="form-control" name="gender" id="gender" aria-describedby="genderHelp" style="border-radius: 20px">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-end mt-5">
                     <div class="col-auto">
                        <button class="btn btn-primary" type="submit">Update</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
