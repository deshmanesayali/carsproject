@extends ('layouts.app')
@section ('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>contacts</h1>
        </div>
        <div class="card-body">
            <form action="{{route('contact.store')}}" method="post" action="{{route('contact.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">name</label>
                    <input name="name" autocomplete="off" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" autocomplete="off" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection