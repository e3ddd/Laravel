<form action="/add_product/create" method="GET">
    @csrf
    <div class="col">
        <h4>Add Product</h4>
    </div>
    <div class="row-justify-content-center">
        <label for="inputEmail" class="p-1">User</label>
        <input type="email" name="email" class="form-control input-sm" id="inputEmail"  placeholder="Enter user e-mail">
    </div>
    @if($errors->has('email'))
        <div class="alert alert-danger">
            <ul style="list-style: none; text-align: center">
                @foreach ($errors->get('email') as $error)
                    <li style="margin-right: 30px">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row-justify-content-center">
        <label for="inputProduct" class="p-1">Product</label>
        <input type="text" name="name" class="form-control input-sm" id="inputProduct"  placeholder="Enter needle product">
    </div>
    @if($errors->has('name'))
        <div class="alert alert-danger">
            <ul style="list-style: none; text-align: center">
                @foreach ($errors->get('name') as $error)
                    <li style="margin-right: 30px">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row-justify-content-center">
        <label for="inputProduct" class="p-1">Price</label>
        <input type="text" name="price" class="form-control input-sm" id="inputProduct"  placeholder="Enter price">
    </div>
    @if($errors->has('price'))
        <div class="alert alert-danger">
            <ul style="list-style: none; text-align: center">
                @foreach ($errors->get('price') as $error)
                    <li style="margin-right: 30px">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row-justify-content-center">
        <label for="inputProduct" class="p-1">Description</label>
        <input type="text" name="description" class="form-control input-sm" id="inputProduct"  placeholder="Enter description">
    </div>
    @if($errors->has('description'))
        <div class="alert alert-danger">
            <ul style="list-style: none; text-align: center">
                @foreach ($errors->get('description') as $error)
                    <li style="margin-right: 30px">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row-justify-content-center p-3 border-bottom">
        <input class="btn btn-primary" type="submit" name="action" value="Add">
    </div>
</form>

