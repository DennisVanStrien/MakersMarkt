
    <div class="container">
        <h1>Catalogus</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('producten.view', $product->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Add to Cart</a>
                                </div>
                                <small class="text-muted">${{ number_format($product->price, 2) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

