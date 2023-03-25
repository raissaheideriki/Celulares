<form action="{{ route('celulares.update', $celular->id) }}" method="post">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ $celular->nome }}">
    </div>

    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor" class="form-control" value="{{ $celular->cor }}">
    </div>

    <div class="mb-3">
        <label>Modelo</label>
        <input type="text" name="modelo" class="form-control" value="{{ $celular->modelo }}">
    </div>

    <div class="mb-3">
        <label>ano</label>
        <input type="number" name="ano" class="form-control" value="{{ $celular->ano }}">
    </div>

    <div>
        <input type="submit" value="Atualizar Celular" class="btn btn-primary">
    </div>
</form>

    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="Nome" value="{{ $celular->nome }}">
    <input type="text" name="cor" placeholder="cor" value="{{ $celular->cor }}">
    <input type="text" name="modelo" placeholder="modelo" value="{{ $celular->modelo }}">
    <input type="number" name="ano" placeholder="ano" value="{{ $celular->ano }}">
    <button type="submit">Salvar</button>
</form>
