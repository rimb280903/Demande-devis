@extends('admin.dashboard')
@section('content')
@if (session()->has('success'))
    <div class="alert alert-success mt-2">
        {{ session()->get('success') }}
    </div>
@endif
@foreach ($variants as $variant)
@if ($product->productVariants()->where('id_variante', $variant->id)->count() > 0)
    <div class="border mb-3 p-3 mt-3">
        <label for="variant_{{ $variant->id }}" class="col-form-label">{{ $variant->nom_V }}:</label>
        @foreach ($product->productVariants()->where('id_variante', $variant->id)->get() as $productVariant)
            <div class="row">
                <form action="{{route('admin.product.destroy.variant',$productVariant->id)}}" method="post">
                    @csrf
                    @method('delete') 
                    <button class="btn btn-danger  ml-2 rounded" type="submit">
                        delete
                    </button>
    
                    
                </form>
                <div class="col">
                    <input type="text" id="variant_{{ $variant->id }}_valeur" @readonly(true)
                    name="variant[{{ $variant->id }}][valeur][]" value="{{ $productVariant->valeur ?? '' }}" class="form-control" >
                    <input type="hidden" name="variant[{{ $variant->id }}][line_id][]" value="{{ $productVariant->id }}"> 
                </div>
                <div class="col">
                    <input type="number" id="variant_{{ $variant->id }}_prix" name="variant[{{ $variant->id }}][prix][]"  step="0.001" value="{{ $productVariant->prix ?? '' }}" class="form-control" @readonly(true)>
                </div>
            </div>
            
            
        
        @endforeach
    </div>
@endif
@endforeach
<div class="text-center">
    <a href="{{ route('admin.product.add.variant', $product->id) }}"
         class="btn btn-primary mx-2">Add Variant</a>
    <a href="{{ route('admin.product', $product->id) }}" class="btn btn-success mx-2">Edit Variant</a>
  </div>
  

    
@endsection