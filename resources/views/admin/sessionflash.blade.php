@if (session()->has('success'))
    <div class="ml-3 alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if (session()->has('deleted'))
    <div class="ml-3 alert alert-danger">
        {{ session()->get('deleted') }}
    </div>
@endif
