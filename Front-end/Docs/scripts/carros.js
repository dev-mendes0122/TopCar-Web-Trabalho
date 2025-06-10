// carros.js

const carros = {
  camaro: {
    modelo: "Chevrolet Camaro",
    descricao: "6.2 V8 GASOLINA SS AUTOMÁTICO",
    valor: "R$599.999,00",
    ano: "2024/2025",
    cidade: "Campinas, São Paulo, Brasil",
    km: "ZERO",
    cambio: "Automático",
    carroceria: "Coupé",
    blindado: "Sim",
    combustivel: "Gasolina",
    placa: "CHE7R01",
    cor: "Preto",
    troca: "Não",
    garantia: "Sim",
    logo: "assets/carros/logo chevy.png",
    imagemPrincipal: "assets/carros/camaro transparent.avif",
    galeria: [
      "assets/carros/camaro 1.avif",
      "assets/carros/camaro 2.avif",
      "assets/carros/camaro 3.avif"
    ]
  },

  fusca: {
    modelo: "Volkswagen Fusca - Herbie",
    descricao: "1.2 8V GASOLINA 2P MANUAL",
    valor: "R$45.000,00",
    ano: "1963/1964",
    cidade: "Campinas, São Paulo, Brasil",
    km: "130.000",
    cambio: "Manual",
    carroceria: "Hatch",
    blindado: "Não",
    combustivel: "Gasolina",
    placa: "2TYY522",
    cor: "Branco",
    troca: "Sim",
    garantia: "Não",
    logo: "assets/carros/logo volkswagen.png",
    imagemPrincipal: "assets/carros/herbie transparent.png",
    galeria: [
      "assets/carros/herbie1.png",
      "assets/carros/herbie2.png",
      "assets/carros/herbie3.png"
    ]
  },
  
  escort: {
    modelo: "Ford Escort",
    descricao: "2.0 I XR3 CONVERSÍVEL 8V 2P",
    valor: "R$103.000,00",
    ano: "1994/1995",
    cidade: "Campinas, São Paulo, Brasil",
    km: "34.000",
    cambio: "Manual",
    carroceria: "Coupé",
    blindado: "Não",
    combustivel: "Gasolina",
    placa: "QPR0H08",
    cor: "Branco",
    troca: "Não",
    garantia: "Não",
    logo: "assets/carros/logo ford.png",
    imagemPrincipal: "assets/carros/escort transparent.png",
    galeria: [
      "assets/carros/escort1.png",
      "assets/carros/escort2.png",
      "assets/carros/escort3.png"
    ]
  },

  uno: {
    modelo: "Fiat Uno",
    descricao: "1.4 MPI FIRE ELX 8V FLEX 4P",
    valor: "R$17.000,00",
    ano: "2004/2005",
    cidade: "Campinas, São Paulo, Brasil",
    km: "175.000",
    cambio: "Manual",
    carroceria: "Hatch",
    blindado: "Não",
    combustivel: "Flex",
    placa: "JUV0T34",
    cor: "Prata",
    troca: "Sim",
    garantia: "Não",
    logo: "assets/carros/logo fiat.png",
    imagemPrincipal: "assets/carros/uno transparent.png",
    galeria: [
      "assets/carros/uno1.png",
      "assets/carros/uno2.png",
      "assets/carros/uno3.png"
    ]
  },

  civic: {
    modelo: "Honda Civic",
    descricao: "2.0 DI e:HEV TOURING e-CVT",
    valor: "R$265.900,00",
    ano: "2024/2025",
    cidade: "Campinas, São Paulo, Brasil",
    km: "0",
    cambio: "Automático",
    carroceria: "Sedan",
    blindado: "Sim",
    combustivel: "Elétrico",
    placa: "HON2A61",
    cor: "Azul",
    troca: "Não",
    garantia: "Sim",
    logo: "assets/carros/logo honda.png",
    imagemPrincipal: "assets/carros/civic transparent.png",
    galeria: [
      "assets/carros/civic1.png",
      "assets/carros/civic2.png",
      "assets/carros/civic3.png"
    ]
  },

  a3: {
    modelo: "Audi A3",
    descricao: "2.0 40 TFSI MHEV S-TRONIC",
    valor: "R$272.290,00",
    ano: "2024/2025",
    cidade: "Campinas, São Paulo, Brasil",
    km: "0",
    cambio: "Automático",
    carroceria: "Hatch",
    blindado: "Sim",
    combustivel: "Gasolina",
    placa: "INA3A01",
    cor: "Turquesa",
    troca: "Não",
    garantia: "Sim",
    logo: "assets/carros/logo audi.png",
    imagemPrincipal: "assets/carros/audi transparent.png",
    galeria: [
      "assets/carros/audi1.png",
      "assets/carros/audi2.png",
      "assets/carros/audi3.png"
    ]
  },

  bmw320i: {
    modelo: "BMW 320i",
    descricao: "2.0 16V TURBO SPORT",
    valor: "R$239.900,00",
    ano: "2024/2025",
    cidade: "Campinas, São Paulo, Brasil",
    km: "10.000",
    cambio: "Automático",
    carroceria: "Sedan",
    blindado: "Sim",
    combustivel: "Gasolina",
    placa: "BMW0F06",
    cor: "Preto",
    troca: "Não",
    garantia: "Sim",
    logo: "assets/carros/logo bmw.png",
    imagemPrincipal: "assets/carros/320i transparent.png",
    galeria: [
      "assets/carros/320i1.png",
      "assets/carros/320i2.png",
      "assets/carros/320i3.png"
    ]
  },

  bmwi8: {
    modelo: "BMW i8",
    descricao: "2.0 DI e:HEV TOURING e-CVT",
    valor: "R$559.900,00",
    ano: "2015/2016",
    cidade: "Campinas, São Paulo, Brasil",
    km: "43.000",
    cambio: "Automático",
    carroceria: "Sedan",
    blindado: "Sim",
    combustivel: "Híbrido/Gasolina",
    placa: "BMW6R89",
    cor: "Grafite",
    troca: "Não",
    garantia: "Não",
    logo: "assets/carros/logo bmw.png",
    imagemPrincipal: "assets/carros/i8 transparent.png",
    galeria: [
      "assets/carros/i8-1.png",
      "assets/carros/i8-2.png",
      "assets/carros/i8-3.png"
    ]
  },

  spider: {
    modelo: "Ferrari 458 Spider",
    descricao: "4.5 V8 GASOLINA F1-DCT",
    valor: "R$2.850.000,000",
    ano: "2011/2012",
    cidade: "Campinas, São Paulo, Brasil",
    km: "21.000",
    cambio: "Automático",
    carroceria: "Coupé",
    blindado: "Não",
    combustivel: "Gasolina",
    placa: "FER4R11",
    cor: "Vermelho",
    troca: "Sim",
    garantia: "Não",
    logo: "assets/carros/logo ferrari.png",
    imagemPrincipal: "assets/carros/spider transparent.png",
    galeria: [
      "assets/carros/spider1.png",
      "assets/carros/spider2.png",
      "assets/carros/spider3.png"
    ]
  },

  revuelto: {
    modelo: "Lamborghini Revuelto",
    descricao: "6.5 V12 PHEV AMT",
    valor: "R$8.500.000,00",
    ano: "2024/2025",
    cidade: "Campinas, São Paulo, Brasil",
    km: "0",
    cambio: "Automático",
    carroceria: "Sedan",
    blindado: "Sim",
    combustivel: "Gasolina",
    placa: "LAM8O46",
    cor: "Cinza",
    troca: "Não",
    garantia: "Sim",
    logo: "assets/carros/logo lamborghini.png",
    imagemPrincipal: "assets/carros/revuelto transparent.png",
    galeria: [
      "assets/carros/revuelto1.png",
      "assets/carros/revuelto2.png",
      "assets/carros/revuelto3.png"
    ]
  },

    carro: {
    modelo: "",
    descricao: "",
    valor: "R$",
    ano: "",
    cidade: "Campinas, São Paulo, Brasil",
    km: "",
    cambio: "",
    carroceria: "",
    blindado: "",
    combustivel: "",
    placa: "",
    cor: "",
    troca: "",
    garantia: "",
    logo: "assets/",
    imagemPrincipal: "assets/",
    galeria: [
      "assets/",
      "assets/",
      "assets/"
    ]
  },

};
