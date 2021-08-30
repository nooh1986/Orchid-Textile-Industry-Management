<div class="modal fade text-start" id="edit{{ $customer->id }}" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">تعديل زبون</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('customer.update' , 'test') }}" method="Post" autocomplete="off">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $customer->id }}">

                <div class="modal-body">

                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">الاسم</label>
                        <input id="defaultInput" class="form-control" type="text" name="name" value="{{ $customer->name }}"/>
                    </div>
                    <br>
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">رقم الهاتف</label>
                        <input id="defaultInput" class="form-control" type="text" name="phone" value="{{ $customer->phone }}"/>
                    </div>
                    <br>

                    <div class="mb-1">
                        <label class="form-label" for="basicSelect">الحاله</label>
                        <select class="form-select" id="basicSelect" name="status">
                            <option value="1" {{$customer->status == 1 ? 'selected':"" }}>مفعل</option>
                            <option value="0" {{$customer->status == 0 ? 'selected':"" }}>غير مفعل</option>
                        </select>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </div>
            </form>    
        </div>
    </div>
</div>