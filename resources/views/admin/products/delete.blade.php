<form action="{{ route('backend.products.delete',$product->id) }}" method="post" enctype="multipart/form-data">
{{ method_field('delete') }}
@csrf
<div class="modal fade" id="ModalDelete{{$product->id}}" tabindex="-1"
     role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title"> product delete </h4>
           <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"> &times;</span>
           </button>
        </div>
        <div class="modal-body"> 
           Are you sure you want to delete : <p>{{ $product->title }} </p>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn gray btn-outline-secondary" data-bs-dismiss="modal">Cancel </button>  
           <button type="submit" class="btn btn-outline-danger" > Delete  </button>  
        </div>
      </div>

  </div>
</div>
</form>