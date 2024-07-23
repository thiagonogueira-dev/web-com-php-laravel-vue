@if($errors->any())
    <div style="background-color:red">
        <p >Erros:</p>
        @foreach($errors->all() as $erro)
            {{ $erro }}<br>
        @endforeach
    </div>
@endif

<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input type="text"  name="nome" value="{{ old('nome') }}" placeholder="Nome" class="{{ $classe }}">
    @if($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input type="text" name="telefone" value="{{ old('telefone') }}" placeholder="Telefone" class="{{ $classe }}">
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail" class="{{ $classe }}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>
    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        
        @foreach ($motivo_contatos as $motivo_contato)
            <option value="{{ $motivo_contato->id }}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>{{ $motivo_contato->motivo_contato }}</option>
        @endforeach
    </select>
    {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    <br>
    <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui sua mensagem' }}</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>