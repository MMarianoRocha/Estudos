# O que é um objeto

Coisa material ou abstrata que pode ser percebida pelos sentidos ou descrita por meio de suas caractarísticas, comportamentos e estado atual.

## Exemplos

* Caneta;
* Carro;
* Aluno.

## Definição  das classes (Classificação do objeto)

### Exemplo: Caneta

Todo objeto possui essas três características.

* **Atributo - Coisas que eu tenho**
  (Modelo, Cor, Ponta, Carga)
* **Métodos - Coisas que eu faço**
  (Escrever, Rabiscar, Pintar, Tampar, Destampar)
* **Estado - Como eu estou agora**
  (Tampada, Destampada, Sem carga, Com Carga)

```python
class Caneta:
    def __init__(self, modelo, cor, ponta, carga, tampada=True):
        self.modelo = modelo      # str
        self.cor = cor            # str
        self.ponta = ponta        # float
        self.carga = carga        # int
        self.tampada = tampada    # bool

    def rabiscar(self):
        if self.tampada:
            print("ERRO")
        else:
            print("Rabisco")

    def tampar(self):
        self.tampada = True

    def destampar(self):
        self.tampada = False
```

## Gerando um objeto a partir da classe

### Instanciar classe em forma de objeto

```python
# Exemplo de uso
c1 = nova Caneta
c1.cor = "Azul"
c1.ponta = "0.5"
c1.tampada = falso

c1.rabiscar()   # Vai dar "ERRO", pois está tampada
c1.destampar()
c1.rabiscar()   # Vai dar "Rabisco"

c2 = nova Caneta
c2.cor = "Vermelho"
c2.ponta = "1.0"
c2.tampada = falso

c2.tampar()


```

```python
# Exemplo prático
class Caderno:
	cor = cor
	aberto = False

	def rasgarFolha():
		if aberto = False
			print("Já está aberto")
		else
			print("Folha rasgada")

	def abrir:
		aberto = True
	def fechar:
		aberto = False
```
