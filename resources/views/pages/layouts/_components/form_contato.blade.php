{{ $slot }}


<form action=" {{route('site.contato')}}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
    <br>
    <input type="text" name="telefone"  placeholder="Telefone" class="borda-preta">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
    <br>
    <select class="{{ $classe }}" name="motivo do contato">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class="{{ $classe }}" name="mensagem" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>