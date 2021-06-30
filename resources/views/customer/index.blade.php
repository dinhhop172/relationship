@extends('layouts.master')
@section('content')

   <div class="container">
      <h2 class="pt-5 pb-5">
         <marquee behavior="10" direction="1">Laravel CRUD using ajax</marquee> </h2>
      <div class="row">
         <div class="col-8">
            <div class="card">
               <div class="card-header">
                  All Customer
               </div>
               <div class="cart-body">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Name</th>
                           <th scope="col">Age</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="col">1</td>
                           <td scope="col">John Mathew</td>
                           <td scope="col">20</td>
                           <td scope="col">
                              <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="col-4">
            <div class="card">
               <div class="card-header">
                  <span>Add new Customer</span>
                  <span>Update Customer</span>
               </div>
               <div class="card-body">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                  </div>
                  <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                  </div>
                  
                  <button type="submit" class="btn btn-sm btn-primary">Add</button>
                  <button type="submit" class="btn btn-sm btn-danger">Update</button>

               </div>
            </div>
         </div>
      </div>
   </div>

@stop

@section('script')
   <script>
      $(function(){
         function showall(){
            
         }
      });
   </script>
@endsection
