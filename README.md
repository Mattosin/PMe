<?php
session_start();

// Verifique se o usuário já está logado
if (isset($_SESSION['usuario_id'])) {
    // Se o usuário já está logado, redirecione para a página inicial
    header('Location: pages/home');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifood</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/644520621a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="all">

        <aside id="feedback">
            <span>Feedback</span>
        </aside>

        <aside class="menuMobile">
            <div class="headerMobile">
                <img src="image/ifood-logo.svg" alt="">
                <svg viewBox="0 0 32 32" fill="none" width="24px" height="24px" id="close-icon"
                    style="color: rgb(239, 87, 83); cursor: pointer;">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5.72043 5.72043C5.20431 6.23654 5.20432 7.07333 5.72043 7.58944L14.131 16L5.72043 24.4106C5.20432 24.9267 5.20431 25.7635 5.72043 26.2796C6.23654 26.7957 7.07333 26.7957 7.58944 26.2796L16 17.869L24.4106 26.2796C24.9267 26.7957 25.7635 26.7957 26.2796 26.2796C26.7957 25.7635 26.7957 24.9267 26.2796 24.4106L17.869 16L26.2796 7.58944C26.7957 7.07333 26.7957 6.23654 26.2796 5.72043C25.7635 5.20431 24.9267 5.20432 24.4106 5.72043L16 14.131L7.58944 5.72043C7.07333 5.20432 6.23654 5.20431 5.72043 5.72043Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <div class="containeMenuMobile">
                <div class="menuMobileContent">
                    <span>Cadastrar mercado</span>
                    <svg viewBox="0 0 32 32" fill="none" width="1em" height="1em" class="sc-56d9c528-6 CpzvT">
                        <g clip-path="url(#chevron-down_svg__clip0)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M23.7394 12.2411C24.0894 12.5602 24.0865 13.0749 23.7329 13.3908L16.5978 19.7648C16.2454 20.0795 15.6775 20.0782 15.3269 19.7619L8.26387 13.3879C7.91204 13.0704 7.91205 12.5556 8.26387 12.2381C8.61569 11.9206 9.18611 11.9206 9.53794 12.2381L15.9672 18.0401L22.4653 12.2352C22.8189 11.9193 23.3893 11.9219 23.7394 12.2411Z"
                                fill="currentColor"></path>
                        </g>
                        <defs>
                            <clipPath id="chevron-down_svg__clip0">
                                <path d="M32 0L0 0V32L32 32L32 0Z" fill="transparent"></path>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="menuMobileContent">
                    <span>Como funciona</span>
                    <svg viewBox="0 0 32 32" fill="none" width="1em" height="1em" class="sc-56d9c528-6 CpzvT">
                        <g clip-path="url(#chevron-down_svg__clip0)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M23.7394 12.2411C24.0894 12.5602 24.0865 13.0749 23.7329 13.3908L16.5978 19.7648C16.2454 20.0795 15.6775 20.0782 15.3269 19.7619L8.26387 13.3879C7.91204 13.0704 7.91205 12.5556 8.26387 12.2381C8.61569 11.9206 9.18611 11.9206 9.53794 12.2381L15.9672 18.0401L22.4653 12.2352C22.8189 11.9193 23.3893 11.9219 23.7394 12.2411Z"
                                fill="currentColor"></path>
                        </g>
                        <defs>
                            <clipPath id="chevron-down_svg__clip0">
                                <path d="M32 0L0 0V32L32 32L32 0Z" fill="transparent"></path>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="menuMobileContent">
                    <span>Ajuda</span>
                    <svg viewBox="0 0 32 32" fill="none" width="1em" height="1em" class="sc-56d9c528-6 CpzvT">
                        <g clip-path="url(#chevron-down_svg__clip0)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M23.7394 12.2411C24.0894 12.5602 24.0865 13.0749 23.7329 13.3908L16.5978 19.7648C16.2454 20.0795 15.6775 20.0782 15.3269 19.7619L8.26387 13.3879C7.91204 13.0704 7.91205 12.5556 8.26387 12.2381C8.61569 11.9206 9.18611 11.9206 9.53794 12.2381L15.9672 18.0401L22.4653 12.2352C22.8189 11.9193 23.3893 11.9219 23.7394 12.2411Z"
                                fill="currentColor"></path>
                        </g>
                        <defs>
                            <clipPath id="chevron-down_svg__clip0">
                                <path d="M32 0L0 0V32L32 32L32 0Z" fill="transparent"></path>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="contiainerButtons">
                <div class="buttonsSection displayBottom">
                    <a href="pages/login">
                        <button>Entrar</button>
                    </a>
                    <button onclick="setFocus()">Cadastrar</button>
                </div>
            </div>
        </aside>

        <div class="fixed">
            <aside id="banner">
                <span>Cadastre-se agora e não pague comissão enquanto não atingir 30 pedidos por mês. Oferta por tempo
                    limitado! *Sujeito a elegibilidade</span>
            </aside>
            <header>
                <div class="headerDesktop">
                    <div>
                        <img id="logo" src="image/ifood-logo.svg" alt="logo-ifood">
                    </div>
                    <nav>
                        <li>
                            <a class="locationPin">
                                <img id="pin" src="image/pin.svg" alt="">
                                <div>
                                    <span>Informe sua ciade para ver <br> condições exclusivas</span>
                                </div>
                                <div>
                                    <div>
                                        <svg viewBox="0 0 32 32" fill="none" width="1em" height="1em"
                                            class="sc-56d9c528-6 CpzvT">
                                            <g clip-path="url(#chevron-down_svg__clip0)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.7394 12.2411C24.0894 12.5602 24.0865 13.0749 23.7329 13.3908L16.5978 19.7648C16.2454 20.0795 15.6775 20.0782 15.3269 19.7619L8.26387 13.3879C7.91204 13.0704 7.91205 12.5556 8.26387 12.2381C8.61569 11.9206 9.18611 11.9206 9.53794 12.2381L15.9672 18.0401L22.4653 12.2352C22.8189 11.9193 23.3893 11.9219 23.7394 12.2411Z"
                                                    fill="currentColor"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="chevron-down_svg__clip0">
                                                    <path d="M32 0L0 0V32L32 32L32 0Z" fill="transparent"></path>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a>
                                <div>
                                    <span>Cadastrar mercado</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a>
                                <div>
                                    <span>Como funciona</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a>
                                <div>
                                    <span>Ajuda</span>
                                </div>
                            </a>
                        </li>
                    </nav>

                    <div class="buttonsSection">
                        <div>
                            <a href="pages/login">
                                <button>Entrar</button>
                            </a>
                            <button onclick="setFocus()">Cadastrar</button>
                        </div>
                    </div>
                </div>
                <div class="headerMobile">
                    <div>
                        <img id="logo" src="image/ifood-logo.svg" alt="logo-ifood">
                    </div>
                    <div class="flexOptionMobile">
                        <button class="buttonCadas" onclick="setFocus()">Cadastrar</button>
                        <div>
                            <!-- <input hidden="" class="check-icon" id="check-icon" name="check-icon" type="checkbox"> -->
                            <label class="icon-menu" for="check-icon">
                                <div class="bar bar--1"></div>
                                <div class="bar bar--2"></div>
                                <div class="bar bar--3"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <main>
            <section class="home">
                <div class="contentHome">
                    <h1>60 milhões de pedidos em apenas um mês</h1>
                    <p>Esse é o alcance das lojas parceiras do iFood. Faça parte e alavanque suas vendas.</p>
                </div>
                <form class="containerLog" autocomplete="off" action="./classes/registro.php" method="POST">
                    <div class="contentHeaderLog">
                        <h2>Cadastre sua loja</h2>
                        <p>Entre e ganhe mensalidade grátis!</p>
                    </div>

                    <div class="labelInput">
                        <label for="nome">Nome completo</label>
                        <input type="text" name="nome" id="nome" placeholder="Isaque Sangley" required>
                    </div>
                    <div class="labelInput">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required>
                    </div>
                    <div class="labelInput">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Minimo 6 caracters" required>
                    </div>

                    <span>Esse site é protegido pelo reCAPTCHA e está sujeito à Política de Privacidade e aos Termos de
                        Serviço do Google.</span>

                    <button>Cadastrar</button>
                </form>
            </section>

            <section class="partnership">
                <div>
                    <img src="image/breakfast.jpg" alt="">
                </div>
                <div class="contentPartnership">
                    <h2>A <span>parceria</span> certa para o seu negócio</h2>
                    <p>Com o iFood, você conecta seu restaurante a milhões de novos clientes, expande sua área de
                        entrega e vende muito mais.</p>
                </div>
            </section>

            <section class="establishments">
                <div class="boxEstablishments">
                    <div>
                        <h3>300</h3>
                    </div>
                    <div class="contentEstablishments">
                        <span class="plus">+</span>
                        <span>mil estabelecimentos parceiros</span>
                    </div>
                </div>

                <div class="boxEstablishments">
                    <div>
                        <h3>60</h3>
                    </div>
                    <div class="contentEstablishments">
                        <span class="plus">+</span>
                        <span>milhões de pedidos por mês</span>
                    </div>
                </div>

                <div class="boxEstablishments">
                    <div>
                        <h3>200</h3>
                    </div>
                    <div class="contentEstablishments">
                        <span class="plus">+</span>
                        <span>mil entregadores ativos</span>
                    </div>
                </div>

            </section>

            <section class="benefits">
                <div class="imageBackgorundBenefits">
                    <img src="image/background.svg" alt="">
                </div>
                <div class="contentBenefits">
                    <h2>Vantagens de ser uma loja parceira</h2>

                    <div class="containerBoxesBenefits">
                        <div class="boxBenefits">
                            <img src="image/icons/easy-delivery.svg" alt="">
                            <div class="contentBoxesBenefits">
                                <h3>Entrega Fácil</h3>
                                <p>Entregue seus pedidos recebidos em qualquer canal de venda além do app.</p>
                            </div>
                        </div>

                        <div class="boxBenefits">
                            <img src="image/icons/bag.svg" alt="">
                            <div class="contentBoxesBenefits">
                                <h3>iFood Shop</h3>
                                <p>Encontre os melhores fornecedores e diversos produtos para sua loja.</p>
                            </div>
                        </div>

                        <div class="boxBenefits">
                            <img src="image/icons/management.svg" alt="">
                            <div class="contentBoxesBenefits">
                                <h3>Gestão simples e fácil</h3>
                                <p>Autonomia e facilidade para gerenciar seus pedidos em uma única plataforma.</p>
                            </div>
                        </div>

                        <div class="boxBenefits">
                            <img src="image/icons/computer.svg" alt="">
                            <div class="contentBoxesBenefits">
                                <h3>Cardápio Digital</h3>
                                <p>Divulgue sua loja nas redes sociais e receba mais pedidos direto no seu Gestor de
                                    Pedidos iFood.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="partnership">
                <div class="contentPartnership">
                    <h2 id="lowH2">Chegou a hora do seu restaurante <span>Chegou a hora do seu restaurante</span></h2>
                    <p>Tenha mais autonomia para divulgar seu restaurante, receber pedidos, conquistar novos clientes e
                        fidelizá-los.</p>
                </div>
                <div>
                    <img src="image/breakfast.jpg" alt="">
                </div>
            </section>
            <div class="flex">
                <img src="image/icons/splashes_restaurante.svg" alt="">
            </div>

            <section class="prices">
                <div class="containerPricesContent">

                    <h2>Conheça os planos iFood</h2>

                    <div class="containerPrices">
                        <div class="containerBoxPrices">
                            <div class="headerBoxPrices">
                                <img src="image/prices/basic.svg" alt="">
                                <h3>Como funciona o plano <br> <strong>iFood Básico</strong></h3>
                            </div>

                            <div class="containerCheck">
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Sua loja no app do iFood</span>
                                </div>
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Entrega feita pela sua loja</span>
                                </div>
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Gestor de Pedidos</span>
                                </div>
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Gestor de Pedidos</span>
                                </div>
                            </div>

                            <div class="containerCondition">
                                <div class="contentCondition">
                                    <h3>12%</h3>
                                    <span>Comissão sobre pedidos delivery</span>
                                </div>
                                <div class="contentCondition">
                                    <h3>3,2%</h3>
                                    <span>Taxa para pedidos pagos via iFood</span>
                                </div>
                                <div class="contentCondition">
                                    <h3>R$ 100,00/mês 1º mês grátis</h3>
                                    <span>Mensalidade para faturamento acima de R$ 1.800,00/mês</span>
                                </div>
                            </div>
                            <div class="buttonDetails">
                                <button>Ver mais detalhes</button>
                            </div>
                        </div>


                        <div class="containerBoxPrices">
                            <div class="headerBoxPrices">
                                <img src="image/prices/basic.svg" alt="">
                                <h3>Como funciona o plano <br> <strong>iFood Básico</strong></h3>
                            </div>

                            <div class="containerCheck">
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Tudo do Plano Básico</span>
                                </div>
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Entrega com parceiros iFood</span>
                                </div>
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Rastreio de entrega em tempo real</span>
                                </div>
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Rastreio de entrega em tempo real</span>
                                </div>
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Atendimento iFood até a entrega</span>
                                </div>
                                <div class="check">
                                    <img src="image/prices/checked.svg" alt="">
                                    <span>Seguro contra fraudes na entrega</span>
                                </div>
                            </div>

                            <div class="containerCondition">
                                <div class="contentCondition">
                                    <h3>23%</h3>
                                    <span>Comissão sobre pedidos delivery</span>
                                </div>
                                <div class="contentCondition">
                                    <h3>3,2%</h3>
                                    <span>Taxa para pedidos pagos via iFood</span>
                                </div>
                                <div class="contentCondition">
                                    <h3>R$ 130,00/mês 1º mês grátis!</h3>
                                    <span>Mensalidade para faturamento acima de R$ 1.800,00/mês</span>
                                </div>
                            </div>
                            <div class="buttonDetails">
                                <button>Ver mais detalhes</button>
                                <span>*Inicie o cadastro e verifique a disponibilidade na sua região.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sectionVideo">
                <h2>Lojas que confiam no iFood</h2>

                <div class="videoPlay">
                    <div>
                        <img id="toggleImage"
                            src="https://parceiros.ifood.com.br/_next/image?url=%2Fimages%2Fsections%2Ftestimonials%2Fvideo-about.webp&w=1080&q=75"
                            alt="">
                    </div>
                </div>
            </section>

            <aside id="videoTrust" class="videoTrust" style="display:none;">
                <div id="blur"></div>
                <div class="trustVideo">
                    <div class="close">
                        <svg viewBox="0 0 32 32" fill="none" width="24px" height="24px">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.72043 5.72043C5.20431 6.23654 5.20432 7.07333 5.72043 7.58944L14.131 16L5.72043 24.4106C5.20432 24.9267 5.20431 25.7635 5.72043 26.2796C6.23654 26.7957 7.07333 26.7957 7.58944 26.2796L16 17.869L24.4106 26.2796C24.9267 26.7957 25.7635 26.7957 26.2796 26.2796C26.7957 25.7635 26.7957 24.9267 26.2796 24.4106L17.869 16L26.2796 7.58944C26.7957 7.07333 26.7957 6.23654 26.2796 5.72043C25.7635 5.20431 24.9267 5.20432 24.4106 5.72043L16 14.131L7.58944 5.72043C7.07333 5.20432 6.23654 5.20431 5.72043 5.72043Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h3>Lojas que confiam no iFood</h3>
                    <div>
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/22WmeZ1BAvY?si=ymMa6JkdzhhPg3QV"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </aside>

            <section>
                <div class="contentBenefits">
                    <h2>4 passos para fazer seu cadastro no iFood</h2>
                    <span>Tire suas dúvidas sobre como cadastrar seu restaurante no iFood para vender.</span>

                    <div class="containerBoxesBenefits">
                        <div class="boxBenefits">
                            <img src="image/steps/step1-restaurante.svg" alt="">
                            <div class="contentBoxesBenefits">
                                <h3>Informe os seus dados de contato</h3>
                                <p>Informe seu nome, e-mail e celular. Esses serão os principais canais de contato do
                                    iFood com você.p>
                            </div>
                        </div>

                        <div class="boxBenefits">
                            <img src="image/steps/step2-restaurante.svg" alt="">
                            <div class="contentBoxesBenefits">
                                <h3>Preencha sua documentação</h3>
                                <p>Preencha o número do seu CNPJ. O iFood aceita MEI, mas não é possível vender apenas
                                    com CPF.</p>
                            </div>
                        </div>

                        <div class="boxBenefits">
                            <img src="image/steps/step3-restaurante.svg" alt="">
                            <div class="contentBoxesBenefits">
                                <h3>Escolha um plano</h3>
                                <p>Escolha o melhor plano do iFood para o seu negócio: o Plano Básico ou o Plano
                                    Entrega.</p>
                            </div>
                        </div>

                        <div class="boxBenefits">
                            <img src="image/steps/step4-restaurante.svg" alt="">
                            <div class="contentBoxesBenefits">
                                <h3>Assine o contrato</h3>
                                <p>O iFood leva alguns minutos para validar os documentos. Depois é só assinar o
                                    contrato e configurar sua loja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="secContainerAds">
                <div class="imageWebSite">
                    <div class="containerAds">
                        <div class="imageAds">
                            <img src="image/download.webp" alt="">
                        </div>
                        <div class="contentAds">
                            <div>
                                <h3>Conheça a Conta Digital iFood</h3>
                                <span>Mais flexibilidade no dia a dia do seu negócio.</span>
                            </div>
                            <button>Saiba Mais</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="secFAQ">
                <div class="faq">

                    <h2>Perguntas frequentes</h2>

                    <div class="containerDetails">
                        <details>
                            <summary>Quais são as taxas cobradas?</summary>
                            <p><strong>Plano Básico</strong></p>
                            <p>Seu restaurante faz a entrega.</p>
                            <ul>
                                <li>Comissão de 0%, caso você faça menos de 30 pedidos no mês por tempo limitado.</li>
                                <li>A partir de 30 pedidos no mês, será cobrado comissão de 12% sobre o valor dos
                                    pedidos.</li>
                                <li>3,5% para pagamentos via iFood.</li>
                                <li>Mensalidade de R$ 100,00 (apenas se o seu restaurante vender mais de R$ 1.800,00 no
                                    mês).</li>
                                <li>Cancele o plano quando quiser.</li>
                            </ul>
                            <p><strong>Plano Entrega</strong></p>
                            <p>A entrega dos pedidos é feita pelos entregadores parceiros do iFood.</p>
                            <ul>
                                <li>Comissão de 0%, caso você faça menos de 30 pedidos no mês por tempo limitado;</li>
                                <li>A partir de 30 pedidos no mês, será cobrado comissão de 23% sobre o valor dos
                                    pedidos.</li>
                                <li>3,5% nos pedidos com pagamento via iFood.</li>
                                <li>Mensalidade de R$ 130,00 (apenas se o seu restaurante vender mais de R$ 1.800,00 no
                                    mês).</li>
                                <li>Cancele o plano quando quiser.</li>
                            </ul>
                            <p><strong>Importante:</strong></p>
                            <ul>
                                <li>Independentemente do plano escolhido, a mensalidade é grátis no primeiro mês.</li>
                                <li>O Plano Entrega só está disponível em algumas regiões do Brasil.</li>
                            </ul>
                        </details>

                        <details>
                            <summary>Do que preciso para me cadastrar?</summary>
                            <ul>
                                <li>CNPJ válido e CNAE no ramo alimentício.</li>
                                <li>Conta bancária vinculada ao CNPJ (ou ao responsável legal, em caso de MEI).</li>
                                <li>Computador com Windows (a partir do 7) ou celular Android.</li>
                                <li>Internet para receber os pedidos!</li>
                                <li>Se você optar pelo plano Básico, também vai precisar de uma pessoa para entregar os
                                    pedidos.</li>
                            </ul>
                        </details>

                        <details>
                            <summary>É necessário ter CNPJ para se cadastrar no iFood?</summary>
                            <p>É obrigatório ter o CNPJ para abrir uma loja no iFood!</p>
                            <p>Para algumas cidades, existe a possibilidade de abrir suas loja como Pessoa Física e
                                utilizar seu CPF!</p>
                            <p>No entanto, sua loja terá restrições na contratação de alguns serviços, além disso, para
                                que sua loja continue ativa no iFood você precisa criar uma empresa (com CNPJ) em até 1
                                ano depois do seu cadastro.</p>
                            <p><a href="#">Verifique disponibilidade das cidades com CPF</a></p>
                        </details>

                        <details>
                            <summary>Quais são os planos disponíveis?</summary>
                            <p>O iFood oferece dois planos: com o Plano Básico, o restaurante é responsável por realizar
                                as entregas e gerenciar seus próprios entregadores.</p>
                            <p>Já no Plano Entrega, você cuida do preparo do pedido, os entregadores parceiros do iFood
                                ficam responsáveis pelas entregas e nós gerenciamos as ferramentas utilizadas.</p>
                            <p>Mas não se preocupe: você pode trocar de plano quando quiser.</p>
                            <p><strong>Importante:</strong> o Plano Entrega só está disponível em algumas regiões do
                                Brasil.</p>
                        </details>

                        <details>
                            <summary>Em quanto tempo o meu negócio estará disponível no iFood?</summary>
                            <p>Quem define a data de início das vendas é você!</p>
                            <p>Entretanto, o prazo mínimo para início no iFood é de 2 dias úteis e o prazo máximo é de
                                30 dias após a assinatura do contrato.</p>
                        </details>

                        <details>
                            <summary>Quais as vantagens do iFood?</summary>
                            <p>Estas são algumas das vantagens de se tornar uma loja parceira do iFood:</p>
                            <ul>
                                <li>Você aproveita o nosso conhecimento após mais de 9 anos no mercado.</li>
                                <li>Seu estabelecimento ganha muita visibilidade, atraindo novos clientes.</li>
                                <li>Você pode aumentar o seu faturamento em até 50%.</li>
                                <li>Você gerencia o seu negócio com muito mais facilidade com as nossas ferramentas e
                                    soluções.</li>
                                <li>O iFood também investe muito em marketing, o que atrai cada vez mais clientes para a
                                    plataforma e, consequentemente, muito mais vendas para os restaurantes.</li>
                            </ul>
                        </details>
                    </div>
                    <div class="moreFaq">
                        <a href="#">Ver mais</a>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="containerCenterFooter">
                <div class="conteinerFooter">
                    <div class="contentFooter">
                        <h3>Ifood</h3>
                        <div class="contentFooter">
                            <a href="#">Portal do Parceiro</a>
                            <a href="#">Carreiras no iFood</a>
                        </div>
                    </div>
                    <div class="contentFooter">
                        <h3>Descubra</h3>
                        <div class="contentFooter">
                            <a href="#">Cadastre seu restaurante</a>
                            <a href="#">Cadastre seu mercado</a>
                        </div>
                    </div>
                    <div class="contentFooter">
                        <h3>Social</h3>
                        <div class="contenSocialMedia">
                            <img src="image/socialMedia/facebook.svg" alt="">
                            <img src="image/socialMedia/youtube.svg" alt="">
                            <img src="image/socialMedia/twitter.svg" alt="">
                            <img src="image/socialMedia/instagram.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="flexInfoFooterBottom">
                    <div class="flexInfoBottom">
                        <img src="image/ifood-smile.svg" alt="">
                        <span class="infoFooterBottom">© Copyright 2023 - iFood - Todos os direitos reservados iFood com
                            Agência de Restaurantes Online S.A. </span>
                    </div>
                    <div>
                        <span class="infoFooterBottom">CNPJ 14.380.200/0001-21 / Avenida dos Autonomistas, nº 1496, Vila
                            Yara, Osasco/SP - CEP 06.020-902</span>
                    </div>
                    <div>
                        <div class="contentFooter">
                            <a href="#">Privacidade</a>
                        </div>
                    </div>
                    <div>
                        <div class="contentFooter">
                            <a href="#">Código de conduta</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="javascript.js"></script>
    <script>
        document.getElementById('toggleImage').addEventListener('click', function () {
            const videoTrust = document.getElementById('videoTrust');
            videoTrust.style.display = videoTrust.style.display === 'none' ? '' : 'none';
        });

        document.querySelector('.videoTrust .close').addEventListener('click', function () {
            document.getElementById('videoTrust').style.display = 'none';
        });

        document.querySelector('.icon-menu').addEventListener('click', function () {
            document.querySelector('.menuMobile').classList.add('active');
        });

        document.querySelector('#close-icon').addEventListener('click', function () {
            document.querySelector('.menuMobile').classList.remove('active');
        });

        function setFocus() {
            document.getElementById('nome').focus();
        }
    </script>

</body>

</html>
