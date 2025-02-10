create database juquery;

use juquery;

create table imagem (
    id int auto_increment not null primary key,
    nomeCodigo varchar(255) not null unique,
    nomeOriginal varchar(255) not null,
    endereco varchar(255) not null,
    endereco2 varchar(255) not null,
    titulo varchar(200) not null,
    legenda varchar(1000),
    dataUpload timestamp default current_timestamp,
    Extatus bit not null 

);

create table video (

    idVid int auto_increment primary key,
    idImagem int,
    titulo varchar(200) not null,
    autor varchar(200),
    caminho varchar(200) not null,
    Extatus bit not null, 
    constraint fkimagemVid foreign key(idImagem) references imagem(id)

);

create table eventos (

    idEvent int auto_increment primary key,
    idImagem int,
    diaSemana char(8) not null,
    diaMes int not null,
    mes char(10) not null,
    horario char(5) not null,
    nomeEvento varchar(200) not null,
    ano char(4) not null,
    localizacao varchar(300) not null,
    linkEvento varchar(500) not null,
    descricao varchar(2000),
    Extatus bit not null, 
    constraint fkimagemEve foreign key(idImagem) references imagem(id)

);

create table atualidades (

    idAtua int auto_increment primary key,
    titulo varchar(200) not null,
    descricao varchar(200),
    conteudo varchar(5000) not null,  
    dataAtua char(10) not null,
    idImagem int,
    linkAtua varchar(500) not null,
    Extatus bit not null, 
    constraint fkimagemAtu foreign key(idImagem) references imagem(id)

);

create table historia (

    idHist int auto_increment primary key,
    idImagem int,
    titulo varchar(200) not null,
    ano varchar(50),
    conteudo varchar(5000) not null,
    Extatus bit not null,    
    constraint fkimagemHis foreign key(idImagem) references imagem(id)

);

create table arquitetura (

    idArq int auto_increment primary key,
    idImagem int,
    titulo varchar(200) not null,
    subtitulo varchar(200),
    conteudo varchar(5000) not null,
    linkArq varchar(500) not null, 
    Extatus bit not null,    
    constraint fkimagemImg foreign key(idImagem) references imagem(id)

);

/*Imagens para a Historia*/

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'fvhadkgajh',
    '1898.jpg',
    '../View/images/fvhadkgajh.jpg',
    '../Memorial-Juquery/View/images/fvhadkgajh.jpg',
    'Linha do tempo 1898',
    'Em 1898, o Complexo Hospitalar do Juquery foi inaugurado de início como um asilo.',
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'dnjakshgfd',
    '1970.jpg',
    '../View/images/dnjakshgfd.jpg',
    '../Memorial-Juquery/View/images/dnjakshgfd.jpg',
    'Linha do tempo 1970',
    'Durante a década de 1970, o complexo entrou em colapso.', 
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'fvajidghja',
    '1993.jpg',
    '../View/images/fvajidghja.jpg',
    '../Memorial-Juquery/View/images/fvajidghja.jpg',
    'Linha do tempo 1993',
    'No ano de 1993, o Parque Estadual do Juquery foi inaugurado.', 
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'mefvqwfgqq',
    '2008.jpg',
    '../View/images/mefvqwfgqq.jpg',
    '../Memorial-Juquery/View/images/mefvqwfgqq.jpg',
    'Linha do tempo 2008',
    'No ano de 2008 a maternidade foi intitulada “Hospital Estadual de Caieiras”.', 
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'jondevfaka',
    '2011.jpg',
    '../View/images/jondevfaka.jpg',
    '../Memorial-Juquery/View/images/jondevfaka.jpg',
    'Linha do tempo 2011',
    '2011 foi o ano em que o Juquery foi rotulado como “bem cultural de valor.', 
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'lkfmnwpqmj',
    '2021.jpg',
    '../View/images/lkfmnwpqmj.jpg',
    '../Memorial-Juquery/View/images/lkfmnwpqmj.jpg',
    'Linha do tempo 2021',
    'No dia 1 de Abril de 2021, o Complexo Hospitalar do Juquery fechou as portas depois de
    122 anos de atividade.',
    '1'
);
/*Historia*/

