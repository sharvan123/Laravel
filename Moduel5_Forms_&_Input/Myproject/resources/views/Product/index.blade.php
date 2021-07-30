@extends('Admin.layouts.admindashbord')
@section('content')
<a href="{{route('products.create')}}" class="btn btn-primary">Add Product</a>
</div>
              <div id="tbl">     
                <table class="table" id="">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Pid</th>
                      <th>ProductName</th>
                      <th>Description</th>
                      
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Image</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  
                </table>
                <div class="d-flex justify-content-center">
                    
                </div>
              </div>
              
   

          </section>
          <!-- right col -->
        </div>
@endsection