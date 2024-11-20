<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body class="font-sans bg-gray-100">
    @section('content')
    @include('layouts.navigation') 
    
    <div  id="inicio">
        <img src="{{ asset('images/banner.png') }}" alt="Banner" class="banner">
    </div>
    
    <div id="sobre">
        <section class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/imagem_sobre.png')}}" class="img-fluid rounded-circle" style="margin-right: 60px; width:400px; margin-top:20px;" alt="Imagem de animais" id="imagem">
                </div>
                <div class="col-md-6">
                    <h1 class="display-4"><strong style="font-size:40px">PetCharm</strong></h1>
                    <p class="lead"  style="text-align:justify">Somos o PetCharm, e nos dedicados ao bem-estar e felicidade dos animais de estimação. Oferecemos uma ampla gama de serviços personalizados, incluindo grooming profissional, adestramento, consultas e entre outros.</p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-6" >
                    <h2 class="display-4"><strong style="font-size:40px">O que nos diferencia</strong></h2>
                    <ul class="list-unstyled">
                        <li class="lead"  style="text-align:justify; font-size:17px">🐾 Compromisso com o bem-estar animal</li>
                        <li class="lead"  style="text-align:justify; font-size:17px">🐾 Qualidade garantida</li>
                        <li class="lead"  style="text-align:justify; font-size:17px">🐾Preços que cabem no seu bolso</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="display-4" style="text-align:center;"><strong style="font-size:40px">Nossa Missão</strong></h2>
                    <p class="lead"  style="text-align:justify; font-size:17px">Nosso objetivo é proporcionar uma experiência acolhedora e amigável para você e seus pets. Visite-nos e faça parte da nossa jornada de cuidado e amor pelos animais de estimação.</p>
                </div>
            </div>
        </section>
    </div>

    
    <div id="serviços" class="container">
        <h1 style="margin-bottom:-60px; text-align: center;">Serviços</h1>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col mt-3">
                <div class="card shadow" style="transform: scale(0.72);">
                    <img class="card-img-top" src="./images/banho.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Banhos <span style="margin-left: 185px">R$ 25,00</span></h4>
                        <p class="card-text" > Oferecemos banhos completos com produtos de alta qualidade, garantindo higiene e bem-estar para seu pet.</p>
                    </div>
                </div>
            </div>

            <div class="col mt-3">
                <div class="card shadow" style="transform: scale(0.72);">
                    <img class="card-img-top" src="./images/tosa.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Tosa<span style="margin-left: 230px">R$ 30,00</span></h4>
                        <p class="card-text">Nosso pet shop oferece serviços de tosa especializados, adequados às necessidades e ao estilo de cada animal.</p>
                    </div>
                </div>
            </div>

            <div class="col mt-3">
                <div class="card shadow" style="transform: scale(0.72);">
                    <img class="card-img-top" src="./images/consultas.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Consultas<span style="margin-left: 150px">R$ 100,00</span></h4>
                        <p class="card-text" style="text-align:justify;">No nosso pet shop, entendemos o quanto seu animal de estimação significa para você. É por isso que oferecemos consultas veterinárias.</p>
                    </div>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card shadow" style="transform: scale(0.72);">
                    <img class="card-img-top" src="./images/adestramento.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Adestramento <span style="margin-left: 20px">R$ 90,00(Sessão)</span></h4>
                        <p class="card-text"  style="text-align:justify;">Oferecemos serviços de adestramento dedicados a promover uma convivência harmoniosa entre você e seu animal de estimação.</p>
                    </div>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card shadow" style="transform: scale(0.72);">
                    <img class="card-img-top" src="./images/grooming.jpg" alt="Card image" style="height: 230px;">
                    <div class="card-body">
                        <h4 class="card-title">Grooming <span style="margin-left: 150px">R$ 120,00</span></h4>
                        <p class="card-text">Nosso pet shop oferece serviços de grooming completos, que incluem banho, tosa, corte de unhas, limpeza de ouvidos e hidratação. </p>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-top: 12%;">
                <div style="transform: scale(0.72);">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Agende agora os nossos Serviços</h4><br>
                        <p class="card-text" style="text-align: center;"><a href="#agendamentos"><button type="submit" class="btn btn-primary">Agendar</button></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <div class="container" id="agendamentos">
        <h3 class="text-center mb-4">AGENDAMENTOS DE SERVIÇOS</h3>
        <div style="text-align: center;">
            <p><strong> Funcionamos de segunda a sábado/ De 8:00 h às 18:00h</strong></p>
        </div>
        <form action="{{ route('agendamentos.store') }}" method="post" style="max-width: 400px; margin: 0 auto; border: 1px solid #ced4da; padding: 20px; border-radius: 10px;">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome<span style="color: red;">*</span></label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<span style="color: red;">*</span></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone<span style="color: red;">*</span></label>
                        <input type="tel" name="telefone" class="form-control" id="telefone" onkeypress="$(this).mask('(00) 0000-0000')" placeholder="(00) 0000-0000" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="data" class="form-label">Data<span style="color: red;">*</span></label>
                        <input type="date" name="data" class="form-control" id="data"required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="hora" class="form-label">Hora<span style="color: red;">*</span></label>
                        <input type="time" name="hora" class="form-control" id="hora" required>
                    </div>
                </div>
                <div class="mb-3">
                <label for="especie" class="form-label">Espécie do Animal<span style="color: red;">*</span></label>
                <input type="text" name="especie" class="form-control" id="especie" placeholder="Espécie do Animal" required>
            </div>
            </div>
            <div class="mb-3">
                <label for="servico" class="form-label">Serviço<span style="color: red;">*</span></label>
                <select class="form-select" id="servico" name="servico" required>
                    <option value="" disabled selected>Selecione um serviço</option>
                    @foreach ($servicos as $servico)
                        <option value="{{ $servico->id }}">{{ $servico->nome }}</option>
                    @endforeach
                </select>

            </div>

            <button type="submit" class="btn btn-primary btn-block">AGENDAR</button>
        </form>
    </div>
    
    <div id="contatos" style="margin-top: 50px;">
            <div id="forcon" class="container">
                <div id="cont">
                    <h1>FALE CONOSCO</h1>
                    <p>Para entrar em contato com a nossa equipe, por favor, preencha o formulário abaixo.</p>
                    <form action="{{ route('feedback.store') }}" method="post">
                        @csrf
                        <label style="font-size: 18px;"><strong>Nome: <span style="color: red;">*</span></strong></label><br>
                        <input type="text" name="nome"  placeholder="Digite seu nome"><br> 
                        <label style="font-size: 18px;"><strong>Telefone: <span style="color: red;">*</span></strong></label><br>
                        <input type="tel" name="telefone" class="form-control" id="telefone" onkeypress="$(this).mask('(00) 0000-0000')" placeholder="(00) 0000-0000" required>
                        <label style="font-size: 18px;"><strong>Email: <span style="color: red;">*</span></strong></label><br>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email" required>
                        <label style="font-size: 18px;"><strong>Seu Comentário: <span style="color: red;">*</span></strong></label><br>
                        <input type="text" name="comentario" placeholder="Digite seu Comentário"><br>
                        <input  class="btn btn-primary" type="submit" value="ENVIAR" style=" width: 120px;"></input>
                    </form>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <div id="formasc">
                    <h2>Formas de contato</h2>
                    <h5>EMAIL:</h5>
                    <p>anne.brandao@aluno.ce.gov.br</p>
                    <h5>TELEFONE:</h5>
                    <p>(88)9 1234-5678</p>
                    <h5>LOCALIZAÇÃO:</h5>
                    <p>Bairro nossa senhora de fátima, Russas-CE</p>
                </div>
            </div>

            
        <footer class="foo1">
            <div class="container text-center mt-5">
                <a href="https://www.facebook.com/annecarolineteixeira.brandao.5?locale=pt_BR" class="btn btn-primary btn-icon btn-facebook" target="_blank">
                    <img src="{{asset('images/facebook.png')}}" style=" height:50px; width:50px; margin-left:20%;   " alt="facebook">
                </a>
                <a href="https://x.com/Anne67583888" class="btn btn-dark" target="_blank" style="color:#000">
                    <img src="{{asset('images/x.png')}}" alt="Twitter" style="margin-top:5px; height:35px; width:35px; margin-left:28%;">
                </a>
                <a href="https://www.instagram.com/annecarolinetei/" class="btn" target="_blank" style="background-image: linear-gradient(45deg, #405de6,#5851db, #833ab4, #c13584, #e1306c, #fd1d1d);  padding: 10px;">
                    <img src="{{asset('images/instagram.png')}}" alt="instagram" style="margin-top: -15px; height: 70px; width: 70px; display: block; margin-left:5%;">
                </a>
            </div>
        </div>
        </footer>
        <footer class="foo2">
            <p>&copy;2024. Todos os direitos reservados.</p>
        </footer>
    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>
</html>
