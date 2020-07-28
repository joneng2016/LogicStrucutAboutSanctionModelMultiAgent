### Instruções Iniciais ###

	-> Guia para utilização da utfpr-pg.cls (LATEX) - Modelo de Dissertação segundo o modelo proposto pela DIB-UTFPR-PG.
	-> Recomenda-se noções básicas/mínimas de Latex para a utilização do modelo.
	-> Links úteis para aprendizado

		1) http://mirror.unl.edu/ctan/macros/latex/contrib/abntex2/doc/abntex2.pdf
		2) https://pt.sharelatex.com/learn/Learn_LaTeX_in_30_minutes
		3) https://learnxinyminutes.com/docs/latex/

### Professor Orientador

	-> Apenas comente a linha \coorientador caso não possua coorientador.
	-> Caso possua orientadora ao invés de orientador, é necessário acrescentar a seguinte linha no preambulo
	-> \renewcommand{\orientadorname}{Orientadora: }

### Ficha Catalográfica
	-> A ficha catalográfica provida pelo modelo não é a oficial da UTFPR. Caso haja problemas, apenas comente o bloco \begin{fichacatalografica}

### Folha de aprovação
	-> A folha de aprovação deve ser gerada manualmente e incluída no seu trabalho. Apenas descomente essa linha \includepdf{folhadeaprovacao_final.pdf} e insira a folha aqui.

### Dedicatória
	-> A respeito da dedicatória, é importante a cada 4 ou 5 palavras pular uma linha com o \\
	-> Idem para epígrafe. 

### Resumo & Abstract
	-> No Resumo e Abstract é necessário acessar o .bib e gerar a referência para o próprio trabalho manualmente.

### List of (Figures, Codes, etc)
	-> Caso não deseje a lista de códigos, comente a linha \lstlistoflistings

### Figuras
	-> Em relação as figuras providas pelo pacote graphicx, é importante ressaltar que as legendas devem estar alinhadas a esquerda de cada imagem 		e não mais centralizadas. Sendo assim, atende para os valores de \textwidth da caption e da figura. ELES DEVEM PERMANECER o mesmo valor! 

### Anexos e Apêndices
	-> Devido as normas da UTFPR não estarem de acordo com as normas oficiais da ABNTBR/ANBTEX2, o apendice e anexoenvironment estão sendo 		reformulados.
	-> Para utilizar apêndices e anexos utilize o \chapter*(Anexo/Apendice A) juntamente com o comando \cftaddtitleline. Lembre-se de utilizar os 		devidos labels para cada chapter* em vista de obter o nome e página no sumário.

### KEEP CODING LATEX!

