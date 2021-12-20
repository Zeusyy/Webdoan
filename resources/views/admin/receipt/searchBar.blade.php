<form style="margin-bottom: 20px" action="{{route('receiptWaiting.search')}}" method="GET">
    <div style="margin-bottom: 0px" class="input-group searchBar">
        <input placeholder="{{__('receipt.Search')}}" type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="">
        <div class="input-group-append">
            <button style="width: 100px" class="btn btn-search btn-outline-secondary" type="submit"><i
                    class="bi bi-search"></i>
            </button>
        </div>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio1" value="id">
        <label class="form-check-label" for="inlineRadio1">ID</label>
    </div>
    @if (Auth::user()->role->name == 'admin')
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio2" value="userid">
            <label class="form-check-label" for="inlineRadio2">{{__("receipt.User's ID")}}</label>
        </div>
    @endif
    
</form>