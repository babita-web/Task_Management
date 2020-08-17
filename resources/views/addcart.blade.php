@extends('layouts.product')

@section('title')

    Add to Cart | Babita's Test Assignment
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4>
                            Add to Cart Confirmation</h4>
                        <h4 class="title"> Add to cart</h4>

                    </div>
                    <div class="card-body">
                        <div class="card-body">


                            <div class="card-body">
                                <div class="row">
                                    <td class="col-md-6">
                                        <form action="/add_cart" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                        <table>
                                            <th>Name</th>
                                            <th>price</th>
                                            <th>image</th>
                                            <th>Quantity</th>

<tr>
                                        <td>
                                                <label for="name">{{ __('Name') }}</label>
                                                <input id="name" type="text" value="{{$products->name}} ">
                                        </td></tr>
                                            <tr>
                                            <td>
                                                <label for="price">{{ __('Price') }}</label>
                                                <input id="price" type="text" value="{{$products->price}} ">
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="quantity">{{ __('Quantity') }}</label>
                                                    <input id="qunatity" type="number">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="image">{{ __('Image') }}</label>
                                                    <img src="img1.jpeg">
                                                </td>
                                            </tr>


                                            <a href= "/cart" class="btn btn-success">Add to Cart</button>
                                            <a href="/products" class="btn btn-danger">Cancel</a>
                                        </form>





                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="card-title"> Table on Plain Background</h4>
                                <p class="category"> Here is a subtitle for this table</p>
                            </div>

                        </div>
                    </div>
                </div>
@endsection

