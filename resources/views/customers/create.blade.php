<div class="modal fade text-start" id="create" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">إضافه زبون</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('customer.store') }}" method="Post" autocomplete="off">
                @csrf

                <div class="modal-body">

                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">الاسم</label>
                        <input id="defaultInput" class="form-control" type="text" name="name" />
                    </div>
                    <br>
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">رقم الهاتف</label>
                        <input id="defaultInput" class="form-control" type="text" name="phone" />
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>    
        </div>
    </div>
</div>