<div class="modal fade text-start" id="edit{{ $expense->id }}" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">تعديل مصروف</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('expense.update' , 'test') }}" method="Post" autocomplete="off">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $expense->id }}">

                <div class="modal-body">

                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">التاريخ</label>
                        <input id="defaultInput" class="form-control" type="date" name="date" value="{{ $expense->date }}"/>
                    </div>
                    <br>

                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">المبلغ</label>
                        <input id="defaultInput" class="form-control" type="number" step="0.01" name="amount" value="{{ $expense->amount }}" />
                    </div>
                    <br>

                    <div class="mb-1">
                        <label class="form-label" for="exampleFormControlTextarea1">إلى</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="to">{{ $expense->to }}</textarea>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </div>
            </form>    
        </div>
    </div>
</div>