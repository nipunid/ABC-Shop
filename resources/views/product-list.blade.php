<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csB
vApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      h3 {
      text-align:center;
      font-size:20;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 30px 0;
      text-align:left;
      }
    </style>
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h1>Product List</h1>
               
                <form action='/product' method='post'>
                <div class="form-group">
                <label>Select Category</label>
               @csrf
                <select id="catergory" class="form-control" name="catergory"  value="{{ old('catergory') }}" required>
                @error('catergory')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                @foreach($catergories as $catergory)
                    <option value="{{ $catergory->id  }}">{{ $catergory->CatergoryName }}</option>
                @endforeach
                </select>
                </div>

                <div class="form-group">
                <label>Product Name</label>
                @error('productName')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type ='text' class="form-control" name='productName' placeholder='Enter product'  value="{{ old('productName') }}" required/><br/>
               </div>
                <button type='submit' class="btn btn-primary" >Add</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