insert into historia(idImagem, titulo, ano, conteudo, Extatus)
values(
    '1',
    'Início do complexo hospitalar do juquery',
    '1898',
    'Em 1898, o Complexo Hospitalar do Juquery foi inaugurado de início, como um asilo, 
    seu fundador e diretor sendo o doutor Francisco Franco da Rocha que através de uma visita 
    a uma colônia de reabilitação francesa, teve a ideia de  idealizar o Juquery.',
    '1'
);

insert into historia(idImagem, titulo, ano, conteudo, Extatus)
values(
    '2',
    'Superlotação do hospital do juquery',
    '1970',
    'Durante a década de 1970, o Complexo entrou em colapso por atender mais de 18 
    mil pacientes. Isso ocorreu pois, qualquer indivíduo considerado fora dos padrões, 
    era enviado para o Hospital. O principal objetivo pelo qual houve essa segregação 
    social, era uma “limpeza” na sociedade paulista, por esse motivo o primeiro nome 
    do complexo foi Asilo dos Alienados do Juquery.',
    '1'
);

insert into historia(idImagem, titulo, ano, conteudo, Extatus)
values(
    '3',
    'Parque estadual do juquery',
    '1993',
    'No ano de 1993, o Parque Estadual do Juquery foi inaugurado integrando o chamado “Cinturão Verde” da RMSP (região metropolitana de São Paulo).
    O Parque conta com áreas de mananciais e regiões de Cerrado, fazendo com que o local se torne uma área de estudos científicos,
    culturais e de preservação ambiental.',
    '1'
);

insert into historia(idImagem, titulo, ano, conteudo, Extatus)
values(
    '4',
    'A maternidade no complexo',
    '2008',
    'No ano de 2008 a maternidade intitulada “Hospital Estadual de Caieiras”,
    foi inserida na estrutura do Complexo atraves de um convenio em conjunto com o municipio de Caieiras e permaneceu sobre a gestão do Juquery. ',
    '1'
);

insert into historia(idImagem, titulo, ano, conteudo, Extatus)
values(
    '5',
    'Bem cultural',
    '2011',
    '2011 foi o ano em que o Juquery foi rotulado como “bem cultural de valor histórico,
    arquitetônico-urbanistico e paisagístico, pelo Conselho de Defesa do Patrimonio Historico durante o processo da sua desativação.',
    '1'
);

insert into historia(idImagem, titulo, ano, conteudo, Extatus)
values(
    '6',
    'O complexo fecha as portas',
    '2021',
    'No dia 1 de Abril de 2021, o Complexo Hospitalar do Juquery fechou as portas depois de
    122 anos de atividade e contando com mais de 16 mil internos entre as décadas de 1960 e 1970.
    Com o encerramento dos atendimentos, os 9 pacientes que ali viviam foram transferidos para Residências Terapêuticas,
    onde tem assistência com profissionais.',
    '1'
);

/*Imagens para Atualidades*/

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'sajhfakdfh',
    'palhaco.jpg',
    '../View/images/sajhfakdfh.jpg',
    '../Memorial-Juquery/View/images/sajhfakdfh.jpg',
    'Um palhaço nas águas do juquery'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'qfhsadbvbf',
    'fogo.jpg',
    '../View/images/qfhsadbvbf.jpg',
    '../Memorial-Juquery/View/images/qfhsadbvbf.jpg',
    'Um incêndio devastador',
    'Fogo consumiu cerca de 80% do parque do juquery',
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'lzalkfjdsa',
    'juqueryescritores.jpg',
    '../View/images/lzalkfjdsa.jpg',
    '../Memorial-Juquery/View/images/lzalkfjdsa.jpg',
    'Horrores do juquery'
);

/*Atualidades*/

