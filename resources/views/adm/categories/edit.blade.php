@extends('adm.masteradmin')
@section('title', 'Laravel Questionaire | Edit Category')
@section('contentadmin')


<h3>Edit Category</h3>

  <form method="POST" action="/edit-category-action/<?php echo $cats[0]->id; ?>">

    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    {{ csrf_field() }}
 
       <div>
          <input type="text" name="categoryname" placeholder="Category Name" value="<?php echo $cats[0]->categoryname; ?>">
      </div>
      <div>
      <input type="submit" name="action" value="Cancel">
      <input type="submit" name="action" value="Edit">
 
      </div>
 
    </form>  
 
    <script>
    $(document).ready(function(e){
    $('.leftMenu .quiz').addClass('selected');
    });
</script>
 @endsection