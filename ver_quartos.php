<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino Bootstrap 01 - Guia de Hotéis</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="container p-4" style="font-family: 'Poppins', sans-serif; background-color: #f4f7f6;">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-4" style="box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#"><i class="bi bi-geo-alt-fill text-danger"></i> VagaViva</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light border-0 px-3" href="cadastrar_cliente.html">Cadastro de Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light border-0 px-3" href="cadastro_hotel.html">Cadastro de Hotel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        
        
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark mb-3">
                <i class="bi bi-buildings text-primary"></i> SEJA BEM VINDO AO GUIA DE HOTÉIS <i class="bi bi-geo-alt-fill text-primary"></i>
            </h1>
            <p class="text-muted fs-5">Encontre os melhores destinos e as hospedagens mais confortáveis.</p>
        </div>

        
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card shadow-sm" style="border-radius: 16px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05) !important;">
                    <div class="card-body text-center p-5">
                        <h4 class="card-title text-primary fw-bold mb-2">Acesso Rápido</h4>
                        <p class="card-text text-muted mb-4">Gerencie as informações do nosso sistema nos links abaixo</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="cadastrar_cliente.html" class="btn btn-primary px-4 py-2 fw-semibold">
                                <i class="bi bi-person-plus"></i> Cadastro de Cliente
                            </a>
                            <a href="cadastro_hotel.html" class="btn btn-outline-primary px-4 py-2 fw-semibold">
                                <i class="bi bi-building-add"></i> Cadastro de Hotel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h4 class="text-center fw-bold mb-3 mt-5">Nossos Destinos</h4>
        <div class="mb-5" style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <table class="table table-borderless table-striped text-center mb-0">
                <tr class="table-dark">
                    <th class="py-3">Marimata</th>
                    <th class="py-3">Passárgada</th>
                    <th class="py-3">Cambotal</th>
                </tr>
            </table>
        </div>

        
        <div class="d-flex justify-content-center flex-wrap gap-4 mb-5">
            <img src="img/download.jpg" alt="Fachada do Hotel" class="shadow-sm" style="width: 350px; height: 250px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1) !important;">
            <img src="img/piscina-de-natacao_74190-1977.avif" alt="Piscina de Natação" class="shadow-sm" style="width: 350px; height: 250px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1) !important;">
            <img src="img/imagesss.jpg" alt="Quarto de Luxo" class="shadow-sm" style="width: 350px; height: 250px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1) !important;">
        </div> 

        
        <h4 class="fw-bold mb-3 mt-5">Tabela de Preços e Avaliações</h4>
        <div class="mb-5" style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <table class="table table-hover table-striped text-center mb-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="py-3">Hotel</th>
                        <th class="py-3">Preço Base</th>
                        <th class="py-3">Diária</th>
                        <th class="py-3">Avaliação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-semibold">Marimata</td>
                        <td>R$ 400,00</td>
                        <td>R$ 200,00 / dia</td>
                        <td class="text-warning">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Passárgada</td>
                        <td>R$ 300,00</td>
                        <td>R$ 300,00 / dia</td>
                        <td class="text-warning">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Cambotal</td>
                        <td>R$ 100,00</td>
                        <td>R$ 100,00 / dia</td>
                        <td class="text-warning">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        <h4 class="text-center fw-bold mb-4 mt-5">Siga nossas Redes Sociais</h4>
        <div class="row g-4 mb-4 justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm h-100" style="border-radius: 16px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05) !important;">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-instagram mb-3" style="font-size: 3.5rem; color: #E1306C;"></i>
                        <h4 class="card-title text-dark fw-bold">Instagram</h4>
                        <p class="card-text text-muted">Acompanhe nossas fotos e novidades diárias.</p>
                        <h6 class="text-primary fw-bold">@hotelss</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card shadow-sm h-100" style="border-radius: 16px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05) !important;">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-facebook mb-3" style="font-size: 3.5rem; color: #1877F2;"></i>
                        <h4 class="card-title text-dark fw-bold">Facebook</h4>
                        <p class="card-text text-muted">Participe da nossa comunidade e veja avaliações.</p>
                        <h6 class="text-primary fw-bold">@hoteis</h6>
                    </div>
                </div>
            </div>
        </div>

    </main>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>