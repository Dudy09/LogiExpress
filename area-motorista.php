<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogiExpress</title>
    <link rel="icon" type="image/png" href="./caminho-da-sua-imagem.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="fundo-principal Vh-1 Vw-1">

        <aside class="barra-lateral Vh-1 Vw15">
            <div class="Vh-2 Vw15">
                <div>
                    <div class="logo-caixa">
                        <img src="logo.png" alt="Logo da LogiExpress" class="logo-imagem">
                    </div>
                    <nav class="menu Vw15">
                        <label class="ativo">Home</label>
                        <label>Perfil</label>
                        <label>Configurações</label>
                        <label>Sair</label>
                    </nav>
                </div>

                <div class="perfil-card">
                    <div class="perfil-avatar">
                        <span>MT</span>
                    </div>
                    <div class="perfil-info">
                        <strong>[Nome]</strong>
                        <span>Motorista</span>
                    </div>
                    <a href="#" class="perfil-sair" aria-label="Sair">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" y1="12" x2="9" y2="12"/>
                        </svg>
                    </a>
                </div>
            </div>
        </aside>

        <section class="conteudo Vh-1">
            <div class="painel Vh-1 Sombra25">
                <header>
                    <div class="cabecalho-linha">
                        <div class="cabecalho-texto">
                            <h1>Olá, [Nome do Motorista]</h1>
                            <p>COLOCAR MENSAGEM MOTIVACIONAL</p>
                        </div>
                        <div class="cabecalho-acoes">
                            <button class="botao-notificacoes Sombra5" id="openBtn">
                                Notificações
                            </button>

                            <div id="modalOverlay" class="modal-overlay">
                                <div class="modal-content">
                                    <span id="closeBtn" class="close-btn">&times;</span>
                                    <h2>Notificações recentes</h2>
                                    <div class="lista-entregas Vh-2">
                                        <div class="lista-entregas-interna">
                                            <div class="cartao-entrega">
                                                <div class="cartao-entrega-texto">
                                                    <h2 class="entrega-endereco">Data prevista para a entrega ENT-0056 13/12/2026 - 17:00:00</h2>
                                                    <p class="entrega-data">13/12/2026 - 09:30:00</p>
                                                </div>
                                            </div>

                                            <div class="cartao-entrega">
                                                <div class="cartao-entrega-texto">
                                                    <h2 class="entrega-endereco">Data prevista para a entrega ENT-0056 13/12/2026 - 17:00:00</h2>
                                                    <p class="entrega-data">13/12/2026 - 09:30:00</p>
                                                </div>
                                            </div>

                                            <div class="cartao-entrega">
                                                <div class="cartao-entrega-texto">
                                                    <h2 class="entrega-endereco">Data prevista para a entrega ENT-0056 13/12/2026 - 17:00:00</h2>
                                                    <p class="entrega-data">13/12/2026 - 09:30:00</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <hr>

                <article class="lista-entregas Vh-2">
                    <div class="lista-entregas-interna">
                        <div class="cartao-entrega">
                            <div class="cartao-entrega-texto">
                                <p class="entrega-endereco">Entrega Realizada em Vila Lúcia, Rua Campos Novos 42 São Paulo - SP</p>
                                <p class="entrega-data">12/05/12:32:00</p>
                            </div>
                            <div class="faixa-status faixa-entregue"></div>
                        </div>

                        <div class="cartao-entrega">
                            <div class="cartao-entrega-texto">
                                <p class="entrega-endereco">Entrega ATRASADA Realizada em Vila Prudente Rua Poá 59 São Paulo - SP</p>
                                <p class="entrega-data">12/05/12:32:00</p>
                            </div>
                            <div class="faixa-status faixa-atrasada"></div>
                        </div>

                        <div class="cartao-entrega">
                            <div class="cartao-entrega-texto">
                                <p class="entrega-endereco">Entrega Realizada em Vila Lúcia, Rua Campos Novos 42 São Paulo - SP</p>
                                <p class="entrega-data">12/05/12:32:00</p>
                            </div>
                            <div class="faixa-status faixa-entregue"></div>
                        </div>

                        <div class="cartao-entrega">
                            <div class="cartao-entrega-texto">
                                <p class="entrega-endereco">Entrega Realizada em Vila Lúcia, Rua Campos Novos 42 São Paulo - SP</p>
                                <p class="entrega-data">12/05/12:32:00</p>
                            </div>
                            <div class="faixa-status faixa-entregue"></div>
                        </div>

                        <div class="cartao-entrega">
                            <div class="cartao-entrega-texto">
                                <p class="entrega-endereco">Entrega Realizada em Vila Lúcia, Rua Campos Novos 42 São Paulo - SP</p>
                                <p class="entrega-data">12/05/12:32:00</p>
                            </div>
                            <div class="faixa-status faixa-entregue"></div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <script src="script.js"></script>

</body>
</html>