insert into atualidades(idImagem, titulo, descricao, conteudo, dataAtua, linkAtua, Extatus)
values(
    '7',
    'Um palhaço nas águas do juquery',
    'Uma história real dos pacientes do Hospital Psiquiátrico Juquery resgatando memórias com o espetáculo "O Tarô dos Loucos"',
    'O Projeto Um Palhaço nas Águas do Juquery apresentará o espetáculo teatral O Tarô dos Loucos,
    que explora o passado de indivíduos que passaram pelo hospital psiquiátrico Juquery. A temporada 
    ocorrerá entre janeiro e março de 2023, nas cidades da Bacia do Juquery (Franco da Rocha, Caieiras, 
    Santana de Parnaíba, Nazaré Paulista e Francisco Morato). O espetáculo será gratuito e incluirá bate-papos 
    antes das apresentações, abordando o processo de criação da peça e a inspiração proveniente do Hospital do Juquery. ',
    '18/01/2023',
    'https://www.oanhanguera.com.br/noticias/12011-quotum-palhaco-nas-aguas-do-juqueryquot-conta-a-historia-real-de-pacientes-do-hospital-psiquiatrico-juquery-resgatando-memorias-com-o-espetaculo-quoto-taro-dos-loucosquot',
    '1'
);

insert into atualidades(idImagem, titulo, conteudo, dataAtua, linkAtua, Extatus)
values(
    '8',
    'Fogo consumiu cerca de 80% do parque do juquery, diz prefeitura de franco da rocha',
    'Um incêndio devastador causado por um balão atingiu o Parque Estadual do
    Juquery, resultando na destruição de aproximadamente 80% da área, de
    acordo com a Prefeitura de Franco da Rocha. No terceiro dia de combate às
    chamas, bombeiros e brigadistas enfrentam a situação. O parque, estabelecido
    em 1993, abriga um dos últimos grandes remanescentes de Cerrado na Região
    Metropolitana de São Paulo, visando a preservação da mata nativa e das
    zonas de mananciais do Sistema Cantareira. Embora os bombeiros tenham
    conseguido evitar a expansão do fogo para outras áreas após mais de 40 horas
    de esforços, o incêndio ainda não foi completamente apagado. Cerca de 70
    bombeiros e 60 brigadistas continuam trabalhando no local. As condições
    secas do tempo aumentam o risco de reacendimento.',
    '24/08/2021',
    'https://g1.globo.com/sp/sao-paulo/noticia/2021/08/24/fogo-consumiu-cerca-de-80percent-do-parque-do-juquery-diz-prefeitura-de-franco-da-rocha.ghtml',
    '1'
);

insert into atualidades(idImagem, titulo, conteudo, dataAtua, linkAtua, Extatus)
VALUES (
    '9',
    'Escritores revelam horrores do juquery: "muitos chegavam sem nenhuma identidade"',
    'O ex-funcionário José da Conceição descreveu condições desumanas durante
    seu tempo de trabalho no Hospital Psiquiátrico do Juquery, onde atuou como
    atendente de enfermagem por 18 anos no Manicômio Judiciário e mais 9 anos
    em outros setores do hospital. Ele relatou uma série de problemas, incluindo:
    Tortura: José da Conceição mencionou que testemunhou casos de tortura
    durante seu tempo de trabalho no hospital. Superlotação: O hospital sofria com
    superlotação, o que tornava difícil o atendimento adequado aos pacientes.
    Falta de Profissionais: Havia escassez de profissionais de saúde mental,
    incluindo médicos psiquiátricos, e a enfermagem não estava adequadamente
    preparada para lidar com pacientes psiquiátricos. Condições Insalubres: O
    ambiente de trabalho era insalubre, o que afetava tanto os funcionários quanto
    os pacientes. Contratação de Pessoas Sem Qualificação: Era comum que
    pessoas sem qualificação adequada fossem contratadas para trabalhar no
    complexo hospitalar.',
    '27/05/2022',
    'https://aventurasnahistoria.uol.com.br/noticias/reportagem/escritores-revelam-horrores-do-juquery-muitos-chegavam-sem-nenhuma-identidade.phtml',
    '1'
);

