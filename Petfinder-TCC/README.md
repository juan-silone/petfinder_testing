# Petfinder-TCC
Estamos criando um Trabalho de Conclusão de Curso.
da

<div class="card">
  <div class="card-img"><img src="./src/assets/cat.jpg" alt="" width="100%" height="auto"></div>
  <h3 class="card-title">Antonio</h3>
  <p class="card-paragraphy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus temporibus ratione
    obcaecati dolor molestias cum sed adipisci, dignissimos possimus perferendis.</p>
</div>




    <!-- Descrição dos Cards -->
    <div class="desc">
      <h2> Animais perdidos </h2>
      <p> Abaixo temos uma vitrine com alguns dos animais perdidos, a partir daqui você pode publicar um comentário ou
        compartilhar
        nas redes sociais para ajudar na divulgação desse pet. </p>
    </div>


.desc {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

	padding: 15px;
	margin: 35px 0;
	font-family: 'poppins';
}

.desc h2 {
	font-size: 40px;
	margin-bottom: 11px;
}

.desc p {
	width: 900px;
	text-align: center;
}

/*========== Vitrine do Site ===============================*/
.vitrine {
	position: relative;
	width: 80%;
	margin: 0 auto;
	background: var(--fundo);
}

/*========== Parte do body dos Cards ================================*/
.secao {
	/* position: fixed; */
	width: 80%;
	margin: 0 auto;
	display: flex;
	column-gap: 5px;
	flex-flow: wrap;
	gap: 50px;
	justify-content: space-between;
	margin: 40px;
	width: 100%;
}

/*=========== Cards ===========================================================*/
.card {
	background-color: #2E3E38;
	width: 200px;
	height: 350px;
	flex: 0 0 260px;
	border-radius: 5px;
	box-shadow: 0 2px 10px 2px rgba(0, 0, 0, 0.4);
	margin: 10px;
}

.card h3 {
	font-size: 20px;
	color: var(--fundo-escuro);
	margin: 0 10px;
	padding: 0 5px;
	border-left: 15px solid var(--verde-claro);
	border-radius: 5px;
}

.card p {
	font-family: 'Poppins';
	line-height: 18px;
	font-size: 14px;
	margin-top: 25px;
	padding: 0 10px;
	color: var(--fundo-escuro);
}

.card img {
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}
         