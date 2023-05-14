    <form class="form d-flex flex-column h-100 {{ $style }}"
          id="form-contact" method="post" action="{{ route('site.store') }}">
        @csrf
        <input type="text" name="nome" id="nome" value="{{old('nome')}}"
               class="form-control @error('nome') is-invalid @enderror mb-3"
        placeholder="Nome">
        @error('nome') <span class="invalid-feedback">{{ $message }}</span> @enderror
        <input type="text" name="telefone" value="{{ old('telefone') }}"
            class="form-control @error('telefone') is-invalid @enderror mb-3"
               id="telefone" placeholder="Telefone">
        @error('telefone') <span class="invalid-feedback">{{ $message }}</span> @enderror
        <input type="email" name="email" value="{{old('email')}}"
            class="form-control @error('email') is-invalid @enderror mb-3" id="email"
            placeholder="E-mail">
        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
        <select name="subject_id" id="subject_id" class="form-select @error('subject_id') is-invalid @enderror mb-3">
            <option value="">Qual o motivo do contato?</option>
            @foreach($subjects as $subject)
            <option value="{{$subject->id}}" @if(old('subject_id') == $subject->id) selected @endif>{{$subject->description}}</option>
            @endforeach
        </select>
        @error('subject_types_id') <span class="invalid-feedback">{{ $message }}</span> @enderror

        <textarea name="mensagem" id="mensagem"
                  class="form-control @error('mensagem') is-invalid @enderror mb-3"
             placeholder="Escreva aqui sua mensagem">{{ old('mensagem')!='' && old('mensagem') }}</textarea>
        @error('mensagem') <span class="invalid-feedback">{{ $message }}</span> @enderror

        <div class="btn-group-lg g-2">
            <button type="submit" class="btn btn-lg btn-success">ENVIAR</button>
            <button type="reset" class="btn btn-lg btn-secondary m-2">Cancelar</button>
        </div>
    </form>
