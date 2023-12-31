<div>
    <form>
        <div class="input-group">
            <input wire:model.live='search' type="search" class="form-control" placeholder="Buscar Producto...">
            <div class="input-group-append">
                <button wire:click.prevent class="btn btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <ul class="list-group" id="list-search">
        @foreach ($products as $product)
            <li class="list-group-item">
                <h5>
                    <a href="{{route('products.show', $product)}}" class="text-white">
                        <x-image :item="$product" size="50" />
                        {{ $product->name }}
                    </a>
                </h5>
                <div class="d-flex justify-content-between">
                    <div class="mr-1">
                        Precio de venta:
                        <span class="badge badge-pill badge-info">
                            {!! $product->precio !!}
                        </span>
                    </div>
                    <div>
                        Stock: {!! $product->stockLavel !!}

                    </div>
                </div>
            </li>
        @endforeach

    </ul>
</div>