/*Imagens para a arquitetura*/

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'fdhajgvabf',
    'reestruturacao.jpg',
    '../View/images/fdhajgvabf.jpg',
    '../Memorial-Juquery/View/images/fdhajgvabf.jpg',
    'Desafios de reestruturação juquery',
    'Atualmente o Complexo Hospitalar do Juquery, se encontra com edifícios centenários envolvidos em vários anexos.',
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'gdhbahkdgv',
    'renovacao.jpg',
    '../View/images/gdhbahkdgv.jpg',
    '../Memorial-Juquery/View/images/gdhbahkdgv.jpg',
    'Projeto de renovação do centro de reabilitação',
    'O Complexo Hospitalar do Juquery, tendo as novas normas de acolhimento de
    pacientes, tem buscado renovar seu espaço construído.',
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'vgdahigvad',
    'colonia.jpg',
    '../View/images/vgdahigvad.jpg',
    '../Memorial-Juquery/View/images/vgdahigvad.jpg',
    'Colônia feminina',
    'A colônia feminina foi estruturada 51 anos após a construção da 1º colônia masculina.',
    '1'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values(
    'fadfahkdbg',
    'hospital.jpg',
    '../View/images/fadfahkdbg.jpg',
    '../Memorial-Juquery/View/images/fadfahkdbg.jpg',
    'Hospital psiquiátrico',
    'Hospital psiquiátrico do Juquery, foi inaugurado em 1898.',
    '1'
);

/*Arquitetura*/
insert into arquitetura(idImagem, titulo, subtitulo, conteudo, linkArq, Extatus)
values(
    '10',
    'Desafios de reestruturação do complexo hospitalar do juquery',
    'Restauração e Harmonização Arquitetônica para uma Contemporaneidade Sustentável',
    'Atualmente o Complexo Hospitalar do Juquery, se
    encontra com edifícios centenários envolvidos em vários
    anexos, muitos desconexos e desproporcionais, que
    apresentam em sua maioria uso diverso e caótico, sem
    uma “espinha dorsal” que estruture sua pluralidade e
    ainda conserve sua concepção estilística original,
    possibilitando o contraste com construções modernas de
    forma harmônica e que representem a nossa
    contemporaneidade.',
    'https://www.teses.usp.br/teses/disponiveis/16/16138/tde-20012010-152813/publico/dissertacaojuquery.pdf',
    '1'
);

insert into arquitetura(idImagem, titulo, subtitulo, conteudo, linkArq, Extatus)
values(
    '11',
    'Projeto de renovação do centro de reabilitação',
    'Complexo hospitalar do juquery',
    'O Complexo Hospitalar do Juquery, tendo as novas normas de acolhimento de
    pacientes, tem buscado renovar seu espaço construído, transformando, com o
    objetivo de humanizar, sua ambiência hospitalar e suas opções de serviços de saúde.
    A reforma psiquiátrica em curso a três décadas no Brasil exigiu várias alterações no
    perfil de atendimento das instituições hospitalares especializadas em doenças mentais,
    obrigando-as à diversificar os serviços e adaptar a antiga vocação dentro das novas
    normas de acolhimento dos pacientes. O Complexo Hospitalar do Juquery, tendo em
    vista estas normas, tem buscado revitalizar seu espaço construído, transformando,
    para humanizar, sua ambiência hospitalar e suas opções de serviços de saúde.',
    'https://vitruvius.com.br/revistas/read/arquitextos/17.193/6111',
    '1'
);

