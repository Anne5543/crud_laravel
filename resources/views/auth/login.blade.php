<link rel="stylesheet" href="login.css">
<script src="./script.js"></script>


<div class="login1">
    <form method="POST" action="{{ route('login') }}" id="loginForm">
        @csrf
        <div class="row">
            <h1 class="destaque">PetCharm</h1>
            <p class="destaque">Faça login para cuidar ainda melhor do seu pet! 🐾</p><br>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Digite seu email:</label>
                <input type="email" name="email" id="email" placeholder="Email" class="text" required autofocus style="height: 35px;">
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div><br>

            <!-- Senha -->
            <div class="form-group">
                <label for="password">Digite sua senha:</label>
                <input type="password" name="password" id="password" placeholder="Senha" class="text" required style="height: 35px;"><br><br>
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div><br>

            <!-- Mostrar senha -->
            <button type="button" id="mos" onclick="mostrar()" class="submit">Mostrar senha</button><br><br>

            <input type="submit" value="Entrar" class="submit" name="submit">

            <div class="links1">
                <p class="destaque">Não tem uma conta? <a href="{{ route('register') }}">Cadastre-se</a></p>
            </div>
        </div>
    </form>

    <!-- Imagem -->
    <img id="img" src="{{ asset('images/pettcharm.png') }}" alt="PetCharm Logo">
</div>