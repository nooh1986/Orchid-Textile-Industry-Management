<div class="modal fade modal-warning text-start" id="ending{{ $string->id }}" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">تعديل حاله سده</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <br>
            
            <form action="{{ route('ending') }}" method="Post" autocomplete="off">
                @csrf
                
                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $string->id }}">

                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">تاريخ الإنتهاء</label>
                        <input id="defaultInput" class="form-control" type="date" name="date_off" value="{{ date('Y-m-d') }}"/>
                    </div>
                    <br>

                    <div class="mb-1">
                        <label class="form-label" for="basicSelect">الحاله</label>
                        <select class="form-select" id="basicSelect" name="status">
                            <option value="" selected disabled>--- اختر ---</option>
                            <option value="2">تم الانتهاء</option>
                        </select>
                    </div>
                   
    
                </div>
                <br>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">تعديل</button>
                </div>

            </form>    
        </div>
    </div>
</div>