insert into arquitetura(idImagem, titulo, subtitulo, conteudo, linkArq, Extatus)
values(

    '12',
    '1º Colônia feminina construída em Pacheco',
    'A colônia feminina foi estruturada 51 anos após a construção da 1º Colônia masculina',
    'As mulheres tiveram seus aposentos nas proximidades da administração central, 
    pois  precisavam de maior vigilância. 1º Colônia feminina: foi construída na era Pacheco, 
    51 anos após a construção da 1º Colônia masculina, com capacidade ficou determinada com 750 leitos 
    contendo 12 pavilhões (60 leitos cada) para complementar, nessa área foram instalados 6 grandes e 
    pequenos parques, com os edifícios interligados, contava também com pátios que separavam os doentes 
    de acordo com o seu estado mental. Nessa colônia as mulheres faziam trabalhos manuais, como bordados, 
    pinturas, costuras, etc.',
    'https://www.teses.usp.br/teses/disponiveis/16/16138/tde-20012010-152813/publico/dissertacaojuquery.pdf',
    '1'
);

insert into arquitetura(idImagem, titulo, subtitulo, conteudo, linkArq, Extatus)
values(
    '13',
    'Hospital psiquiátrico do juquery',
    'Hospital no formato de colônia agrícola em modelo europeu',
    'Hospital psiquiátrico do Juquery, foi inaugurado em 1898 após o 
    psiquiatra Franco da Rocha pedir ao presidente da província que 
    construíssem um hospital no formato de colônia agrícola em modelo europeu. 
    Poucos anos depois já haviam no complexo mais de 1500 moradores no juquery. 
    Nesta imagem é possível ver o prédio em reforma no ano de 1974, precisou ser feita 
    a restauração pois estava havendo problemas de superlotação e poucos leitos. 
    Logo em seguida, passou a ser considerado o segundo maior hospital psiquiátrico do mundo.',
    'https://www.teses.usp.br/teses/disponiveis/16/16138/tde-20012010-152813/publico/dissertacaojuquery.pdf',
    '1'
);

/*Imagens para a eventos*/

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'fbbfabbyva',
    'evento1.jpg',
    '../View/images/fbbfabbyva.jpg',
    '../Memorial-Juquery/View/images/fbbfabbyva.jpg',
    'Primavera Sound São Paulo'
);

/*Eventos*/
insert into eventos(idImagem, diaSemana, diaMes, mes, horario, nomeEvento, ano, localizacao, linkEvento, descricao, Extatus)
values(
    '14',    
    'Sábado',    
    '02',    
    'Dezembro',    
    '12:30',    
    'Primavera Sound São Paulo',    
    '2023',    
    'Autódromo de Interlagos, Avenida Senador Teotônio Vilela, 261, Cidade Dutra, São Paulo, SP',    
    'https://sales.ticketsforfun.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=030100019.v.se.primaverasoundsp&gclid=Cj0KCQiAo7KqBhDhARIsAKhZ4ujV-jSFZgirPc6tkJ0arTg7eyKwg_lyjdG0hkOdPkes-ePrCLug8BEaAsNnEALw_wcB#/event/primavera-sound-reflect-what-you-are',  
    'Nos dias 02 e 03 de dezembro no Autódromo de Interlagos acontecerá a 2ª edição do Primavera Sound São Paulo com um line-up nacional e internacional que melhor exploram o aqui e agora do cenário musical.',
    '1'  
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'guyisfedff',
    'evento2.jpg',
    '../View/images/guyisfedff.jpg',
    '../Memorial-Juquery/View/images/guyisfedff.jpg',
    'Show da Ana Castela'
);

insert into eventos(idImagem, diaSemana, diaMes, mes, horario, nomeEvento, ano, localizacao, linkEvento, descricao, Extatus)
values(
    '15',    
    'Sábado',    
    '18',    
    'Novembro ',    
    '21:00',    
    'Show da Ana Castela',    
    '2023',    
    'Espaço Unimed, Rua Tagipurú, 795 - Barra Funda',    
    'https://espacounimed.com.br/876-ana-castela',  
    'Menores de 14 anos poderão entrar no Espaço Unimed desde que um responsável legal assine o termo de responsabilidade e entre junto.',
    '1'  
);


insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'fwiuyhqpoi',
    'evento3.jpg',
    '../View/images/fwiuyhqpoi.jpg',
    '../Memorial-Juquery/View/images/fwiuyhqpoi.jpg',
    'Saideira com Pedro Sampaio'
);

