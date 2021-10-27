Análisis regional
<div class="list-group">
  @foreach($datos as $item)
  <div class="list-group-item list-group-item-action active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $item['analisis'] }}</h5>
    </div>
    <p class="mb-1">{{ (isset($item['descripcion']) ? $item['descripcion'] : "") }}</p>
  </div>
  @endforeach
</div> 