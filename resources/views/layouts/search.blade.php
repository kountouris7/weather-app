
<div class="container">
    <div class="row">
        <div class="panel panel-default">

            <form method="POST" action= "{{route('search')}}" role="search">
                {{csrf_field()}}

                <div class="form-group">
                    <h3>Search City</h3>
                    <input placeholder="eg. London, UK" class="form-control" id="name" name="name"  required><br>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>

               @include('layouts.errors')

            </form>



        </div>
    </div>
</div>