insert into eventos(idImagem, diaSemana, diaMes, mes, horario, nomeEvento, ano, localizacao, linkEvento, descricao, Extatus)
values(
    '16',    
    'Sexta',    
    '01',    
    'Dezembro',    
    '14:00',    
    'Saideira com Pedro Sampaio e Turma do Pagode',    
    '2023',    
    'Clube Atlético Juventus, Rua Juventus 690 – Mooca – São Paulo',    
    'https://www.ticket360.com.br/evento/27820/saideira-com-pedro-sampaio-e-turma-do-pagode',  
    'O Espaço Unimed (melhor casa de eventos de SP) e a agência Keep Young (10 anos no mercado de entretenimento e idealizadora de diversos Réveillons do Nordeste) se juntam para criar este evento que promete transformar seu Réveillon em uma EXPERIÊNCIA ÚNICA!',
    '1'  
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'fniaoubhfi',
    'evento4.jpg',
    '../View/images/fniaoubhfi.jpg',
    '../Memorial-Juquery/View/images/fniaoubhfi.jpg',
    'Saideira com Pedro Sampaio'
);

insert into eventos(idImagem, diaSemana, diaMes, mes, horario, nomeEvento, ano, localizacao, linkEvento, descricao, Extatus)
values(
    '17',    
    'Quinta',    
    '14',    
    'Dezembro',    
    '00:30',    
    'Jorge & Mateus ',    
    '2023',    
    'Villa Country, Av. Francisco Matarazzo 774 – Água Branca – São Paulo',    
    'https://www.ticket360.com.br/evento/27820/saideira-com-pedro-sampaio-e-turma-do-pagode',  
    'Inspirada na cultura dos cowboys do western, o Villa Country possui 12 mil metros quadrados divididos em vários ambientes que remetem o visitante ao velho oeste americano. É muito mais do que uma casa de shows, pois concentra restaurante, pista de dança, camarotes e centro de convenções. Ambientes diferenciados, como o Saloon, as Praças Sertaneja, Caipira e do Cavalo, dão o tom temático ao lugar. Aqui é possível ouvir o melhor da música sertaneja e de raiz, sem esquecer o inconfundível repertório country.',
    '1'  
);

/*Imagens pro vídeo*/

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'qnfjddabah',
    'dr.jpg',
    '../View/images/qnfjddabah.jpg',
    '../Memorial-Juquery/View/images/qnfjddabah.jpg',
    'Dr Franco da Rocha'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'dabhfcajcb',
    'cidade.jpg',
    '../View/images/dabhfcajcb.jpg',
    '../Memorial-Juquery/View/images/dabhfcajcb.jpg',
    'Cidade de Franco da Rocha'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'qpofsjsaxv',
    'historia.jpg',
    '../View/images/qpofsjsaxv.jpg',
    '../Memorial-Juquery/View/images/qpofsjsaxv.jpg',
    'História do Juquery'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'qsiodhcana',
    'museu.jpg',
    '../View/images/qsiodhcana.jpg',
    '../Memorial-Juquery/View/images/qsiodhcana.jpg',
    'Museu Osório Cesar'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'raefncjkan',
    'bichogrilo.jpg',
    '../View/images/raefncjkan.jpg',
    '../Memorial-Juquery/View/images/raefncjkan.jpg',
    'Bicho Grilo'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'qofjdaikvh',
    'celso.jpg',
    '../View/images/qofjdaikvh.jpg',
    '../Memorial-Juquery/View/images/qofjdaikvh.jpg',
    'Show Ranulfo Faria'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'qowjfdasbc',
    'asas.jpg',
    '../View/images/qowjfdasbc.jpg',
    '../Memorial-Juquery/View/images/qowjfdasbc.jpg',
    'Asas e Vida'
);

