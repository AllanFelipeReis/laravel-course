{{ $slot }}
<form action="{{ route("site.contact") }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome" name="name" class="{{ $bord }}">
    <br>
    <input type="text" placeholder="Telefone" name="phone" class="{{ $bord }}">
    <br>
    <input type="text" placeholder="E-mail" name="email" class="{{ $bord }}">
    <br>
    <select class="{{ $bord }}" name="reason">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea class="{{ $bord }}" name="message" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="{{ $bord }}">ENVIAR</button>
</form>