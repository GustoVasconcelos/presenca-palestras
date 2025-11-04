@csrf
<div class="mb-3">
    <label class="form-label">Título</label><br>
    <input class="form-control" type="text" name="titulo" value="{{ old('titulo', $palestra->titulo ?? '') }}">
    @error('titulo') <div class="invalid-feedback" style="display:block;">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Palestrante</label><br>
    <input class="form-control" type="text" name="palestrante" value="{{ old('palestrante', $palestra->palestrante ?? '') }}">
    @error('palestrante') <div class="invalid-feedback" style="display:block;">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Data (YYYY-MM-DD HH:MM)</label><br>
    <input class="form-control" type="text" name="data" placeholder="2025-10-22 19:30" value="{{ old('data', isset($palestra)?$palestra->data?->format('Y-m-d H:i'):'') }}">
    @error('data') <div class="invalid-feedback" style="display:block;">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Local</label><br>
    <input class="form-control" type="text" name="local" value="{{ old('local', $palestra->local ?? '') }}">
    @error('local') <div class="invalid-feedback" style="display:block;">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Descrição</label><br>
    <textarea class="form-control" name="descricao" rows="4">{{ old('descricao', $palestra->descricao ?? '') }}</textarea>
    @error('descricao') <div class="invalid-feedback" style="display:block;">{{ $message }}</div> @enderror
</div>