insert into imagem(nomeCodigo, nomeOriginal, endereco, endereco2, titulo)
values(
    'qopsfjabxc',
    'millenium.jpg',
    '../View/images/qopsfjabxc.jpg',
    '../Memorial-Juquery/View/images/qopsfjabxc.jpg',
    'Millenium'
);
/*Video*/
insert into video(idImagem, titulo, autor, caminho, Extatus)
values(
    '18',
    'Sobre o Dr Franco da Rocha',
    'Vídeo sobre o homem que nomeia a cidade de Franco da Rocha.',
    'https://youtu.be/HcDksBZhS9M?si=hheb8W9uGPm5JKnA',
    '1'
);

insert into video(idImagem, titulo, autor, caminho, Extatus)
values(
    '19',
    'A história da cidade de Franco da Rocha',
    'Vídeo da História de Franco da Rocha e da influência sofrida por ela na formação do Estado de SP.',
    'https://youtu.be/K4mhS2BKbjg?si=DbOZmIh09j8qbrcW',
    '1'
);

insert into video(idImagem, titulo, autor, caminho, Extatus)
values(
    '20',
    'A História do Juquery',
    'Vídeo da História do Hospital do Juquery, da fundação à desativação.',
    'https://youtu.be/xQBc3AIDrwE?si=A009TSpFJg2ZV0oN',
    '1'
);

insert into video(idImagem, titulo, autor, caminho, Extatus)
values(
    '21',
    'O Museu Osório Cesar',
    'Vídeo do Museu Osório Cesar, nomeado com o nome do popular artista, já casado com Tarsila do Amaral.',
    'https://youtu.be/JPNitVFq-pQ?si=az1eU3AaTINEGhL7',
    '1'
);

insert into video(idImagem, titulo, autor, caminho, Extatus)
values(
    '22',
    'Bicho Grilo - A Cidade faz o Show TV Cultura',
    'Clipe gravado no Juquery, participação de Ranulfo Faria, Mário Pacanaro, Celso Alvizi, Neusinha e Assis.',
    'https://youtu.be/RCeQnFFhBZE?si=eA2EQ1U4svdjROmO',
    '1'
);

insert into video(idImagem, titulo, autor, caminho, Extatus)
values(
    '23',
    'Ranulfo Faria, Mário Pacanaro e Celso Alvizi marcam presença no programa Senhor Brasil',
    'Celso Alvizi, Ranulfo Faria e Mário Pacanaro no programa Senhor Brasil, TV Cultura.',
    'https://youtu.be/N-cMGCuOKZc?si=sVC_d8N7ydRMW5KK',
    '1'
);

insert into video(idImagem, titulo, autor, caminho, Extatus)
values(
    '24',
    'Asas e Vida',
    'Asas e Vida, por Ranulfo Carlos Faria.',
    'https://youtu.be/2fcI6EIspRI?si=G5nZx-9jAq5OUjMd',
    '1'
);

insert into video(idImagem, titulo, autor, caminho, Extatus)
values(
    '25',
    'Millenium - Uma canção',
    'Millenium - Uma canção, por Ranulfo Carlos Faria, gravada durante presença no programa Senhor Brasil.',
    'https://youtu.be/Cbyw7YWiBT4?si=O1GvXUTJtjH0eOZ2',
    '1'
);
/*Imagens pra Galeria*/

insert into imagem (nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values ('J044.png', 'J044.png', '../View/images/J044.png', '../Memorial-Juquery/View/images/J044.png', '1968', 'Leitos onde pacientes compartilhava o quarto para dormir.', '1');

insert into imagem (nomeCodigo, nomeOriginal, endereco, endereco2, titulo, legenda, Extatus)
values ('J000.png', 'J000.png', '../View/images/J000.png', '../Memorial-Juquery/View/images/J000.png', 'Projeto do centro de reabilitação do complexo Hospitalar do Juquery', 'A casa onde o psiquiatra Francisco Franco da Rocha morou com sua família. O imóvel foi reformado para ser o Museu Osório César, que tem obras feitas pelos pacientes do Complexo Juquery', '1');
