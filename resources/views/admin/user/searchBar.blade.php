<form style="margin-bottom: 20px" action="{{route('user.search')}}" method="GET">
    <div style="margin-bottom: 10px" class="input-group searchBar">
        <input placeholder="{{__('user.Search')}}" type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="">
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
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio2" value="name">
        <label class="form-check-label" for="inlineRadio2">{{__('user.Name')}}</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio3" value="email">
        <label class="form-check-label" for="inlineRadio3">Email</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio4" value="phone">
        <label class="form-check-label" for="inlineRadio4">{{__('user.Phone')}}</label>
    </div>
    
</form>