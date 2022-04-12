<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        All Category <b></b>


        </h2>
    </x-slot>

    <div class="py-12">
    
</b>
<div class="container">
<div class="row">

<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title"> <span > Category List </span></h3>
				</div>

</div>
<!-- /.box-header -->
<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Category Id </th>
								<th>Category Name</th>
								<th>Created At</th>
								<th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
            @php($i=1)
            @foreach($category as $item)
	 <tr>
		
    <td>{{ $item->id }}</td>
    <td>{{ $item->category_name }}</td>
		<td>{{ $item->created_at->diffForHumans()}}</td>
		 
		<td>
 <a href="{{ route('category.edit',$item->id) }}" class="btn btn-info" >Edit </a>
 <a href="{{ route('category.delete',$item->id) }}" class="btn btn-danger" >Delete</i></a>
		</td>
							 
	 </tr>
   @endforeach
						</tbody>
						 
					  </table>

            {{$category->links()}}
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			          
			
			<!-- /.col -->
<!--   ------------ Add Category Page -------- -->


<div class="col-4">

<div class="box">
 <div class="box-header with-border">
   <h3 class="box-title">Add Category </h3>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
   <div class="table-responsive">


   <form action="{{ route('store.category') }}" method="POST">
          @csrf

      

<div class="form-group">
<h5>Category Name  <span class="text-danger">*</span></h5>
<div class="controls">
<input type="text"  name="category_name" class="form-control" > 
 
@error('category_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 

</div>
</div>


<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
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
