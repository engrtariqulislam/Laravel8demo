<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       Edit Category <b></b>


        </h2>
    </x-slot>

    <div class="py-12">
    
</b>
<div class="container">
<div class="row">

			<!-- /.col -->
<!--   ------------ Add Category Page -------- -->


<div class="col-4">

<div class="box">
 <div class="box-header with-border">
   <h3 class="box-title"> Edit Category </h3>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
   <div class="table-responsive">


   <form action="{{ route('store.category') }}" method="POST">
          @csrf

      

<div class="form-group">
<h5>Category Name  <span class="text-danger">*</span></h5>
<div class="controls">
<div class="controls">
 <input type="text"  name="category_name" class="form-control" value="{{ $category->category_name }}" > 
 
@error('category_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 

</div>
</div>


<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update New">					 
     </div>
   </form>




     
   </div>
 </div>
 <!-- /.box-body -->
 </div>
 <!-- /.box --> 
</div>




</div>
<!-- /.row -->
</section>
<!-- /.content -->

</div>
</div>
</div>
</div>

</x-app-layout>
