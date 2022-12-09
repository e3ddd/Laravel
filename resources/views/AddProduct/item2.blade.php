<form action="/add_image" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row-justify-content-center">
        <label for="inputEmail" class="p-1">User</label>
        <input type="email" name="email_image" class="form-control input-sm" id="inputEmail"  placeholder="Enter user e-mail">
    </div>
    @if($errors->has('email_image'))
        <div class="alert alert-danger">
            <ul style="list-style: none; text-align: center">
                @foreach ($errors->get('email_image') as $error)
                    <li style="margin-right: 30px">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row-justify-content-center">
        <label for="inputProduct" class="p-1">Product ID</label>
        <input type="text" name="productId" class="form-control input-sm" id="inputProduct"  placeholder="Enter needle product ID">
    </div>
    @if($errors->has('productId'))
        <div class="alert alert-danger">
            <ul style="list-style: none; text-align: center">
                @foreach ($errors->get('productId') as $error)
                    <li style="margin-right: 30px">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row-justify-content-center">
        <label for="file" class="p-2">Select image to upload:</label>
        <input  class="form-control input-sm" type="file" name="file" id="file">
        <input class="btn btn-primary" type="submit" value="Upload Image" name="uploadImg">
    </div>
</form>
