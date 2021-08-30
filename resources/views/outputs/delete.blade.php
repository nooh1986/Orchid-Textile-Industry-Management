<div class="modal fade modal-danger text-start" id="delete{{ $output->id }}" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">حذف إنتاج يومي</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <br>
            
            <form action="{{ route('output.destroy' , 'test') }}" method="Post" autocomplete="off">
                @csrf
                @method('Delete')

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $output->id }}">

                    هل انت متاكد من عمليه الحذف؟
    
                </div>
                <br>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>

            </form>    
        </div>
    </div>
</div>